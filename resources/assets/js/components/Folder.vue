<template>
<div>	
		<folder-map 
		:path="path" :id="folder_id"
		:name="folder_shname" :fullpath="full_path"
		v-on:find="goMap" :item="selected" v-on:deleteEmit="deleteItem">		  	
		  </folder-map>
	<div class="right_side_down">
	<div class="folder_s">
		<div class="header"><span class="folder_ty">Folders</span></div>
		<div class="right_content">
		<div v-if="preloader" class="preloader" style="background:#eaeeee; width:100%;height: 100vh;position: absolute;left: 50%;top106px;transform: translate(-50%);z-index: 9999;">
						<div  style="position: absolute; left: 48%; top:26%;transform: translate(-50%);width:30px; height:30px;border: 4px solid #f3f3f3;
							border-top: 4px solid #3498db;" class="loader">
						</div>
					</div>
		<div class="empty_folder" v-if="!folders.length">
			<img src="empty_folder.png">
			<div><span class="empty_folder_text">{{errmsg}}</span></div>
		</div>
		<!-- data-toggle="modal" data-target="#lock" -->
			<div  v-for="(folder , index) in folders" class="item"
			   @click="getInfo(folder,$event,index)" 
			   @dblclick="inFolder(folder.lock,folder.id,folder.sh_name)">
				<div class="folder_bg">
					<div v-if="folder.lock!=0" class="locked"><i class="fa fa-lock" aria-hidden="true"></i></div>
					<img class="f_img" src="folder.png">
				</div>
				<div class="item_name text-center">
					<span class="f_name">{{folder.name}} {{checkItem}}</span><!---10 herf-->
				</div>
			</div>

			<div class="clearfix"></div>
		</div>
		
	</div>
	</div>
	
</div>
</template>
<script>
import FolderMap from './FolderMap.vue'
import store from '../store'
	export default{
		data(){
			return{
				folders:{},
				info:[],
				selected:[],
				id:this.$route.params.id,
				folder_name:this.$route.params.folder_name,
				path:[],
				preloader:true,
				folder_id:'',
				folder_shname:'',
				full_path:'',
				errmsg:'This folder is empty',
				sharedState: store.state,
				//count:0,
			}
		},
		methods:{
			fetchFolder(){
				this.$http.get('/api/folder/'+this.$route.params.id+'/'+this.$route.params.folder_name).then((res)=>{
					this.preloader=true;					
					var folderMap =[];	
					this.path=res.data.map.path;
					this.full_path=res.data.map.path;
					folderMap=this.path.split("/");
					this.path=folderMap;					
					this.folders=res.data.folders;
					this.folder_id=res.data.map.id;
					this.folder_shname=res.data.map.sh_name;
					this.preloader=false;

				},response => {
    			this.preloader=false;
    			this.errmsg='This folder doesn’t exist.';
  				});
			},
			getInfo(item,e,index){
				this.info=item;
				if(!e.ctrlKey){
				   this.selected=[]
				}
				if(!this.selected.includes(item)){
					 		 this.selected.push(item);
					 }else{
					 	for(var i=0;i<this.selected.length;i++){					 		
					 		if(item.sh_name==this.selected[i].sh_name){
					 			this.selected.splice(i, 1)
					 		}
					 	}
					 }
			},
			goMap(re,id,name){
				this.$http.get('/api/folders/map/'+re).then((res)=>{
					this.preloader=true;					
					var folderMap =[];	
					this.path=res.data.map.path;
					this.full_path=res.data.map.path;
					folderMap=this.path.split("/");
					this.path=folderMap;					
					this.folders=res.data.folders;
					this.folder_id=res.data.map.id;
					this.folder_shname=res.data.map.sh_name;
					this.preloader=false;
					this.$router.push('/folder/'+this.folder_id+"/"+this.folder_shname);
				})
			},
			deleteItem(item, index){
				this.$http.post('/api/folder/delete',item).then((res)=>{
					for(var i=0; i<item.length; i++){
					for(var b=0; b<this.folders.length; b++){
						if(item[i].sh_name==this.folders[b].sh_name){
							this.folders.splice(b,1);
						}
					}
				  
				}
				},(error)=>{
					console.log(error.status);
				})
				//console.log(item)
				

			},
			inFolder(lock,id,name){
				
				if(lock===1){
					return false;
				}
				this.$router.push('/folder/'+id+"/"+name);
				// this.$http.get('/api/folder/'+id+'/'+name).then((res)=>{	
				// 	this.preloader=true;				
				// 	var folderMap =[];	
				// 	this.path=res.data.map.path;
				// 	folderMap=this.path.split("/");
				// 	this.path=folderMap;					
				// 	this.folders=res.data.folders;
				// 	this.preloader=false;
				// 	this.count=1;
				// })
				//this.fetchFolder();
				
			},
		style(e){
			 $('.'+e.target.className+'').css({'background':'red'});
		}
		},
		computed:{
		  checkItem(){
		  	if(this.sharedState.itemOut){
		  		this.selected=[]
		  	}
		  },
		  // deleteItem(){
		  // 	if(this.sharedState.deleteSuc){
		  // 		this.fetchFolder();
		  // 	}
		  // }
		},
		watch:{
			$route:'fetchFolder',
		},
		created(){
			
				this.fetchFolder()
			
		},
		components:{
			FolderMap
		}
	}
</script>