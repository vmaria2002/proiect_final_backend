<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Notification;
use App\Http\Controllers\EmailNotification;

use App\Models\User;


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

    public function favorites()
    {
        return view('favorites');
    }

    public function details($id)
    {
        $product = Product::find($id);
        return view('details', compact('product'));
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
                    "quantity" => $cantity + 1,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity'] = $cantity + 1;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => $cantity + 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }






    public function  removeFromFavorites($id)
    {
        $product = Product::find($id);

        if (!$product) {

            abort(404);
        }

        $cart = session()->get('favorites');

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
            unset($cart[$id]);
            session()->put('favorites', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity'] = 0;

            unset($cart[$id]);
            session()->put('favorites', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 0,
            "price" => $product->price,
            "photo" => $product->photo
        ];
        unset($cart[$id]);
        session()->put('favorites', $cart);

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
            unset($cart[$id]);
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity'] = 0;

            unset($cart[$id]);
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
        unset($cart[$id]);
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function addToFavorites($id)
    {
        $product = Product::find($id);
        if (!$product) {

            abort(404);
        }

        $cart = session()->get('favorites');
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

            session()->put('favorites', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity'] = 1;

            session()->put('favorites', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('favorites', $cart);

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
            unset($cart[$id]);
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        if ($cart[$id]['quantity'] == 1) {
            unset($cart[$id]);
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

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // public function buy($id, $message)
    // {

    //     $student = User::find($id);


    //     $this->id = $student->id;
    //     $this->name = $student->name;
    //     $this->email = $student->email;
    //     $this->password = $student->password;


    //     // delete cart:

    //     $cart = session()->get('cart');

    //     session()->put('cart', $cart);
    //     for ($i = 1; $i <= 6; $i++) {

    //         unset($cart[$i]);
    //     }
    //     session()->put('cart', $cart);

    //     Notification::send($student, new EmailNotification($message));
    //     return redirect()->back()->with('success', 'Product added to cart successfully!');
    // }
}
