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
                <h4 class="content-title mb-0 my-auto text-primary">Add Product</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
            <form class="form-size" action="<?= base_url('Additems/Addproduct') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Sub Category first</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="sub_cat_name">
                         <?php
                        //$sub_cat_first = $this->session->userdata('sub_cat_first');
                         $records = $this->Common_model->_select('sub_cat_first','*');
                        foreach ($records as $key => $record) { ?>

                             <option   value="<?php echo $record['sub_cat_first_id']; ?>"><?php echo $record['sub_cat_name']; ?></option>

                        <?php      }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Sub Category Second</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="subcategorysecond">
                        <?php
                       // $sub_cat_second = $this->session->userdata('sub_cat_second');
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
                       // $category = $this->session->userdata('category_id');
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
                            <option value="<?php echo $record['store_id']; ?>"><?php echo $record['store_name']; ?></option>

                        <?php      }
                        ?>
                    </select>
                </div>
                <!-- <div class="AddStoreDiv"> -->
                <!-- <form class="AddStoreForm" > -->
                <div class="form-group">
                    <label class="text-primary">product name</label>
                    <input type="text" class="form-control" id="inputEmail" name="name" placeholder="product name" required>
                </div>
              
                 <div class="form-group">
                    <label class="text-primary">Product Price In OMR</label>
                    <input type="text" class="form-control" id="inputPassword" name="omr" placeholder="product price" required>
                </div>
                 <div class="form-group">
                    <label class="text-primary">Product Price In DEHAM</label>
                    <input type="text" class="form-control" id="inputPassword" name="dirham" placeholder="product price" required>
                </div>
                 <div class="form-group">
                    <label class="text-primary">Product Price In SAR</label>
                    <input type="text" class="form-control" id="inputPassword" name="sar" placeholder="product price" required>
                </div>
               <!--  <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Choose a currency</label>
<select class="form-control" name="product_currency">
  <option value="OMR">OMR</option>
  <option value="DEHAM">DEHAM</option>
  <option value="SAR">SAR</option>
  
</select>
                   
                </div> -->
                <div class="form-group">
                    <label class="text-primary">Product Size</label>
                    <input type="text" class="form-control" id="inputPassword" name="size" placeholder="Product Size" required>
                </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Product New Arrivals</label>
                    <select class="form-control" name="newarrivals">
                      <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label class="text-primary">Product New Arrivals</label>
                    <input type="text" class="form-control" id="inputPassword" name="newarrivals" placeholder="Product New Arrivals" required>
                </div> -->
                <div class="form-group">
                    <label class="text-primary">Product Department</label>
                    <input type="text" class="form-control" id="inputPassword" name="department" placeholder="product department" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Product Color</label>
                    <input type="text" class="form-control" id="inputPassword" name="color" placeholder="Product Color" required>
                </div>
                <div class="form-group">
                    <label class="text-primary">Product Fit</label>
                    <input type="text" class="form-control" id="inputPassword" name="fit" placeholder="Product Fit" required>
                </div>
               <div class="form-group">
                    <label class="text-primary">product description</label>
                    <textarea rows="3" class="form-control" id="inputEmail" name="description" placeholder="product description" required></textarea>
                </div>
                <label class="text-primary">Product Image</label>
                <div class="custom-file">
                   

                     <input type="file" class="custom-file-input" onchange="readURL(this);" name="image" >
                <img id="blah" src="http://placehold.it/180"  width="50" height="50" alt="photo" style="border-radius:50%;" height="50px"; width="50px"; /> 
                      
                    <label class="custom-file-label" for="customFile">Choose file</label> 
                </div>
                <br><br>
                <input type="submit">
                <!-- <button type="button" class="btn btn-primary"><i class="fe fe-plus"></i>Add Product</button> -->
                <!-- </div> -->
            </form>
            <br><br>
        </div>
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
<!-- <script>
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_upload_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#customFile").change(function () {
        readURL(this);
    });
</script> -->

<?php include_once('footer.php'); ?>