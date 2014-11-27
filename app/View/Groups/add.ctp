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
								<h2><?php echo __(' Add Group'); ?></h2>
								<div class="btn-toolbar">
									<div class="btn-group">
								  	<a href="<?php echo $this->base."/groups/index/"; ?>" class="btn btn-inverse"><i class="icon-arrow-left icon-white"></i> Back to Group List</a>
									</div>
									<div class="btn-group">
								  	<a href="<?php echo $this->base."/users/index/"; ?>" class="btn"><i class="icon-user"></i> List Users</a>
									  	<a href="<?php echo $this->base."/users/add/"; ?>" class="btn"><i class="icon-plus-sign"></i> New User</a>
									</div>
								</div>
								<hr>
								<?php echo $this->Form->create('Group'); ?>
									<fieldset>
									<div class="control-group"><?php 
										echo $this->Form->input('name', array('label'=>'<label class="control-label" for="inputName"><strong>Name</strong></label>', 'placeholder'=>'Name','id'=>'inputName', 'size'=>'60', 'div'=>false,'before'=>'<div class="controls">', 'after'=>'</div>', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'error'))));
									?>
									</fieldset><hr>
								<button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-chevron-right icon-white"></i></button>
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