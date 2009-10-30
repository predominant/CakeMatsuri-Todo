<div class="items form">
<?php echo $form->create('Item');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Item', true)); ?></legend>
	<?php
		echo $form->input('item_list_id');
		echo $form->input('name');
		echo $form->input('completed');
	?>
	</fieldset>
<?php echo $form->end(__('Submit', true));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(sprintf(__('List %s', true), __('Items', true)), array('action' => 'index'));?></li>
		<li><?php echo $html->link(sprintf(__('List %s', true), __('Item Lists', true)), array('controller' => 'item_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(sprintf(__('New %s', true), __('Item List', true)), array('controller' => 'item_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>