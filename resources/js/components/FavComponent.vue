<template>
  <div>
    <i v-on:click="storeOrDelete" class="material-icons fav-icon">{{iconString}}</i>
  </div>
</template>

<script>
  export default {
    props: {
      likeId:{
        type: String,
        required: true
      }
    },

    data: {
      isTrue: false,
      iconString: favorite_border
    },

    methods: {
      storeOrDelete: function(){
        this.isTrue = true;
        this.iconString = favorite;
      }
    },
  }
</script>
