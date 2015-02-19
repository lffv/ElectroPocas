<div class="subTreatments view">
<h2><?php  echo __('Sub Treatment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subTreatment['SubTreatment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumb'); ?></dt>
		<dd>
			<?php echo h($subTreatment['SubTreatment']['thumb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Banner'); ?></dt>
		<dd>
			<?php echo h($subTreatment['SubTreatment']['banner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slogan'); ?></dt>
		<dd>
			<?php echo h($subTreatment['SubTreatment']['slogan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($subTreatment['SubTreatment']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resumo'); ?></dt>
		<dd>
			<?php echo h($subTreatment['SubTreatment']['resumo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($subTreatment['SubTreatment']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Video Url'); ?></dt>
		<dd>
			<?php echo h($subTreatment['SubTreatment']['video_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Video Thumb'); ?></dt>
		<dd>
			<?php echo h($subTreatment['SubTreatment']['video_thumb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metatag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subTreatment['Metatag']['title'], array('controller' => 'metatags', 'action' => 'view', $subTreatment['Metatag']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($subTreatment['SubTreatment']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Treatment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subTreatment['Treatment']['title'], array('controller' => 'treatments', 'action' => 'view', $subTreatment['Treatment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Testimonial'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subTreatment['Testimonial']['name'], array('controller' => 'testimonials', 'action' => 'view', $subTreatment['Testimonial']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sub Treatment'), array('action' => 'edit', $subTreatment['SubTreatment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sub Treatment'), array('action' => 'delete', $subTreatment['SubTreatment']['id']), null, __('Are you sure you want to delete # %s?', $subTreatment['SubTreatment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Treatments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Treatment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metatags'), array('controller' => 'metatags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metatag'), array('controller' => 'metatags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Treatments'), array('controller' => 'treatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Treatment'), array('controller' => 'treatments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Testimonials'), array('controller' => 'testimonials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Testimonial'), array('controller' => 'testimonials', 'action' => 'add')); ?> </li>
	</ul>
</div>
