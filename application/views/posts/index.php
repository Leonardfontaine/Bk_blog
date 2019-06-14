<br/>
<br/>
<br/>
<br/>

<center><h2>Last Updates</h2></center>
<br/>

<?php foreach($posts as $post) : 
	if ($post['category_id'] == 2) {

	?>
	<br/>
	<h3 class="posttitle"><?php echo $post['title']; ?></h3>
	<div class="row">
		<div class="col-md-3 col-sm-8">
			<img class="post-thumb" src="<?php echo site_url();?>assets/image/posts/<?php echo $post['post_image']; ?>">
		</div>
		<div class="col-md-9">
			<br/>
			<small>Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small>
			<?php echo $post['body']; ?>
			<?php echo form_open('/posts/delete/'.$post['id']); ?>
			<input type="submit" value="Delete" class="btn btn-danger"> 
			<a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>
		</div>
	</div>
<?php
	}
 endforeach; ?>