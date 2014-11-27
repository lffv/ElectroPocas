<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
			<div class="row-fluid form-wrapper">
			    <!-- left column -->
				<div style="margin-bottom: 15px;" class="span10 pull-right"> 
	                

					<a href="<?php echo $this->base; ?>/admin/categorias_dicas/edit/<?php echo $dica['Dica']['id'] ?>/<?php echo $dica['Categoria']['id'] ?>" class="btn-flat pull-right" >
                    	<span> </span>Editar Dica
                    </a>
                	
                	<a href="<?php echo $this->base; ?>/admin/categorias_dicas/view/<?php echo $dica['Categoria']['id'] ?>#tab2" class="btn-flat inverse pull-right"style="margin-right:10px;">
                    	<span> </span>VOLTAR À LISTA DE DICAS
                    </a>

	            </div>

			    <div class="span12 with-sidebar">
					<div class="tabbable"> <!-- Only required for left/right tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Detalhes do Dicas</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								<div class="container">
				            		<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Titulo:</label>
				                    		<?php echo $dica['Dica']['titulo'] ?>	
				                    		<?php 

					                        	echo $dica['Dica']['activo'] ? "<span class=\"label label-success\">Visível</span>" : "<span class=\"label\">Não Visível</span>";
					                        ?>
			                    		</div>					                
			                    	</div>
				            		
				            		<div class="span12 field-box">
			                    		<?php echo $dica['Dica']['texto'] ?>					
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