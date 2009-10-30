<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(sprintf(__('Edit %s', true), __('User', true)), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $html->link(sprintf(__('Delete %s', true), __('User', true)), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(sprintf(__('New %s', true), __('User', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(sprintf(__('List %s', true), __('Item Lists', true)), array('controller' => 'item_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(sprintf(__('New %s', true), __('Item List', true)), array('controller' => 'item_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Item Lists', true));?></h3>
	<?php if (!empty($user['ItemList'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['ItemList'] as $itemList):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $itemList['id'];?></td>
			<td><?php echo $itemList['user_id'];?></td>
			<td><?php echo $itemList['name'];?></td>
			<td><?php echo $itemList['created'];?></td>
			<td><?php echo $itemList['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'item_lists', 'action' => 'view', $itemList['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'item_lists', 'action' => 'edit', $itemList['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'item_lists', 'action' => 'delete', $itemList['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $itemList['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(sprintf(__('New %s', true), __('Item List', true)), array('controller' => 'item_lists', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
