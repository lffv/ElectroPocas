<?php
$this->Html->css('libs/jquery-ui-1.8.16.custom', null, array('inline' => false));
$this->Html->css('elfinder/css/elfinder.min', null, array('inline' => false));
$this->Html->css('elfinder/css/theme', null, array('inline' => false));

$this->Html->script('libs/jquery-ui-1.8.18.min', array('inline' => false));
$this->Html->script('libs/elfinder/elfinder.min', array('inline' => false));
?>
<div class="row">
		<div id="dashb-container" class="tabbable tabs-left span12 canvas-bg">
							<ul id="dashb-tabs" class="nav nav-tabs">
		          	<li class="active"><a href="#lA" data-toggle="tab"><i class="icon-home"></i> Media Manager &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
		          	<li><a href="#lB" data-toggle="tab"><i class="icon-hdd"></i> Profiles </a></li>
		          	<li><a href="#lC" data-toggle="tab"><i class="icon-leaf"></i> Apps</a></li>
		        	</ul>
		        <div class="tab-content">
		          <div class="tab-pane active" id="lA">
									<div class='cleaner_h30'></div>											
									<div class="row">
										<div class="span10">
										<h1>Media Manager</h1><hr>
										</div>
									</div>
									<div class="row">
										<div class="span10">
											<div id="elfinder"></div>
										</div>
									</div>
								<div class="row">&nbsp;</div>

									<div class="row">
										<div class="offset1 span2">
											<a href="#" class="thumbnail">
												<img src="/img/fashion.jpeg" />
											</a>
											<h3 style="text-align:center;"> Analytics</h3>
									  </div>
									  <div class="offset1 span2">
											<a href="#" class="thumbnail">
												<img src="/img/fashion2.jpeg" />
											</a>
											<h3 style="text-align:center;"> Profile</h3>
									  </div>
									  <div class="offset1 span2">
											<a href="#" class="thumbnail">
												<img src="/img/nightlife.jpeg" alt=""/>
											</a>
											<h3  style="text-align:center;"> Apps</h3>
									   </div>
									</div>
								<div class="row">&nbsp;</div>
		          </div>
		          <div class="tab-pane" id="lB">											
	          </div>
		          <div class="tab-pane" id="lC">
		            <p>And this is Section C.</p>
		          </div>
		        </div>
		</div>
</div>