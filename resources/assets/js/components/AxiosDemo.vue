<template>
 <div>
     Hello Everyone 

     <div id="axiostestid">
    <!-- c_sousen :: added for testing the vue compoenent  -->
     {{cartCount}}
    <!-- <axiostest cart-count="testing information"></axiostest> -->
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
    props : ['cartCount'],
    data(){
        return{
            info : null,
            loading : true,
            fallacy : false,
            cartCount : ''
        }
    },
    // methods: {
    //     send : function(){
    //         return {
    //             cartCount = this.cartCount
    //         }
    //     }
    // },
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