<div class="container-fluid">
	<div id="pad-wrapper" class="new-user">
	    <div class="row-fluid header">
			<div class="row-fluid form-wrapper">
			    <!-- left column -->
				<div style="margin-bottom: 15px;" class="span10 pull-right"> 
	                
	                <?php 
	                echo $this->Html->link(__('Editar Categoria'), array( 'action' => 'edit', $categoria['CategoriasDica']['id']), array('class' => 'btn-flat pull-right')); ?> 
                	
                	<a href="<?php echo $this->base; ?>/admin/categorias_dicas/index" class="btn-flat inverse pull-right"style="margin-right:10px;">
                    	<span> </span>VOLTAR À LISTA DE CATEGORIAS
                    </a>

	            </div>

			    <div class="span12 with-sidebar">
					<div class="tabbable"> <!-- Only required for left/right tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Detalhes da Categoria</a></li>
							<li class=""><a href="#tab2" data-toggle="tab">Lista de Dicas</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								<div class="container">
				            		<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="designacao">Designação:</label>
				                    		<?php echo $categoria['CategoriasDica']['designacao'] ?>	
				                    		<?php 

					                        	echo $categoria['CategoriasDica']['activo'] ? "<span class=\"label label-success\">Visível</span>" : "<span class=\"label\">Não Visível</span>";
					                        ?>
			                    		</div>					                
			                    	</div>
			                    	<div class="span12 field-box">
				                    	<div class="input text">
				                    		<label for="HashTag">HashTag:</label>
				                    		<?php echo $categoria['CategoriasDica']['hashtag'] ?>	
			                    		</div>					                
			                    	</div>
					            </div>
							</div>
							<div class="tab-pane" id="tab2">
								<div class="container">
				            		<div class="row-fluid table">
				            		<div style="margin-bottom: 15px;" class="span10 pull-right"> 
							            <a href="<?php echo $this->base; ?>/admin/dicas/add/<?php echo $categoria['CategoriasDica']['id'] ?>" class="btn-flat success pull-right">
						                    <span>+ </span>NOVA DICA
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
							                foreach ($categoria['dica'] as $dica): $i++;?>

							                <?php if($i == 1)  $class = ' class="first" '; else $class=""; ?>
							                <tr <?php echo $class; ?>>
							                    <td>

							                        <a href="<?php echo $this->base."/admin/dicas/view/".$dica['id']."/".$categoria['CategoriasDica']['id']; ?>" class="name"><?php echo h($dica['titulo']); ?></a>
							                    </td>

							                    <td>
							                        <?php 
							                        echo $dica['activo'] ? "<span class=\"label label-success\">Visível</span>" : "<span class=\"label\">Não Visível</span>";
							                        ?>
							                    </td>
							                    
							                    <td>
							                        <ul class="actions">
							                            <li><a href="<?php echo $this->base; ?>/admin/dicas/edit/<?php echo $dica['id']; ?>/<?php echo $categoria['CategoriasDica']['id']; ?>"><i class="table-edit"></i></a></li>
							                            <li class="last"><a class="treatmentDelete" href="<?php echo $this->base; ?>/admin/dicas/delete/<?php echo $dica['id']; ?>"><i class="table-delete"></i></a></li>
							                        </ul>
							                    </td>
							                </tr>
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
    <h3><?php echo __("Apagar Dica"); ?></h3>
  </div>
  <div class="modal-body">
    <p><?php echo __("Está prestes a pagar esta dica e essa operação é irreversível."); ?></p>
    <p><strong><?php echo __("De certeza que pretende apagar a Dica?"); ?></strong></p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn-flat gray" data-dismiss="modal" >Fechar</a>
    <a href="#" class="btn-flat default" id="deleteBtn">Apagar Dica</a>
  </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		if(window.location.hash === '#tab2'){
			$('a[href="#tab2"]').trigger('click');
		}
	});
	
</script>
