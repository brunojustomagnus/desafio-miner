<?php

namespace App\Http\Controllers;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $product_category = ProductCategory::paginate(8);
        return view('product_category.index', compact('product_category'));
    }
    public function create()
    {
        return view('product_category.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $product_category = ProductCategory::create($data);
        return redirect()->route('product-category.index');
    }
    public function show($id)
    {
        $product_category = ProductCategory::find($id);
        return view('product_category.show', compact('product_category'));
    }
    public function update(Request $request, $id)
    {
        $product_category = ProductCategory::find($id);
        $product_category->fill($request->all());
        if ($product_category->isDirty()) {
            $product_category->save();
        }
        return redirect()->route('product-category.index')->with('success', 'Categoria atualizada com sucesso!');
    }
    public function destroy($id)
    {
        $product_category = ProductCategory::find($id);
        $product_category->delete();
        return redirect()->route('product-category.index')->with('success', 'Categoria deletada com sucesso!');
    }
}
