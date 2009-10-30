<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('User', true)); ?></legend>
	<?php
		echo $form->input('username');
		echo $form->input('password');
		echo $form->input('email');
	?>
	</fieldset>
<?php echo $form->end(__('Submit', true));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index'));?></li>
		<li><?php echo $html->link(sprintf(__('List %s', true), __('Item Lists', true)), array('controller' => 'item_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(sprintf(__('New %s', true), __('Item List', true)), array('controller' => 'item_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>