<?php $session->flash('auth'); ?>
<div class="users form">
<?php echo $form->create('User', array('url' => array('controller' => 'users', 'action' => 'login'
)));?>
	<fieldset>
 		<legend><?php printf(__('Login %s', true), __('User', true)); ?></legend>
	<?php
		echo $form->input('username');
		echo $form->input('password');
	?>
	</fieldset>
<?php echo $form->end(__('Submit', true));?>
</div>
