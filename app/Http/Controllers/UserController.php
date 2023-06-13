<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CategoryUser;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::paginate(8);
        return view('users.index', compact('users'));
    }
    public function create()
    {
        $categories = CategoryUser::all();
        return view('users.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
    
        $user = User::create($data);
        return redirect()->route('users.index');
    }
    public function show($id)
    {
        $categories = CategoryUser::all();
        $user = User::find($id);
        return view('users.show', compact('user', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
    
        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }
    
        if ($user->isDirty()) {
            // dd($user);
            $user->save();
        }
        return redirect()->route('users.index')->with('success', 'Usuário atualizado com sucesso!');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuário deletado com sucesso!');
    }
}
