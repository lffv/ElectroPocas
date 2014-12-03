<?php 
	isset($data->menu) ? $menu = $data->menu: $menu = "" ;
	$classHome = "";
	$classAbout = "";
	$classServico = "";
	$classDica = "";
	$classNoticia = "";
	$classContacto = "";

	switch ($menu) {
		case 'home':
			$classHome = "current_page_item";
			break;
		case 'aboutus':
			$classAbout = "current_page_item";
			break;
		case 'servicos':
			$classServico = "current_page_item";
			break;
		case 'dicas':
			$classDica = "current_page_item";
			break;
		case 'noticias':
			$classNoticia = "current_page_item";
			break;
		case 'contactos':
			$classContacto = "current_page_item";
			break;
		
		default: break;
	}
?>

<nav class="navigation">
	<ul>
		<li class="<?php echo $classHome; ?>"><a href="<?php echo $this->base ?>"><?php echo __('Home'); ?></a></li>
		<li class="<?php echo $classAbout; ?>"><a href="<?php echo $this->base ?>/AboutUs"><?php echo __('Sobre Nós'); ?></a></li>
		<li class="<?php echo $classServico; ?>"><a href="<?php echo $this->base ?>/Servicos"><?php echo __('Serviços'); ?></a></li>
		<li class="<?php echo $classDica; ?>"><a href="<?php echo $this->base ?>/DicasDePoupanca"><?php echo __('Dicas de Poupanca'); ?></a></li>
		<li class="<?php echo $classNoticia; ?>"><a href="<?php echo $this->base ?>/Noticias"><?php echo __('Notícias'); ?></a></li>
		<li class="<?php echo $classContacto; ?>"><a href="<?php echo $this->base ?>/Contactos"><?php echo __('Contactos'); ?></a></li>
	</ul>
</nav><!-- End navigation -->