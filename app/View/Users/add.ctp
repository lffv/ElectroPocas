<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
	        <h3><?php echo __('Criar um Novo Utilizador'); ?></h3>
	    </div>
	    <div class="row-fluid form-wrapper">
	        <!-- left column -->
	        <div class="span9 with-sidebar">
	            <div class="container">
	            	<?php echo $this->Form->create('User', array('class'=>'new_user_form inline-input', 'novalidate')); ?>
	            		<div class="span12 field-box">
	                    <?php 
			            	echo $this->Form->input('first_name', array('label'=>'Primeiro Nome:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
			            ?>
		                </div>
		                <div class="span12 field-box">
	                    <?php 
			            	echo $this->Form->input('last_name', array('label'=>'Último Nome:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
			            ?>
		                </div>
			            <div class="span12 field-box">
	                    <?php 
			            	echo $this->Form->input('email', array('label'=>'Email:','type'=>'text', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
			            ?>
		                </div>
			            <div class="span12 field-box">
	                    <?php 
			            	echo $this->Form->input('password', array('label'=>'Password:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
			            ?>
		                </div>
		                
			            <div class="span12 field-box">
	                    <?php 
			            	echo $this->Form->input('confirm_password', array('label'=>'Confirmar Password:','type'=>'password', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
			            ?>
		                </div>

		                <div class="field-box">
                            <?php				
							echo $this->Form->input('active', array('label'=>false, 'div'=>false,'before'=>'<label>Activo:</label><label class="checkbox"><div class="checker"><span>', 'after'=>'</span></div></label>', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						?>
                        </div>
                        
		                <input type="hidden" name="data[User][group_id]" value="15" />
		                <div class="span11 field-box actions">
	                        <input type="submit" class="btn-flat primary" value="<?php echo __('Criar utilizador'); ?>">
	                        <span>OR</span>
	                        <input type="reset" value="<?php echo __('Cancelar'); ?>" class="reset">
	                    </div>
	                </form>
	            </div>
	        </div>

	        <!-- side right column -->
	        <div class="span3 form-sidebar pull-right">
	            <h6><?php echo __('Ajuda Novo Utilizador'); ?></h6>
	            <p>Crie um novo utilizador para permitir a outra pessoa acesso ao Canvas Web Manager.</p>
	            <p>O utilizador que criar terá acesso total e poderá inserir, editar e apagar conteúdos.</p>
	        </div>
	    </div>
	</div>
</div>