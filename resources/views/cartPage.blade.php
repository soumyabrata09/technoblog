@extends('layout')

@section('title', 'Shopping Cart')

@section('extra-css')
    <!-- <link rel="stylesheet" href="{{ asset('css/algolia.css') }}"> -->
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shopping Cart</span>
    @endcomponent

    <div class="wrap cf">
  <!-- <h1 class="projTitle">Responsive Table<span>-Less</span> Shopping Cart</h1> -->
  <div class="heading cf">
    <h1>User's cart
    </h1>
    <!-- <div class="alert-success curve-box">Items added successfully in your cart</div> -->
    <!-- cheking whether any is been added successfully to cart else printing the list of error messages if any -->
   @if(session()->has('success_message'))
     <div class="alert-success curve-box">
      {{session()->get('success_message')}}
     </div> 
   @endif
   @if(count($errors)>0)
     <div class="alert-danger curve-box">
        <ul>
          @foreach($errors->all() as $error_msg)
            <li>{{$error_msg}}</li>
          @endforeach
        </ul>
     </div>
   @endif
    <a href="{{route('shop.index')}}" class="continue">Continue Shopping</a>
   
  </div>
  @if(GetCartCount() > 0)
 <!-- making cart count dynamic -->
  <h3>You have {{ Cart::count() }} item(s) in your cart</h3>
  <div class="cart">
