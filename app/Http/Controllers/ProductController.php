<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(8);
        return view('product.index', compact('products'));
    }
    public function create()
    {
        $product_categories = ProductCategory::all();
        $brands = Brand::all();
        return view('product.create', compact('product_categories', 'brands'));
    }
    public function store(Request $request)
    {
        if ($request->product_category_id == '#') {
            return redirect()->back()->withErrors(['product_category_id' => 'A seleção de uma categoria é obrigatória.']);
        }
        if ($request->brand_id == '#') {
            return redirect()->back()->withErrors(['brand_id' => 'A seleção de uma marca é obrigatória.']);
        }
        $data = $request->all();
        $product = Product::create($data);
        return redirect()->route('product.index');
    }
    public function show($id)
    {
        $product = Product::find($id);
        $product_categories = ProductCategory::all();
        $brands = Brand::all();
        return view('product.show', compact('product', 'product_categories', 'brands'));
    }
    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $product->fill($request->all());
        if ($product->isDirty()) {
            $product->save();
        }
        if ($request->product_category_id == '#') {
            return redirect()->back()->withErrors(['product_category_id' => 'A seleção de uma categoria é obrigatória.']);
        }
        if ($request->brand_id == '#') {
            return redirect()->back()->withErrors(['brand_id' => 'A seleção de uma marca é obrigatória.']);
        }
        return redirect()->route('product.index')->with('success', 'Produto atualizado com sucesso!');
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Produto deletado com sucesso!');
    }
}
