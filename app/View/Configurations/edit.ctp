<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
	        <h3><?php echo __('Editar Configurações'); ?></h3>
	    </div>
	    <div class="row-fluid form-wrapper">
	        <!-- left column -->
	        <div class="span9 with-sidebar">
	        	<?php echo $this->Form->create('Configuration'); ?>
	        	<?php echo $this->Form->input('id'); ?>
		        <div class="container">
            		<div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('site_email', array('label'=>'Email Site:','placeholder'=>'Preenchimento Obrigatório.', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	              </div>
	              <div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('price_short_movie', array('label'=>'Preço Short Movie:','placeholder'=>'Preenchimento Obrigatório.', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	              </div>
	              <div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('price_full_movie', array('label'=>'Preço Full Length Movie:','placeholder'=>'Preenchimento Obrigatório.', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	              </div>
	          </div>
				
            <div class="container">
            	<div class="span11 field-box actions">
                      <input type="submit" class="btn-flat primary" value="<?php echo __('Guardar Configurações'); ?>">
                      <span>OU</span>
                      <input type="reset" value="<?php echo __('Cancelar'); ?>" class="reset">
                  </div>
            </div>
	          </form>
	        </div>
	        <!-- side right column -->
	        <div class="span3 form-sidebar pull-right">
	            <h6><?php echo __('Ajuda Editar Configurações'); ?></h6>
	            <p><strong>Email Site: </strong> Insira o email que o website deve usar para enviar e receber emails dos utilizadores.</p>
	            <p><strong>Preço Short Movie: </strong> Insira um Preço para o Short Movie.</p>
	            <p><strong>Preço Full Length Movie: </strong> Insira um Preço para o Full Length Movie.</p>
	        </div>
	    </div>
	</div>
</div>
