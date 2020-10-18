<?php include_once('header.php');
include_once('sidebar.php'); ?>

<br><br><br><br>

<div class="container">
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Edit Second Category</h4>
            </div>
        </div>
    </div>
    <br><br>
    <div class="card">
        <div class="card-body">
            <div class="AddStoreDiv">
                <form class="AddStoreForm" action="<?php echo base_url("Edititems/Editsecondcategory/{$dbdata['sub_cat_second_id']}"); ?>"" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Category Name</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category_name">
                        <?php
                        //$category = $this->session->userdata('category_id');
                        $records = $this->Common_model->_select('category','*');
                        foreach ($records as $key => $record) { ?>
                            <option value="<?php echo $record['category_id']; ?>"><?php echo $record['category_name']; ?></option>

                        <?php      }
                        ?>
                    </select>
                </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-primary">Sub Category first</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="sub_cat_name">
                         <?php
                       // $records = $this->session->userdata('category_id');
                         $records = $this->Common_model->_select('sub_cat_first','*');
                        foreach ($records as $key => $record) { ?>

                             <option  value="<?php echo $record['sub_cat_first_id']; ?>"><?php echo $record['sub_cat_name']; ?></option>

                        <?php      }
                        ?>
                    </select>
                </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Second Category name</label>
                        <input type="text" class="form-control" name="sub_cat_second_name" value="<?= $dbdata['sub_cat_second_name'] ?>">
                           
                        
                    </div>
                 
                        <label class="text-primary">Category Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input"  value="" name="image" id="customFile">
                    <br>
                    <td><img src="<?php echo base_url("/uploads/CategoryImage/");?><?= $dbdata['sub_cat_second_image'] ?>"  alt="photo" style="border-radius:50%;" height="50px"; width="50px";/>&nbsp;&nbsp;<?= $dbdata['sub_cat_second_image'] ?></td>
                   
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <br><br><br>
             <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
        </div>
    </div>

    <?php include_once('footer.php'); ?>