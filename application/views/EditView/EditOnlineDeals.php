<?php include_once('header.php');
include_once('sidebar.php'); ?>

<br><br><br><br>

<div class="container">
  <div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
      <div class="d-flex">
        <h4 class="content-title mb-0 my-auto">Edit Online Deal</h4>
      </div>
    </div>
  </div>
</div>
<?php if ($this->session->flashdata('success')) { ?>
  <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
<?php } ?>
<br><br>
<div class="card">
  <div class="card-body">
    <div class="AddStoreDiv">
      <form class="AddStoreForm" action="<?php echo base_url("Edititems/Editonlinedeals/{$dbdata['deal_id']}"); ?>" method="post">
        <div class="form-group">
          <label for="inputEmail">Product Name</label>
          <input type="text" class="form-control" name="productname" value="<?= $dbdata['product_name'] ?>" id="inputEmail" placeholder="name" required>
        </div>
        <div class="form-group">
          <label for="inputPassword">Deal time</label>
          <input type="date" class="form-control" name="date" value="<?= $dbdata['deal_time'] ?>" id="inputPassword" placeholder="Deal time" required>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
  </div>
</div>

<?php include_once('footer.php'); ?>