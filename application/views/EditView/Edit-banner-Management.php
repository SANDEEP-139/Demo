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
                <h4 class="content-title mb-0 my-auto text-primary">Edit banner</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
                    <form class="form-size" action="<?php echo base_url("Edititems/Editbanner/{$dbdata['ban_id']}"); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="text-primary">banner title</label>
                            <input type="text" class="form-control" name="bannername" value="<?= $dbdata['banner_name'] ?>" id="inputEmail" placeholder="banner name" required>
                        </div>
                        <label class="text-primary">Image</label>
                        <div class="custom-file">
                            <input type="file" name="image" value="<?= $dbdata['bannner_image'] ?>" class="custom-file-input" id="customFile">
                             <td><img src="<?php echo base_url("/uploads/OfferImage/");?><?= $dbdata['bannner_image'] ?>"  alt="photo" style="border-radius:50%;" height="50px"; width="50px";/>&nbsp;&nbsp;<?= $dbdata['bannner_image'] ?></td>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <br><br>
                       
                          
                            <br><br>
                         <button type="submit" class="btn btn-primary"><i class="fe fe-plus"></i>Update</button>
                    </form>
                    <br><br>
                </div>
        </div>
    </div>
    <?php include_once('footer.php'); ?>