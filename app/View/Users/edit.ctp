<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
	        <h3><?php echo __('Editar Utilizador'); ?></h3>
	        <div class="span10 pull-right">
                <a href="<?php echo $this->base; ?>/users/add/" class="btn-flat success pull-right">
                    <span>+</span>
                    NOVO UTILIZADOR
                </a>
            </div>
	    </div>
	    <div class="row-fluid form-wrapper">
	        <!-- left column -->
	        <div class="span9 with-sidebar">
	            <div class="container">
	            	<?php echo $this->Form->create('User', array('class'=>'new_user_form inline-input','novalidate')); ?>
	            		<?php echo $this->Form->input('id'); ?>
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
			            
		                <div class="field-box">
                            <?php				
							echo $this->Form->input('active', array('label'=>false, 'div'=>false,'before'=>'<label>Activo:</label><label class="checkbox"><div class="checker"><span>', 'after'=>'</span></div></label>', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						?>
                        </div>
                        
		                <input type="hidden" name="data[User][group_id]" value="15" />
		                <div class="span11 field-box actions">
	                        <input type="submit" class="btn-flat primary" value="<?php echo __('Guardar Utilizador'); ?>">
	                        <span>OR</span>
	                        <input type="reset" value="<?php echo __('Cancelar'); ?>" class="reset">
	                    </div>
	                </form>
	            </div>
	        </div>

	        <!-- side right column -->
	        <div class="span3 form-sidebar pull-right">
	            <h6><?php echo __('Ajuda Editar Utilizador'); ?></h6>
	            <p>Utilize o formulário da esquerda para modificar os dados do Utilizador.</p>
	            <p>Para alterar a password, preencha o campo <i>password</i> com a nova password e de seguida clique em <i>Guardar Utilizador</i>.</p>
	        </div>
	    </div>
	</div>
</div>