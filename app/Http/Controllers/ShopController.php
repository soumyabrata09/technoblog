<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(12)->get();
        return view('shop')->with('products',$products);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  string  $slug
    //  * @return \Illuminate\Http\Response
    //  */
    public function show($slug)
    {
        //c_sousen we can use this method to route pagination based on particular product
        //such clickung on a produt image should lead us to the individualproduct page
       $products = Product::where('slug',$slug)->firstOrFail();
       //making might also like dynamic
       //we are fetching those procuts whose slug value is not equal to the slug value passed in the argument of Show() method
       //of ShopController::class
       //in productRecommender currently we are fetching the products except the one which currently is visible in 
       //the proct details page
       $productRecommender = Product::where('slug','!=',$slug)->ProductRecommender()->get();
       //we need to return an array
       // c_sousen
       return view('product')->with([
           'product' => $products, 
           'productRecommender' => $productRecommender
           ]);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
