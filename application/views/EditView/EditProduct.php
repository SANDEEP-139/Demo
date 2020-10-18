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
                <h4 class="content-title mb-0 my-auto text-primary">Edit Product</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
            <form class="form-size" action="<?php echo base_url("Edititems/Editproduct/{$dbdata['product_id']}"); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Sub Category first</label>
                   <select class="form-control" id="sub_cat_first_id" name="subcategoryfirst" >
                        <?php
                        $records = $this->Common_model->_select(' sub_cat_first','*');
                        foreach ($records as $key => $record) { ?>
                             <option value="<?php echo $record['sub_cat_first_id']; ?>"><?php echo $record['sub_cat_name']; ?></option> 
 

                            
                        <?php      }
                        ?>
                    </select>
                </div>
                       
                   
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Sub Category Second</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="sub_cat_second_name">
                        <?php
                        $records = $this->Common_model->_select('sub_cat_second','*');
                        foreach ($records as $key => $record) { ?>
                             <option value="<?php echo $record['sub_cat_second_id']; ?>"><?php echo $record['sub_cat_second_name']; ?></option> 

                            
                        <?php      }
                        ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Category Name</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category_name">
                       <?php
                        $records = $this->Common_model->_select('category','*');
                        foreach ($records as $key => $record) { ?>
                            <option value="<?php echo $record['category_id']; ?>"><?php echo $record['category_name']; ?></option>

                        <?php      }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Store Name</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="store_id">
                        <?php
                        $records = $this->Common_model->_select('store_management','*');
                        foreach ($records as $record) { ?>
                            <?php echo $record;  ?>
                            <option value="<?php echo $record['store_id']; ?>"><?php echo $record['store_name']; ?></option>

                        <?php      }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-primary">product name</label>
                    <input type="text" class="form-control" id="inputEmail" value="<?= $dbdata['product_name'] ?>" name="name" placeholder="product name" required>
                </div>

                      <div class="form-group">
                    <label class="text-primary">Product Price In OMR</label>
                    <input type="text" class="form-control" id="inputPassword" value="<?= $dbdata['product_price_omr'] ?>" name="omr" placeholder="product price" required>
                </div>
                 <div class="form-group">
                    <label class="text-primary">Product Price In DEHAM</label>
                    <input type="text" class="form-control" id="inputPassword"value="<?= $dbdata['product_price_dirham'] ?>" name="dirham" placeholder="product price" required>
                </div>
                 <div class="form-group">
                    <label class="text-primary">Product Price In SAR</label>
                    <input type="text" class="form-control" id="inputPassword" value="<?= $dbdata['product_price_sar'] ?>" name="sar" placeholder="product price" required>
                </div>

               <!--  <div class="form-group">
                    <label class="text-primary">Product price</label>
                    <input type="text" class="form-control" id="inputPassword" value="<?= $dbdata['product_price'] ?>" name="price" placeholder="product price" required>
                </div> -->
                <div class="form-group">
                    <label class="text-primary">Product Size</label>
                    <input type="text" class="form-control" id="inputPassword" value="<?= $dbdata['product_size'] ?>" name="size" placeholder="Product Size" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Product New Arrivals</label>
                    <select class="form-control" name="newarrivals">
                      <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-primary">Product Department</label>
                    <input type="text" class="form-control" id="inputPassword" value="<?= $dbdata['product_department'] ?>" name="department" placeholder="product department" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Product Color</label>
                    <input type="text" class="form-control" id="inputPassword" value="<?= $dbdata['product_color'] ?>" name="color" placeholder="Product Color" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Product Fit</label>
                    <input type="text" class="form-control" id="inputPassword" value="<?= $dbdata['product_fit'] ?>" name="fit" placeholder="Product Fit" required>
                </div>

                <label class="text-primary">Product Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" value="" id="customFile">
                    <br><br>
                    <td><img src="<?php echo base_url("/uploads/ProductImage/");?><?= $dbdata['product_image'] ?>"  alt="photo" style="border-radius:50%;" height="50px"; width="50px";/><?= $dbdata['product_image'] ?></td>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              <br><br><br>
                
                <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
        
    </div>
</div>
<?php include_once('footer.php'); ?>