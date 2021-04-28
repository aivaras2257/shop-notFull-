<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Category;
use File;
use Illuminate\Support\Facades\Auth;
use Session;

class ShopController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $products = Product::all();
        return view('shop.pages.home', ['products' => $products]);
    }

    public function addProduct()
    {
        $products = Product::all();
        $cat = category::all();
        return view('shop.pages.add-product', ['products' => $products, 'cat' => $cat]);
    }

    public function addCategory()
    {
        $cat = category::all();
        return view('shop.pages.add-category', ['cat' => $cat]);
    }

    public function storeCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);

        Category::create([
            'name' => request('name')
        ]);

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:products|max:50',
            'content' => 'required',
            'quantity' => 'required|min:1',
            'price' => 'required',
            'category_id' => 'required',
            'path' => 'required|max:10000'
        ]);
        $path = $request->file('path')->store('public/img');
        $filename = str_replace('public/', "", $path);
        Product::create([
            'title' => request('title'),
            'content' => request('content'),
            'quantity' => request('quantity'),
            'price' => request('price'),
            'category_id' => request('category_id'),
            'path' => $filename,
            'user_id' => Auth::id()

        ]);
        return redirect('/');
    }

    public function sportas()
    {
        $products = Product::all();
        $cat = category::all();
        return view('shop.pages.sportas', ['products' => $products, 'cat' => $cat]);
    }

    public function delete(Product $product)
    {
        if (Gate::allows('delete', $product)) {
            $product->delete();
            return redirect('/');
        }
    }

    public function update(Product $product)
    {
        if (Gate::allows('update', $product)) {
//        $cat = Category::where('id',$product->id)->get('name');
            $cat = Category::all();
            return view('shop.pages.update-product', compact('product'), compact('cat'));
        }
    }

    public function storeupdate(Request $request, Product $product)
    {
        if ($request->file()) {
            File::delete(storage_path('app/public' . $product->path));
            $path = $request->file('path')->store('public/img');
            $filename = str_replace('public/', "", $path);
            Product::where('id', $product->id)->update(['path' => $filename]);

        }
        Product::where('id', $product->id)->update($request->only(['title', 'category_id', 'content', 'quantity', 'price', 'path']));

        return redirect('/');
    }
//    public function addToCart(Request $request, $id){
//        $product = Product::find($id);
//        $oldCart = Session::has('cart') ? Session::get('cart') : null;
//        $cart = new Cart($oldCart);
//        $cart->add($product, $product->id);
//
//        $request->session()->put('cart',$cart);
//        //dd($request->session()->get('cart'));
//        return redirect('/');
//    }
//
//    public function getCart(){
//
//        if (Session::has('cart')){
//            return view('shop.pages.shopping-cart',['products'=>null]);
//        }
//        $oldCart = Session::get('cart');
//        $cart = new Cart($oldCart);
//        return view('shop.pages.shopping-cart',['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice,]);
//    }

    public function admin(){
        return view('admin.dashboard');
    }

}
