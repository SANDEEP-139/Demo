<?php include_once('header.php');
include_once('sidebar.php'); ?>
<br><br><br><br>
<style>
    .form-size {
        width: 70%;
        margin-left: 15%;
    }
</style>
<div class="container">
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto text-primary">Add Notification</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
            <form class="form-size" action="<?= base_url('Additems/AddNotification') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="text-primary">product name</label>
                    <input type="text" class="form-control" name="productname" id="inputEmail" placeholder="product name" required>
                </div>
                <label class="text-primary">Product Image</label>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div class="form-group">
                    <label class="text-primary">Product Status</label>
                    <input type="text" class="form-control" name="Productstatus" id="inputnumber" placeholder="Product status" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Notification Time</label>
                    <input type="date" class="form-control" name="Notificationtime" id="inputnumber" placeholder="Notification" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="text-primary">Product Description</label>
                    <textarea class="form-control" name="ProductDescription" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
           
                <br><br>
                <!-- <button type="button" ><i class="fe fe-plus"></i>Add Product</button> -->
                <input type="submit" class="btn btn-primary">
                <br><br>
            </form>
        </div>
    </div>
    <?php include_once('footer.php'); ?>