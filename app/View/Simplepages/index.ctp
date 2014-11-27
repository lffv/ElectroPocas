<?php
	$this->Html->script(array('libs/bootstrap/list'), array('inline' => false));		
?>
<div class="row">
	<div id="dashb-container" class="tabbable tabs-left span12 canvas-bg">
		<ul id="dashb-tabs" class="nav nav-tabs">
			<li><a href="#" data-toggle="tab"><i class="icon-user"></i> Site Configuration</a></li>
			<li class="active"><a href="#"><i class="icon-th-large"></i> Metatags</a></li>								
			<li><a href="#" data-toggle="tab"><i class="icon-user"></i> Offline</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="lA">
				<div class='cleaner_h30'></div>		
				<div class="row">
						<div class="span3 canvas-bg">
							<h2><?php echo __(' Simple Pages'); ?></h2>
							<hr>
							<form>
							  <fieldset>
							    <input type="text" placeholder="Search...">
							  </fieldset>
							</form>
							<div class="list" id="myList" >
						    <ul>
						        <li>item 0</li> 
						        <li>item 1</li> 
						        <li>item 2</li> 
						        <li>item 3</li> 
						        <li>item 4</li> 
						        <li>item 5</li> 
						        <li>item 6</li> 
						        <li>item 7</li> 
						        <li>item 8</li> 
						        <li>item 9</li>
						        <li>item 0</li> 
						        <li>item 1</li> 
						        <li>item 2</li> 
						        <li>item 3</li> 
						        <li>item 4</li> 
						        <li>item 5</li> 
						        <li>item 6</li> 
						        <li>item 7</li> 
						        <li>item 8</li> 
						        <li>item 9</li> 
						    </ul>
						</div>	
						</div>
						<div class="span7">
								<h2><?php echo __(' New Simple Page'); ?></h2>
								<hr>
								<?php echo $this->Form->create('Metatag'); ?>
									<fieldset>
										<?php echo $this->Form->input('id'); ?>
										<div class="control-group"><?php 
											echo $this->Form->input('title', array('label'=>'<label class="control-label" for="inputEmail"><strong>Title</strong></label>', 'placeholder'=>'Title','id'=>'inputTitle','cols'=>'84', 'rows'=>'4',  'div'=>false,'before'=>'<div class="controls">', 'after'=>'</div>','error' => array('attributes' => array('wrap' => 'span', 'class' => 'error'))));
										?>
										</div><div class="control-group">	<?php
											echo $this->Form->input('description', array('label'=>'<label class="control-label" for="inputPassword"><strong>description</strong></label>', 'placeholder'=>'Description','id'=>'inputDescription', 'cols'=>'100', 'rows'=>'8',  'div'=>false,'before'=>'<div class="controls">', 'after'=>'</div>', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'error'))));
											?>
											</div><div class="control-group">	<?php				
											echo $this->Form->input('keywords', array('label'=>'<label class="control-label" for="inputFirstName"><strong>Keywords</strong></label>', 'placeholder'=>'Keywords','id'=>'inputKeywords','cols'=>'100', 'rows'=>'8',  'div'=>false,'before'=>'<div class="controls">', 'after'=>'</div>', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'error'))));
											?>
											</div>
									</fieldset><hr>
								<button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Save Metatags&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-chevron-right icon-white"></i></button>
								</form>
								
						</div>
				</div>	
			</div>
			<div class="tab-pane" id="lB">											
			</div>
		</div>
	</div>
</div>


<div class="simplepages index">
	<h2><?php echo __('Simplepages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('text'); ?></th>
			<th><?php echo $this->Paginator->sort('desc'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('simplepage_config_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($simplepages as $simplepage): ?>
	<tr>
		<td><?php echo h($simplepage['Simplepage']['id']); ?>&nbsp;</td>
		<td><?php echo h($simplepage['Simplepage']['title']); ?>&nbsp;</td>
		<td><?php echo h($simplepage['Simplepage']['text']); ?>&nbsp;</td>
		<td><?php echo h($simplepage['Simplepage']['desc']); ?>&nbsp;</td>
		<td><?php echo h($simplepage['Simplepage']['active']); ?>&nbsp;</td>
		<td><?php echo h($simplepage['Simplepage']['simplepage_config_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $simplepage['Simplepage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $simplepage['Simplepage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $simplepage['Simplepage']['id']), null, __('Are you sure you want to delete # %s?', $simplepage['Simplepage']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Simplepage'), array('action' => 'add')); ?></li>
	</ul>
</div>
