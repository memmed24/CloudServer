
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueRouter from 'vue-router'
Vue.use(VueRouter)
const Mydrive = resolve => {
        resolve(require('./components/Mydrive.vue'));    
};
const Left = resolve => {
        resolve(require('./components/Left.vue'));    
};
const Folder = resolve => {
        resolve(require('./components/Folder.vue'));    
};
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const router = new VueRouter({
 // mode: 'history',
  base: __dirname,
  routes: [ 
    { path: '/my-drive', component: Mydrive },
    { path: '/folder/:id/:folder_name', name:'folder', component: Folder },
  ]
})


const app = new Vue({
    el: '#app',
    router,
    components:{
    	Left,
    	Mydrive,
      Folder,
    }

});

// $(function () {
//     $(this).bind('contextmenu rightclick', function(e){
//         e.preventDefault();
//         console.log(e)
//     });
// });