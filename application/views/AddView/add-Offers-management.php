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
                <h4 class="content-title mb-0 my-auto text-primary">Add Offer</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
                <form class="form-size" action="<?= base_url('Additems/Addoffer') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="text-primary">offer title</label>
                        <input type="text" class="form-control" name="offertitle" id="inputEmail" placeholder="product name" required>
                    </div>
                   <label class="text-primary">Image</label>
                        <div class="custom-file">
                             <input type="file" class="custom-file-input" onchange="readURL(this);" name="image" >
                <img id="blah" src="http://placehold.it/180"  width="50" height="50" alt="photo" style="border-radius:50%;" height="50px"; width="50px"; />
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <br><br>
                    <label class="text-primary">Valid till</label>
                            <div class="row">
                                <div class="col">
                                    <input type="date" name="validtill" value="" class="form-control" placeholder="First name">
                                </div>
                                
                            </div>
                            <!-- <label class="text-primary">to</label>
                            <div class="col">
                                <input type="date" class="form-control" name="validtillsec" placeholder="Last name">
                            </div> -->
                        
                        <label class="text-primary">Discount</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="discount" id="inputEmail" placeholder="Discount" required>
                        </div>
                        <label class="text-primary">Coupon code</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="couponcode" id="inputEmail" placeholder="Coupon code" required>
                        </div>
                        <label class="text-primary">Product</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="product" id="inputEmail" placeholder="Product" required>
                        </div>
                        <label class="text-primary">Region</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="region" id="inputEmail" placeholder="Region" required>
                        </div>
                         <label class="text-primary">Description</label>
                        <div class="form-group">
                            <textarea  rows="5" class="form-control" name="description" id="inputEmail" placeholder="Please description here" required></textarea>
                        </div>
                        <!-- <div class="form-group">
                            <label class="text-primary">Offer benefits</label>
                            <input type="text" class="form-control" name="offerbenefits" id="inputEmail" placeholder="product name" required>
                        </div> -->
                        <br><br>
                        <input type="submit" class="btn btn-primary">
                        <!-- <button type="button" class="btn btn-primary"><i class="fe fe-plus"></i>Submit</button> -->
                    </form>
                    
                
                <br><br>
        </div>
</div>
<script>
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                console.log(reader);
                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<?php include_once('footer.php'); ?>