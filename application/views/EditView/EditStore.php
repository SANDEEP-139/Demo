
<?php
include_once('sidebar.php'); ?>

<br><br><br><br>
<div class="container">
  <div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
      <div class="d-flex">
        <h4 class="content-title mb-0 my-auto">Edit Store</h4>
      </div>
    </div>
  </div>
  <?php if ($this->session->flashdata('success')) { ?>
    <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
  <?php } ?>
  <br><br>
  <div class="card">
    <div class="card-body">
        <form class="AddStoreForm" action="<?php echo base_url("Edititems/Editstore/{$dbdata['store_id']}"); ?>" method="POST">
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $dbdata['store_email'] ?>"id=inputEmail" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" name="password" value="<?= $dbdata['store_password'] ?>" id="inputPassword" placeholder="Password" required>
          </div>
          <div class="form-group">
            <label for="inputStore">Store Name</label>
            <input type="text" class="form-control" name="store_name" id="store_name"value="<?= $dbdata['store_name'] ?>" placeholder="Storename" required>
          </div>
          <input type="submit" class="btn btn-primary">
        </form>
      </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
