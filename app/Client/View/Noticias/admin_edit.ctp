<style type="text/css">
	.new-user .actions {
		margin-top: 30px;
		text-align: right;
		list-style-type: none;
	}
</style>
<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
	        <h3><?php echo __('Editar Noticia'); ?></h3>
	        
	        <div class="span10 pull-right"> 

                <a href="<?php echo $this->base; ?>/admin/noticias/index/" class="btn-flat inverse pull-right" style="margin-right:10px;">
                    <span>< </span>VOLTAR À LISTA DE NOTICIAS
                </a>
            </div>


	    </div>
	    <div class="row-fluid form-wrapper">
	        <!-- left column -->
	        <div class="span12 with-sidebar">
	        	<?php echo $this->Form->create('Noticia', array('class'=>'new_user_form inline-input', 'novalidate', 'type' => 'file')); ?>
	        	<?php echo $this->Form->input('id'); ?>
				<div class="tabbable"> <!-- Only required for left/right tabs -->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Geral</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
							<div class="container">
								
								<?php 
			                    	echo $this->Form->input('id', array('type' => 'hidden'));
			                    	//debug($this->data['Image']);
					            ?>
					            <span class="btn-flat inverse pull-right">
								Upload Novas Fotos
								<?php
			                    //	echo $this->Form->input('Image', array('type' => 'file'));
			                    	echo $this->Form->input('Image.Image.', array('type' => 'file', 'multiple'));
			                    ?>
			                    </span>
					            

					            <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('titulo', array('label'=>'Titulo da Noticia:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('texto', array('label'=>'Texto da Noticia:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="field-box">
			                        <?php				
									echo $this->Form->input('activo', array('class'=>'bs-switch','label'=>false, 'div'=>false,'before'=>'<label>Activo:</label><label class="checkbox"><div class="checker"><span>', 'after'=>'</span></div></label>', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
								?>
								

			                    </div>
			                    <div class="span12 field-box">
				                <?php 
					            	echo $this->Form->input('data', array('label'=>'Data', 'class'=>'span9 datepicker', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <?php foreach ($this->data['Image'] as $key => $value):?>
				                	<div class="span12 field-box">
										<img class="span6" src="<?php echo $this->base; ?>/uploads/<?php echo $this->data['Image'][$key]['name']; ?>">
										
							            <ul class="actions">
							            
				                            <a class=" treatmentDelete btn-flat inverse pull-right" href="<?php echo $this->base; ?>/admin/noticias/deleteImg/<?php echo $this->data['Image'][$key]['id']; ?>/<?php echo $this->data['Noticia']['id']; ?>">Apagar Imagem</a>
				                        
				                        </ul>
							            
					                </div>
				                <?php endforeach;?>
				            </div>
						</div>
					</div>
				</div>
				<div class="span11 field-box actions">
                    <input type="submit" class="btn-flat primary" value="<?php echo __('Guardar Noticia'); ?>">
                    <!--<span>OU</span>
                    <input type="reset" value="<?php echo __('Cancelar'); ?>" class="reset">-->
                </div>
	            </form>
	        </div>
	    </div>
	</div>
</div>
<div id="treatmentDeleteModal" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3><?php echo __("Apagar Imagem"); ?></h3>
  </div>
  <div class="modal-body">
    <p class="btn-warning inverse" ><?php echo __("Está prestes a pagar esta imagem e essa operação é irreversível e ANULA qualquer alteração efectuada."); ?></p>
    <p><strong><?php echo __("De certeza que pretende apagar o Imagem?"); ?></strong></p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn-flat gray" data-dismiss="modal" >Fechar</a>
    <a href="#" class="btn-flat default" id="deleteBtn">Apagar Imagem</a>
  </div>
</div>

<script type="text/javascript">
	$(function() {
		$( ".datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' });
		$(".bs-switch").bootstrapSwitch({
			onColor:'success',
			offColor:'warning',
			onText:'TRUE',
			offText:'FALSE'
		});

	});
</script>