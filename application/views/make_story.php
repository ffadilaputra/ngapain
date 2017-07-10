<?php $this->load->view('partials/h-user') ?>
<br>
<div class="ui container">
	<?php
		$attr = array('class' => 'ui form');
		echo form_open_multipart('story/make',$attr);
	?>
	<div class="field">
		<label>Title</label>
		<input type="text" name="title" placeholder="Title">
	</div>
	<div class="field">
		<label>Image</label>
		<input type="file" name="image" placeholder="Image">
	</div>
	<div class="field">
		<label>Description</label>
		<textarea name="desc" rows="15"></textarea>
	</div>	
	<button class="ui button teal" type="submit">Submit</button>
	<?php echo validation_errors(); ?>
	<br>
	<?php echo form_close() ?>
</div>
<?php $this->load->view('partials/footer') ?>