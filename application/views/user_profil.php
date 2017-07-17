<?php $this->load->view('partials/h-user'); ?>
<div class="ui container">
	<div class="ui middle">
		<div class="ui container">
			<div class="ui three column stackable grid">
				<div class="column"></div>
				<div class="column">
					<?php
					$attr = array('class' => 'ui form');
					echo form_open_multipart('user/profil',$attr);
					?>

					<input type="hidden" name="id" value="<?= $profil[0]->id ?>">

					<div class="field">
						<label>Username</label>
						<input type="text" name="username" placeholder="Username" value="<?= $profil[0]->username ?>" readonly="true">
					</div>
					<div class="field">
						<label>Password</label>
						<input type="password" name="password" placeholder="Password">
					</div>
					<div class="field">
						<label>Email</label>
						<input type="text" name="email" placeholder="Email" value="<?= $profil[0]->email ?>">
					</div>

					<div class="field">
						<label>Avatar</label>
						<input type="file" name="image">
					</div>

					<div class="field">
						<label>Bio</label>
						<textarea name="bio"><?= $profil[0]->bio ?></textarea>
					</div>
					<button class="ui button teal" type="submit">Submit</button>
					<?php echo validation_errors(); ?>
					<br>
					<?php echo form_close() ?>
				</div>
				<div class="column"></div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('partials/footer') ?>