<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group">
    <labelclass="form-label">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
  </div><br>
  <div class="form-group">
    <label class="form-label">Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"><?php echo $post['body']; ?></textarea>
  </div><br>
  <div class="form-group">
  <label class="form-label">tag</label>
  <select name="tag_id" class="form-control">
    <?php foreach($tags as $tag): ?>
      <option value="<?php echo $tag['id']; ?>"><?php echo $tag['name']; ?></option>
    <?php endforeach; ?>
  </select>
  </div><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>