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
                <h4 class="content-title mb-0 my-auto text-primary">Edit Campaign</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
            <form class="form-size" action="<?php echo base_url("Edititems/Editcampaign/{$dbdata['campaign_id']}"); ?>" method="POST">
                 <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Module Type</label>
                    <select class="form-control" id="inputtext" name="module" value="<?= $dbdata['module_type'] ?>" placeholder="module type" required >
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
               
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="text-primary">Cashback Set </label>
                    <textarea class="form-control" name="cashback" id="exampleFormControlTextarea1" value="<?= $dbdata['cashback_set'] ?>" rows="3"><?= $dbdata['cashback_set'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="text-primary">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" value="<?= $dbdata['description'] ?>" rows="3" ><?= $dbdata['description'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fe fe-plus"></i>Update</button>

            </form>
            <br><br>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>