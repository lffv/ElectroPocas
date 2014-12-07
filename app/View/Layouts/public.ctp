<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="pt"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="pt"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="pt"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>ElectroPoças</title>
	<meta name="title" content="<?php echo $metatags[0]['Metatag']['title'] ?>">
	<meta name="description" content="<?php echo $metatags[0]['Metatag']['description'] ?>">
	<meta name="keywords" content="<?php echo $metatags[0]['Metatag']['keywords'] ?>">
	<meta name="author" content="ElectroPoças, lda.">
	
	<meta name="fragment" content="!">
	<meta name="robots" content="index, follow">
	<?php 
		
    	echo $this->Html->css('style.css');
    	echo $this->Html->css('skins/blue.css');
    	echo $this->Html->css('responsive');
		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo $this->base ?>/images/favicon.ico">
  
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="fixed-enabled grid_1200">
	
	<header id="header-top">
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-6">
					<div class="phone-email"><i class="fa fa-phone"></i>+ 2 0106 5370701</div>
					<div class="phone-email phone-email-2"><i class="fa fa-envelope"></i>7oroof@7oroof.com</div>
				</div>
				<div class="col-md-6">
					<div class="social-ul">
						<ul>
							<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
							<li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li class="social-youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
							<li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- End container -->
	</header><!-- End header -->
	
	<header id="header">
		<div class="container clearfix">
			<div class="logo"><a href="<?php echo $this->base ?>"><img alt="<?php echo __('Electro Poças'); ?>" src="<?php echo $this->base ?>/images/logo.png"></a><span><?php echo __('Electro Poças'); ?></span></div>
			<!--
			<div class="header-search">
				<div class="header-search-a"><i class="fa fa-search"></i></div>
				<div class="header-search-form">
					<form method="post">
						<input type="text" placeholder="Search Words Here">
					</form>
				</div>
			</div>
			-->
			
			<?php 
				echo $this->element('navigation'); 
			?>
			
		</div><!-- End container -->
	</header><!-- End header -->
	
	<div class="clearfix"></div>
	
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
	<?php echo $this->element('footer'); ?>


	
</div><!-- End wrap -->

<div class="go-up"><i class="fa fa-chevron-up"></i></div>

<!-- js -->

<!-- End js -->
<script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDBFAvQ8vqdQX212fXbQHq9ECknlx2EPds&sensor=true">
    </script>
<?php 

        echo $this->Html->script('jquery.min');
        echo $this->Html->script('html5');
        echo $this->Html->script('jquery.isotope.min');
		echo $this->Html->script('jquery.nicescroll.min');
	    echo $this->Html->script('jquery.appear');
	    echo $this->Html->script('count-to');
        echo $this->Html->script('smooth-scroll.min');
	    echo $this->Html->script('twitter/jquery.tweet');
        echo $this->Html->script('jquery.inview.min');
        echo $this->Html->script('jquery.prettyPhoto');
        echo $this->Html->script('jquery.bxslider.min');
        echo $this->Html->script('jquery.themepunch.plugins.min');
        echo $this->Html->script('jquery.themepunch.revolution.min');
        echo $this->Html->script('custom');

        echo $this->fetch('script');

	?>

<script type="text/javascript">
	
	

</script>

</body>
</html>