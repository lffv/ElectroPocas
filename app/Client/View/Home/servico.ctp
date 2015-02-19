<div class="clearfix"></div>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 style="margin-top:17px;"><?php echo __('Serviços'); ?></h4>
				
			</div>
			<div class="col-md-6">
				<div class="crumbs">
					<?php echo __('Você esta aqui: '); ?>
						<a href="<?php echo $this->base ?>/">
							<?php echo __('Home'); ?>
						</a>
						<span class="crumbs-span">»</span>
						<a href="<?php echo $this->base ?>/Servicos">
							<span><?php echo __('Serviços');  ?></span>
						</a>
						<span class="crumbs-span">»</span>
						<span><?php echo $location; ?></span>
				</div>
			</div>
		</div><!-- End row -->
	</div><!-- End container -->
</div>

<div class="sections">
	<div class="container">
		<div class="head-title"><h6><?php echo $servico['Servico']['designacao']; ?></h6></div>
		<div class="row">
			<div class="col-md-12">
				<div class="single-portfolio-slide">
					<ul>
						<li><img alt="<?php echo $servico['Servico']['designacao']; ?>" src="<?php echo $this->base."/uploads/".$servico['Servico']['imagem']; ?>"></li>
					</ul>
				</div><!-- End single-portfolio-slide -->
			</div>
		</div><!-- End row -->
	</div><!-- End container -->
</div><!-- End sections -->


	<div class="sections">
		<div class="container">
			<div class="row">
				<div class="col-md-12 main-content">
					<div class="row">

						<?php foreach ($servico['Produto'] as $produto):?>
							<?php if($produto['activo'])://echo debug($produto);?>
							<div class="col-md-4 blog-item">
								<div class="blog-one">
									<div class="blog-img">
										<img alt="<?php echo $produto['designacao']; ?>" src="<?php echo $this->base."/uploads/".$produto['imagem']; ?>">
										
									</div><!-- End blog-img -->
									<div class="blog-content">
										<h6><a href="#"><?php echo $produto['designacao']; ?></a></h6>
										<p><?php echo $produto['texto']; ?></p>
									</div><!-- End blog-content -->
									<div class="clearfix"></div>
								</div><!-- End blog-item -->
							</div>
						<?php endif;endforeach;?>

					</div><!-- End row -->
				</div><!-- End main-content -->
			</div><!-- End row -->
			
		</div><!-- End container -->
	</div><!-- End sections -->