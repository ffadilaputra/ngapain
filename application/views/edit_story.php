<?php $this->load->view('partials/h-user') ?>
<br>
<div class="ui container">
	<?php
		$attr = array('class' => 'ui form');
		echo form_open_multipart('story/edit/'.$this->uri->segment(3),$attr);
	?>
	<div class="field">
		<label>Title</label>
		<input type="text" name="title" placeholder="Title" value="<?= $emp[0]->title ?>">
	</div>
	<div class="field">
		<label>Image</label>
		<input type="file" name="image" placeholder="Image">
	</div>
	<div class="field">
		<label>Description</label>
		<textarea name="desc" rows="15"><?= $emp[0]->desc ?></textarea>
	</div>	
	<button class="ui button teal" type="submit">Submit</button>
	<?php echo validation_errors(); ?>
	<br>
	<?php echo form_close() ?>
</div>
<?php $this->load->view('partials/footer') ?>