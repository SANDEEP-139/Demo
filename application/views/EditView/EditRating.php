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
                <h4 class="content-title mb-0 my-auto text-primary">Edit Rating</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
            <form class="form-size" action="<?php echo base_url("Edititems/Editrating/{$dbdata->rating_id}"); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="text-primary">product name</label><?php
                    $RatingData_records = $this->session->userdata('GetRatingData');
                    ?>
                    <input type="hidden" class="form-control" value="<?= $dbdata->product_id; ?>" id="inputEmail" name="name" placeholder="product name" required>
                    <input type="text" class="form-control" value="<?= $dbdata->product_name; ?>" id="inputEmail" name="name" placeholder="product name" required>
                </div>
            
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="text-primary">Review</label>
                    <textarea class="form-control" name="review" id="exampleFormControlTextarea1" value="<?= $dbdata->review; ?>" rows="3" ><?= $dbdata->review; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="text-primary">Ratings</label>
                    <textarea class="form-control" name="ratings" id="exampleFormControlTextarea1" value="<?= $dbdata->ratings; ?>" rows="3" ><?= $dbdata->ratings; ?></textarea>
                </div>
                <br><br>
                <input type="submit" class="btn btn-primary">
                <!-- <button type="button" class="btn btn-primary"><i class="fe fe-plus"></i>Add Product</button> -->
                <!-- </div> -->
            </form>

        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>