<?php $this->load->view('partials/h-user'); ?>
<br>
<br>
<div class="ui main text container">
	<h1 class="ui header"><?= $detel[0]->title ?></h1>
		<img class="ui fluid image" src="<?= base_url('assets/uploads') ?>/<?= $detel[0]->img_story ?>">
	<p>Posted at <strong><?= $detel[0]->date ?></strong></p>
	<p><?= $detel[0]->desc ?></p>
</div>
<?php $this->load->view('partials/footer'); ?>