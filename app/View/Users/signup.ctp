<div class="row canvas-space">
	<div class="span6 offset3">
		<span class="shadow2"></span>	
		<h1 class="font_01 fsize_03 color_02 t_align">Sign up below to get started</h1>
	</div>
</div>

<div class="row">
	<div class="span6 offset3">		
		<div class="f_login">
			<?php 
		    	echo $this->Form->create('User', array('action'=>'signup'));
				?>
			<div class="login">
				<?php echo $this->Session->flash('auth'); ?>
				
				<?php
				echo $this->Form->input('first_name', array('class'=>'input-canvas', 'label'=>false, 'placeholder'=>'Enter your First Name','id'=>'inputFirstName', 'size'=>'60', 'div'=>false,'before'=>'<div class="l_label font_02 fsize_07 color_07">First Name</div>', 'after'=>'<div class="l_space"></div>','error' => array('attributes' => array('wrap' => 'span', 'class' => 'error'))));
				?>
				
				<?php
				echo $this->Form->input('last_name', array('class'=>'input-canvas', 'label'=>false, 'placeholder'=>'Enter your Last Name','id'=>'inputlastName', 'size'=>'60', 'div'=>false,'before'=>'<div class="l_label font_02 fsize_07 color_07">Last Name</div>', 'after'=>'<div class="l_space"></div>','error' => array('attributes' => array('wrap' => 'span', 'class' => 'error'))));
				?>
				
				<?php
				echo $this->Form->input('email', array('class'=>'input-canvas', 'label'=>false, 'placeholder'=>'Enter your email address','id'=>'inputEmail', 'size'=>'60', 'div'=>false,'before'=>'<div class="l_label font_02 fsize_07 color_07">Email</div>', 'after'=>'<div class="l_space"></div>','error' => array('attributes' => array('wrap' => 'span', 'class' => 'error'))));
				?>
				
				<?php
				echo $this->Form->input('password', array('class'=>'input-canvas', 'label'=>false, 'placeholder'=>'Enter your password','id'=>'inputPassword', 'size'=>'60', 'div'=>false,'before'=>'<div class="l_label font_02 fsize_07 color_07">Password</div>', 'after'=>'<div class="l_space"></div>','error' => array('attributes' => array('wrap' => 'span', 'class' => 'error'))));
				?>
		    	
				<?php
				echo $this->Form->input('confirm_password', array('type'=>'password', 'class'=>'input-canvas', 'label'=>false, 'placeholder'=>'Confirm your password','id'=>'inputConfirmPassword', 'size'=>'60', 'div'=>false,'before'=>'<div class="l_label font_02 fsize_07 color_07">Confirm Password</div>', 'after'=>'<div class="l_space"></div>','error' => array('attributes' => array('wrap' => 'span', 'class' => 'error'))));
				?>
				
				<div class="l_btns">
		      		<div class="fr" style="padding-top:20px;">
						<button type="submit" class="btn btn-canvas">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGN UP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
			  		</div>
		    	</div>             
		 	</div>  
		 	</form>
		</div>
	</div>
</div>