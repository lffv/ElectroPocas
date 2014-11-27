<div class="simplepages view">
<h2><?php  echo __('Simplepage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($simplepage['Simplepage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($simplepage['Simplepage']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($simplepage['Simplepage']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($simplepage['Simplepage']['desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($simplepage['Simplepage']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Simplepage Config Id'); ?></dt>
		<dd>
			<?php echo h($simplepage['Simplepage']['simplepage_config_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Simplepage'), array('action' => 'edit', $simplepage['Simplepage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Simplepage'), array('action' => 'delete', $simplepage['Simplepage']['id']), null, __('Are you sure you want to delete # %s?', $simplepage['Simplepage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Simplepages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Simplepage'), array('action' => 'add')); ?> </li>
	</ul>
</div>
