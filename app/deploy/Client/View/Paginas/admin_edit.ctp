	<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
	        <h3><?php echo __('Editar Página'); ?></h3>
	        
	        <div class="span10 pull-right"> 
                <a href="<?php echo $this->base; ?>/admin/paginas/index" class="btn-flat inverse pull-right" style="margin-right:10px;">
                    <span>< </span>VOLTAR À LISTA DE PÁGINAS
                </a>
            </div>


	    </div>
	    <div class="row-fluid form-wrapper">
	        <!-- left column -->
	        <div class="span12 with-sidebar">
	        	<?php echo $this->Form->create('Pagina', array('class'=>'new_user_form inline-input', 'novalidate' )); ?>
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
				                <div class="span12 field-box btn-flat inverse pull-right">
				                	<div class="input text ">
				                		<label for="PaginaDesignacao">Designação do Página:</label>
				                		<h3><?php echo $this->data['Pagina']['designacao']; ?></h3>
				                	</div>
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
				            </div>
						</div>
					</div>
				</div>
				<div class="span11 field-box actions">
                    <input type="submit" class="btn-flat primary" value="<?php echo __('Guardar Página'); ?>">
                    <!--<span>OU</span>
                    <input type="reset" value="<?php echo __('Cancelar'); ?>" class="reset">-->
                </div>
	            </form>
	        </div>
	    </div>
	</div>
</div>
