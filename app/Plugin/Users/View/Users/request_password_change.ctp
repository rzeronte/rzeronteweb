<div class="container">
    <div class="col-md-4">
    </div>

    <div class="col-md-4">
		<h2><?php echo 'Forgot your password?'; ?></h2>
		<p><?php echo 'Please enter the email you used for registration and you\'ll get an email with further instructions.'; ?></p>
		<?php
			echo $this->Form->create($model, array(
				'url' => array(
					'admin' => false,
					'action' => 'reset_password')));

			echo $this->Form->input('email', array(
				'label' => 'Your Email',
				'class'=> 'form-control input-sm'
			));
		?>
        <br/>
        <?= $this->Form->button(__('Send mail'), array('class' => 'btn btn-lg btn-primary btn-block')) ?>
        <br/>
		<?= $this->Form->end(); ?>
        <br/>
    </div>

    <div class="col-md-4">
    </div>
</div>
<?php //echo $this->element('Users.Users/sidebar'); ?>


<div class="users form">

</div>
<?php //echo $this->element('Users.Users/sidebar'); ?>