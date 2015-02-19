<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
			<div class="row-fluid form-wrapper">
			    <!-- left column -->
				<div style="margin-bottom: 15px;" class="span10 pull-right"> 
	                

					<a href="<?php echo $this->base; ?>/admin/paginas/edit/<?php echo $pagina['Pagina']['id'] ?>" class="btn-flat pull-right" >
                    	<span> </span>Editar Página
                    </a>
                	
                	<a href="<?php echo $this->base; ?>/admin/paginas/index" class="btn-flat inverse pull-right"style="margin-right:10px;">
                    	<span> </span>VOLTAR À LISTA DE PÁGINAS
                    </a>

	            </div>

			    <div class="span12 with-sidebar">
					<div class="tabbable"> <!-- Only required for left/right tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Detalhes da Página</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								<div class="container">
				            		<div class="span12 field-box btn-flat inverse pull-right">
				                    	<div class="input text">
				                    		<label for="designacao">Designação:</label>
				                    		<h3><?php echo $pagina['Pagina']['designacao'] ?>	</h3>
			                    		</div>					                
			                    	</div>
				            		
				            		<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Titulo Metatags:</label>
				                    		<?php echo $pagina['Metatag']['title'] ?>	
				                    		
			                    		</div>					                
			                    	</div>
			                    	<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Keywords:</label>
				                    		<?php echo $pagina['Metatag']['keywords'] ?>	
				                    		
			                    		</div>					                
			                    	</div>
			                    	<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Descrição Metatags:</label>
				                    		<?php echo $pagina['Metatag']['description'] ?>	
				                    		
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
</div>