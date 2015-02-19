<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
	        <h3><?php echo __('Adicionar Produto'); ?></h3>
	        
	        <div class="span10 pull-right"> 
                <a href="<?php echo $this->base; ?>/admin/servicos/view/<?php echo $servico['Servico']['id'] ?>#tab2" class="btn-flat inverse pull-right" style="margin-right:10px;">
                    <span> </span>VOLTAR À LISTA DE PRODUTOS
                </a>
            </div>


	    </div>
	    <div class="row-fluid form-wrapper">
	        <!-- left column -->
	        <div class="span9 with-sidebar">
	        	<?php echo $this->Form->create('Produto', array('class'=>'new_user_form inline-input', 'novalidate', 'type' => 'file')); ?>
				<div class="tabbable"> <!-- Only required for left/right tabs -->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Geral</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
							<div class="container">
			            		
			            		<div class="span12 field-box btn-flat inverse pull-right">
			            		
			            		<input type="hidden" value="<?php echo $servico['Servico']['id'] ?>" name="data[Produto][servico_id]" id="ProdutoServicoId">
			            		
			            		<?php
			                    	echo $this->Form->input('imagem', array('type' => 'file'));
					            ?>
								<?php 
			                    	echo $this->Form->input('Metatag.model', array('value' => 'Produto','type' => 'hidden'));
					            ?>
				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('designacao', array('label'=>'Designação:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <?php 
					            	echo $this->Form->input('texto', array('label'=>'Texto do Produto:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('Metatag.title', array('label'=>'Metatag Titulo', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('Metatag.keywords', array('label'=>'Keywords:', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('Metatag.description', array('label'=>'Metatag Descrição:', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
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
                    <input type="submit" class="btn-flat primary" value="<?php echo __('Guardar Produto'); ?>">
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
	$(document).ready(function(){
	$(".bs-switch").bootstrapSwitch({
		onColor:'success',
		offColor:'warning',
		onText:'TRUE',
		offText:'FALSE'
	});
});
</script>
