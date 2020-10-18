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
                <h4 class="content-title mb-0 my-auto text-primary">Add Campaign</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
            <form class="form-size" action="<?= base_url('Additems/Addcampaign') ?>" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Module Type</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="moduletype" >
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="text-primary">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="text-primary">Cashback Set</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="cashbackset"></textarea>
                </div>
                 <input type="submit" class="btn btn-primary"><i class="fe fe-plus"></i>
                <!-- <button type="button" class="btn btn-primary"><i class="fe fe-plus"></i>Submit</button> -->
            </form>
            <br><br>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>