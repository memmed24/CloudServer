require('./bootstrap');
import VueRouter from 'vue-router'
import store from './store'
window.addEventListener('load',()=>{



/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */


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
      data(){

    return {
        event:false,
        sharedState: store.state,

    }
  },
    components:{
        Left,
        Mydrive,
      Folder,
    },
    methods:{
        oka(e){
            var target=e.target.className
            if(target!=='f_img' && target!=='f_name' && target!=='item'  && target!=='fa fa-trash'  && target!=='ff_act'){
               this.sharedState.itemOut=true;
               // $(".item").css({'background':'none','color':'black'})
                $(".item").removeClass('selected');
            }else{
                 this.sharedState.itemOut=false;
            }
            ////
        }
    }

});

$(function () {
    // $(this).bind('contextmenu rightclick', function(e){
    //     e.preventDefault();
    //     console.log(e)
    // });
    $(document).on('click','.item',function(e) {
        if(e.ctrlKey){       
            if($(this).hasClass('selected')){
                 $(this).removeClass('selected');
            }else{
                   $(this).addClass('selected')
            }
                 
            }else{
                 $(".item").removeClass('selected');
                  $(this).addClass('selected');
            }

    })
    // $(document).click(function(e) {
    //     var target=e.target.className
    //     if(target!=='f_img' && target!=='f_name' && target!=='item'  && target!=='fa fa-trash'  && target!=='ff_act'){
    //         $(".item").css({'background':'none','color':'black'})
    //     }
               
    //      //console.log("ok")  
    //   })
   
});
})