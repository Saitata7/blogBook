<h2><?= $title; ?></h2>
<ul class="list-group">
<?php foreach($tags as $tag) : ?>
	<li class="list-group-item"><a href="<?php echo site_url('/tags/posts/'.$tag['id']); ?>"><?php echo $tag['name']; ?></a>
		<?php if($this->session->userdata('user_id') == $tag['user_id']): ?>
			<form class="cat-delete" action="tags/delete/<?php echo $tag['id']; ?>" method="POST">
				<input type="submit" class="btn-link text-danger" value="[X]">
			</form>
		<?php endif; ?>
	</li>
<?php endforeach; ?>
</ul>