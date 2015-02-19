<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
			<div class="row-fluid form-wrapper">
			    <!-- left column -->
				<div style="margin-bottom: 15px;" class="span10 pull-right"> 
	                
	                <?php echo $this->Html->link(__('Editar Serviço'), array( 'action' => 'edit', $servico['Servico']['id']), array('class' => 'btn-flat pull-right')); ?> 
                	
                	<a href="<?php echo $this->base; ?>/admin/servicos/index" class="btn-flat inverse pull-right"style="margin-right:10px;">
                    	<span> </span>VOLTAR À LISTA DE SERVIÇOS
                    </a>

	            </div>

			    <div class="span12 with-sidebar">
					<div class="tabbable"> <!-- Only required for left/right tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Detalhes do Serviço</a></li>
							<li class=""><a href="#tab2" data-toggle="tab">Sub Serviços</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								<div class="container">
				            		<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Designação:</label>
				                    		<?php echo $servico['Servico']['designacao'] ?>	
				                    		<?php 

					                        	echo $servico['Servico']['activo'] ? "<span class=\"label label-success\">Visível</span>" : "<span class=\"label\">Não Visível</span>";
					                        ?>
			                    		</div>					                
			                    	</div>
				            		<div class="span12 field-box">
					                    <div class="input text">
				                    		<label for="slug">Serviço Url:</label>
				                    		<?php echo $servico['Servico']['slug'] ?>	
				                    		
			                    		</div>
					                </div>
					                <div class="span12 field-box">
					                    <div class="input text">
				                    		<label for="slug">Serviço ICON:</label>
				                    		<?php echo $servico['Servico']['icon'] ?>	
				                    		
			                    		</div>
					                </div>
				            		<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Titulo Metatags:</label>
				                    		<?php echo $servico['Metatag']['title'] ?>	
				                    		
			                    		</div>					                
			                    	</div>
			                    	<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Keywords:</label>
				                    		<?php echo $servico['Metatag']['keywords'] ?>	
				                    		
			                    		</div>					                
			                    	</div>
			                    	<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Descrição Metatags:</label>
				                    		<?php echo $servico['Metatag']['description'] ?>	
				                    		
			                    		</div>					                
			                    	</div>
					                <div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Imagem:</label>
                		                        <img src="<?php echo $this->base; ?>/uploads/<?php echo $servico['Servico']['imagem']; ?>">	
			                    		</div>					                
			                    	</div>
					            </div>
							</div>
							<div class="tab-pane" id="tab2">
								<div class="container">
				            		<div class="row-fluid table">
				            		<div style="margin-bottom: 15px;" class="span10 pull-right"> 
							            <a href="<?php echo $this->base; ?>/admin/servicos/addSub/<?php echo $servico['Servico']['id'] ?>" class="btn-flat success pull-right">
						                    <span>+ </span>NOVO SUBSERVIÇO
						                </a>
						            </div>
							            <table class="table table-products table-hover">
							                <thead>
							                    <tr>
							                        <th class="span4 sortable">Designação
							                        </th>
							                        <th class="span2 sortable">
							                            <span class="line"></span>Estado
							                        </th>
							                    </tr>
							                </thead>
							                <tbody>
							                <!-- row -->

							                <?php $i = 0; $class="";
							                foreach ($servico['SubServico'] as $produto): $i++;?>
 											
							                <?php if($i == 1)  $class = ' class="first" '; else $class=""; ?>
							                <tr <?php echo $class; ?>>
							                    <td>
							                        <?php echo $produto['designacao']; ?>
							                    </td>
							                    
							                    <td>
							                        <ul class="actions">
							                            <li><a href="<?php echo $this->base; ?>/admin/produtos/edit/<?php echo $produto['id']; ?>/<?php echo $servico['Servico']['id']; ?>">+</a></li>
							                            <li class="last"><a class="treatmentDelete" href="<?php echo $this->base; ?>/admin/produtos/delete/<?php echo $produto['id']; ?>"><i class="table-delete"></i></a></li>
							                        </ul>
							                    </td>
							                </tr>

							                	<?php foreach ($produto['Produto'] as $prod): ?>
							                		<tr>
								                		<td>
								                        	<?php echo $prod['designacao']; ?>
								                    	</td>
								                    	<td>
									                        <ul class="actions">
									                            <li><a href="<?php echo $this->base; ?>/admin/produtos/edit/<?php echo $prod['id']; ?>/<?php echo $servico['Servico']['id']; ?>"><i class="table-edit"></i></a></li>
									                            <li class="last"><a class="treatmentDelete" href="<?php echo $this->base; ?>/admin/produtos/delete/<?php echo $prod['id']; ?>"><i class="table-delete"></i></a></li>
									                        </ul>
									                    </td>
								                    </tr>
							                	<?php endforeach;?>
							                <?php 
							                endforeach; ?>
							                <!-- row -->
							                </tbody>
							            </table>
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

<div id="treatmentDeleteModal" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3><?php echo __("Apagar Produto"); ?></h3>
  </div>
  <div class="modal-body">
    <p><?php echo __("Está prestes a pagar este parceiro e essa operação é irreversível."); ?></p>
    <p><strong><?php echo __("De certeza que pretende apagar o Produto?"); ?></strong></p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn-flat gray" data-dismiss="modal" >Fechar</a>
    <a href="#" class="btn-flat default" id="deleteBtn">Apagar Produto</a>
  </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		if(window.location.hash === '#tab2'){
			$('a[href="#tab2"]').trigger('click');
		}
	});
	
</script>
