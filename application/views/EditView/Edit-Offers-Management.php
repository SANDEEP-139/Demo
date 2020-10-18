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
                <h4 class="content-title mb-0 my-auto text-primary">Edit Offer</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
                    <form class="form-size" action="<?php echo base_url("Edititems/Editoffer/{$dbdata['offers_id']}"); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="text-primary">offer title</label>
                            <input type="text" class="form-control" name="offertitle" value="<?= $dbdata['offers_title'] ?>" id="inputEmail" placeholder="product name" required>
                        </div>
                        <label class="text-primary">Image</label>
                        <div class="custom-file">
                            <input type="file" name="image" value="<?= $dbdata['offers_image'] ?>" class="custom-file-input" id="customFile">
                             <td><img src="<?php echo base_url("/uploads/OfferImage/");?><?= $dbdata['offers_image'] ?>"  alt="photo" style="border-radius:50%;" height="50px"; width="50px";/>&nbsp;&nbsp;<?= $dbdata['offers_image'] ?></td>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <br><br>
                        <label class="text-primary">Valid till</label>
                            <div class="row">
                                <div class="col">
                                    <input type="date" name="validtill" value="<?= $dbdata['valid_till'] ?>" class="form-control" placeholder="First name">
                                </div>
                                
                            </div><br><br>
                            <label class="text-primary">Discount</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="discount" value="<?= $dbdata['discount'] ?>" id="inputEmail" placeholder="Discount" required>
                            </div>
                            <label class="text-primary">Coupon code</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="couponcode" value="<?= $dbdata['coupon_code'] ?>" id="inputEmail" placeholder="Coupon code" required>
                            </div>
                            <label class="text-primary">Product</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="product" value="<?= $dbdata['product'] ?>" id="inputEmail" placeholder="Product" required>
                            </div>
                            <label class="text-primary">Region</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="region" value="<?= $dbdata['region'] ?>" id="inputEmail" placeholder="Region" required>
                            </div>
                            <label class="text-primary">Description</label>
                        <div class="form-group">
                            <textarea  rows="5" class="form-control" name="description"  value=""id="inputEmail" placeholder="Please description here" required><?= $dbdata['description'] ?></textarea>
                        </div>
                          <!--  <div class="form-group">
                            <label class="text-primary">Offer benefits</label>
                            <input type="text" class="form-control" name="offerbenefits" id="inputEmail" placeholder="product name" required>
                        </div> -->
                            <br><br>
                         <button type="submit" class="btn btn-primary"><i class="fe fe-plus"></i>Update</button>
                    </form>
                    <br><br>
                </div>
        </div>
    </div>
    <?php include_once('footer.php'); ?>