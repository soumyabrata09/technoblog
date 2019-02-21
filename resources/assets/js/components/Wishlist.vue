<template>
   <div class="spacer">
   <div class="wishlist_container">
      <!-- <h3 class="alert-success">You have items in your wishlists</h3> -->
       <ul>
         <li v-for="content in parsedJson(wishlistContent)" v-bind:key="content.id" class="wl_items wl_even">
           <div class="wl_info">
              <div class="wl_Section">
                 <!-- <a href="#"><img src="https://www.pexels.com/photo/scenic-view-of-beach-248797/" alt="image not found"></a> -->
                  <p class="prod_catalogue">PRODUCT_NAME</p>::{{ content.name }}<br />
                  <p class="prod_catalogue">PRICE</p>:: {{ content.price }}
               </div>
               <div class="wl_Section removeWrap">
           <!-- remove function implementation -->
           <!-- <form action ="{{ route('cart.destroy' , $cartItem->rowId) }}" method ="POST" > -->
<!--            {{ csrf_field() }}
           {{ method_field('DELETE')}} -->
           <form action="destroyCart(content.rowId)" method="POST">
           <!-- <a href="#" class="remove">x</a> -->Remove from wishlist
                  <button type="submit" class="remove">X</button>
           <!-- </form> -->
           </form>          
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
          props : ['wishlistContent'],
      // name : WishList,
        // created(){
        //     axios.get(route(cart.switchToWishlist));
        // },
        methods:{
            destroyCart : function(v){
                return route('cart.destroy',v);
            },
            parsedJson : function(json_obj){
               //let self = this;
             return JSON.parse(json_obj)
           }
        },
        computed :{
            
        },
        mounted() {
            console.log('Wishlist Component mounted successfully...')
        }
    }
</script>
<style lang="scss">
  .prod_catalogue{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bolder;
  }
</style>
