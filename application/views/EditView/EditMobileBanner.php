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
                <h4 class="content-title mb-0 my-auto text-primary">Edit Mobile banner</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
                    <form class="form-size" action="<?php echo base_url("Edititems/Editmobbanner/{$dbdata['mob_id']}"); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="text-primary">Mobile banner </label>
                            <input type="text" class="form-control" name="mobbannername" value="<?= $dbdata['mobbanner_name'] ?>" id="inputEmail" placeholder="mobile banner name" required>
                        </div>
                        <label class="text-primary">Image</label>
                        <div class="custom-file">
                            <input type="file" name="image" value="<?= $dbdata['mobbanner_image'] ?>" class="custom-file-input" id="customFile">
                             <td><img src="<?php echo base_url("/uploads/OfferImage/");?><?= $dbdata['mobbanner_image'] ?>"  alt="photo" style="border-radius:50%;" height="50px"; width="50px";/>&nbsp;&nbsp;<?= $dbdata['mobbanner_image'] ?></td>
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