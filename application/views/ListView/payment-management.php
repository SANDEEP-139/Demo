<?php include_once('header.php');
include_once('sidebar.php'); ?>




<br><br><br>
<div class="container">
	<div class="breadcrumb-header justify-content-between">
		<div class="my-auto">
			<div class="d-flex">
				<h4 class="content-title mb-0 my-auto">Payment Management</h4>
			</div>
		</div>
		<div class="d-flex my-xl-auto right-content">
			<div class="pr-1 mb-3 mb-xl-0">
				<!-- <a href="addproduct.php"><button type="button" class="btn btn-info"><i class="fe fe-plus"></i>Add Product</button></a> -->
			</div>


		</div>
	</div>
	<?php if ($this->session->flashdata('success')) { ?>
		<div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
	<?php } ?>
	<div class="card">
		<div class="card-body">
			<table id="table_id" class="table table-condensed table-striped table-hover table-striped table-bordered">
				<thead>
					<tr>
						<th>Sr no</th>
						<th> Name</th>
						<th>Image</th>
						<!-- <th>order id</th> -->
						<th>order date</th>
						<th>order price</th>
						<th>order status</th>
						<th>product quantity</th>
						<th>Refund status</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php if (!empty($records)) : ?>
					<?php $count = $this->uri->segment(3); ?>
					<?php foreach ($records as $key => $record) : ?>
						<?php $count++; ?>
						<tbody>
							<tr>
								<td><?php echo $count;?></td>
								<td><?php echo @$record['name'] ?></td>
								<td><?php if (($record['image'])) { ?>
										<img src="<?php echo base_url("/uploads/PaymentImage/" . $record['image']); ?>" alt="" width="120" height="70">
									<?php } else { ?>

										
									<?php } ?>
								</td>

								<td><?php echo $record['order_date'] ?></td>
								<td><?php echo $record['order_price'] ?></td>
								<td><?php echo $record['order_status'] ?></td>
								<td><?php echo $record['product_quantity'] ?></td>
								<td><?php echo $record['delivery_status'] ?></td>

								 <td class="table-action">
                                    <a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="slash"></i></a>
                                    <a href="" data-toggle="modal" data-target="#myModalup<?php echo $record['order_id']; ?>" class="trigger-btn"><i class="align-middle" data-feather="edit"></i></a>
                                    <a href="" class="trigger-btn" data-target="#myModal<?php echo $record['order_id']; ?>" data-toggle="modal"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
								<div id="myModal<?php echo $record['order_id']; ?>" class="modal fade">
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
												<a href="<?php echo base_url('Deleteitems/Deletepayment/' . $record['order_id']) ?>"><button type="button" class="btn btn-danger">Delete</button></a>
											</div>
										</div>
									</div>
								</div>
								<div id="myModalup<?php echo $record['order_id']; ?>" class="modal fade">
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
											<p>Do you really want to update these records? This process can update record.</p>
										</div>
										<div class="modal-footer justify-content-center">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
											<a href="<?php echo base_url('Edititems/Editpayment/' . $record['order_id']) ?>"><button type="button" class="btn btn-success">Update</button></a>
										</div>
									</div>
								</div>
							</div>
							</tr>
						</tbody>
					<?php endforeach; ?>
				<?php else : ?>
					<tr><td>NO Records Found!</td>
						<td></td>
						<td></td>
						<td></td>
					   <td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				<?php endif; ?>
				<tfoot>
					<tr>
						<th>Sr no</th>
						<th>Name</th>
						<th>Image</th>
						<!-- <th>order id</th> -->
						<th>order date</th>
						<th>order price</th>
						<th>order status</th>
						<th>product quantity</th>
						<th>Refund status</th>
						<th>Action</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>


</div>
<!--<button onclick="document.getElementById('id01').style.display='block'">Open Modal</button>-->

<!--Delete Modal HTML -->
<!-- <div id="myModal" class="modal fade">
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
</div> -->

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