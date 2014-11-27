    <!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Canvas CMS :
		<?php //echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php 
		echo $this->Html->meta('icon');
	?>
    <!-- bootstrap -->
    <?php 
    	echo $this->Html->css('combined.min.css');
    	echo $this->Html->css('compiled/grids.css');
    	
    	echo $this->Html->css('bootstrap/bootstrap');
        echo $this->Html->css('bootstrap/bootstrap-responsive');
    	echo $this->Html->css('bootstrap/bootstrap-switch.min');
    	echo $this->Html->css('bootstrap/bootstrap-overrides');

/*
		//libraries 
    	echo $this->Html->css('lib/jquery-ui-1.10.2.custom');
    	echo $this->Html->css('lib/font-awesome');

    	//global styles
    	echo $this->Html->css('layout');
    	echo $this->Html->css('elements');
    	echo $this->Html->css('icons');

      echo $this->Html->css('compiled/index');
      echo $this->Html->css('compiled/tables');
      echo $this->Html->css('compiled/user-list');
      echo $this->Html->css('compiled/new-user');
      echo $this->Html->css('compiled/gallery');
      echo $this->Html->css('compiled/form-wizard');
      echo $this->Html->css('lib/bootstrap.datepicker');
      echo $this->Html->css('lib/bootstrap-fileupload.min');
      
      echo $this->Html->css('fileuploader');
      echo $this->Html->css('../plugins/elrte-1.3/css/elrte.min');
        */
		echo $this->fetch('meta');
		echo $this->fetch('css');
    ?>
    
    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- lato font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <?php 
        echo $this->Html->script('jquery-1.11.0.min');
        echo $this->Html->script('jquery-ui');
    ?>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <?php $base_url = Configure::read('base_url'); ?>
    <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="brand" href="<?php echo $this->base."/admin/"; ?>" ><img src="<?php echo $this->base; ?>/img/logo.png"></a>

            <ul class="nav pull-right">                
                <!-- <li class="hidden-phone">
                    <input class="search" type="text" />
                </li>
                <li class="notification-dropdown hidden-phone">
                    <a href="#" class="trigger">
                        <i class="icon-warning-sign"></i>
                        <span class="count">8</span>
                    </a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                            <div class="notifications">
                                <h3>You have 6 new notifications</h3>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> New user registration
                                    <span class="time"><i class="icon-time"></i> 13 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> New user registration
                                    <span class="time"><i class="icon-time"></i> 18 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-envelope-alt"></i> New message from Alejandra
                                    <span class="time"><i class="icon-time"></i> 28 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> New user registration
                                    <span class="time"><i class="icon-time"></i> 49 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-download-alt"></i> New order placed
                                    <span class="time"><i class="icon-time"></i> 1 day.</span>
                                </a>
                                <div class="footer">
                                    <a href="#" class="logout">View all notifications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> 
                <li class="notification-dropdown hidden-phone">
                    <a href="#" class="trigger">
                        <i class="icon-envelope-alt"></i>
                    </a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                            <div class="messages">
                                <a href="#" class="item">
                                    <img src="img/contact-img.png" class="display" />
                                    <div class="name">Alejandra Galván</div>
                                    <div class="msg">
                                        There are many variations of available, but the majority have suffered alterations.
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 13 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <img src="img/contact-img2.png" class="display" />
                                    <div class="name">Alejandra Galván</div>
                                    <div class="msg">
                                        There are many variations of available, have suffered alterations.
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 26 min.</span>
                                </a>
                                <a href="#" class="item last">
                                    <img src="img/contact-img.png" class="display" />
                                    <div class="name">Alejandra Galván</div>
                                    <div class="msg">
                                        There are many variations of available, but the majority have suffered alterations.
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 48 min.</span>
                                </a>
                                <div class="footer">
                                    <a href="#" class="logout">View all messages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
                        <?php echo AuthComponent::user('name'); ?>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $this->base."/users/edit/".AuthComponent::user('id'); ?>">O meu Perfil</a></li>
                        <li><a href="<?php echo $this->base; ?>/users/logout/">Sair</a></li>
                    </ul>
                </li>
                <!-- <li class="settings hidden-phone">
                    <a href="personal-info.html" role="button">
                        <i class="icon-cog"></i>
                    </a>
                </li> -->
                <li class="settings hidden-phone">
                    <a href="<?php echo $this->base; ?>/users/logout" role="button">
                        <i class="icon-share-alt"></i>
                    </a>
                </li>
            </ul>            
        </div>
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li>
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a id="home" href="<?php echo $this->base; ?>/admin/?sel=home">
                    <i class="icon-home"></i>
                    <span>Home</span>
                </a>
            </li> 
            <!--
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-cog"></i>
                    <span>Config.</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li id="1"><a href="<?php echo $this->base; ?>/metatags/edit/1/?sel=1">Configurações Gerais</a></li>
                </ul>
            </li>
            -->
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-th-large"></i>
                    <span>Conteúdos</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li id="2"><a href="<?php echo $this->base; ?>/admin/parceiros/index/?sel=2">Parceiros</a></li>
                    <li id="22"><a href="<?php echo $this->base; ?>/admin/servicos/index">Serviços</a></li>
                    <li id="23"><a href="<?php echo $this->base; ?>/admin/paginas/index">Metatags/Páginas</a></li>
                    <li id="23"><a href="<?php echo $this->base; ?>/admin/categorias_dicas/index">Categorias de Dicas</a></li>
                    <li id="23"><a href="<?php echo $this->base; ?>/admin/noticias/index">Notícias</a></li>
                    <li id="23"><a href="<?php echo $this->base; ?>/admin/slides/index">Banner</a></li>
                    <!--
                    <li id="20"><a href="<?php echo $this->base; ?>/banners/index/?sel=20">Banners HomePage</a></li>
                    -->
                </ul>
            </li>      
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>Utilizad.</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li id="16"><a href="<?php echo $this->base; ?>/users/index/?sel=16">Lista Utilizadores</a></li>
                    <li id="17"><a href="<?php echo $this->base; ?>/users/add/?sel=17">Novo Utilizador</a></li>
                    <li id="18"><a href="<?php echo $this->base."/users/edit/".AuthComponent::user('id')."/?sel=18"; ?>">O meu Perfil</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">

        <?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
		
    </div>


	<!-- scripts -->
	<?php 
	   

        echo $this->Html->script('jquery-latest');
        echo $this->Html->script('jquery.migrate');
        echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('bootstrap-switch.min');
	    echo $this->Html->script('jquery-ui-1.10.2.custom.min');
	    echo $this->Html->script('../plugins/elrte-1.3/js/elrte.min');
	    
	    echo $this->Html->script('fineuploader');
	    
	    echo $this->Html->script('jquery.knob');
	    echo $this->Html->script('jquery.flot');
	    echo $this->Html->script('jquery.flot.stack');
	    echo $this->Html->script('jquery.flot.resize');
	    echo $this->Html->script('bootstrap.datepicker');
	    echo $this->Html->script('bootstrap-fileupload.min');
		  
        //echo $this->Html->script('combined.min.js');
        echo $this->Html->script('jquery.tableDnD.js');
        echo $this->Html->script('costum');

        echo $this->fetch('script');
	    echo $this->Html->script('theme');
	?>
 
 </body>
</html>