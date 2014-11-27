<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
			<div class="row-fluid form-wrapper">
			    <!-- left column -->
				<div style="margin-bottom: 15px;" class="span10 pull-right"> 
	                

					<a href="<?php echo $this->base; ?>/admin/noticias/edit/<?php echo $noticia['Noticia']['id'] ?>" class="btn-flat pull-right" >
                    	<span> </span>Editar Noticia
                    </a>
                	
                	<a href="<?php echo $this->base; ?>/admin/noticias/index" class="btn-flat inverse pull-right"style="margin-right:10px;">
                    	<span> </span>VOLTAR À LISTA DE NOTICIAS
                    </a>

	            </div>

			    <div class="span12 with-sidebar">
					<div class="tabbable"> <!-- Only required for left/right tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Detalhes do Noticias</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								<div class="container">
				            		<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="titulo">Titulo:</label>
				                    		<?php echo $noticia['Noticia']['titulo'] ?>	
			                    		</div>					                
			                    	</div>
			                    	<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="titulo">Data:</label>
				                    		<?php echo h($noticia['Noticia']['data']); ?>
			                    		</div>					                
			                    	</div>
			                    	
				            		
				            		<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="texto">Texto Noticia:</label>
				                    		<?php echo $noticia['Noticia']['texto'] ?>	
				                    		<?php 

					                        	echo $noticia['Noticia']['activo'] ? "<span class=\"label label-success\">Visível</span>" : "<span class=\"label\">Não Visível</span>";
					                        ?>
			                    		</div>					                
			                    	</div>
			                    	<?php 
									
			                    	foreach ($noticia['Image'] as $key => $value):  ?>
					                	<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Imagem:</label>
                		                        <img src="<?php echo $this->base; ?>/uploads/<?php echo $noticia['Image'][$key]['name']; ?>">	
			                    		</div>					                
			                    	</div>	
					                <?php endforeach;?>
					                
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