<?php include_once('header.php');
include_once('sidebar.php'); ?>



<br><br><br>
<div class="container">
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Rating Management</h4>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <!-- <a href="<= base_url('Additems/Addcategory') ?>"><button type="button" class="btn btn-info"><i class="fe fe-plus"></i>Add Category</button></a> -->
            </div>
<br><br>

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
                        <th>Product id</th>
                        <!-- <th>Product name</th> -->
                        <th>Reviews</th>
                        <th>Ratings</th>
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
                                <td><?php echo @$record['product_name'] ?></td>
                                <td><?php echo $record['review'] ?></td>
                                <td><?php echo $record['ratings'] ?></td>
                                <!-- <td><php echo $record['category_name'] ?></td> -->
                                <td class="table-action">
                                    <a href="#myModalBlockUser" class="trigger-btn" data-toggle="modal"><i class="align-middle" data-feather="slash"></i></a>
                                    <a href="" class="trigger-btn" data-target="#myModal<?php echo $record['rating_id']; ?>" data-toggle="modal"><i class="align-middle" data-feather="trash"></i></a>

                                </td>
                            </tr>
                            <div id="myModal<?php echo $record['rating_id']; ?>" class="modal fade">
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
                                            <a href="<?php echo base_url('Deleteitems/Deleterating/' . $record['rating_id']) ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    

                        </tbody>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr><td>NO Records Found!</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php endif; ?>
                <tfoot>
                    <tr>
                        <th>Sr no</th>
                        <th>Product id</th>
                        <!-- <th>Product name</th> -->
                        <th>Reviews</th>
                        <th>Ratings</th>
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