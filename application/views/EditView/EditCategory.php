<?php include_once('header.php');
include_once('sidebar.php'); ?>

<br><br><br><br>

<div class="container">
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Edit Category</h4>
            </div>
        </div>
    </div>
    <br><br>
    <div class="card">
        <div class="card-body">
            <div class="AddStoreDiv">
                <form class="AddStoreForm" action="<?php echo base_url("Edititems/Editcategory/{$dbdata['category_id']}"); ?>"" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Category name</label>
                        <input type="text" class="form-control" name="category_name" value="<?= $dbdata['category_name'] ?>">
                           
                        
                    </div>
                 
                        <label class="text-primary">Category Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input"  value="" name="image" id="customFile">
                    <br>
                    <td><img src="<?php echo base_url("/uploads/CategoryImage/");?><?= $dbdata['category_image'] ?>"  alt="photo" style="border-radius:50%;" height="50px"; width="50px";/>&nbsp;&nbsp;<?= $dbdata['category_image'] ?></td>
                   
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <br><br><br>
             <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
        </div>
    </div>

    <?php include_once('footer.php'); ?>