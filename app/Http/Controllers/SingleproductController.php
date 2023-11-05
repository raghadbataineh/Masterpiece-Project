<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Review;
use App\Models\Cart;
use Alert;

class SingleproductController extends Controller
{


    public function index()
    {
        $products = Product::with('shop')->get();
        return view('dashboard/products/index', compact('products'));
    }

    public function create()
    {
        // $shopNames=Shop::all();



        //  return view('dashboard.products.create',compact('shopNames'));
    }
    public function store()
    {

    }



    public function show($id)
    {
        // Find the product by its ID
        // $product = Product::find($id);

        // if (!$product) {
        //     abort(404);
        // }

        // return view('website.singleproduct', compact('product'));
    }
    public function show_product($id)
    {
        // Find the product by its ID
        $product = Product::find($id);
        $reviews = $product->reviews;

        // Assuming you have an array of ratings with each rating's value and count
        $ratings = [
            ['value' => 5, 'count' => 3],
            ['value' => 4, 'count' => 2],
            ['value' => 3, 'count' => 0],
            ['value' => 2, 'count' => 0],
            ['value' => 1, 'count' => 0],
        ];

        // Calculate the average rating
        $totalRating = 0;
        $totalCount = 0;

        foreach ($ratings as $rating) {
            $totalRating += $rating['value'] * $rating['count'];
            $totalCount += $rating['count'];
        }

        $averageRating = $totalCount > 0 ? $totalRating / $totalCount : 0;


        if (!$product) {
            abort(404);
        }

        return view('website.singleproduct', compact('product', 'reviews', 'averageRating', 'ratings'));
    }
    public function detail($id)
    {

        return view('website.cart');
    }
    public function add_cart(Request $request, $id)
    {
        $product = Product::find($id);
        $quantity1 = $request->quantity;
        if (Auth::check()) {

            // $user = Auth::user();
            $iduser = auth()->user()->id;
            $productId = $product->id;
            $quantity = $request->quantity;

            // Check if the product already exists in the cart
            $existingCart = Cart::where('user_id', $iduser)
                ->where('product_id', $productId)
                ->first();

            if ($existingCart) {
                // Product already exists in the cart, so increment the quantity
                $existingCart->update([
                    'Quantity' => $existingCart->Quantity + $quantity
                ]);
            } else {
                // Product does not exist in the cart, so create a new record
                Cart::create([
                    'user_id' => $iduser,
                    'product_id' => $productId,
                    'quantity' => $quantity
                ]);
            }

            return back()->with('success', 'Product added to the cart successfully');
        } else {
            $cart = session()->get('cart', []);

            if (isset($cart[$id])) {
                $cart[$id]['quantity'] += $quantity1;
            } else {
                $cart[$id] = [
                    'id' => $product->id,
                    'image1' => $product->image,
                    'Name' => $product->name,
                    'quantity' => $quantity1,
                    'price' => $product->price,
                ];
            }



            session()->put('cart', $cart);
            // dd($cart);

            Alert::success('Congrats', 'Product added to the cart successfully');

            return redirect()->back();
            // with('success', 'Product added to the cart successfully');
            // return view ('website.cart', compact ('cart'));
        }

    }

}







