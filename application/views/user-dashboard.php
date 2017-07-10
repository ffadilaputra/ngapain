<br><br>
<div class="ui main container">
	<div class="ui divided items">
	<?php foreach($list as $data): ?>
		<div class="item">
			<div class="image">
				<img src="<?= base_url('assets/img') ?>/image.png">
			</div>
			<div class="content">
				<a class="header"><?= $data->title ?></a>
				<div class="meta">
					<span class="cinema">IFC Cinema</span>
				</div>
				<div class="description">
					<p></p>
				</div>
				<div class="extra">
					<div class="ui right floated primary button">
						Buy tickets
						<i class="right chevron icon"></i>
					</div>
					<div class="ui label">Limited</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
</div>