<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
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
        echo $this->Html->css('bootstrap/bootstrap');
        echo $this->Html->css('bootstrap/bootstrap-responsive');
        echo $this->Html->css('bootstrap/bootstrap-overrides');

        //libraries 
        echo $this->Html->css('lib/jquery-ui-1.10.2.custom');
        echo $this->Html->css('lib/font-awesome');

        //global styles
        echo $this->Html->css('layout');
        echo $this->Html->css('elements');
        echo $this->Html->css('icons');

        echo $this->Html->css('compiled/signup');



        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>

    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="header">
        <a href="#">
            <img src="<?php echo $this->base; ?>/img/logo.png" class="logo" />
        </a>
    </div>
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->fetch('content'); ?>

	<!-- scripts -->
    <?php 
        echo $this->Html->script('jquery-latest');
        echo $this->Html->script('bootstrap.min');
    ?>
</body>
</html>