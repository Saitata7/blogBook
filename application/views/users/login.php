<?php echo form_open('users/login'); ?>
	<div class="row justify-content-center">
		<div class="col-md-4"><br>
			<h1 class="text-center"><?php echo $title; ?></h1><br>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
			</div><br>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div><br>
			<button type="submit" class="btn btn-primary" style="display: block; width: 100%;">Login</button>
		</div>
	</div>
<?php echo form_close(); ?>