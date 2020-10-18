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
                <h4 class="content-title mb-0 my-auto text-primary">Edit Payment</h4>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) { ?>
        <div style="width:70%;margin-left:20%;" class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
    <br>
    <div class="card">
        <div class="card-body">
            <form class="form-size" action="<?php echo base_url("Edititems/Editpayment/{$dbdata['order_id']}"); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="text-primary">name</label>
                    <input type="text" class="form-control" value="<?= $dbdata['name'] ?>" id="inputEmail" name="name" placeholder="product name" required readonly>
                </div>
                <div class="form-group">
                    <label class="text-primary">order date</label>
                    <input type="date" class="form-control" value="<?= $dbdata['order_date'] ?>" id="inputPassword" name="orderdate" placeholder="order date" required  readonly>
                </div>
                <div class="form-group">
                    <label class="text-primary">Order price</label>
                    <input type="text" class="form-control" value="<?= $dbdata['order_price'] ?>" id="inputPassword" name="orderprice" placeholder=">Order price" required  readonly>
                </div>
                 <div class="form-group">
                    <label class="text-primary">Order Status</label>
                    <select name="orderstatus" class="form-control" value="<?= $dbdata['order_status'] ?>" id="exampleFormControlSelect1">
                        <option>pending</option>
                        <option>shiped</option>
                        <option>delivered</option>
                        <option>return</option>
                    </select>
                    <!-- <input type="text" class="form-control" value="<= $dbdata['order_status'] ?>" id="inputPassword"  placeholder="Order Status" required> -->
                </div>
                <div class="form-group">
                    <label class="text-primary">product Quantity</label>
                    <input type="text" class="form-control" value="<?= $dbdata['product_quantity'] ?>" id="inputPassword" name="productquantity" placeholder="product Quantity" required readonly >
                </div>
                 <div class="form-group">
                    <label class="text-primary">Delivery Status</label>
                    <select name="deliverystatus" class="form-control" value="<?= $dbdata['deliverystatus'] ?>" id="exampleFormControlSelect1">
                        <option>pending</option>
                        <option>shiped</option>
                        <option>delivered</option>
                        <option>return</option>
                    </select>
                    <!-- <input type="text" class="form-control" value="<= $dbdata['order_status'] ?>" id="inputPassword"  placeholder="Order Status" required> -->
                </div>
                <label class="text-primary">Product Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input"  value="<?= $dbdata['image'] ?>" name="image" id="customFile" readonly >
                     <td><img src="<?php echo base_url("/uploads/PaymentImage/");?><?= $dbdata['image'] ?>"  alt="photo" style="border-radius:50%;" height="50px"; width="50px";/><?= $dbdata['image'] ?></td>
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