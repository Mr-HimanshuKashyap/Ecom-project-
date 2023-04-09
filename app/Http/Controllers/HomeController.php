<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome(){
        return view('admin');
    }

    public function productdetail(){
        $products = Product::all();
        return view('/home',compact('products')); 
    }

    public function ProductDetailAdmin(){
        $products = Product::all();
        return view('/admin',compact('products')); 
    }

    public function CreateProduct(){
        return view('/createproduct');
    }

    public function AddProduct(Request $request){
        // dd($request->all());
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->save();

        // return back();
        return redirect('/admin/home');
    }

}
