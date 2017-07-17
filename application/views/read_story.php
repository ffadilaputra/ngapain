<?php $this->load->view('partials/h-user');
		if ($this->session->userdata('logged_in')) {
    		$session_data = $this->session->userdata('logged_in');
    		$data['id'] = $session_data['id'];
    	}
?>
<br>
<br>
<div class="ui main text container">
	<h1 class="ui header"><?= $detel[0]->title ?></h1>
	<img class="ui fluid image" src="<?= base_url('assets/uploads') ?>/<?= $detel[0]->img_story ?>">
	<p>Posted at <strong><?= $detel[0]->date ?></strong></p>
	<p><?= $detel[0]->desc ?></p>
	<br>
	<div class="ui container">
		<div class="ui comments">
			<h3 class="ui dividing header">Comments</h3>
			<?php foreach($comment as $array): ?>
			<div class="comment">
				<a class="avatar">
					<img src="<?= base_url('assets/uploads/') ?><?= $array->avatar ?>">
				</a>
				<div class="content">
					<a class="author"><?= $array->username ?></a>
					<div class="metadata">
						<span class="date">at <?= $array->time ?></span>
					</div>
					<div class="text">
						<?= $array->coment ?>
					</div>
					<div class="actions">
						<a href="#" class="reply">Delete</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
			<?php
				$attr = array('class' => 'ui reply form');
				echo form_open('comment/reply',$attr);
			?>
				<input type="hidden" name="fk_user"  value="<?= $session_data['id'] ?>">
				<input type="hidden" name="fk_story" value="<?= $detel[0]->id_story ?>">
				<div class="field">
					<textarea name="comment"></textarea>
				</div>
				<button type="submit" class="ui teal button">Comment</button>
			<?php echo form_close(); ?>
			<br>
		</div>
	</div>
</div>
<?php $this->load->view('partials/footer'); ?>