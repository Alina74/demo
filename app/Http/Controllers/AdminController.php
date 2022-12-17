<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductValidation;
use App\Http\Requests\EditProductValidation;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.adminPanel');
    }

    public function index()
    {
        $products=Product::all();
        return view('admin.products.allProducts', compact('products'));
    }

    public function show(Product $product)
    {
        return view('admin.products.card', compact('product'));
    }

    public function create()
    {
        return view('admin.products.createOrUpdate');
    }

    public function store(AddProductValidation $request)
    {
        $validate=$request->validated();
        unset($validate['photo_file']);
        $photo=$request->file('photo_file')->store('public');
        $validate['photo']=explode('/', $photo)[1];
        Product::create($validate);
        return back()->with(['success'=>true]);
    }

    public function edit(Request $request, Product $product)
    {
        $request->session()->flashInput($product->toArray());
        return view('admin.products.createOrUpdate', compact('product'));
    }

    public function update(EditProductValidation $request, Product $product)
    {
        $validate=$request->validated();
        unset($validate['photo_file']);
        if ($request->hasFile('photo_file')){
            $photo=$request->file('photo_file')->store('public');
            $validate['photo']=explode('/', $photo)[1];
        }
        $product->update($validate);
        return back()->with(['success'=>true]);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
