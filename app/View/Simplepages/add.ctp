<div class="simplepages form">
<?php echo $this->Form->create('Simplepage'); ?>
	<fieldset>
		<legend><?php echo __('Add Simplepage'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('text');
		echo $this->Form->input('desc');
		echo $this->Form->input('active');
		echo $this->Form->input('simplepage_config_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Simplepages'), array('action' => 'index')); ?></li>
	</ul>
</div>
