 <div class="ui container">
	<table id="list" class="ui celled table">
		<thead>
			<tr>
				<th>#</th>
				<th>USername</th>
				<th>Email</th>
				<th>Bio</th>
				<th>Image</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($list as $key): ?>
				<tr>
					<td><?= $key->id ?></td>
					<td><?= $key->username ?></td>
					<td><?= $key->email ?></td>
					<td><?= $key->bio ?></td>
					<td>
					<img width="50" src="<?= base_url('assets/uploads') ?>/<?= $key->avatar ?>">
					</td>
				</tr>
		<?php endforeach; ?>		
		</tbody>
	</table>
</div>

<?php $this->load->view('partials/footer'); ?>