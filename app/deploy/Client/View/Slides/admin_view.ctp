<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
			<div class="row-fluid form-wrapper">
			    <!-- left column -->
				<div style="margin-bottom: 15px;" class="span10 pull-right"> 
	                

					<a href="<?php echo $this->base; ?>/admin/slides/edit/<?php echo $slide['Slide']['id'] ?>" class="btn-flat pull-right" >
                    	<span> </span>Editar Slide
                    </a>
                	
                	<a href="<?php echo $this->base; ?>/admin/slides/index" class="btn-flat inverse pull-right"style="margin-right:10px;">
                    	<span> </span>VOLTAR À LISTA DE SLIDES
                    </a>

	            </div>

			    <div class="span12 with-sidebar">
					<div class="tabbable"> <!-- Only required for left/right tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Detalhes do Slide</a></li>
						</ul>
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
					            
				                <div class="span12 field-box">
						            <td>
				                        <img class="image_layout" src="<?php echo $this->base; ?>/images/layout<?php echo h($slide['Slide']['tipo_layout']); ?>.png">
				                    </td>
					            </div>
					            
					            <div class="span12 field-box btn-flat inverse pull-right">
						            <label for="SlideTitulo">Posição do Banner:</label>
					            		<?php echo $slide['Slide']['ordem'] ?>	
					               
				                </div>
				                <div class="span12 field-box ">
				                	<label for="SlideTitulo">Imagem Fundo:</label>
				            		
									<img class="span3" src="<?php echo $this->base; ?>/uploads/<?php echo $slide['Slide']['bg_imagem']; ?>">
									<!--<img class="span3" src="<?php echo $this->data['Slide']['bg_imagem']; ?>">-->
				                </div>
				                 <div class="span12 field-box btn-flat inverse pull-right">
										<label for="SlideTitulo">Activo:</label>
					            		<td>
					                        <?php 
					                        echo $slide['Slide']['activo'] ? "<span class=\"label label-success\">Visível</span>" : "<span class=\"label\">Não Visível</span>";
					                        ?>
				                    	</td>
				                </div>
				                <div class="span12 field-box sl1 sl3 sl4w">
			                		<label for="SlideTitulo">Titulo:</label>
				            		<?php echo $slide['Slide']['titulo'] ?>	
					            </div>

				                <div class="span12 field-box sl1 sl4">
			                		<label for="SlideTitulo">Titulo:</label>
				            		<?php echo $slide['Slide']['lead'] ?>					
				                </div>

				                <div class="span12 field-box sl3 sl2">
			                		<label for="SlideTitulo">Imagem:</label>
				                	<img class="span3" src="<?php echo $this->base; ?>/uploads/<?php echo $slide['Slide']['imagem']; ?>">
									<!--<img class="span3" src="<?php echo $this->data['Slide']['imagem']; ?>">-->
				                </div>
				                <div class="span12 field-box sl1 sl4">
			                		<label for="SlideTitulo">BTN 1:</label>
				            		<?php echo $slide['Slide']['btn1'] ?>
				                </div>

				                <div class="span12 field-box sl1 sl4">
									<label for="SlideTitulo">BTN 1 Link:</label>
				            		<?php echo $slide['Slide']['btn1_link'] ?>
				                </div>

				                <div class="span12 field-box sl1">
									<label for="SlideTitulo">BTN 2:</label>
				            		<?php echo $slide['Slide']['btn2'] ?>
				                </div>

				                <div class="span12 field-box  sl1">
									<label for="SlideTitulo">BTN 2 Link:</label>
				            		<?php echo $slide['Slide']['btn2_link'] ?>
				                </div>

				                <div class="span12 field-box">
									<label for="SlideTitulo">Texto 1:</label>
				            		<?php echo $slide['Slide']['texto1'] ?>
				                </div>

				                <div class="span12 field-box sl2 sl3">
									<label for="SlideTitulo">Texto 2:</label>
				            		<?php echo $slide['Slide']['texto2'] ?>

				                </div>

				                <div class="span12 field-box sl2 sl3">
									<label for="SlideTitulo">Texto 3:</label>
				            		<?php echo $slide['Slide']['texto3'] ?>
				                </div>

				                <div class="span12 field-box sl2 sl3">
									<label for="SlideTitulo">Texto 4:</label>
				            		<?php echo $slide['Slide']['texto4'] ?>				                
					                
				                </div>

				                <div class="span12 field-box sl2 sl3">
									<label for="SlideTitulo">Texto 5:</label>
				            		<?php echo $slide['Slide']['texto5'] ?>
				                </div>

				                <div class="span12 field-box sl2 sl3">
									<label for="SlideTitulo">Texto 6:</label>
				            		<?php echo $slide['Slide']['texto6'] ?>
				                </div>


				            </div>
						</div>
					</div>
				</div>
					</div>
			    </div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){

		var tipo_layout = "<?php echo $slide['Slide']['tipo_layout'] ?>";
		showFields(tipo_layout);
		

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
		
	});
</script>
