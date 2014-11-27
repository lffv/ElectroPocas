<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
	        <h3><?php echo __('Editar Galeria'); ?></h3>
	    </div>
	    <div class="row-fluid form-wrapper">
	        <!-- left column -->
	        <div class="span9 with-sidebar">
	        	<?php echo $this->Form->create('Gallery', array('type' => 'file', 'class'=>'new_user_form inline-input', 'novalidate')); ?>
	        	<?php echo $this->Form->input('id'); ?>
		        <div class="container">
            		<div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('title', array('label'=>'T’tulo:','placeholder'=>'Preenchimento Obrigat—rio.', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	                </div>
            		<div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('sub_title', array('label'=>'Sub-T’tulo:','placeholder'=>'Preenchimento Obrigat—rio.', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	                </div>
            		<div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('lead', array('label'=>'Lead:','placeholder'=>'Preenchimento Obrigat—rio.', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	                </div>
            		<div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('video_url', array('label'=>'Url V’deo:','placeholder'=>'', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	                </div>
            		<div class="span12 field-box">
	                    <div class="input text">
	                    	<label for="NewsImage">Banner:</label>
	                    	<?php if($this->data['Simplepage']['video_thumb'] == ""): ?>
	                    	<div class="fileupload fileupload-new" data-provides="fileupload">
							  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
							  	<img src="<?php echo $this->base."/img/sem_imagem.gif"; ?>" />
							  </div>
							  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
							  </div>
							  <div>
							  	<label for="NewsImage"></label>
							    <span class="btn btn-file">
							    	<span class="fileupload-new">Selecionar imagem</span>
							    	<span class="fileupload-exists">Alterar</span>
							   		<input type="file" name="data[Simplepage][video_thumb]" />
								</span>
							    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
							  </div>
							</div>
	                    	<?php else: ?>
	                    	<div class="fileupload fileupload-exists" data-provides="fileupload">
							  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
							  	<img src="<?php echo $this->base."/img/sem_imagem.gif"; ?>" />
							  </div>
							  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
							  	<img src="<?php echo $this->base."/files/simplepage/video_thumb/".$this->data['Simplepage']['image_dir']."/".$this->data['Simplepage']['video_thumb']; ?>" />
							  </div>
							  <div>
							  	<label for="NewsImage"></label>
							    <span class="btn btn-file">
							    	<span class="fileupload-new">Selecionar imagem</span>
							    	<span class="fileupload-exists">Alterar</span>
							   		<input type="file" name="data[Simplepage][video_thumb]" />
								</span>
							    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
							  </div>
							</div>
							<?php endif; ?>
	                    </div>	                
                	</div>
                	<?php echo $this->Form->input('Simplepage.image_dir', array('type' => 'hidden')); ?>
            		<div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('active', array('label'=>'Activo:', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	                </div>
	            </div>
				
	            <div class="container">
	            	<div class="span11 field-box actions">
                        <input type="submit" class="btn-flat primary" value="<?php echo __('Guardar P‡gina'); ?>">
                        <span>OU</span>
                        <input type="reset" value="<?php echo __('Cancelar'); ?>" class="reset">
                    </div>
	            </div>
	            </form>
	        </div>
	        <!-- side right column -->
	        <div class="span3 form-sidebar pull-right">
	            <h6><?php echo __('Ajuda Editar Conteœdos'); ?></h6>
	            <p>Caso ocorra algum erro a gravar os Conteœdos, verifique que preencheu todos os <strong>Campos Obrigat—rios</strong>.</p>
	        </div>
	    </div>
	</div>
</div>
