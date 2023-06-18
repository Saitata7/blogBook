<br><h2><?= $title ;?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('tags/create'); ?>
	<div class="form-group">
		<label class="form-label">Name</label>
		<input type="text" class="form-control" name="name" placeholder="Enter name">
	</div><br>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>