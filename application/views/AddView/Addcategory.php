<?php include_once('header.php');
include_once('sidebar.php'); ?>

<br><br><br><br>

<div class="container">
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Add Category</h4>
            </div>
        </div>
    </div>
    <br><br>
    <div class="card">
        <div class="card-body">
            <div class="AddStoreDiv">
                <form class="AddStoreForm" action="<?= base_url('Additems/Addcategory') ?>" method="post"  enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Category name</label>
                        <input type="text" class="form-control" name="category_name" >
                           
                        
                    </div>
                  <!--   <div class="form-group">
                        <label for="exampleFormControlSelect1">Brands</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="brands">
                            <option>abc</option>
                            <option>efgh</option>
                            <option>ijk</option>
                            <option>lmno</option>
                            <option>kblo</option>
                        </select>
                    </div> -->
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" onchange="readURL(this);" name="image" >
                <img id="blah" src="http://placehold.it/180"  width="50" height="50" alt="photo" style="border-radius:50%;" height="50px"; width="50px"; /> 
                            
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
             </div>
             <button type="submit" class="btn btn-primary">Add</button>
            </form>
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

    <?php include_once('footer.php'); ?>