<div class="clearfix"></div>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 style="margin-top:17px;"><?php echo __('Serviços'); ?></h4>
				
			</div>
			<div class="col-md-6">
				<div class="crumbs"><?php echo __('Você esta aqui: '); ?><a href="<?php echo $this->base ?>/"><?php echo __('Home'); ?></a><span class="crumbs-span">»</span><span><?php echo __('Serviços'); ?></span></div>
			</div>
		</div><!-- End row -->
	</div><!-- End container -->
</div>


<div class="sections">
	<div class="container">
		<div class="head-title"><h6><?php echo __('Serviços'); ?></h6></div>
		<div class="row">
			<div class="col-md-12 main-content">
				<div class="row portfolio-all portfolio-0">
					<ul class="isotope" >

					<!-- Row Start --> 
						<?php 
							
							foreach ($data->servicos as $serv) :	

							?>
				 			
								<li class="col-md-3 term-design portfolio-item isotope-item">

									<div class="portfolio-one">
										<div class="portfolio-head">
											<div class="portfolio-img"><img alt="<?php echo $serv['Servico']['designacao']?>" src="<?php echo $this->base."/uploads/".$serv['Servico']['imagem']; ?>"></div>
											<div class="portfolio-hover">
												<!--<a class="portfolio-link" href="<?php echo $this->base."/Servico/".$serv['Servico']['slug']; ?>"><i class="fa fa-link"></i></a>-->
												<a class="portfolio-link" href="#"><i class="fa fa-link"></i></a>
												
												<a class="portfolio-zoom prettyPhoto" href="<?php echo $this->base."/uploads/".$serv['Servico']['imagem']; ?>"><i class="fa fa-search"></i></a>
											</div>
										</div><!-- End portfolio-head -->
										<div class="portfolio-content">
											<i class="fa <?php echo $serv['Servico']['icon'] ?>"></i>
											<div class="portfolio-meta">
												<div class="portfolio-name"><h6><a href="#"><?php echo $serv['Servico']['designacao']?> </a></h6></div>
												<!--<div class="portfolio-name"><h6><a href="<?php echo $this->base."/Servico/".$serv['Servico']['slug']; ?>"><?php echo $serv['Servico']['designacao']?> </a></h6></div>-->
											</div><!-- End portfolio-meta -->
										</div><!-- End portfolio-content -->
									</div><!-- End portfolio-item -->
								</li>
								


							
					 	<?php endforeach; ?>
					</ul>
				</div><!-- End portfolio-0 -->

			</div><!-- End main-content -->
		</div><!-- End row -->
	</div><!-- End container -->
</div>

<!-- PARCEIROS -->
	<div class="sections  section-2 sections-padding-b-50" >
		<div class="container">
			<div class="head-title"><h6><?php echo __('Parceiros'); ?></h6></div>
			<div class="row">
				<div class="bxslider-slide bxslider-slide-title clients-slide">
					<ul>
					<?php foreach ($data->parceiros as $bloco) :	?>
			 			<li>
							<?php foreach ($bloco as $parc) :	
							?>
							<div class="col-md-2 client-item">
								<div class="client"><a target="_blank" href="<?php echo $parc['Parceiro']['link']; ?>"><img alt="<?php echo $parc['Parceiro']['designacao']; ?>" src="<?php echo $this->base."/uploads/".$parc['Parceiro']['imagem']; ?>"></a></div>
							</div>
							<?php endforeach; ?>
						</li>
				 	<?php endforeach; ?>
					</ul>
				</div><!-- End clients-slide -->
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End sections -->
<!-- END PARCEIROS -->
