<?php
use Gloudemans\Shoppingcart\Facades\Cart; 

//folowing methods will be autoloaded 
//For each helper files we create we need to mention them in our composer.json file
//after creating a helper file run composer dumpauto or composer dump-auto: this command will generate an optimized 
// autoload file.These following methods are being used as the props value of our various vue components
function GetCartCount(){
    return Cart::instance('default')->count();
}
function GetWishlistCount(){
    return Cart::instance('wishlist')->count();
}
function GetWishlistContent(){
    $wlcontent = Cart::instance('wishlist')->content();
    // $rowid = Cart::get($wlcontent->rowId);
    // Cart::associate($wlcontent->rowId,'App\Product');
    // $wlCartItemArray;
    //  foreach($wlcontent as $rowItem){
    // //  echo 'You have ' . $rowItem->qty . ' items of ' . $rowItem->model->name . ' with description: "' . $rowItem->model->description . '" in your cart.And your slug value is '. $rowItem->model->slug.' and ID is '.$rowItem->id;
    // //  echo ' \n';
    //  //c_sosuen :: an associative array holding the app\product model data 
    //  $wlCartItemArray = json_encode(array(
    //       'Id' => $rowItem->id, 
    //       'Slug' => $rowItem->model->slug,
    //       'Name' => $rowItem->model->name,
    //       'Price' => $rowItem->model->price,
    //       'Details' => $rowItem->model->details,
    //       'Specification' => $rowItem->model->specification,
    //     ));
    //    // return json_encode($wlCartItemArray);
    // }
     return $wlcontent;
}
// function GetWlSlug($rowid){
//     echo 'Cart::instance('wishlist')->get($rowid)->model->slug';

// }
function GetCartContent(){
    return Cart::instance('default')->content();
}
function GetImage(){
    $content = GetWishlistContent();
    return asset('img/'.$content->model->slug.'.jpg') ;
}