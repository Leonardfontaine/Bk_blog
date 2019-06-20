<center><h2><?= $title; ?></h2></center>

<?php echo validation_errors(); ?>

<div class="container">
	<?php echo form_open_multipart('posts/create'); ?>
		<div class="form-group col-md-6 offset-md-3">
		  <label>Title</label>
		  <input type="text" class="form-control" name="title" placeholder="Add title">
		</div>
		<div class="form-group col-md-6 offset-md-3">
		    <label>Body</label>
		    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body" style="height: 400px;"> </textarea>
		</div>
		<div class="form-group col-md-6 offset-md-3">
			<br/>
		<div class="form-group">
		  <label>Upload Image</label>
		  <input type="file" name="userfile" size="20">
	  	</div>
		<div class="col-md-6 offset-md-5">
		<button type="submit" class="btn btn-default"><a>Submit</a></button>
		</div>
	</form>
</div>