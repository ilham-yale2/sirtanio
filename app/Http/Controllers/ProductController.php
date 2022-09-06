<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.product.index_product',[
            "page" => "Product",
            "home" => Landing::all()->first(),
            "product" => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.create_product',[
            'page' => 'Product'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "product_title" => "required",
            "product_image" => "required|image|file",
        ]);
        $validated['product_image'] = $request->file('product_image')->store('product_image', ['disk' => 'public']);
        Product::create($validated);
        // Alert::success('Success', 'Successfully add new data');
        return redirect('/admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.product.edit_product',[
            "page" => "Product",
            "product" => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            "product_title" => "required",
            "product_image" => "image|file",
            "link1" => "min:0",
            "link2" => "min:0",
        ]);
        if ($request->hasFile('product_image')) {
             Storage::disk('public')->delete($product->product_image);
            $validated['product_image'] = $request->file('product_image')->store('product_image', ['disk' => 'public']);
        }
        Product::where('id', $product->id)->update($validated);
        // Alert::success('Success', 'Successfully edit data');
        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homeImg = Product::find($id);
        Storage::disk('public')->delete($homeImg->product_image);
        Product::destroy($homeImg->id);
        return redirect()->back();
    }
}
