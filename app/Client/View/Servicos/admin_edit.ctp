<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
	        <h3><?php echo __('Editar Serviço'); ?></h3>
	        
	        <div class="span10 pull-right"> 
	            <a href="<?php echo $this->base; ?>/admin/servicos/add/" class="btn-flat success pull-right">
                    <span>+ </span>NOVO SERVIÇO
                </a>
                <a href="<?php echo $this->base; ?>/admin/servicos/" class="btn-flat inverse pull-right" style="margin-right:10px;">
                    <span>< </span>VOLTAR À LISTA DE SERVIÇOS
                </a>
            </div>


	    </div>
	    <div class="row-fluid form-wrapper">
	        <!-- left column -->
	        <div class="span12 with-sidebar">
	        	<?php echo $this->Form->create('Servico', array('class'=>'new_user_form inline-input', 'novalidate', 'type' => 'file')); ?>
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
			                    	echo $this->Form->input('Metatag.id', array('type' => 'hidden'));
					            ?>
				                <div class="span12 field-box ">
				                	
					            <?php
			                    	echo $this->Form->input('imagem', array('class'=>'btn-flat inverse pull-right','type' => 'file'));
					            ?>
									<img class="span3" src="<?php echo $this->base; ?>/uploads/<?php echo $this->data['Servico']['imagem']; ?>">

				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('slug', array('label'=>'URL do Serviço','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('icon', array('label'=>'ICON do Serviço','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('designacao', array('label'=>'Designação do Serviço:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('Metatag.title', array('label'=>'Titulo Metatags:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
				                <?php 
					            	echo $this->Form->input('Metatag.keywords', array('label'=>'keywords:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
				                <?php 
					            	echo $this->Form->input('Metatag.description', array('label'=>'Descrição Metatags:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="field-box">
			                        <?php				
									echo $this->Form->input('activo', array('class'=>'bs-switch','label'=>false, 'div'=>false,'before'=>'<label>Activo:</label><label class="checkbox"><div class="checker"><span>', 'after'=>'</span></div></label>', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
								?>
			                    </div>
				            </div>
						</div>
					</div>
				</div>
				<div class="span11 field-box actions">
                    <input type="submit" class="btn-flat primary" value="<?php echo __('Guardar Serviço'); ?>">
                    <!--<span>OU</span>
                    <input type="reset" value="<?php echo __('Cancelar'); ?>" class="reset">-->
                </div>
	            </form>
	        </div>
	    </div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
	$(".bs-switch").bootstrapSwitch({
		onColor:'success',
		offColor:'warning',
		onText:'TRUE',
		offText:'FALSE'
	});
});
</script>
