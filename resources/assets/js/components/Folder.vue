<template>
<div>	
		<folder-map :path="path" :id="folder_id" :name="folder_shname" :fullpath="full_path" v-on:find="goMap"></folder-map>
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
			<div><span class="empty_folder_text">This folder is empty</span></div>
		</div>
		<!-- data-toggle="modal" data-target="#lock" -->
			<div  v-for="folder in folders" class="item" @click="getInfo(folder)"   @dblclick="inFolder(folder.lock,folder.id,folder.sh_name)">
				<div class="folder_bg">
					<div v-if="folder.lock!=0" class="locked"><i class="fa fa-lock" aria-hidden="true"></i></div>
					<img src="folder.png">
				</div>
				<div class="item_name text-center">
					<span>{{folder.name}}</span><!---10 herf-->
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
	export default{
		data(){
			return{
				folders:{},
				info:[],
				id:this.$route.params.id,
				folder_name:this.$route.params.folder_name,
				path:[],
				preloader:true,
				folder_id:'',
				folder_shname:'',
				full_path:'',
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

				})
			},
			getInfo(item){
				//this.info=item;
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
				
			}
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