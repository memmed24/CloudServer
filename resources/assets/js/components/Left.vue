<template>
<div id="left_side_bar" class="left_side_bar col-xs-5 col-sm-3 col-md-2 pull-left">
	<div class="row">
		<div class="side_bar">
			<div class="profile_bg">
				<div class="profile_img_bg">
					<div class="img_profile">
						<a href="09.jpg" target="_blank">
							<img src="09.jpg">
						</a>
					</div>
					<div class="user_info">
						<div><span class="user_n">Aslan Muhammadrza</span></div>
						<div><span class="user_m">aslan@ibloud.com <span class="user_act"><i class="fa fa-caret-down" aria-hidden="true"></i></span></span></div>
					</div>
				</div>
			</div>
			<div class="list_items">
				<ul>
					 <router-link to="/my-drive" tag="li" class="list_item" active-class="active" exact>
						<span class="icon"><i class="fa fa-folder" aria-hidden="true"></i></span><span class="txt">My Drive</span>
					</router-link>
					<router-link to="/files" tag="li" class="list_item" active-class="active">
						<span class="icon"><i class="fa fa-file" aria-hidden="true"></i></span><span class="txt">Files</span>
					</router-link>
					<router-link to="/photos" tag="li" class="list_item" active-class="active">
						<span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span><span class="txt">Photos</span>
					</router-link>
					<router-link to="/links" tag="li" class="list_item" active-class="active">
						<span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span><span class="txt">Links</span>
					</router-link>
					<router-link to="/starred" tag="li" class="list_item" active-class="active">
						<span class="icon"><i class="fa fa-star" aria-hidden="true"></i></span><span class="txt">Starred</span>
					</router-link>
					<router-link to="/shared" tag="li" class="list_item" active-class="active">
						<span class="icon"><i class="fa fa-share-alt" aria-hidden="true"></i></span><span class="txt">Shared</span>
					</router-link>
					<router-link to="/trash" tag="li" class="list_item" active-class="active">
						<span class="icon"><i class="fa fa-trash-o" aria-hidden="true"></i></span><span class="txt">Trash</span>
					</router-link>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</template>
<script>
	export default{
		data(){
			return{

			}
		},
		methods:{
			// myDrive(){
			// 	this.$router.push('/my-drive')
			// },
			// files(){
			// 	this.$router.push('/files')
			// },
			// photos(){
			// 	this.$router.push('/photos')
			// },
			// links(){
			// 	this.$router.push('/links')
			// },
			// starred(){
			// 	this.$router.push('/starred')
			// },
			// shared(){
			// 	this.$router.push('/shared')
			// },
			// trash(){
			// 	this.$router.push('/trash')
			// }
		},
		created(){
			//this.myDrive()
		}
	}
</script>