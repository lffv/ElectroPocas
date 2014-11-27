<div class="row canvas-space">
	<div class="span6 offset3">
		<span class="shadow2"></span>	
		<h1 class="font_01 fsize_03 color_02 t_align">Redefine Your Password</h1>
	</div>
</div>

<div class="row">
	<div class="span6 offset3">		
		<div class="f_login">
			<?php 
		    	echo $this->Form->create('User', array('action'=>'redefine_password'));
			?>
			<?php if(isset($user_id)): ?>
				<input type="hidden" name="data[User][id]" id="UserId" value="<?php echo $user_id; ?>" />
			<?php endif; ?>
			<div class="login">
				<?php echo $this->Session->flash('auth'); ?>
		    	<div class="l_label font_02 fsize_07 color_07">Password</div>
		    	<input name="data[User][password]" class="input-canvas" type="password" placeholder="Enter your password" />
		    	<div class="l_space"></div>

		    	<div class="l_label font_02 fsize_07 color_07">Retype Password</div>
		    	<input name="data[User][retype_password]" class="input-canvas" type="password" placeholder="Retype your password" />
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