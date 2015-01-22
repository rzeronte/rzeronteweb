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
			<h2><?php echo 'create your account...'; ?></h2>
				<?php
					echo $this->Form->create($model);
					echo $this->Form->input('username', array(
						'label' => 'Username',
						'class' => 'form-control'
						));
				?>
		          	<br/>
				<?php
					echo $this->Form->input('email', array(
						'label' => 'E-mail (used as login)',
						'class' => 'form-control',
						'error' => array('isValid' => __d('users', 'Must be a valid email address'),
						'isUnique' => __d('users', 'An account with that email already exists'))));
				?>
		          	<br/>
				<?php
					echo $this->Form->input('password', array(
						'label' => 'Password',
						'class' => 'form-control',
						'type' => 'password'));
				?>
		          	<br/>
				<?php
					echo $this->Form->input('temppassword', array(
						'label' => 'Password (confirm)',
						'class' => 'form-control',
						'type' => 'password',
						));

					$tosLink = $this->Html->link('Terms of Service', array('controller' => 'pages', 'action' => 'tos', 'plugin' => null));
				?>
					<div class="checkbox">
						<label>
						<?php echo $this->Form->input('tos', array('label' => 'I have read and agreed to ' . $tosLink)); ?>
						</label>
					</div>
				<?php echo $this->Form->button(__('create account'), array('class' => 'btn btn-lg btn-primary btn-block')); ?>
				<?php echo $this->Form->end(); ?>
				<br/>
				<br/>
		</div>
		<div class="col-md-4">
		</div>


	</div>

</div>
<?php //echo $this->element('Users.Users/sidebar'); ?>
