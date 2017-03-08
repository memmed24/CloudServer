<template>
		<div class="folder_map">
		<div class="folder_strck pull-left">
			<div class="over">
				<ul><router-link to="/my-drive" tag="li">My Drive <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></router-link>
				<li v-for="(dir,index) in path" @click="goMap(dir,fullpath,index)" >{{dir}} <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
				<!-- <li>Shares <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
				<li>Shares <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></li> -->
			</ul>
		</div>
	</div>
	<div class="pull-right hidden-xs dropdown">
		<ul class="ff_act_m ">
			<li class="ff_act ">
				<i class="fa fa-folder" aria-hidden="true"></i>
				<i class="fa fa-plus" aria-hidden="true"></i>
			</li>
			<li class="ff_act " data-toggle="modal" data-target="#myModal">
				<i class="fa fa-info-circle" aria-hidden="true"></i>
			</li>
			<li class="ff_act"><i class="fa fa-trash" aria-hidden="true"></i></li>
			<li  data-toggle="dropdown" class="ff_act dropdown-toggle"><i class="fa fa-bars" aria-hidden="true"></i>
			</li>
			<ul class="dropdown-menu">
				<li><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>Rename</li>
				<li><span><i class="fa fa-star" aria-hidden="true"></i></span>Add star</li>
				<li><span><i class="fa fa-files-o" aria-hidden="true"></i></span>Copy</li>
				<li><span><i class="fa fa-cloud-download" aria-hidden="true"></i></span>Download</li>
				<li><span><i class="fa fa-folder" aria-hidden="true"></i></span>Move to</li>
				<li><span><i class="fa fa-eye-slash" aria-hidden="true"></i></span>Hide</li>
				<li><span><i class="fa fa-lock" aria-hidden="true"></i></span>Lock</li>
			</ul>
			
			<li class="ff_act"><i class="fa fa-th-large" aria-hidden="true"></i></li>
		</ul>
		
	</div>
	<div class="clearfix"></div>
</div>
</template>
<script>
	export default{
		// props{
		//     path: {
		//       type: String,
		//       //required: true
		//     },			
		// }
		props:['path','id','name','fullpath'],
		data(){
			return{
				catch:'asassas'
			}
		},
		methods:{
			getInfo(item){
				this.info=item;
			},
			// inFolder(id,name){
			// 	this.$router.push('/folder/'+id+'/'+name);
			// },
			goMap(name,fullpath,index){	
				if(index==this.path.length){
					return false;
				}
				var folderMap =[];	
				folderMap=this.fullpath.split("/");
				folderMap=folderMap.splice(0, index+1)
				folderMap=folderMap.join('/');
				this.$emit('find',folderMap);
				//

			}
		},
		created(){
			// /return this.props.path;
		}
	}
</script>