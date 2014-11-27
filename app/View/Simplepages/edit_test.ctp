<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
	        <h3><?php $title = 'Editar Página '.$title_page; echo __($title); ?></h3>
	    </div>
	    <div class="row-fluid form-wrapper">
	        <!-- left column -->
	        <div class="span9 with-sidebar">
	        	<?php echo $this->Form->create('Simplepage', array('type' => 'file', 'class'=>'new_user_form inline-input', 'novalidate')); ?>
	        	<?php echo $this->Form->input('id'); ?>
		        <div class="container">
            		<div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('title', array('label'=>'Título:','placeholder'=>'Preenchimento Obrigatório.', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	                </div>
            		
            		<div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('lead', array('label'=>'Lead:','placeholder'=>'Preenchimento Obrigatório.', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	                </div>
            		
                <div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('active', array('label'=>'Activo:', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	                </div>
	            </div>
				
	            <div class="container">
	            	<div class="span11 field-box actions">
                        <input type="submit" class="btn-flat primary" value="<?php echo __('Guardar Página'); ?>">
                        <span>OU</span>
                        <input type="reset" value="<?php echo __('Cancelar'); ?>" class="reset">
                    </div>
	            </div>
	            </form>
	        </div>
	        <!-- side right column -->
	        <div class="span3 form-sidebar pull-right">
	            <h6><?php echo __('Ajuda Editar Conteúdos'); ?></h6>
	            <p>Caso ocorra algum erro a gravar os Conteúdos, verifique que preencheu todos os <strong>Campos Obrigatórios</strong>.</p>
	        </div>
	    </div>
	</div>
</div>
