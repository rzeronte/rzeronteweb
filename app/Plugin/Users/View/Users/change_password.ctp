<?php
/**
 * Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="users form section">
	<div class="container">

		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<h2><?php echo 'change password...'; ?></h2>
			<p><?php echo 'Please enter your old password because of security reasons and then your new password twice.'; ?></p>
				<?php
					echo $this->Form->create($model, array('action' => 'change_password'));
					echo $this->Form->input('old_password', array(
						'label' => 'Old Password',
						'class' => 'form-control',
						'type' => 'password'));
				?>

				<br/>

				<?php
					echo $this->Form->input('new_password', array(
						'label' => 'New Password',
						'class' => 'form-control',
						'type' => 'password'));
				?>

				<br/>

				<?php
					echo $this->Form->input('confirm_password', array(
						'label' => 'Confirm',
						'class' => 'form-control',
						'type' => 'password')
					);
				?>

				<br/>

				<?php echo $this->Form->button(__('create account'), array('class' => 'btn btn-lg btn-primary btn-block')); ?>

				<?php echo $this->Form->end(); ?>

				<br/>
		</div>

		<div class="col-md-4">
		</div>

	</div>

</div>