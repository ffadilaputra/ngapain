<?php $this->load->view('partials/h-user') ?>
<div class="ui container">
	<table id="list" class="ui celled table">
		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Date</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($list as $key): ?>
				<tr>
					<td><?= $key->id_story ?></td>
					<td><?= $key->title ?></td>
					<td><?= $key->date ?></td>
					<td><a class="ui button teal" href="<?= base_url('story/read') ?>/<?= $key->id_story ?>">DETAILS</a></td>
				</tr>
		<?php endforeach; ?>		
		</tbody>
	</table>
</div>
<?php $this->load->view('partials/footer') ?>

