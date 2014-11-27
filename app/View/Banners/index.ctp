<div class="container-fluid">
    <div id="pad-wrapper" class="users-list">
        <div class="row-fluid header">
            <h3>Banners Homepage</h3>
            <div class="span10 pull-right">
                <a href="<?php echo $this->base; ?>/banners/add/" class="btn-flat success pull-right">
                    <span>+</span>NOVO BANNER
                </a>
            </div>
        </div>
        <div id="save_message" style="min-height:20px;margin:0;padding:0;">
					<div class="message_order" style="display:none;width:100%;margin:0;padding:0;">
					    <p><b>A ordenar os registos...</b></p>
					</div>
				</div>
        <!-- Users table -->
        <div class="row-fluid table">
            <table class="table table-products table-hover table-order" rel="<?php echo $this->base; ?>/banners/re_order/">
                <thead>
                    <tr>
                        <th class="span4 sortable">Texto Banner
                        </th>
                        <th class="span2 sortable">
                            <span class="line"></span>Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                <!-- row -->
                <?php $i = 0; $class="";
                foreach ($banners as $banner): $i++;?>
                <?php if($i == 1)  $class = ' class="first" '; else $class=""; ?>
                <tr <?php echo $class; ?> id="<?php echo $banner['Banner']['id']; ?>">
                    <td>
                        <a href="<?php echo $this->base."/banners/edit/".$banner['Banner']['id']."/"; ?>" class="name"><?php echo h($banner['Banner']['lead']); ?></a>
                    </td>
                    <td>
                        <?php 
                        echo $banner['Banner']['active'] ? "<span class=\"label label-success\">Activo</span>" : "<span class=\"label\">Não Activo</span>";
                        ?>
                        <ul class="actions">
                            <li><a href="<?php echo $this->base; ?>/banners/edit/<?php echo $banner['Banner']['id']; ?>"><i class="table-edit"></i></a></li>
                            <li class="last"><a class="testimonialDelete" href="<?php echo $this->base; ?>/banners/delete/<?php echo $banner['Banner']['id']; ?>"><i class="table-delete"></i></a></li>
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
<div id="testimonialDeleteModal" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3><?php echo __("Apagar Testemunho"); ?></h3>
  </div>
  <div class="modal-body">
    <p><?php echo __("Está prestes a pagar este Banner e essa operação é irreversível."); ?></p>
    <p><strong><?php echo __("De certeza que pretende apagar o Banner?"); ?></strong></p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn-flat gray" data-dismiss="modal" >Fechar</a>
    <a href="#" class="btn-flat default" id="deleteBtn">Apagar Banner</a>
  </div>
</div>