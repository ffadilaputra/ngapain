<?php 	if ($this->session->userdata('logged_in')) {
    	$session_data = $this->session->userdata('logged_in');
    	$data['id'] = $session_data['id'];
    }
    ?>

<br><br>
<div class="ui main container">
	<div class="ui divided items">
		<?php foreach($list as $data): ?>
		<div class="item">
			<div class="image">
				<img src="<?= base_url('assets/uploads') ?>/<?= $data->img_story ?>">
			</div>
			<div class="content">
				<a class="header"><?= $data->title ?></a>
<!-- 				<div class="meta">
					<span class="cinema">IFC Cinema</span>
				</div> -->
				<div class="description">
					<p><?= character_limiter($data->desc,30); ?></p>
				</div>
				<div class="extra">
					<a href="<?= base_url('story/read') ?>/<?= $data->id_story ?>" class="ui right floated primary button">
						Readmore
						<i class="right chevron icon"></i>
					</a>
					
					<?php if($data->id == $session_data['id']): ?>
					<a href="<?= base_url('story/edit') ?>/<?= $data->id_story ?>" class="ui right floated primary button">
						Edit
						<i class="right chevron icon"></i>
					</a>
					<a href="<?= base_url('story/delete') ?>/<?= $data->id_story ?>" class="ui right floated primary button">
						Delete
						<i class="right chevron icon"></i>
					</a>
				<?php endif; ?>
					<div class="content">
						<img class="ui avatar image" src="<?= base_url('assets/uploads') ?>/<?= $data->avatar ?>">Posted by,<?= $data->username ?>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
	<br>
	<br>
</div>
<div class="ui inverted vertical footer segment">
	<div class="ui center aligned container">
		<div class="ui stackable inverted divided grid">
			<div class="three wide column">
				<h4 class="ui inverted header">Group 1</h4>
				<div class="ui inverted link list">
					<a href="#" class="item">Link One</a>
					<a href="#" class="item">Link Two</a>
					<a href="#" class="item">Link Three</a>
					<a href="#" class="item">Link Four</a>
				</div>
			</div>
			<div class="three wide column">
				<h4 class="ui inverted header">Group 2</h4>
				<div class="ui inverted link list">
					<a href="#" class="item">Link One</a>
					<a href="#" class="item">Link Two</a>
					<a href="#" class="item">Link Three</a>
					<a href="#" class="item">Link Four</a>
				</div>
			</div>
			<div class="three wide column">
				<h4 class="ui inverted header">Group 3</h4>
				<div class="ui inverted link list">
					<a href="#" class="item">Link One</a>
					<a href="#" class="item">Link Two</a>
					<a href="#" class="item">Link Three</a>
					<a href="#" class="item">Link Four</a>
				</div>
			</div>
			<div class="seven wide column">
				<h4 class="ui inverted header">Footer Header</h4>
				<p>Extra space for a call to action inside the footer that could help re-engage users.</p>
			</div>
		</div>
		<div class="ui inverted section divider"></div>
		<!-- <img src="assets/images/logo.png" class="ui centered mini image"> -->
		<div class="ui horizontal inverted small divided link list">
			<a class="item" href="#">Site Map</a>
			<a class="item" href="#">Contact Us</a>
			<a class="item" href="#">Terms and Conditions</a>
			<a class="item" href="#">Privacy Policy</a>
		</div>
	</div>
</div>