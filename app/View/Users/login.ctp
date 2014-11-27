<div class="row-fluid login-wrapper">
    <div class="box">
        <div class="content-wrap">
            <?php echo $this->Session->flash('auth'); ?>
            <h6>Login</h6>
            <?php 
		    	echo $this->Form->create('User', array('action'=>'login'));
			?>
            <input name="data[User][email]" class="span12" type="text" placeholder="Endereço de Email">
            <input name="data[User][password]" class="span12" type="password" placeholder="Password">
            <div class="action">
                <button action="submit" class="btn-flat primary signup">&nbsp;&nbsp;Entrar&nbsp;&nbsp;</button>
            </div>  
            </form>              
        </div>
    </div>
</div>