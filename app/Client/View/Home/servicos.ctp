<div class="clearfix"></div>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4>Our Portfolio</h4>
				<span>Latest Awesome &amp; Creative Works</span>
			</div>
			<div class="col-md-6">
				<div class="crumbs">You are here: <a href="index.html">Home</a><span class="crumbs-span">»</span><span>Portfoilo</span></div>
			</div>
		</div><!-- End row -->
	</div><!-- End container -->
</div>
<div class="sections">
	<div class="container">
		<div class="row">
			<div class="col-md-12 main-content">
				<div class="row portfolio-all portfolio-0">
					<ul class="isotope" style="position: relative; overflow: hidden; height: 1508px;">

					<!-- Row Start --> 
						<?php 
							
							foreach ($data->servicos as $serv) :	
							?>
				 			
								

								
								<li class="col-md-3 term-design portfolio-item isotope-item">
									<div class="portfolio-one">
										<div class="portfolio-head">
											<div class="portfolio-img"><img alt="<?php echo $serv['Servico']['designacao']?>" src="<?php echo $this->base."/uploads/".$serv['Servico']['imagem']; ?>"></div>
											<div class="portfolio-hover">
												<a class="portfolio-link" href="single-portfolio.html"><i class="fa fa-link"></i></a>
												<a class="portfolio-zoom prettyPhoto" href="<?php echo $this->base."/uploads/".$serv['Servico']['imagem']; ?>"><i class="fa fa-search"></i></a>
											</div>
										</div><!-- End portfolio-head -->
										<div class="portfolio-content">
											<i class="fa fa-leaf"></i>
											<div class="portfolio-meta">
												<div class="portfolio-name"><h6><a href="single-portfolio.html"><?php echo $serv['Servico']['designacao']?></a></h6></div>
											</div><!-- End portfolio-meta -->
										</div><!-- End portfolio-content -->
									</div><!-- End portfolio-item -->
								</li>
								


							
					 	<?php endforeach; ?>
					</ul>
				</div><!-- End portfolio-0 -->

				<div class="pagination">
					<ul>
						<li class="pagination-prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li class="pagination-next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div><!-- End pagination -->

			</div><!-- End main-content -->
		</div><!-- End row -->
	</div><!-- End container -->
</div>

<!-- PARCEIROS -->
	<div class="sections sections-padding-b-50" style="padding:0px;">
		<div class="container">
			<div class="head-title"><h6>Parceiros</h6></div>
			<div class="row">
				<div class="bxslider-slide bxslider-slide-title clients-slide">
					<ul>
					<?php foreach ($data->parceiros as $bloco) :	?>
			 			<li>
							<?php foreach ($bloco as $parc) :	
							?>
							<div class="col-md-2 client-item">
								<div class="client"><a target="_blank" href="<?php echo $parc['Parceiro']; ?>"><img alt="<?php echo $parc['Parceiro']['designacao']; ?>" src="<?php echo $this->base."/uploads/".$parc['Parceiro']['imagem']; ?>"></a></div>
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