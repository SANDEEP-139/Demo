<?php include_once('header.php');
include_once('sidebar.php'); ?>

<br><br><br><br>

<div class="container">
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto text-primary">Edit News</h4>
            </div>
        </div>
    </div>
    <br><br>
    <div class="card">
        <div class="card-body">
            <div class="AddStoreDiv">
                <form class="AddStoreForm" action="<?php echo base_url("Edititems/Editnews/{$dbdata['news_id']}"); ?>" method="post">
                    <div class="form-group">
                        <label for="inputtext" class="text-primary"">News title</label>
                        <input type=" text" class="form-control" value="<?= $dbdata['title'] ?>" name="newstitle" id="inputtext" placeholder="News title" required>
                    </div>
                    <label class="text-primary">News Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" value="<?= $dbdata['news_image'] ?>" name="image" id="customFile">
                         <td><img src="<?php echo base_url("/uploads/NewsImage/");?><?= $dbdata['news_image'] ?>"  alt="photo" style="border-radius:50%;" height="50px"; width="50px";/>&nbsp;&nbsp;<?= $dbdata['news_image'] ?></td>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div><br><br><br>
                    <div class="form-group">
                        <label for="inputtext" class="text-primary"">News Associated Store</label>
                        <input type=" text" class="form-control" value="<?= $dbdata['news_associated_store'] ?>" name="newsassociatedstore" id="inputtext" placeholder="News title" required>
                    </div>
                    <div class="form-group">
                        <label for="inputtext" class="text-primary"">News Name</label>
                        <input type=" text" class="form-control" value="<?= $dbdata['news_name'] ?>" name="newsname" id="inputtext" placeholder="News title" required>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fe fe-plus"></i>Update</button>
                </form>
            </div>
        </div>
    </div>

    <?php include_once('footer.php'); ?>