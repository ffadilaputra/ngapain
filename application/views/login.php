<?php $this->load->view('partials/header') ?>
<div class="ui container">
	<div class="ui middle">
		<div class="ui container">
			<div class="ui three column stackable grid">
				<div class="column"></div>
				<div class="column">
					<?php
					$attr = array('class' => 'ui form');
					echo form_open('auth/sign',$attr);
					?>
					<div class="field">
						<label>Username</label>
						<input type="text" name="username" placeholder="Fullname">
					</div>
					<div class="field">
						<label>Password</label>
						<input type="password" name="password" placeholder="Email">
					</div>
					
					<button class="ui button primary" type="submit">Submit</button>
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