<!--    <ul class="tableHead">
      <li class="prodHeader">Product</li>
      <li>Quantity</li>
      <li>Total</li>
       <li>Remove</li>
    </ul>-->
    <ul class="cartWrap">
    @foreach(Cart::content() as $cartItem)  
      <li class="items odd">
        <div class="infoWrap"> 
          <div class="cartSection">
           <a href="{{ route('shop.show', $cartItem->model->slug) }}"><img src="{{ asset('img/'.$cartItem->model->slug.'.jpg') }}" alt="" class="itemImg" /></a>
            <p class="itemNumber">{{$cartItem->model->slug}}</p>
             <h3>{{$cartItem->model->name}}</h3>
        
               <p> <input type="text"  class="qty" /> x {{$cartItem->model->price}}</p>
        
          <!-- <p class="stockStatus"> In Stock</p> -->
        </div>  
    <!-- end of cartSection -->
        
        <div class="prodTotal cartSection">
          <p>{{$cartItem->model->price}}</p> 
          <!-- currently no calculation is been implemented -->
        </div>
        <!-- end of producTotal cartSection -->
           <div class="cartSection removeWrap">
           <!-- remove function implementation -->
           <form action ="{{ route('cart.destroy' , $cartItem->rowId) }}" method ="POST" >
           {{ csrf_field() }}
           {{ method_field('DELETE')}}
           <!-- <a href="#" class="remove">x</a> -->
           <button type="submit" class="remove">X</button>
           </form>
          
             <!-- <a>Add to Wishlist</a> -->
        </div>
        <!-- end of cartSection removeWrap -->
        <div class="cartSection">
          <div class="wishlist_cartSection">
          <form action ="{{ route('cart.switchToWishlist' , $cartItem->rowId) }}" method ="POST" >
              {{ csrf_field() }}
              
              <button type="submit" class="button button-plain "><i class="fas fa-heart"></i>
             <!-- <a>Add to Wishlist</a> -->
             Add to Wishlist 
          </button>
            </form>
          </div>
        </div>
        <!-- end of cartSection 2nd , which is housing the add to wishlist section -->
      
      </div>
      
      <!-- end of infoWrap section -->
      </li>
      @endforeach
      <!-- <li class="items even">
        
       <div class="infoWrap"> 
        <div class="cartSection">
         
        <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
          <p class="itemNumber">#QUE-007544-002</p>
          <h3>Item Name 1</h3>
        
           <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>
        
          <p class="stockStatus"> In Stock</p>
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p>$15.00</p>
        </div>
              <div class="cartSection removeWrap">
           <a href="#" class="remove">x</a>
        </div>
      </div>
      </li> -->
      
      <!-- <li class="items odd">
             <div class="infoWrap"> 
        <div class="cartSection">
            
        <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
          <p class="itemNumber">#QUE-007544-002</p>
          <h3>Item Name 1</h3>
        
           <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>
        
          <p class="stockStatus out"> Out of Stock</p>
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p>$15.00</p>
        </div>
                    <div class="cartSection removeWrap">
           <a href="#" class="remove">x</a>
        </div>
              </div>
      </li> -->
      <!-- <li class="items even">
       <div class="infoWrap"> 
        <div class="cartSection info">
             
        <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
          <p class="itemNumber">#QUE-007544-002</p>
          <h3>Item Name 1</h3>
        
          <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>
        
          <p class="stockStatus"> In Stock</p>
          
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p>$15.00</p>
        </div>
    
            <div class="cartSection removeWrap">
           <a href="#" class="remove">x</a>
        </div>
         </div>
         <div class="special"><div class="specialContent">Free gift with purchase!, gift wrap, etc!!</div></div>
      </li> -->
      
      
      <!--<li class="items even">Item 2</li>-->
 
    </ul>
    <!-- end of cart-wrap -->
  </div>
  <!-- end of cart -->
  <div class="promoCode"><label for="promo">Have A Promo Code?</label><input type="text" name="promo" placholder="Enter Code" />
  <a href="#" class="btn"></a>
  </div>
    
  <div class="wishlist">
        <!-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default"> -->
                    <!-- <div class="card-header">Example Component</div> -->

                    <!-- <div class="card-body"> -->
                 <!-- <router-link :to="{name: WishList}"> -->
                    <button type="submit" class="button button-primary"><i class="fas fa-heart"></i>
                    &nbsp;&nbsp;
                        View Wishlist 
                    </button>
                  <!-- </router-link> -->
                    <!-- </div>
                </div>
            </div>
        </div> -->
    </div>
  
  <div class="subtotal cf">
    <ul>
      <li class="totalRow"><span class="label">Subtotal</span><span class="value">{{Cart::subtotal()}}</span></li>
      
          <!-- <li class="totalRow"><span class="label">Shipping</span><span class="value">$5.00</span></li> -->
      
            <li class="totalRow"><span class="label">Tax<13%></span><span class="value">{{Cart::tax()}}</span></li>
            <li class="totalRow final"><span class="label">Total</span><span class="value">{{Cart::total()}}</span></li>
      <li class="totalRow"><a href="#" class="btn continue"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Checkout</a></li>
    </ul>
  </div>
  <!-- wishlisted product's listing will go here -->
 
  <!-- <div class="spacer">
  
  </div> -->
  <!-- <div id="wishlist_component">
      <router-view></router-view>
  </div> -->
  @else
    <h3 class="alert-danger">No Items in your cart</h3>
  @endif
  
  <!-- wishlist section -->

  @if(GetWishlistCount() > 0 )
   
<!-- testing -->

    <div id="wishlist_component">
       <!-- <h3 class="alert-success curve-box">You have items in your wishlists</h3> -->
       <h3>You have items in your wishlists</h3>
       <wishlist></wishlist>
      
    </div>
    
    {{GetWishlistContent()}}
    
   <!-- <h3></h3> -->
  @else
    <h3 class="alert-danger curve-box">No Items in your Wishlist</h3>
  @endif
  
  <!-- <div id="axiostestid">
    c_sousen :: added for testing the vue compoenent 
    <axiostest cart-count="{{ GetCartCount() }}"></axiostest>
    <hr/>
    <axiostest cart-count="{{ Cart::instance('wishlist')->count() }}"></axiostest>
  </div> -->
  

</div>



    @include('partials.might-like')


@endsection
<!-- <script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
<!-- <script >// Remove Items From Cart
$('a.remove').click(function () {
  event.preventDefault();
  $(this).parent().parent().parent().hide(400);

});

// Just for testing, show all items
$('a.btn.continue').click(function () {
  $('li.items').show(400);
});
//# sourceURL=pen.js
</script> -->