<div class="container-fluid">
    <div id="pad-wrapper" class="users-list">
        <div class="row-fluid header">
            <h3>Utilizadores</h3>
            <div class="span10 pull-right">
                <a href="<?php echo $this->base; ?>/users/add/" class="btn-flat success pull-right">
                    <span>+</span>
                    NOVO UTILIZADOR
                </a>
            </div>
        </div>

        <!-- Users table -->
        <div class="row-fluid table">
            <table class="table table-products table-hover">
                <thead>
                    <tr>
                        <th class="span4 sortable">
                            Name
                        </th>
                        <th class="span3 sortable">
                            <span class="line"></span>Signed up
                        </th>
                        <th class="span2 sortable">
                            <span class="line"></span>Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                <!-- row -->
                <?php $i = 0; $class="";
                foreach ($users as $user): $i++;?>
                <?php if($i == 1)  $class = ' class="first" '; else $class=""; ?>
                <tr <?php echo $class; ?>>
                    <td>
                        <img src="<?php echo $this->base; ?>/img/contact-img.png" class="img-circle avatar hidden-phone" />
                        <a href="<?php echo $this->base."/users/edit/".$user['User']['id']."/"; ?>" class="name"><?php echo h($user['User']['name']); ?></a>
                        <span class="subtext"><?php echo h($user['User']['email']); ?></span>
                    </td>
                    <td>
                        <?php echo $this->Time->niceShort($user['User']['created']); ?>
                    </td>
                    <td>
                        <?php 
                        echo $user['User']['active'] ? "<span class=\"label label-success\">Active</span>" : "<span class=\"label\">Not Active</span>";
                        ?>
                        <ul class="actions">
                            <li><a href="<?php echo $this->base; ?>/users/edit/<?php echo $user['User']['id']; ?>"><i class="table-edit"></i></a></li>
                            <li class="last"><a class="userDelete" href="<?php echo $this->base; ?>/users/delete/<?php echo $user['User']['id']; ?>"><i class="table-delete"></i></a></li>
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
<div id="userDeleteModal" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3><?php echo __("Apagar Utilizador"); ?></h3>
  </div>
  <div class="modal-body">
    <p><?php echo __("Está prestes a pagar este utilizador e essa operação é irreversível."); ?></p>
    <p><strong><?php echo __("De certeza que pretende apagar o utilizador?"); ?></strong></p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn-flat gray" data-dismiss="modal" >Fechar</a>
    <a href="#" class="btn-flat default" id="deleteBtn">Apagar Utilizador</a>
  </div>
</div>