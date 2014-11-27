<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
	        <h3><?php echo __('Editar Novidade'); ?></h3>
	        <div class="span10 pull-right"> 
	            <a href="<?php echo $this->base; ?>/banners/add/" class="btn-flat success pull-right">
                    <span>+ </span>NOVO BANNER
                </a>
                <a href="<?php echo $this->base; ?>/banners/" class="btn-flat inverse pull-right" style="margin-right:10px;">
                    <span>< </span>LISTA BANNERS
                </a>
            </div>
	    </div>
	    <div class="row-fluid form-wrapper">
	        <!-- left column -->
	        <div class="span9 with-sidebar">
	        	<?php echo $this->Form->create('Banner', array('type' => 'file', 'class'=>'new_user_form inline-input', 'novalidate')); 
	        		  echo $this->Form->input('id');
	        	?>
		        <div class="container">
            		
	                <div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('lead', array('label'=>'Texto Banner:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	                </div>
	                <div class="field-box">
	                <?php				
	                 echo $this->Form->input('active_lead', array('label'=>false, 'div'=>false,'before'=>'<label>Texto Activo:</label><label class="checkbox"><div class="checker"><span>', 'after'=>'</span></div></label>', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg')))); 
	                 ?>
	                </div>
	                <div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('link', array('label'=>'Link Banner:', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	                </div>

	                
	                <div class="span12 field-box">
	                    <div class="input text">
	                    	<label for="NewsImage">Imagem:</label>
	                    	<?php if($this->data['Banner']['banner'] == ""): ?>
	                    	<div class="fileupload fileupload-new" data-provides="fileupload">
	                    		<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
		                    		<img src="<?php echo $this->base."/img/sem_imagem.gif"; ?>" />
		                    	</div>
		                    	<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
		                    	<div>
											  	<label for="NewsImage"></label>
											    <span class="btn btn-file">
											    	<span class="fileupload-new">Selecionar imagem</span>
											    	<span class="fileupload-exists">Alterar</span>
											   		<input type="file" name="data[Banner][banner]" />
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
							  	<img src="<?php echo $this->base."/files/banner/banner/".$this->data['Banner']['image_dir']."/".$this->data['Banner']['banner']; ?>" />
							  </div>
							  <div>
							  	<label for="NewsImage"></label>
							    <span class="btn btn-file">
							    	<span class="fileupload-new">Selecionar imagem</span>
							    	<span class="fileupload-exists">Alterar</span>
							   		<input type="file" name="data[Banner][banner]" />
								</span>
							    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
							  </div>
							</div>
							<?php endif; ?>
	                    </div>	                
                	</div>
                	
                	
	                
	                <div class="span12 field-box">
	                    <div class="input text">
	                    	<label for="NewsImage">Imagem Mobile:</label>
	                    	<?php if($this->data['Banner']['banner_mobile'] == ""): ?>
	                    	<div class="fileupload fileupload-new" data-provides="fileupload">
	                    		<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
		                    		<img src="<?php echo $this->base."/img/sem_imagem.gif"; ?>" />
		                    	</div>
		                    	<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
		                    	<div>
											  	<label for="NewsImage"></label>
											    <span class="btn btn-file">
											    	<span class="fileupload-new">Selecionar imagem</span>
											    	<span class="fileupload-exists">Alterar</span>
											   		<input type="file" name="data[Banner][banner_mobile]" />
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
							  	<img src="<?php echo $this->base."/files/banner/banner_mobile/".$this->data['Banner']['image_dir']."/".$this->data['Banner']['banner_mobile']; ?>" />
							  </div>
							  <div>
							  	<label for="NewsImage"></label>
							    <span class="btn btn-file">
							    	<span class="fileupload-new">Selecionar imagem</span>
							    	<span class="fileupload-exists">Alterar</span>
							   		<input type="file" name="data[Banner][banner_mobile]" />
								</span>
							    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
							  </div>
							</div>
							<?php endif; ?>
	                    </div>	                
                	</div>
                	<?php echo $this->Form->input('Banner.image_dir', array('type' => 'hidden')); ?>
                	
                	<div class="span12 field-box">
                    <?php 
		            	echo $this->Form->input('banner_alt', array('label'=>'Texto Alt:', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
		            ?>
	                </div>
	                
	                <div class="field-box">
                        <?php				
						echo $this->Form->input('active', array('label'=>false, 'div'=>false,'before'=>'<label>Activo:</label><label class="checkbox"><div class="checker"><span>', 'after'=>'</span></div></label>', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
							//echo $this->Form->input('metatag_id');
							//echo $this->Form->input('testimonial_id');
					?>
                    </div>
                    <div class="span11 field-box actions">
                        <input type="submit" class="btn-flat primary" value="<?php echo __('Guardar Banner'); ?>">
                        <span>OU</span>
                        <input type="reset" value="<?php echo __('Cancelar'); ?>" class="reset">
                    </div>
	            </div>
	            </form>
	        </div>
	        <!-- side right column -->
	        <div class="span3 form-sidebar pull-right">
	            <h6><?php echo __('Ajuda Editar Banner'); ?></h6>
	            <p>...</p>
	            <p>...</p>
	        </div>
	    </div>
	</div>
</div>