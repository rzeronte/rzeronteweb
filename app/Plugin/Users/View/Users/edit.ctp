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
			<h2><?php echo 'modify your account...'; ?></h2>

			<?php
				echo $this->Form->create($model);

				echo $this->Form->input('id');

				echo $this->Form->input('username', array(
					'label' => __d('users', 'Username'),
					'class' => 'form-control'
				));
			?>

			<br/>

			<?php
				echo $this->Form->input('email', array(
					'label' => __d('users', 'Email'),
					'class' => 'form-control'
				));
			?>

			<br/>

			<?php
				if (!empty($roles)) {
					echo $this->Form->input('role', array(
						'label' => __d('users', 'Role'),
						'class' => 'form-control',
						 'values' => $roles)
					);
				}
			?>

			<br/>

			<?php
				echo $this->Form->input('is_admin', array(
						'label' => __d('users', 'Is Admin'),
						'class' => 'form-control'
				));
			?>

			<?php
				echo $this->Form->input('active', array(
						'label' => __d('users', 'Active'),
						'class' => 'form-control'
				));
			?>

		        <br/>

				<?php echo $this->Form->button(__('modify account'), array('class' => 'btn btn-lg btn-primary btn-block')); ?>
				<?php echo $this->Form->end(); ?>

				<br/>
				<br/>
		</div>
		<div class="col-md-4">
		</div>

	</div>

</div>
<?php //echo $this->element('Users.Users/sidebar'); ?>
