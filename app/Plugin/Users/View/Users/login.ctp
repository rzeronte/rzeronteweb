  <div class="container">
    <div class="col-md-4">
    </div>

    <div class="col-md-4">
		<?php echo $this->Form->create($model, array(
				'action' => 'login',
				'id' => 'LoginForm'));
        ?>
        <?php echo $this->Session->flash(); ?>
          <h2 class="title-small">login</h2>
          <br/>

            <?php
    			echo $this->Form->input('email', array(
				    'label' => 'Email',
                    'class'=> 'form-control input-sm'
				));
            ?>

          	<br/>

			<?php
			 echo $this->Form->input('password',  array(
				'label' => 'Password',
                'class'=> 'form-control input-sm','type'=>'password'
			));
			?>

          <div class="checkbox">
            <label>
      		  <?php echo $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  'Remember Me')); ?>
            </label>
          </div>

		<?php echo $this->Form->hidden('User.return_to', array('value' => $return_to)); ?>

          <?= $this->Form->button(__('sign in'), array('class' => 'btn btn-lg btn-primary btn-block')) ?>
          <?= $this->Form->end() ?>

        <br/>
		<?php echo '<p class="text-center">' . $this->Html->link('I forgot my password', array('action' => 'reset_password')) . '</p>'; ?>
    </div>

    <div class="col-md-4">
    </div>

  </div>


<?php //echo $this->element('Users.Users/sidebar'); ?>
