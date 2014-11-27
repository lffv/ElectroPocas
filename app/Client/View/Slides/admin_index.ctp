<div class="container-fluid">
    <div id="pad-wrapper" class="users-list">
        <div class="row-fluid header">
            <h3>Slides</h3>
        </div>


        <!-- Users table -->
        <div class="row-fluid table">
            <table class="table table-products table-hover">
                <thead>
                    <tr>
                        <th class="span4 sortable">Ordem
                        </th>
                        <th class="span4 sortable">Transicao
                        </th>
                        <th class="span4 sortable">Tipo Layout
                        </th>
                        <th class="span2 sortable">
                            <span class="line"></span>Estado
                        </th>
                    </tr>
                </thead>
                <tbody>
                <!-- row -->
                <?php $i = 0; $class="";
                foreach ($slides as $slide): $i++;?>

                <?php if($i == 1)  $class = ' class="first" '; else $class=""; ?>
                <tr <?php echo $class; ?>>
                    <td>
                        <a href="<?php echo $this->base."/admin/slides/view/".$slide['Slide']['id']."/"; ?>" class="name"><?php echo h($slide['Slide']['ordem']); ?></a>
                    </td>
                    <td>
                        <?php echo h($slide['Slide']['transicao']); ?>
                    </td>

                    <td>
                        <img src="<?php echo $this->base; ?>/images/layout<?php echo h($slide['Slide']['tipo_layout']); ?>.png">
                    </td>
                    <td>
                        <?php 
                        echo $slide['Slide']['activo'] ? "<span class=\"label label-success\">Visível</span>" : "<span class=\"label\">Não Visível</span>";
                        ?>
                    </td>
                    <td>
                        <ul class="actions">
                            <li><a href="<?php echo $this->base; ?>/admin/slides/edit/<?php echo $slide['Slide']['id']; ?>"><i class="table-edit"></i></a></li>
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
