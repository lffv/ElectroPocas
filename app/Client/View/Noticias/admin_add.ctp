<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
	        <h3><?php echo __('Adicionar Noticia'); ?></h3>
	        
	        <div class="span10 pull-right"> 
                <a href="<?php echo $this->base; ?>/admin/noticias/index" class="btn-flat inverse pull-right" style="margin-right:10px;">
                    <span> </span>VOLTAR À LISTA DE NOTICIAS
                </a>
            </div>


	    </div>
	    <div class="row-fluid form-wrapper">
	        <!-- left column -->
	        <div class="span9 with-sidebar">
	        	<?php echo $this->Form->create('Noticia', array('class'=>'new_user_form inline-input', 'novalidate', 'type' => 'file')); ?>
				<div class="tabbable"> <!-- Only required for left/right tabs -->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Geral</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
							<div class="container">
			            		
			            		
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('titulo', array('label'=>'Titulo:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('texto', array('label'=>'Texto', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('hashtag', array('label'=>'HashTag', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
				                <?php 
					            	echo $this->Form->input('data', array('label'=>'Data', 'class'=>'span9 datepicker', 'type'=>'text', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
								<?php				
									echo $this->Form->input('activo', array('class'=>'bs-switch','label'=>false, 'div'=>false,'before'=>'<label>Activo:</label><label class="checkbox"><div class="checker"><span>', 'after'=>'</span></div></label>', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
								?>
								</div>
				                <div class="span12 field-box">
								<?php
			                   		echo $this->Form->input('Image.Image.', array('label'=>'Imagem Grande','class'=>'btn-flat inverse pull-left','type' => 'file'));
					            ?>
					            
			                    </div>
				                <div class="span12 field-box">
				                    <?php
				                   		echo $this->Form->input('imagem_thumb', array('label'=>'Imagem Thumb','class'=>'btn-flat inverse pull-left','type' => 'file'));
						            ?>
					            </div>
				                <div class="span12 field-box">
						            <?php
				                   		echo $this->Form->input('imagem_mini', array('label'=>'Imagem Mini','class'=>'btn-flat inverse pull-left','type' => 'file' ));
						            ?>
					            </div>
				            </div>
						</div>
					</div>
				</div>
				<div class="span11 field-box actions">
                    <input type="submit" class="btn-flat primary" value="<?php echo __('Guardar Noticia'); ?>">
                    <span>OU</span>
                    <?php echo $this->Form->button('Limpar tudo', array('type' => 'reset', 'class' => 'btn-warning btn-flat-warning primary')); ?>

                    <!--<input type="reset" value="<?php echo __('Cancelar'); ?>" class="reset">-->
                </div>
	            </form>
	        </div>
	    </div>
	</div>
</div>

<script type="text/javascript">
	$(function() {
		//$.datepicker.setDefaults({ dateFormat: 'yy-mm-dd' });
		$( ".datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });
		$(".bs-switch").bootstrapSwitch({
			onColor:'success',
			offColor:'warning',
			onText:'TRUE',
			offText:'FALSE'
		});

	});
</script>
