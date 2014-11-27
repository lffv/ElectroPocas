<div class="row">
	<div id="dashb-container" class="tabbable tabs-left span12 canvas-bg">
		<ul id="dashb-tabs" class="nav nav-tabs">
			<li><a href="<?php echo $this->base."/users/index/"; ?>"><i class="icon-user"></i> User Management</a></li>
			<li class="active"><a href="#lB" data-toggle="tab" rel="<?php echo $this->base."/groups/index/"; ?>" ><i class="icon-th-large"></i> Groups Management</a></li>								
			<li><a href="<?php echo $this->base."/acl_manager/acl/permissions/aro:Group"; ?>"><i class="icon-lock"></i> Permissions</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane" id="lA">
			</div>
			<div class="tab-pane active" id="lB">
				<div class='cleaner_h30'></div>											
				
				<div class="row">
						<div class="span10">
								<h2><?php echo __('Groups Management'); ?></h2>
								<div class="btn-toolbar">
									<div class="btn-group">
										<a href="<?php echo $this->base."/groups/add/"; ?>" class="btn btn-primary"><i class="icon-user icon-white"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
									</div>
								</div>	<hr>
								<table  class="table table-bordered table-hover" cellpadding="0" cellspacing="0">
								<tr>
										<th><?php echo $this->Paginator->sort('name'); ?></th>
										<th><?php echo $this->Paginator->sort('created'); ?></th>
										<th class="actions"></th>
								</tr>
								<?php
								foreach ($groups as $group): ?>
								<tr>
									<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
									<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
									<td class="actions">
										<div class="btn-group">
									  	<a id="tooltip" rel="tooltip" title="Edit Group" href="<?php echo $this->base."/groups/edit/".$group['Group']['id']."/"; ?>" class="btn btn-mini"><i class="icon-edit"></i></a>
										  	<a id="tooltip" rel="tooltip" title="Edit Permissions" href="<?php echo $this->base."/acl_manager/acl/gpermissions/aro:Group/gid:".$group['Group']['id']."/from:group_list/"; ?>" class="btn btn-mini"><i class="icon-lock"></i></a>
										  	<a id="tooltip" rel="tooltip" title="Delete Group" id="btDelete" data-toggle="modal" href="#" rel="<?php echo $this->base."/groups/delete/".$group['Group']['id']."/"; ?>" class="btn btn-mini"><i class="icon-trash"></i></a>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
								</table>
								<div class="pagination">
									<ul>
								<?php
									echo $this->Paginator->prev(__('Prev'), array('tag' => 'li'), null, array('class' => 'disabled','tag' => 'li'));
									echo $this->Paginator->numbers(array('separator' => '', 'tag'=>'li', 'currentClass'=> 'active'));
									echo $this->Paginator->next(__('Next'), array('tag'=>'li'), null, array('class' => 'next disabled','tag' => 'li'));
								?>
									</ul>
								</div>
					</div>
				</div>	
			</div>
			<div class="tab-pane" id="lC">
				<p>And this is Section C.</p>
			</div>
		</div>
	</div>
</div>

<div class="modal hide" id="DeleteModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>Delete Group</h3>
  </div>
  <div class="modal-body">
    <h4>Are you sure you want to delete this Group?</h4>
  </div>
  	<div class="modal-footer">
    	<a href="#" class="btn" data-dismiss="modal">Cancel</a>
    	<a href="#" id="deleteAction" class="btn btn-primary">Delete Group</a>
  	</div>
</div>