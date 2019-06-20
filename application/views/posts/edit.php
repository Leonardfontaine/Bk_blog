<center><h2><?= $title; ?></h2></center>

<?php echo validation_errors(); ?>

<div class="container">
	<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
		<div class="form-group col-md-6 offset-md-3">
		  <label>Title</label>
		  <input type="text" class="form-control" name="title" placeholder="Add title" value="<?php echo$post['title']; ?>">
		</div>
		<div class="form-group col-md-6 offset-md-3">
		    <label>Body</label>
		    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body" style="height: 400px; "> <?php echo$post['body']; ?></textarea>
		</div>

		<div class="col-md-2 offset-md-3">
		<button type="submit" class="btn btn-default"><a>Submit</a></button>
		</div>
	</form> 
</div>