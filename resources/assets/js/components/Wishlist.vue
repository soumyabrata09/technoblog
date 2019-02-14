<template>
   <div class="spacer">
   <div class="wishlist_container">
      <!-- <h3 class="alert-success">You have items in your wishlists</h3> -->
       <ul>
         <li class="wl_items wl_even">
           <div class="wl_info">
              <div class="wl_Section">
                 <a href="#"><img src="https://www.pexels.com/photo/scenic-view-of-beach-248797/" alt="image not found"></a>
            
               </div>
               <div class="wl_Section removeWrap">
           <!-- remove function implementation -->
           <!-- <form action ="{{ route('cart.destroy' , $cartItem->rowId) }}" method ="POST" > -->
<!--            {{ csrf_field() }}
           {{ method_field('DELETE')}} -->
           <!-- <a href="#" class="remove">x</a> -->Remove from wishlist
                  <button type="submit" class="remove">X</button>
           <!-- </form> -->
          
             <!-- <a>Add to Wishlist</a> -->
                </div>
                <div class="wl_Section">
                    <div class="wishlist_cartSection">
                          <button type="submit" class="button button-plain "><i class="fas fa-heart"></i>
             <!-- <a>Add to Wishlist</a> -->
                                    Move To Cart
                           </button>
                     </div>
                </div>
             </div>
        </li>
        <li class="wl_items wl_even">
           <div class="wl_info">
              <div class="wl_Section">
                 <a href="#"><img src="https://www.pexels.com/photo/scenic-view-of-beach-248797/" alt="image not found"></a>
            
               </div>
               <div class="wl_Section removeWrap">
           <!-- remove function implementation -->
           <!-- <form action ="{{ route('cart.destroy' , $cartItem->rowId) }}" method ="POST" > -->
<!--            {{ csrf_field() }}
           {{ method_field('DELETE')}} -->
           <!-- <a href="#" class="remove">x</a> -->Remove from wishlist
                  <button type="submit" class="remove">X</button>
           <!-- </form> -->
          
             <!-- <a>Add to Wishlist</a> -->
                </div>
                <div class="wl_Section">
                    <div class="wishlist_cartSection">
                          <button type="submit" class="button button-plain "><i class="fas fa-heart"></i>
             <!-- <a>Add to Wishlist</a> -->
                                    Move To Cart
                           </button>
                     </div>
                </div>
             </div>
        </li>
      </ul>  
    </div>
  </div>
</template>

<script>
    export default {
      // name : WishList,
        // created(){
        //     axios.get(route(cart.switchToWishlist));
        // },
        mounted() {
            console.log('Wishlist Component mounted successfully...')
        }
    }
</script>
