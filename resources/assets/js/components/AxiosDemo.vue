<template>
 <div>
     <!-- Hello World 

     <div id="axiostestid">
    c_sousen :: added for testing the vue compoenent 
     
     
         <hr/>
  
          <ul>
             <li v-for="(value) in JSON.parse(wishlistContent)">
                 {{Key field is actually rowId , we can use that }}
               ::rowId :: {{value.rowId}}<br/>
               :: PRODUCT_ID :: {{ value.id }} <br/>
               :: PRODUCT_NAME :: {{ value.name }} <br/>
               :: PRODUCT_QTY :: {{ value.qty }} <br/>
               :: PRODUCT_PRICE :: {{ value.price }} <br/>
               :: PRODUCT_SUBTOTAL :: {{ value.subtotal }} <br/>
               :: PRODUCT_SLUG :: {{ value.slug }} <hr/>               

             </li>
          </ul>
     </div> -->

<!--Wishtlist list rendering testing -->
     
   <div class="wishlist_container">
      <!-- <h3 class="alert-success">You have items in your wishlists</h3> -->
      {{ wishlistContent }}
       <ul>
         <li  v-for="content in parsedJson(wishlistContent)"  v-bind:key="content.id" class="wl_items wl_even">
           <div class="wl_info">
              <div class="wl_Section">
                <!-- <a :href="route('shop.show', content.model.slug)">
                    <img :src="asset('img/'.content.model.slug.'.jpg')" alt="" class="itemImg" />
                </a> -->
            :: <p class="prod_catalogue">PRODUCT_NAME</p> ::{{ content.name }}
            <br />:: rowId :: {{ content.rowId }}
            <!-- slug not working as model can not be associated -->
            <!-- :: <p class ="prod_catalogue">Slug </p> :: {{ content.model.slug }} -->
               </div>
               <div class="wl_Section removeWrap">
           <!-- remove function implementation -->
           <!-- <form action ="{{ route('cart.destroy' , $cartItem->rowId) }}" method ="POST" > -->
<!--            {{ csrf_field() }}
           {{ method_field('DELETE')}} -->
           <!-- <a href="#" class="remove">x</a> -->Remove from wishlist
           <form action="/cart/:product"  method="POST" >
                  <!-- {{csrfField}}
                  {{methodField}}
                  {{show_row_id}} -->
                 <button type="submit" class="remove" @click="destroyCart(content.rowId)">X</button>
           </form>
                 
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

    <hr/>
    <!--testing with blade template -->
     <div class="wishlist_container">
      <!-- <h3 class="alert-success">You have items in your wishlists</h3> -->
      
       <ul>
         @foreach(parsedJson(wishlistContent) as $cartItem)
        <li class="wl_items wl_even">
         <!-- <li  v-for="content in parsedJson(wishlistContent)"  v-bind:key="content.id" class="wl_items wl_even"> -->
           <div class="wl_info">
              <div class="wl_Section">
                <!-- <a href="route('shop.show', $cartItem->model->slug)">
                    <img src="asset('img/'.$cartItem->model->slug.'.jpg')" alt="" class="itemImg" />
                </a> -->
            <!-- :: <p class="prod_catalogue">PRODUCT_NAME</p> ::{{ content.name }}
            <br />:: rowId :: {{ content.rowId }} -->
            <!-- slug not working as model can not be associated -->
            <!-- :: <p class ="prod_catalogue">Slug </p> :: {{ content.model.slug }} -->
               </div>
               <div class="wl_Section removeWrap">
           <!-- remove function implementation -->
           <!-- <form action ="{{ route('cart.destroy' , $cartItem->rowId) }}" method ="POST" > -->
<!--            {{ csrf_field() }}
           {{ method_field('DELETE')}} -->
           <!-- <a href="#" class="remove">x</a> -->Remove from wishlist
           <!-- <form :action="destroy" method="POST"> -->
                  <!-- {{csrfField}}
                  {{methodField}}
                  {{show_row_id}} -->
                 <button type="submit" class="remove">X</button>
           <!-- </form> -->
                 
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
         @endforeach
      </ul>  
    </div>

 </div>

 
    <!-- <div >
        <h1>Bitcoin Price Index</h1>
 {{ testing }}
  <section v-if="fallacy">
    <p>We're sorry, we're not able to retrieve this information at the moment, please try back later</p>
  </section>

  <section v-else>
    <div v-if="loading">Loading...</div>

    <div v-else v-for="currency in info" class="currency">
      {{ currency.description }}:
      <span class="lighten">
        <span v-html="currency.symbol"></span>{{ currency.rate_float | currencydecimal }}
      </span>
    </div>

  </section>
    </div> -->
</template>

<script>
export default {
    props : ['cartCount','wishlistContent','methodField','csrfField',],
    // props :{
    //     cartCount :[Number,String],
    //     wishlistContent :[Object,JSON]
    // },
    data(){
        return{
            // csrf_field :  "{{ csrf_field() }}",
            // method_field_type : "{{ method_field('DELETE')}}",
            show_row_id : "content.rowId"
            
        }
    },
    
    methods: {

        parsedJson : function(json_obj){
           //let self = this;
          return JSON.parse(json_obj)
       },   

       destroyCart : function(listContent){
          return listContent;
       }
     },
    // created(){
    //   axios.get('https://api.coindesk.com/v1/bpi/currentprice.json')
    //        .then(response =>{
    //            this.info = response.data.bpi;
    //            })
    //        .catch(error => {
    //             console.error();
    //             this.fallacy = true;
    //            })
    //         .finally( ()=> this.loading = false );
    // },
     filters: {
       currencydecimal (value) {
          return value.toFixed(2)
          }
    },
    // created(){
    //     testing: "<?php echo 'Hello World'?>"
       
    // }
    mounted() {
        // axios.get('https://api.coindesk.com/v1/bpi/currentprice.json')
        //    .then(response =>{
        //        this.info = response.data.bpi;
        //        })
        //    .catch(error => {
        //         console.error();
        //         this.fallacy = true;
        //        })
        //     .finally( ()=> this.loading = false );
      console.log('AxiosDemo component mounted successfully');  
    },
}
</script>
<style lang="scss">
  .prod_catalogue{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bolder;
  }
</style>
