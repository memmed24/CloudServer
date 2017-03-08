@extends('layouts/drive')
@section('content')
<div id="container-fluid" class="container-fluid">
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<p>Some text in the modal.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
			
		</div>
	</div>
	<div class="row">
		
		<div id="header" class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-3 pull-left">
						<div class="logo"><i class="fa fa-cloud" aria-hidden="true"></i></div>
					</div>
					<div class="col-md-3 pull-right">
						<div class="search_bg">
							<div class="search_filed">
								<input type="text" placeholder="Search" autocomplete="off">
								<div class="search_btn"><a href=""><i class="fa fa-search" aria-hidden="true"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<left></left>
		<div class="col-md-10 col-sm-9 col-xs-7 right_side pull-right" id="right_side">
			<div class="row">
				<div class="container-fluid">
					<div class="row">
						<router-view></router-view>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection