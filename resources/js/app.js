/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('fav-component', require('./components/FavComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',

// });

$(function(){
  const myStorageFav = window.localStorage.getItem('fav-ids');
  const myFavs = myStorageFav.split(',')
  const likeIds = [];
  // console.log(myFavs);
  myFavs.forEach(function(el){
    // console.log($('#fav_icon-' +el )[0])
    $('#fav_icon-' +el ).text('favorite');
    likeIds.push(el)
  })

  console.log(likeIds);
  $('.fav-icon').on('click',function(){
    // console.log(this.innerHTML);
    var id = this.getAttribute('id').slice(9)

    if(this.innerHTML === 'favorite_border'){
      this.innerHTML = 'favorite'

      // id挿入
      if(!likeIds.includes(id)){
        likeIds.push(id);
      }

    }else if(this.innerHTML === 'favorite'){
      this.innerHTML = 'favorite_border';

      if(likeIds.includes(id)){
        likeIds.pop(id);
      }

    }
    // localStorageに保存
    window.localStorage.setItem('fav-ids',likeIds);
  })
})
