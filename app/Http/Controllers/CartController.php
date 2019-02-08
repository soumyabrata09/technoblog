<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;   // crinsane shopping cart API we are using for the purpose of cart checking and checkout functionalities
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * The whole Cart functionalities is been implemented using crinsane shopping cart js API library
     * command :- composer require gloudemans/shoppingcart
     */
    public function index()
    {
        // the following line can let us view the array value which is stored in the 
        // Cart instance, only during the time of testing keep the following line uncommented
        // This following method will dump the data stored in the array
        //dd(Cart::content()); //this is for testing purposes
        //as cart page also using productRecommender system, therefore we need to use return it from
        // the cart view
        $productRecommender = Product::ProductRecommender()->get();
        return view('cartPage')->with('productRecommender' ,$productRecommender);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // First we need to add the item to the cart.
        //Cart::add('id', 'name', 'quantity', 'value');

        //preventing duplication of cart Item ,rather we would like to add multiple items from the cartPage quantity input filed itself
        $duplicate_cartItem = Cart::search( function($cartItem,$rowId) use ($request){
            return $cartItem->id === $request->id;
        });

        if( $duplicate_cartItem->isNotEmpty()){

            return redirect()->route('cart.index')->with('success_message','Item is already in your cart');

        }

       $cartItem = Cart::add($request->id,$request->name,1,$request->price); // 1 as default value here
        // Next we associate a model with the item.
       Cart::associate($cartItem->rowId,'App\Product');
       //Alternatively
       //Cart::add($request->id,$request->name,1,$request->price)->associate('App\Product');
        //lets redirect to our cart page
        return redirect()->route('cart.index')->with('success_message','Item(s) been added to your cart successfully');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //to remove /delete item frmo the cart just invoke the remove() method
        Cart::remove($id);
        return redirect()->route('cart.index')->with('success_message','Item removed from your cart successfully');
        //return back()->with('success_message','Item deleted from your cart successfully');
    }
    //c_sousen custom method
    public function switchToWishlist($id){
        $item = Cart::get($id);
        Cart::remove($id);
        // $cartItem = Cart::add($item->id,$item->name,1,$item->price); // 1 as default value here
        // // Next we associate a model with the item.
        // Cart::associate($cartItem->rowId,'App\Product');
        Cart::instance('wishlist')->add($item->id,$item->name,1,$item->price)->associate('App\Product');
        
        return redirect()->route('cart.index')->with('success_message','Item added to your wishlist successfully');
    }
}
