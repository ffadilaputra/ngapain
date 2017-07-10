
<div class="ui container">
	<div class="ui middle">
		<div class="ui container">
			<div class="ui three column stackable grid">
				<div class="column"></div>
				<div class="column"></div>
				<div class="column">
					<?php if($this->session->flashdata('msg_success')): ?>
					<div class="ui success message">
						<i class="close icon"></i>
						<div class="header">
							Your user registration was successful.
						</div>
						<p>You may now log-in with the username you have chosen,login <a href="<?= base_url('auth') ?>"><strong>here</strong></a></p>
					</div>
					<?php endif; ?>
					<?php
					$attr = array('class' => 'ui form');
					echo form_open('auth/signup',$attr);
					?>
					<div class="field">
						<label>Username</label>
						<input type="text" name="username" placeholder="Username">
					</div>
					<div class="field">
						<label>Password</label>
						<input type="password" name="password" placeholder="Password">
					</div>
					<div class="field">
						<label>Email</label>
						<input type="text" name="email" placeholder="Email">
					</div>
					<button class="ui button teal" type="submit">Submit</button>
					<?php echo validation_errors(); ?>
					<br>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('partials/footer') ?>