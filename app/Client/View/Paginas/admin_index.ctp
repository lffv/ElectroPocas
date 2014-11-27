<div class="container-fluid">
    <div id="pad-wrapper" class="users-list">
        <div class="row-fluid header">
            <h3>Metatags/Páginas</h3>
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
                foreach ($paginas as $pagina): $i++;?>

                <?php if($i == 1)  $class = ' class="first" '; else $class=""; ?>
                <tr <?php echo $class; ?>>
                    <td class="">
                        <a href="<?php echo $this->base."/admin/paginas/view/".$pagina['Pagina']['id']."/"; ?>" class="name"><?php echo h($pagina['Pagina']['designacao']); ?>
                        </a>
                    </td>
                    <!--
                    <td>
                        <img src="<?php echo $this->base; ?>/uploads/<?php echo $servico['Servico']['imagem']; ?>">
                    </td>-->
                    <td>
                        <ul class="actions">
                            <li><a href="<?php echo $this->base; ?>/admin/paginas/edit/<?php echo $pagina['Pagina']['id']; ?>"><i class="table-edit"></i></a></li>
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
