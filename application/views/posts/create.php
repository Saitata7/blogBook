<br><h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label class="form-label">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label class="form-label">Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
  </div>
  <div class="form-group">
	  <label class="form-label">Select your Tag</label>
	  <select name="tag_id" class="form-control">
		  <?php foreach($tags as $tag): ?>
		  	<option value="<?php echo $tag['id']; ?>"><?php echo $tag['name']; ?></option>
		  <?php endforeach; ?>
	  </select>
  </div>
  <div class="form-group">
	  <label class="form-label">Upload Image</label>
	  <input type="file" name="userfile">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>