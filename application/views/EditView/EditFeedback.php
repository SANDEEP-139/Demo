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
                <h4 class="content-title mb-0 my-auto text-primary">Edit Feedback</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
            <form class="form-size" action="<?php echo base_url("Edititems/Editfeedback/{$dbdata['feedback_id']}"); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="text-primary">name</label>
                    <input type="text" class="form-control" value="<?= $dbdata['feedback_name'] ?>" id="inputEmail" name="feedbakname" placeholder="name" required>
                </div>
                <label class="text-primary">Feedback Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" value="<?= $dbdata['feedback_image'] ?>" name="image" id="customFile">
                     <td><img src="<?php echo base_url("/uploads/FeedbackImage/");?><?= $dbdata['feedback_image'] ?>"  alt="photo" style="border-radius:50%;" height="50px"; width="50px";/>&nbsp;&nbsp;&nbsp;<?= $dbdata['feedback_image'] ?></td>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div><br><br>
                <div class="form-group">
                    <label class="text-primary">Email</label>
                    <input type="email" class="form-control" value="<?= $dbdata['feedback_email'] ?>" id="inputPassword" name="email" placeholder="email" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Number</label>
                    <input type="number" class="form-control" value="<?= $dbdata['feedback_mobile'] ?>" id="inputPassword" name="number" placeholder="number" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Against</label>
                    <input type="text" class="form-control" value="<?= $dbdata['against'] ?>" id="inputPassword" name="against" placeholder="against" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Feedback Note</label>
                    <input type="text" class="form-control" value="<?= $dbdata['feedback_note'] ?>" id="inputPassword" name="feedbacknote" placeholder="feedback note" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="text-primary">Store Details</label>
                    <textarea class="form-control" name="storedetails" id="exampleFormControlTextarea1" value="<?= $dbdata['store_details'] ?>" rows="3"><?= $dbdata['store_details'] ?></textarea>
                </div>

                <br><br>
                <input type="submit" class="btn btn-primary">
                <!-- <button type="button" class="btn btn-primary"><i class="fe fe-plus"></i>Add Product</button> -->
                <!-- </div> -->
            </form>

        </div>

        <br><br>
    </div>
</div>
<?php include_once('footer.php'); ?>