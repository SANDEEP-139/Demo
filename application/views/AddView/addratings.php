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
                <h4 class="content-title mb-0 my-auto text-primary">Add Rating</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
                <form class="form-size" action="<?= base_url('Additems/Addrating') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="text-primary">product name</label>
                        <input type="text" class="form-control" name="productname" id="inputEmail" placeholder="product name" required>
                    </div>
                    <label class="text-primary">Image</label>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="form-group">
                        <label class="text-primary">Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label class="text-primary">Contact</label>
                        <input type="number" class="form-control" name="contact" id="inputnumber" placeholder="Mobile" required>
                    </div>
                    <div class="form-group">
                        <label class="text-primary">Address</label>
                        <input type="text" class="form-control" name="address" id="inputPassword" placeholder="name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="text-primary">Store Details</label>
                        <textarea class="form-control" name="storedetails" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="text-primary">Reviews</label>
                        <textarea class="form-control" name="reviews" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="text-primary">Ratings</label>
                        <textarea class="form-control" name="ratings" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <br><br>
                    <!-- <button type="button" ><i class="fe fe-plus"></i>Add Product</button> -->
                    <input type="submit" class="btn btn-primary">
                    <br><br>
                </form>
         </div>
    </div>
    <?php include_once('footer.php'); ?>