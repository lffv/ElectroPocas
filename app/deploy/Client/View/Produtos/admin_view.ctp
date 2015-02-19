<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
			<div class="row-fluid form-wrapper">
			    <!-- left column -->
				<div style="margin-bottom: 15px;" class="span10 pull-right"> 
	                

					<a href="<?php echo $this->base; ?>/admin/produtos/edit/<?php echo $produto['Produto']['id'] ?>/<?php echo $produto['Servico']['id'] ?>" class="btn-flat pull-right" >
                    	<span> </span>Editar Produto
                    </a>
                	
                	<a href="<?php echo $this->base; ?>/admin/servicos/view/<?php echo $produto['Servico']['id'] ?>#tab2" class="btn-flat inverse pull-right"style="margin-right:10px;">
                    	<span> </span>VOLTAR À LISTA DE PRODUTOS
                    </a>

	            </div>

			    <div class="span12 with-sidebar">
					<div class="tabbable"> <!-- Only required for left/right tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Detalhes do Produto</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								<div class="container">
				            		<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Designação:</label>
				                    		<?php echo $produto['Produto']['designacao'] ?>	
				                    		<?php 

					                        	echo $produto['Produto']['activo'] ? "<span class=\"label label-success\">Visível</span>" : "<span class=\"label\">Não Visível</span>";
					                        ?>
			                    		</div>					                
			                    	</div>
				            		<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Texto:</label>
                		                        <?php echo $produto['Produto']['texto']; ?>
			                    		</div>					                
			                    	</div>
				            		<?php /*
				            		<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Titulo Metatags:</label>
				                    		<?php echo $produto['Metatag']['title'] ?>	
				                    		
			                    		</div>					                
			                    	</div>
			                    	<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Keywords:</label>
				                    		<?php echo $produto['Metatag']['keywords'] ?>	
				                    		
			                    		</div>					                
			                    	</div>
			                    	<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Descrição Metatags:</label>
				                    		<?php echo $produto['Metatag']['description'] ?>	
				                    		
			                    		</div>					                
			                    	</div>
			                    	*/?>
					                <div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Imagem:</label>
                		                        <img src="<?php echo $this->base; ?>/uploads/<?php echo $produto['Produto']['imagem']; ?>">	
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