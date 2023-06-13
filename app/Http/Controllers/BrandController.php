<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::paginate(8);
        return view('brand.index', compact('brand'));
    }
    public function create()
    {
        return view('brand.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $brand = Brand::create($data);
        return redirect()->route('brand.index');
    }
    public function show($id)
    {
        $brand = Brand::find($id);
        return view('brand.show', compact('brand'));
    }
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->fill($request->all());
        if ($brand->isDirty()) {
            $brand->save();
        }
        return redirect()->route('brand.index')->with('success', 'Marca atualizada com sucesso!');
    }
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('brand.index')->with('success', 'Marca deletada com sucesso!');
    }
}
