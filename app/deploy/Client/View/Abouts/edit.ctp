<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
	        <h3><?php echo __('Editar Página Acerca'); ?></h3>
	        
	        <div class="span10 pull-right"> 
            </div>

	    </div>
	    <div class="row-fluid form-wrapper">
	        <!-- left column -->
	        <div class="span9 with-sidebar">
	        	<?php echo $this->Form->create('About', array('class'=>'new_user_form inline-input', 'novalidate')); ?>
	        	<?php echo $this->Form->input('id'); ?>
				<div class="tabbable"> <!-- Only required for left/right tabs -->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Português</a></li>
						<li><a href="#tab2" data-toggle="tab">Inglês</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
							<div class="container">
			            		<div class="span12 field-box">

			                    <?php 
					            	echo $this->Form->input('titleTranslation.0.content', array('label'=>'Título:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('leadTranslation.0.content', array('label'=>'Lead:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('textTranslation.0.content', array('label'=>'Texto:', 'type' => 'textarea','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <?php 
					            	echo $this->Form->hidden('textTranslation.0.id', array('value' => 3));
					            	echo $this->Form->hidden('textTranslation.0.locale', array('value' => 'pt'));
					            	echo $this->Form->hidden('textTranslation.0.model', array('value' => 'About'));
					            	echo $this->Form->hidden('textTranslation.0.foreign_key', array('value' => 1));
					            	echo $this->Form->hidden('textTranslation.0.field', array('value' => 'text'));

					            	echo $this->Form->hidden('leadTranslation.0.id', array('value' => 2));
					            	echo $this->Form->hidden('leadTranslation.0.locale', array('value' => 'pt'));
					            	echo $this->Form->hidden('leadTranslation.0.model', array('value' => 'About'));
					            	echo $this->Form->hidden('leadTranslation.0.foreign_key', array('value' => 1));
					            	echo $this->Form->hidden('leadTranslation.0.field', array('value' => 'lead'));

					            	echo $this->Form->hidden('titleTranslation.0.id', array('value' => 1));
					            	echo $this->Form->hidden('titleTranslation.0.locale', array('value' => 'pt'));
					            	echo $this->Form->hidden('titleTranslation.0.model', array('value' => 'About'));
					            	echo $this->Form->hidden('titleTranslation.0.foreign_key', array('value' => 1));
					            	echo $this->Form->hidden('titleTranslation.0.field', array('value' => 'title'));
					            ?>
				            </div>
						</div>

						<div class="tab-pane" id="tab2">
							<div class="container">
			            		<div class="span12 field-box">

			                    <?php 
					            	echo $this->Form->input('titleTranslation.1.content', array('label'=>'Título:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('leadTranslation.1.content', array('label'=>'Lead:','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>
				                <div class="span12 field-box">
			                    <?php 
					            	echo $this->Form->input('textTranslation.1.content', array('label'=>'Texto:', 'type' => 'textarea','placeholder'=>'Preenchimento Obrigatório', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
					            ?>
				                </div>

				                <?php 
					            	echo $this->Form->hidden('textTranslation.1.locale', array('value' => 'en'));
					            	echo $this->Form->hidden('textTranslation.1.id', array('value' => 6));
					            	echo $this->Form->hidden('textTranslation.1.model', array('value' => 'About'));
					            	echo $this->Form->hidden('textTranslation.1.foreign_key', array('value' => 1));
					            	echo $this->Form->hidden('textTranslation.1.field', array('value' => 'text'));

					            	echo $this->Form->hidden('leadTranslation.1.locale', array('value' => 'en'));
					            	echo $this->Form->hidden('leadTranslation.1.id', array('value' => 5));
					            	echo $this->Form->hidden('leadTranslation.1.model', array('value' => 'About'));
					            	echo $this->Form->hidden('leadTranslation.1.foreign_key', array('value' => 1));
					            	echo $this->Form->hidden('leadTranslation.1.field', array('value' => 'lead'));

					            	echo $this->Form->hidden('titleTranslation.1.locale', array('value' => 'en'));
					            	echo $this->Form->hidden('titleTranslation.1.id', array('value' => 4));
					            	echo $this->Form->hidden('titleTranslation.1.model', array('value' => 'About'));
					            	echo $this->Form->hidden('titleTranslation.1.foreign_key', array('value' => 1));
					            	echo $this->Form->hidden('titleTranslation.1.field', array('value' => 'title'));
					            ?>
				            </div>
						</div>
					</div>
				</div>
				<div class="span11 field-box actions">
                    <input type="submit" class="btn-flat primary" value="<?php echo __('Guardar Candidatura'); ?>">
                    <span>OU</span>
                    <input type="reset" value="<?php echo __('Cancelar'); ?>" class="reset">
                </div>
	            </form>
	        </div>
	        <!--
	        <div class="span3 form-sidebar pull-right">
	            <h6><?php echo __('Ajuda Nova Candidatura'); ?></h6>
	            <p>...</p>
	            <p>...</p>
	        </div>
	        -->
	    </div>
	</div>
</div>
