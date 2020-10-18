
<?php require("header.php");
require("sidebar.php"); ?>



<body>

<div class="container">
	
	<hr>
	<form   method ="post" name="Createuser" action="<?php  echo base_url().'Additems/edit/'.$user['id'];?>">
	<div class="row">

		<div class="col-md-12">
			<div class ="form-group">
				<label>Date</label>
	<input type="date" name="date" value="<?php echo set_value('date',$user['date']); ?>" class="form-control">
				<?php echo form_error('date');?>
			</div>
			<div class ="form-group">
				<label>H</label>
				<input type="number" name="h" value="<?php echo set_value('h',$user['h']); ?>" class="form-control">
				<?php  echo form_error('h');?>
			</div>
			<div class ="form-group">
				<label>M</label>
				<input type="number" name="m" value="<?php echo set_value('m',$user['m']); ?>" class="form-control">
				<?php  echo form_error('m');?>
			</div>
			<div class ="form-group">
				<label>S</label>
				<input type="number" name="s" value="<?php echo set_value('s',$user['s']); ?>" class="form-control">
				<?php  echo form_error('s');?>
			</div>
			<div class ="form-group">
				<button class="btn btn-primary">Update</button>
				<a href="<?php  echo base_url().'Additems/index';?>" class="btn btn-secondary btn">Cancel</a>
				
			</div>
			
		</div>
		
	</div>
	</form>
</div>
</body>

</html>
<?php include_once('footer.php');  ?>