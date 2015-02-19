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
	<meta name="robots" content="noindex, nofollow">
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
	
<style>
 .reparacoes-text:hover,
 .reparacoes:hover{
 	color:#000;
 }

 .reparacoes-text{
 	color:#acacac;
 }
</style>

	<header id="header-top">
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-6">
					<div class="phone-email" style="color:#acacac;"><i class="fa fa-phone" style="color:#0a9fd8;"></i>962 877 701</div>
					<div class="phone-email phone-email-2" style="color:#acacac;"><i style="color:#0a9fd8;" class="fa fa-envelope"></i>info@electropocas.pt</div>
					<div class="phone-email phone-email-2 reparacoes">
					<i class="fa fa-envelope"></i><a href="http://reparacoes.electropocas.pt" target="_blank" class="reparacoes-text" style="">Centro de Reparações</a></div>
				</div>
				<div class="col-md-6">
					<div class="social-ul">
						<ul>
							<li class="social-facebook"><a target="_blank" href="http://www.facebook.com/electropocas"><i class="fa fa-facebook"></i></a></li>

							<li class="social-twitter"><a target="_blank" href="http://twitter.com/electropocas"><i class="fa fa-twitter"></i></a></li>

							<li class="social-google"><a target="_blank" href="http://plus.google.com/+ElectroPoçasCeloricodeBasto"><i class="fa fa-google-plus"></i></a></li>

							<li class="social-pinterest"><a target="_blank" href="http://www.pinterest.com/ElectroPocas"><i class="fa fa-pinterest"></i></a></li>

							<li class="social-vimeo"><a  target="_blank" href="http://vimeo.com/electropocas"><i class="fa fa-vimeo-square"></i></a></li>

							<li class="social-linkedin"><a target="_blank" href="http://www.linkedin.com/company/electro-po-as"><i class="fa fa-linkedin"></i></a></li>
							
							<li class="social-youtube"><a target="_blank" href="https://www.youtube.com/channel/UCH922ssBWhqhXzZhkBSipnQ"><i class="fa fa-youtube-play"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- End container -->
	</header><!-- End header -->
	
	<header id="header">
		<div class="container clearfix">
			<div class="logo"><a href="<?php echo $this->base ?>"><img alt="<?php echo __('Electro Poças'); ?>" src="<?php echo $this->base ?>/images/logo.png"></a></div>
			
			<div class="header-search">
				<div class="header-search-a"><i class="fa fa-search"></i></div>
				<div class="header-search-form">
					<form method="post" action="<?php echo $this->base;?>/Search">
						<input name="stringSearch" type="text" placeholder="Pesquisa">
					</form>
				</div>
			</div>
			
			
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
    	<script src="https://apis.google.com/js/client.js"> </script>
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
        echo $this->Html->script('jquery.sharrre.min');
        echo $this->Html->script('custom');

	

        echo $this->fetch('script');

	?>

<script type="text/javascript">
	
	

</script>

</body>
</html>