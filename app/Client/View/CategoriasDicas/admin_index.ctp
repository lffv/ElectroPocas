<div class="container-fluid">
    <div id="pad-wrapper" class="users-list">
        <div class="row-fluid header">
            <h3>Categorias de Dicas</h3>
            <div class="span10 pull-right">
                <a href="<?php echo $this->base; ?>/admin/categorias_dicas/add/" class="btn-flat success pull-right">
                    <span>+</span>NOVA CATEGORIA

                </a>
            </div>
        </div>


        <!-- Users table -->
        <div class="row-fluid table">
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
                foreach ($categorias as $categoria): $i++;?>

                <?php if($i == 1)  $class = ' class="first" '; else $class=""; ?>
                <tr <?php echo $class; ?>>
                    <td>
                        <a href="<?php echo $this->base."/admin/categorias_dicas/view/".$categoria['CategoriasDica']['id']."/"; ?>" class="name"><?php echo h($categoria['CategoriasDica']['designacao']); ?></a>
                    </td>
                    <td>
                        <?php 
                        echo $categoria['CategoriasDica']['activo'] ? "<span class=\"label label-success\">Visível</span>" : "<span class=\"label\">Não Visível</span>";
                        ?>
                    </td>
                    <!--
                    <td>
                        <img src="<?php echo $this->base; ?>/uploads/<?php echo $servico['Servico']['imagem']; ?>">
                    </td>-->
                    
                    <td>
                        <ul class="actions">
                            <li><a href="<?php echo $this->base; ?>/admin/categorias_dicas/edit/<?php echo $categoria['CategoriasDica']['id']; ?>"><i class="table-edit"></i></a></li>
                            <li class="last"><a class="treatmentDelete" href="<?php echo $this->base; ?>/admin/categorias_dicas/delete/<?php echo $categoria['CategoriasDica']['id']; ?>"><i class="table-delete"></i></a></li>
                        </ul>
                    </td>
                </tr>
                <?php 
                endforeach; ?>
                <!-- row -->
                </tbody>
            </table>
        </div>
        <div class="pagination pull-right">
            <ul>
                <?php
                echo $this->Paginator->prev(__('‹'), array('tag' => 'li'), null, array('tag' => 'li','disabledTag'=>'a'));
                echo $this->Paginator->numbers(array('separator' => '', 'tag'=>'li', 'currentClass'=> 'active', 'currentTag'=>'a'));
                echo $this->Paginator->next(__('›'), array('tag'=>'li'), null, array('class' => 'next disabled','tag' => 'li','disabledTag'=>'a'));
                ?>
            </ul>
        </div>
        <!-- end users table -->
    </div>
</div>
<div id="treatmentDeleteModal" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3><?php echo __("Apagar Categoria"); ?></h3>
  </div>
  <div class="modal-body">
    <p><?php echo __("Está prestes a pagar esta Categoria e essa operação é irreversível."); ?></p>
    <p><strong><?php echo __("De certeza que pretende apagar o Categoria?"); ?></strong></p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn-flat gray" data-dismiss="modal" >Fechar</a>
    <a href="#" class="btn-flat default" id="deleteBtn">Apagar Categoria</a>
  </div>
</div>