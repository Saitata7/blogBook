<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="row justify-content-center">
		<div class="col-md-4"><br>
			<h1 class="text-center"><?= $title; ?></h1>
			<div class="form-group">
				<label class="form-label" >Name</label>
				<input type="text" class="form-control" name="name" placeholder="Name">
			</div><br>
			<div class="form-group">
				<label class="form-label">Zipcode</label>
				<input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
			</div><br>
			<div class="form-group">
				<label class="form-label">Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div><br>
			<div class="form-group">
				<label class="form-label">Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div><br>
			<div class="form-group">
				<label class="form-label">Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div><br>
			<div class="form-group">
				<label class="form-label">Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div><br>
			<button type="submit" class="btn btn-primary" style="display: block; width: 100%;">Submit</button>
		</div>
	</div>
<?php echo form_close(); ?>
