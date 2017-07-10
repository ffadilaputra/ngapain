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
				<div class="meta">
					<span class="cinema">IFC Cinema</span>
				</div>
				<div class="description">
					<p><?= $data->desc ?></p>
				</div>
				<div class="extra">
					<a class="ui right floated primary button">
						Readmore
						<i class="right chevron icon"></i>
					</a>
					<a href="<?= base_url('story/edit') ?>/<?= $data->id_story ?>" class="ui right floated primary button">
						Edit
						<i class="right chevron icon"></i>
					</a>
					<a href="<?= base_url('story/delete') ?>/<?= $data->id_story ?>" class="ui right floated primary button">
						Delete
						<i class="right chevron icon"></i>
					</a>
					<div class="ui label">Limited</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>