<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('User', true)); ?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('username');
		echo $form->input('password');
		echo $form->input('email');
	?>
	</fieldset>
<?php echo $form->end(__('Submit', true));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('User.id'))); ?></li>
		<li><?php echo $html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index'));?></li>
		<li><?php echo $html->link(sprintf(__('List %s', true), __('Item Lists', true)), array('controller' => 'item_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(sprintf(__('New %s', true), __('Item List', true)), array('controller' => 'item_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>