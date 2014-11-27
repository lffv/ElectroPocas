<div class="row">
	<div id="dashb-container" class="tabbable tabs-left span12 canvas-bg">
		<ul id="dashb-tabs" class="nav nav-tabs">
			<li><a href="<?php echo $this->base."/users/index/"; ?>"><i class="icon-user"></i> User Management</a></li>
			<li class="active"><a href="#lB" data-toggle="tab" rel="<?php echo $this->base."/groups/index/"; ?>" ><i class="icon-th-large"></i> Groups Management</a></li>								
			<li><a href="<?php echo $this->base."/acl_manager/acl/permissions/aro:Group"; ?>"><i class="icon-lock"></i> Permissions</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="lA">
				<div class='cleaner_h30'></div>											
				<div class="row">
						<div class="span10">
								<h2><?php echo __(' Edit Group'); ?></h2>
								<div class="btn-toolbar">
									<div class="btn-group">
								  	<a href="<?php echo $this->base."/groups/index/"; ?>" class="btn btn-inverse"><i class="icon-arrow-left icon-white"></i> Back to Group List</a>
									</div>
									<div class="btn-group">
										<a id="btDelete" data-toggle="modal" href="#" rel="<?php echo $this->base."/groups/delete/".$this->request->data['Group']['id']."/"; ?>" class="btn"><i class="icon-trash"></i> Delete Group</a>
										<a href="<?php echo $this->base."/acl_manager/acl/gpermissions/aro:Group/gid:".$this->request->data['Group']['id']."/"; ?>" class="btn"><i class="icon-th-large"></i> Set Permissions</a>
									</div>
								</div><hr>
								<?php echo $this->Form->create('Group'); ?>
									<fieldset>
									<?php echo $this->Form->input('id'); ?>
									<div class="control-group"><?php 
										echo $this->Form->input('name', array('label'=>'<label class="control-label" for="inputName"><strong>Name</strong></label>', 'placeholder'=>'Name','id'=>'inputName', 'size'=>'60', 'div'=>false,'before'=>'<div class="controls">', 'after'=>'</div>', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'error'))));
									?>
									</fieldset><hr>
								<button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Save Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-chevron-right icon-white"></i></button>
								</form>
								
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
    <h4>Are you sure you want to delete this Group?</h4>
  </div>
  	<div class="modal-footer">
    	<a href="#" class="btn" data-dismiss="modal">Cancel</a>
    	<a id="deleteAction" href="#" class="btn btn-primary">Delete Group</a>
  	</div>
</div>
