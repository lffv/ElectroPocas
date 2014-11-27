<div class="row">
	<div id="dashb-container" class="tabbable tabs-left span12 canvas-bg">
		<ul id="dashb-tabs" class="nav nav-tabs">
			<li class="active"><a href="#lA" data-toggle="tab"><i class="icon-user"></i> User Management</a></li>
			<li><a href="#lB" data-toggle="tab" rel="<?php echo $this->base."/groups/index/"; ?>" ><i class="icon-th-large"></i> Groups Management</a></li>								
			<li><a href="#lC" data-toggle="tab" rel="<?php echo $this->base."/groups/index/"; ?>" ><i class="icon-lock"></i> Permissions</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="lA">
				<div class='cleaner_h30'></div>											
				
				<div class="row">
						<div class="span10">
								<h2><?php echo __('Users'); ?></h2>
								<div class="btn-toolbar">
									<div class="btn-group">
										<a href="<?php echo $this->base."/users/add/"; ?>" class="btn btn-primary"><i class="icon-user icon-white"></i> New User</a>
									</div>
								</div>	<hr>
								<table  class="table table-bordered table-hover" cellpadding="0" cellspacing="0">
									<tr>
										<th><?php echo $this->Paginator->sort('name'); ?></th>
										<th><?php echo $this->Paginator->sort('group_name'); ?></th>
										<th><?php echo $this->Paginator->sort('active'); ?></th>
										<th class="actions"></th>
									</tr>
									<?php
									foreach ($users as $user): ?>
									<tr>
										<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
										<td><?php echo h($user['Group']['name']); ?>&nbsp;</td>
										<td><?php 
										echo $user['User']['active'] ? "<span class=\"label label-success\">Active</span>" : "<span class=\"label label-important\">Not Active</span>";
										?>&nbsp;
									</td>
									<td class="actions">
										<div class="btn-group">
											<a id="tooltip" rel="tooltip" title="Edit User" href="<?php echo $this->base."/users/edit/".$user['User']['id']."/"; ?>" class="btn btn-mini"><i class="icon-edit"></i></a>
											<a id="tooltip" rel="tooltip" title="Delete User" id="btDelete" data-toggle="modal" href="#" rel="<?php echo $this->base."/users/delete/".$user['User']['id']."/"; ?>" class="btn btn-mini"><i class="icon-trash"></i></a>
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
			<div class="tab-pane" id="lB">											
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
		<h3>Delete User</h3>
	</div>
	<div class="modal-body">
		<h4>Are you sure you want to delete this User?</h4>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Cancel</a>
		<a href="#" id="deleteAction" class="btn btn-primary">Delete User</a>
	</div>
</div>