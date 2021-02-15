<template>
    <div>
        <h2 class="white">Rate this list</h2>
        <h5 class="white">Upvote to give your rating for this list from 1 - 5</h5>
 <a href="" href="" style="text-decoration:none" @click.prevent>              
                 <a class="star" style="text-decoration:none;">{{ rateCount }}</a> <a class="fa fa-star fa-2x" style="text-decoration:none;"></a>
                 <br/><br/>
                 <button v-on:click.prevent="increment(5)" class="vue-form-button oswald light fa fa-hand-o-up fa-2x"></button>
                 <button v-on:click.prevent="decrement" class="vue-form-button oswald light fa fa-hand-o-down fa-2x"></button>                   
               </a>
               <hr class="bottom-line">
           </div>
</template>
<script>
   export default {
    props:[
        'owner_id'
    ],
        data: ()=> {
    return {
      rateCount: 0

    }
  },    
        methods:{
              increment (limit) {
                if (this.rateCount < limit)
      this.rateCount++;
    },
    decrement () {
      if(this.rateCount > 0){
        this.rateCount-- ;
      }
    }
  }
}        
</script>
