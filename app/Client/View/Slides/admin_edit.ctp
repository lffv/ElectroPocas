<style type="text/css">
	div .hidden{
		height:0px;
	}
</style>

<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
	        <h3><?php echo __('Editar Slide'); ?></h3>
	        
	        <div class="span10 pull-right"> 
                <a href="<?php echo $this->base; ?>/admin/slides/index" class="btn-flat inverse pull-right" style="margin-right:10px;">
                    <span>< </span>VOLTAR À LISTA DE SLIDES
                </a>
            </div>


	    </div>
	    <div class="row-fluid form-wrapper">
	        <!-- left column -->
	        <div class="span12 with-sidebar">
	        	<?php echo $this->Form->create('Slide', array('class'=>'new_user_form inline-input', 'novalidate', 'type' => 'file' )); ?>
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
					            ?>
					            <div class="span12 field-box btn-flat inverse pull-right">
					                <label for="SlideTitulo">Tipo de Layout:</label>
					                <?php 
					                	
						            	echo $this->Form->input('tipo_layout', array('class'=>'tipo_layout','label'=>'Tipo de Layout:', 'options' => array('1' => 'Layout 1', '2' => 'Layout 2', '3' => 'Layout 3', '4' => 'Layout 4'), 'label' => false, 'div' => array('class' => 'formRight noSearch'))); 
						            ?>
				                </div>
				                <div class="span12 field-box btn-flat inverse pull-right">
					                <label for="SlideTitulo">Transição de Layout:</label>
					                <?php 
					                	
						            	echo $this->Form->input('transicao', array('label'=>'Tipo de Layout:', 'options' => array(	 
						            		  'boxslide' => 'boxslide',
										      'boxfade' => 'boxfade',
										      'slotslide-horizontal' => 'slotslide-horizontal',
										      'slotslide-vertical' => 'slotslide-vertical',
										      'curtain-1' => 'curtain-1',
										      'curtain-2' => 'curtain-2',
										      'curtain-3' => 'curtain-3',
										      'slotzoom-horizontal' => 'slotzoom-horizontal',
										      'slotzoom-vertical' => 'slotzoom-vertical',
										      'slotfade-horizontal' => 'slotfade-horizontal',
										      'slotfade-vertical' => 'slotfade-vertical',
										      'fade' => 'fade',
										      'slideleft' => 'slideleft',
										      'slideup' => 'slideup',
										      'slidedown' => 'slidedown',
										      'slideright' => 'slideright',
										      'papercut' => 'papercut',
										      '3dcurtain-horizontal' => '3dcurtain-horizontal',
										      '3dcurtain-vertical' => '3dcurtain-vertical',
										      'cubic' => 'cubic',
										      'cube' => 'cube',
										      'flyin' => 'flyin',
										      'turnoff' => 'turnoff',
										      'incube' => 'incube',
										      'cubic-horizontal' => 'cubic-horizontal',
										      'cube-horizontal' => 'cube-horizontal',
										      'incube-horizontal' => 'incube-horizontal',
										      'turnoff-vertical' => 'turnoff-vertical',
										      'fadefromright' => 'fadefromright',
										      'fadefromleft' => 'fadefromleft',
										      'fadefromtop' => 'fadefromtop',
										      'fadefrombottom' => 'fadefrombottom',
										      'fadetoleftfadefromright' => 'fadetoleftfadefromright',
										      'fadetorightfadetoleft' => 'fadetorightfadetoleft',
										      'fadetobottomfadefromtop' => 'fadetobottomfadefromtop',
										      'fadetotopfadefrombottom' => 'fadetotopfadefrombottom',
										      'parallaxtoright' => 'parallaxtoright',
										      'parallaxtoleft' => 'parallaxtoleft',
										      'parallaxtotop' => 'parallaxtotop',
										      'parallaxtobottom' => 'parallaxtobottom',
										      'scaledownfromright' => 'scaledownfromright',
										      'scaledownfromleft' => 'scaledownfromleft',
										      'scaledownfromtop' => 'scaledownfromtop',
										      'scaledownfrombottom' => 'scaledownfrombottom',
										      'zoomout' => 'zoomout',
										      'zoomin' => 'zoomin',
										      'notransition' => 'notransition'
										      ), 'label' => false, 'div' => array('class' => 'formRight'))); 
						            ?>
				                </div>
				                <div class="span12 field-box">
						            <td>
				                        <img class="image_layout" src="<?php echo $this->base; ?>/images/layout<?php echo h($this->data['Slide']['tipo_layout']); ?>.png">
				                    </td>
					            </div>
					            
					            <div class="span12 field-box btn-flat inverse pull-right">
						            <label for="SlideTitulo">Posição do Banner:</label>
					                <?php 
						            	

						            	echo $this->Form->input('ordem', array('label'=>'Posição do Banner:','class' => 'chzn-select', 'options' => array('1' => 'Posição 1', '2' => 'Posição 2', '3' => 'Posição 3', '4' => 'Posição 4', '5' => 'Posição 5'), 'label' => false, 'div' => array('class' => 'formRight noSearch'))); 
						            ?>
				                </div>
				                <div class="span12 field-box ">
					                <?php
				                    	echo $this->Form->input('bg_imagem', array('class'=>'btn-warning inverse pull-left','type' => 'file'));
						            ?>
										<img class="span3" src="<?php echo $this->base; ?>/uploads/<?php echo $this->data['Slide']['bg_imagem']; ?>">
										<!--<img class="span3" src="<?php echo $this->data['Slide']['bg_imagem']; ?>">-->
				                </div>
				                <div class="span12 field-box sl1 sl3 sl4w">
				                    <?php 
						            	echo $this->Form->input('titulo', array('label'=>'Titulo:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						            ?>
					            </div>
								<div class="span12 field-box sl1 sl4">
					                <?php 
						            	echo $this->Form->input('lead', array('label'=>'Lead:', 'class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						            ?>
				                </div>

				                <div class="span12 field-box sl3 sl2">
					                <?php
				                    	echo $this->Form->input('imagem', array('class'=>'btn-flat inverse pull-left','type' => 'file'));
						            ?>
										<img class="span3" src="<?php echo $this->base; ?>/uploads/<?php echo $this->data['Slide']['imagem']; ?>">
										<!--<img class="span3" src="<?php echo $this->data['Slide']['imagem']; ?>">-->
				                </div>


				                <div class="span12 field-box sl1 sl4">
					                <?php 
						            	echo $this->Form->input('btn1', array('label'=>'Botão 1:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						            ?>
				                </div>

				                <div class="span12 field-box sl1 sl4">
					                <?php 
						            	echo $this->Form->input('btn1_link', array('label'=>'Botão 1 Link:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						            ?>
				                </div>

				                <div class="span12 field-box sl1">
					                <?php 
						            	echo $this->Form->input('btn2', array('label'=>'Botão 2:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						            ?>
				                </div>

				                <div class="span12 field-box  sl1">
					                <?php 
						            	echo $this->Form->input('btn2_link', array('label'=>'Botão 2 Link:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						            ?>
				                </div>

				                <div class="span12 field-box">
					                <?php 
						            	echo $this->Form->input('texto1', array('label'=>'Texto 1:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						            ?>
				                </div>

				                <div class="span12 field-box sl2 sl3">
					                <?php 
						            	echo $this->Form->input('texto2', array('label'=>'Texto 2:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						            ?>
				                </div>

				                <div class="span12 field-box sl2 sl3">
					                <?php 
						            	echo $this->Form->input('texto3', array('label'=>'Texto 3:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						            ?>
				                </div>

				                <div class="span12 field-box sl2 sl3">
					                <?php 
						            	echo $this->Form->input('texto4', array('label'=>'Texto 4:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						            ?>
				                </div>

				                <div class="span12 field-box sl2 sl3">
					                <?php 
						            	echo $this->Form->input('texto5', array('label'=>'Texto 5:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						            ?>
				                </div>

				                <div class="span12 field-box sl2 sl3">
					                <?php 
						            	echo $this->Form->input('texto6', array('label'=>'Texto 6:','class'=>'span9', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						            ?>
				                </div>
				                <div class="span12 field-box">
					                <?php 
						            	echo $this->Form->input('activo', array('label'=>'Activo:','class'=>'span9 bs-switch', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert-msg'))));
						            ?>
				                </div>
				            </div>
						</div>
					</div>
				</div>
				<div class="span11 field-box actions">
                    <input type="submit" class="btn-flat primary" value="<?php echo __('Guardar Slides'); ?>">
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

		var tipo_layout = $('.tipo_layout');
		var url = "<?php echo $this->base; ?>/images/";
		var image_layout = $('.image_layout');
		showFields(tipo_layout.val());

		tipo_layout.on('change', function(e){
			e.preventDefault();
			showFields(tipo_layout.val());
			image_layout.attr('src',url+'layout'+tipo_layout.val()+'.png');
		});

		function showFields(id_tipo_layout){
			switch(id_tipo_layout){
				case '1':{
					$('.sl2, .sl3, .sl4').hide();
					$('.sl1').show();
					break;
				}
				case '2':{
					$('.sl1, .sl3, .sl4').hide();
					$('.sl2').show();
					break;
				}
				case '3':{
					$('.sl1, .sl2, .sl4').hide();
					$('.sl3').show();
					break;
				}
				case '4':{
					$('.sl2, .sl3, .sl1').hide();
					$('.sl4').show();
					break;
				}
			}
		}
		$(".bs-switch").bootstrapSwitch({
			onColor:'success',
			offColor:'warning',
			onText:'TRUE',
			offText:'FALSE'
		});
	});
	


</script>