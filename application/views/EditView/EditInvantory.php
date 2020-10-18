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
                <h4 class="content-title mb-0 my-auto text-primary">Edit invantory</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
            <form class="form-size" action="<?php echo base_url("Edititems/Editinvantory/{$dbdata['product_id']}"); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Sub Category First</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="subcategoryfirst">
                         <?php
                        $records = $this->Common_model->_select(' sub_cat_first','*');
                        foreach ($records as $key => $record) { ?>
                             <option value="<?php echo $record['sub_cat_first_id']; ?>"><?php echo $record['sub_cat_name']; ?></option> 
 

                            
                        <?php      }
                        ?>
                    </select>
                </div>
               
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Category Name</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="categorname">
                       <?php
                        $records = $this->Common_model->_select('category','*');
                        foreach ($records as $key => $record) { ?>
                            <option value="<?php echo $record['category_id']; ?>"><?php echo $record['category_name']; ?></option>

                        <?php      }
                        ?>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Category Id</label>
                    <select class="form-control" value="<?= $dbdata//[/'category_id'] ?>" id="exampleFormControlSelect1" name="categoryid">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div> -->

                <div class="form-group">
                    <label class="text-primary">product name</label>
                    <input type="text" class="form-control" value="<?= $dbdata['product_name'] ?>" id="inputEmail" name="name" placeholder="product name" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Product price</label>
                    <input type="text" class="form-control" value="<?= $dbdata['product_price'] ?>" id="inputPassword" name="price" placeholder="product price" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Product Size</label>
                    <input type="text" class="form-control" value="<?= $dbdata['product_size'] ?>" id="inputPassword" name="size" placeholder="Product Size" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Product New Arrivals</label>
                    <input type="text" class="form-control" value="<?= $dbdata['product_new_arrivals'] ?>" id="inputPassword" name="newarrivals" placeholder="Product New Arrivals" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Product Department</label>
                    <input type="text" class="form-control" value="<?= $dbdata['product_department'] ?>" id="inputPassword" name="department" placeholder="product department" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Product Color</label>
                    <input type="text" class="form-control" value="<?= $dbdata['product_color'] ?>" id="inputPassword" name="color" placeholder="Product Color" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Product Fit</label>
                    <input type="text" class="form-control" value="<?= $dbdata['product_fit'] ?>" id="inputPassword" name="fit" placeholder="Product Fit" required>
                </div>
                <label class="text-primary">Product Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" value="" id="customFile">
                    <br><br>
                    <td><img src="<?php echo base_url("/uploads/ProductImage/");?><?= $dbdata['product_image'] ?>"  alt="photo" style="border-radius:50%;" height="50px"; width="50px";/><?= $dbdata['product_image'] ?></td>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <br><br><br>
                <input type="submit" class="btn btn-primary">
                <!-- <button type="button" class="btn btn-primary"><i class="fe fe-plus"></i>Add Product</button> -->
                <!-- </div> -->
            </form>

        </div>

        <br><br>
    </div>
</div>
<?php include_once('footer.php'); ?>