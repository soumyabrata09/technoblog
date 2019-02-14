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
    return Cart::instance('wishlist')->content();
}
// function GetCartContent(){
//     return Cart::instance('default')->content();
// }
function GetImage(){
    $content = GetWishlistContent();
    return asset('img/'.$content->model->slug.'.jpg') ;
}