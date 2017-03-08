<template>
		<div class="folder_map">
		<div class="folder_strck pull-left">
			<div class="over">
				<ul><li>My Drive <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
				<li v-for="dir in path">{{dir}} <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
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
		props:['path'],
		data(){
			return{
				
			}
		},
		methods:{
			getInfo(item){
				this.info=item;
			},
			inFolder(id,name){
				this.$router.push('/folder/'+id+'/'+name);
			}
		},
		created(){
			
		}
	}
</script>