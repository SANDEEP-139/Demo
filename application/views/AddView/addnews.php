<?php include_once('header.php');
include_once('sidebar.php'); ?>

<br><br><br><br>

<div class="container">
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto text-primary">Add News</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br><br>
    <div class="card">
        <div class="card-body">
                <form class="form-size" action="<?= base_url('Additems/Addnews') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputtext" class="text-primary"">News title</label>
                        <input type=" text" class="form-control" name="newstitle" id="inputtext" placeholder="News title" required>
                    </div>
                    <label class="text-primary">News Image</label>
                    <div class="custom-file">
                         <input type="file" class="custom-file-input" onchange="readURL(this);" name="image" >
                <img id="blah" src="http://placehold.it/180"  width="50" height="50" alt="photo" style="border-radius:50%;" height="50px"; width="50px"; />
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div><br><br>
                    <div class="form-group">
                        <label for="inputtext" class="text-primary"">News Associated Store</label>
                        <input type=" text" class="form-control" name="newsassociatedstore" id="inputtext" placeholder="News title" required>
                    </div>
                    <div class="form-group">
                        <label for="inputtext" class="text-primary"">News Name</label>
                        <input type=" text" class="form-control" name="newsname" id="inputtext" placeholder="News title" required>
                    </div>
                    <input type="submit" class="btn btn-primary">
                </form>
            
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