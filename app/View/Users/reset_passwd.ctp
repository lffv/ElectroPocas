<div class="row canvas-space">
	<div class="span6 offset3">
		<span class="shadow2"></span>	
		<h1 class="font_01 fsize_03 color_02 t_align">Reset Your Password</h1>
	</div>
</div>

<div class="row">
	<div class="span6 offset3">		
		<div class="f_login">
			<?php 
		    	echo $this->Form->create('User', array('action'=>'reset_passwd'));
				?>
			<div class="login">
				<?php echo $this->Session->flash('auth'); ?>
		  		<div class="l_label font_02 fsize_07 color_07">Email</div>
		    	<input name="data[User][email]" class="input-canvas" type="text" placeholder="Enter your email address" />
		    	<div class="l_space"></div>
		    	<div class="l_btns">
		    		<div class="fr" style="padding-top:20px;">
						<button type="submit" class="btn btn-canvas">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RESET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
			  		</div>
		    	</div>             
		 	</div>  
		 	</form>
		</div>
	</div>
</div>