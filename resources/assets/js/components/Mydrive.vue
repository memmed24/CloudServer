<template>
<div>

<!-- <folder-map></folder-map> -->
<div class="right_side_down">
	<div class="folder_s">
		<div class="header"><span class="folder_ty">Folders</span></div>
		<div class="right_content">
			<div v-for="folder in folders" class="item" @click="getInfo(folder)"   @dblclick="inFolder(folder.id,folder.sh_name)">
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
	<div class="folder_s">
		<div class="header"><span class="folder_ty">Files</span></div>
		<div class="right_content">
			<div class="item">
				<div class="file_bg pdf">
					<div class="locked"><i class="fa fa-lock" aria-hidden="true"></i></div>
					<div class="file_ex"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></div>
				</div>
				<div class="item_name text-center">
					<span>images.pdf</span>
				</div>
			</div>
			<div class="item">
				<div class="file_bg jpg">
					<div class="locked"><i class="fa fa-lock" aria-hidden="true"></i></div>
					<div class="file_ex"><i class="fa fa-file-image-o" aria-hidden="true"></i></div>
				</div>
				<div class="item_name text-center">
					<span>images.jpg</span>
				</div>
			</div>
			<div class="item">
				<div class="file_bg word">
					<div class="file_ex"><i class="fa fa-file-word-o" aria-hidden="true"></i></div>
				</div>
				<div class="item_name text-center">
					<span>images.docx</span>
				</div>
			</div>
			<div class="item">
				<div class="file_bg excel">
					<div class="file_ex"><i class="fa fa-file-excel-o" aria-hidden="true"></i></div>
				</div>
				<div class="item_name text-center">
					<span>images.xlsx</span>
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
			}
		},
		methods:{
			myDrive(){
				this.$http.get("/api/my-drive").then((res)=>{
					this.folders=res.data;
				})
			},
			getInfo(item){
				this.info=item;
			},
			inFolder(id,name){
				this.$router.push('/folder/'+id+'/'+name);
			}
		},
		watch:{
			//$route:'myDrive',
		},
		created(){
			this.myDrive();
		},
		components:{
			FolderMap
		}
	}
</script>