<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
     //Add Product
    public function index(){
        return view('backend.addproduct');
    }
    //Add Product
    public function addProduct(Request $request){

        $request->validate([
            'p_name' => 'required',
            'p_des' => 'required',
            'p_qty' => 'required',
            'p_price' => 'required',
            'p_status' => 'required',
        ]);

        $product = new Product();
        $product->product_name = $request->p_name;
        $product->product_des = $request->p_des;
        $product->product_qty = $request->p_qty;
        $product->product_price = $request->p_price;
        $product->product_status = $request->p_status;

        $product->save();
        return redirect()->Route('backend.manageProduct')->with('success', 'Product Successfully added!');

    }

    // Manage Product
    public function manageP(){

       $products = Product::all();


        return view('backend.manage-product', compact('products'));
    }

    // For Active to Inactive Product
    public function activeP($id){

       $product = Product::find($id);
       $product-> product_status = '0';
       $product->update();
       return back();

    }
     // For Inactive to Active Product
    public function inactiveP($id){

        $product = Product::find($id);
        $product-> product_status = '1';
        $product->update();
        return back();

     }

     //Delete Product
     public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        return back();

     }
     //Edit Function

     public function editProduct($id){
        $product = Product::find($id);
        return view('backend.editproduct', compact('product'));

     }

     // Update Function
     public function updateProduct(Request $request, $id){
        $product = Product::find($id);
        $product->product_name = $request->p_name;
        $product->product_des = $request->p_des;
        $product->product_qty = $request->p_qty;
        $product->product_price = $request->p_price;
        $product->product_status = $request->p_status;
        $product->update();
        return redirect()->Route('backend.manageProduct')->with('success', 'Product Update Successfully!');

     }
}
