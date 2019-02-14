<template>
 <div>
     Hello Everyone 

     <div id="axiostestid">
    <!-- c_sousen :: added for testing the vue compoenent  -->
       Count ::  {{cartCount}}
     
         <!-- {{wishlistContent}} -->
         <hr/>
         <!-- {{ extractJSON(wishlistContent) }} -->
    <!-- <axiostest cart-count="testing information"></axiostest> -->
          <ul>
             <li v-for="(value,key) in JSON.parse(wishlistContent)">
                 <!--{{Key field is actually rowId , we can use that }}-->
                :: PRODUCT_ID :: {{ value.id }} <br/>
               :: PRODUCT_NAME :: {{ value.name }} <br/>
               :: PRODUCT_QTY :: {{ value.qty }} <br/>
               :: PRODUCT_PRICE :: {{ value.price }} <br/>
               :: PRODUCT_SUBTOTAL :: {{ value.subtotal }} <br/>
               :: PRODUCT_SLUG :: {{ value.slug }} <hr/>               

             </li>
          </ul>
     </div>

<!--Wishtlist list rendering testing -->
     
  
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
    props : ['cartCount','wishlistContent'],
    // props :{
    //     cartCount :[Number,String],
    //     wishlistContent :[Object,JSON]
    // },
    data(){
        return{
            
            // info : null,
            // loading : true,
            // fallacy : false,
            cartCount : '',
            // wishlistContent : JSON.stringify(this.wishlistContent),
            //wishlistContent : JSON.parse(this.wishlistContent),
            // wishlistContentTest :{
            //      "rowId": "027c91341fd5cf4d2579b49c4b6a90da", 
            //      "id": "1",
            //       "name": "Choco Lave", 
            //       "qty": 1, 
            //       "price": 230, 
            //       "options": [],
            //       "tax": 32.2,
            //       "subtotal": 230 
            // }
        }
    },
    
    methods: {

        parsedJson : function(json_obj){
           //let self = this;
          return JSON.parse(json_obj)
       },   

       extractJSON : function(obj) {
          var keys = Object.keys(obj);
          for(var i=0; i<keys.length; i++){
              var key = keys[i];
              console.log(key, obj[key]);
          }
                    //  for (const i in obj) {
                    //       if (Array.isArray(obj[i]) || typeof obj[i] === 'object') {
                    //             console.log(indent + i + ' is array or object');
                    //             extractJSON(obj[i], indent + ' > ' + i + ' > ');
                    //         } else {
                    //             console.log(indent + i + ': ' + obj[i]);
                    //         }
                    //      }
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