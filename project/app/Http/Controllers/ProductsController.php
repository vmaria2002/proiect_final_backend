<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }
    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        if (!$product) {

            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function update($id, $cantity)
    {
        $product = Product::find($id);

        if (!$product) {

            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => $cantity +1,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']=$cantity+1;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => $cantity +1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function remove($id)
    {
        $product = Product::find($id);

        if (!$product) {

            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 0,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']=0;

            session()->put('cart', $cart);
            
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 0,
            "price" => $product->price,
            "photo" => $product->photo
        ];
        
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
  
   }

   public function delete($id)
   {
       $product = Product::find($id);

       if (!$product) {

           abort(404);
       }

       $cart = session()->get('cart');

       // if cart is empty then this the first product
       if (!$cart) {

           $cart = [
               $id => [
                   "name" => $product->name,
                   "quantity" => 0,
                   "price" => $product->price,
                   "photo" => $product->photo
               ]
           ];

           session()->put('cart', $cart);

           return redirect()->back()->with('success', 'Product added to cart successfully!');
       }

       // if cart not empty then check if this product exist then increment quantity
       if (isset($cart[$id])) {

           $cart[$id]['quantity']--;;

           session()->put('cart', $cart);
           
           return redirect()->back()->with('success', 'Product added to cart successfully!');
       }

       // if item not exist in cart then add to cart with quantity = 1
       $cart[$id] = [
           "name" => $product->name,
           "quantity" => 0,
           "price" => $product->price,
           "photo" => $product->photo
       ];
       
       session()->put('cart', $cart);

       return redirect()->back()->with('success', 'Product added to cart successfully!');
 
  }
}
