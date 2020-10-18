<?php include_once('header.php');
include_once('sidebar.php'); ?>



<style>
	.modal-confirm {
		color: #636363;
		width: 400px;
	}

	.modal-confirm .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
		text-align: center;
		font-size: 14px;
	}

	.modal-confirm .modal-header {
		border-bottom: none;
		position: relative;
	}

	.modal-confirm h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -10px;
	}

	.modal-confirm .close {
		position: absolute;
		top: -5px;
		right: -2px;
	}

	.modal-confirm .modal-body {
		color: #999;
	}

	.modal-confirm .modal-footer {
		border: none;
		text-align: center;
		border-radius: 5px;
		font-size: 13px;
		padding: 10px 15px 25px;
	}

	.modal-confirm .modal-footer a {
		color: #999;
	}

	.modal-confirm .icon-box {
		width: 80px;
		height: 80px;
		margin: 0 auto;
		border-radius: 50%;
		z-index: 9;
		text-align: center;
		border: 3px solid #f15e5e;
	}

	.modal-confirm .icon-box i {
		color: #f15e5e;
		font-size: 46px;
		display: inline-block;
		margin-top: 13px;
	}

	.modal-confirm .btn,
	.modal-confirm .btn:active {
		color: #fff;
		border-radius: 4px;
		background: #60c7c1;
		text-decoration: none;
		transition: all 0.4s;
		line-height: normal;
		min-width: 120px;
		border: none;
		min-height: 40px;
		border-radius: 3px;
		margin: 0 5px;
	}

	.modal-confirm .btn-secondary {
		background: #c1c1c1;
	}

	.modal-confirm .btn-secondary:hover,
	.modal-confirm .btn-secondary:focus {
		background: #a8a8a8;
	}

	.modal-confirm .btn-danger {
		background: #f15e5e;
	}

	.modal-confirm .btn-danger:hover,
	.modal-confirm .btn-danger:focus {
		background: #ee3535;
	}

	.trigger-btn {
		display: inline-block;
		/*margin: 100px auto;*/
	}
</style>
<style>
	.breadcrumb-header {
		display: flex;
		margin-top: 24px;
		margin-bottom: 24px;
		width: 100%;
	}
</style>
<br><br><br>
<div class="container">
	<div class="breadcrumb-header justify-content-between">
		<div class="my-auto">
			<div class="d-flex">
				<h4 class="content-title mb-0 my-auto">Refund Management</h4>
			</div>
		</div>
		<div class="d-flex my-xl-auto right-content">
			<div class="pr-1 mb-3 mb-xl-0">
			 <!-- <a href="refundrequest.php"><button type="button" class="btn btn-info"><i class="fe fe-plus"></i>Refund Request</button></a>  -->
			</div>


		</div>
	</div>
	<!--<div class="row mb-2 mb-xl-3">-->
	<!--	<div class="col-auto d-none d-sm-block">-->
	<!--		<h3><strong>Store</strong> Management</h3>-->
	<!--	</div>-->
	<!--</div>-->
	<div class="card">
		<div class="card-body">
			<table id="table_id" class="table table-condensed table-striped table-hover table-striped table-bordered">
				<thead>
					<tr>
						<th> Name</th>
						<th>Image</th>
						<th>order id</th>
						<th>order date</th>
						<th>order price</th>
						<th>order status</th>
                        <th>product quantity</th>
                        <th>cancellation Reason</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Tiger Nixon</td>
						<td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png" width="80px"></td>
						<td>61</td>
						<td>2011/04/25</td>
						<td>2011/04/25</td>
						<td>2011/04/25</td>
						<td>2</td>
                        <td>deliverd</td>
                        <td class="table-action">
							<a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="eye"></i></a>
							<a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="edit"></i></a>
							<a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="slash"></i></a>
							<a href="#myModal" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="trash"></i></a>
						</td>
					</tr>
					<tr>
						<td>Garrett Winters</td>
						<td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png" width="80px"></td>
						<td>63</td>
						<td>2011/07/25</td>
						<td>2011/04/25</td>
						<td>2011/04/25</td>
						<td>2</td>
                        <td>dispatch</td>
                        <td class="table-action">
							<a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="eye"></i></a>
							<a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="edit"></i></a>
							<a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="slash"></i></a>
							<a href="#myModal" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="trash"></i></a>
						</td>
					</tr>
					<tr>
						<td>Ashton Cox</td>
						<td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png" width="80px"></td>
						<td>66</td>
						<td>2009/01/12</td>
						<td>2011/04/25</td>
						<td>2011/04/25</td>
                        <td>2</td>
                        <td>cancel</td>
                        <td class="table-action">
							<a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="eye"></i></a>
							<a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="edit"></i></a>
							<a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="slash"></i></a>
							<a href="#myModal" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="trash"></i></a>
						</td>
					</tr>
					<tr>
						<td>Cedric Kelly</td>
						<td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png" width="80px"></td>
						<td>22</td>
						<td>2012/03/29</td>
						<td>2011/04/25</td>
						<td>2011/04/25</td>
                        <td>2</td>
                        <td>deliverd</td>
                        <td class="table-action">
							<a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="eye"></i></a>
							<a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="edit"></i></a>
							<a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="slash"></i></a>
							<a href="#myModal" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="trash"></i></a>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
                        <th> Name</th>
						<th>Image</th>
						<th>order id</th>
						<th>order date</th>
						<th>order price</th>
						<th>order status</th>
						<th>product quantity</th>
                        <th>cancellation Reason</th>
                        <th>Action</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>


</div>
<!--<button onclick="document.getElementById('id01').style.display='block'">Open Modal</button>-->

<!--Delete Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>
				<h4 class="modal-title w-100">Are you sure?</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>
</div>

<!--Block User Modal HTML -->
<div id="myModalBlockUser" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="material-icons">unpublished</i>
				</div>
				<h4 class="modal-title w-100">Are you sure?</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to chnage this user status?</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Unblock</button>
				<button type="button" class="btn btn-danger">Block</button>
			</div>
		</div>
	</div>
</div>

<!--Add Username & Password vendor Modal HTML -->
<div id="vendor" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="material-icons">unpublished</i>
				</div>
				<h4 class="modal-title w-100">Are you sure?</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to chnage this user status?</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Unblock</button>
				<button type="button" class="btn btn-danger">Block</button>
			</div>
		</div>
	</div>
</div>

<script>
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>

<?php include_once('footer.php');  ?>