	
<!-- SLIDESHOW -->
	<div class="slideshow">
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
				
				<?php
				$i = 0;
				foreach ($data->slides as $slideTmp) :

					$slide = $slideTmp['Slide'];

					if($slide['tipo_layout'] == 1): 
					 	?>
						<li data-transition="<?php echo $slide['transicao']; ?>" data-slotamount="7" data-masterspeed="1500">
							<!-- MAIN IMAGE -->
							<img src="<?php echo $this->base."/uploads/".$slide['bg_imagem']; ?>" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							
							<div class="slideshow-bg"
							data-y="310"
							data-x="center"
							data-start="0"></div>
							<!-- LAYERS -->
							
							<!-- LAYER NR. 1 -->
							<div class="slide-h2 tp-caption randomrotate skewtoleft tp-resizeme start white"
								data-y="160"
								data-x="center"
								data-hoffset="0"
								data-start="300"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-easing="Power3.easeInOut"
								data-endspeed="300"
								style="z-index: 2"><h2><?php echo $slide['titulo']; ?></h2>
							</div>
							
							<!-- LAYER NR. 2 -->
							<div class="slide-h3 tp-caption customin white"
								data-y="230"
								data-x="center"
								data-hoffset="0"
								data-start="600"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-easing="Power3.easeInOut"
								data-endspeed="300"
								style="z-index: 2"><h2><?php echo $slide['lead']; ?></h2>
							</div>
			
							<!-- LAYER NR. 3 -->
							<div class="slide-p tp-caption black randomrotate skewtoleft tp-resizeme start" 
								data-x="center" 
								data-hoffset="0" 
								data-y="310" 
								data-speed="500" 
								data-start="1300" 
								data-easing="Power3.easeInOut" 
								data-splitin="none" 
								data-splitout="none" 
								data-elementdelay="0.1" 
								data-endelementdelay="0.1" 
								data-endspeed="500" style="z-index: 6;white-space: pre-line;max-width: 1170px;text-align: center;"><p class="white"><?php echo $slide['texto1']; ?></p>
							</div>
							
							<!-- LAYER NR. 4 -->
							<div class="slide-a tp-caption customin"
								data-x="center"
								data-y="390"
								data-hoffset="100"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="1800"
								data-easing="Power3.easeInOut"
								data-endspeed="500"
								style="z-index: 4"><a href="<?php echo $slide['btn1_link']; ?>" class="button-4"><?php echo $slide['btn1']; ?></a>
							</div>
							
							<!-- LAYER NR. 5 -->
							<div class="slide-a slide-a-2 tp-caption customin"
								data-x="center"
								data-y="390"
								data-hoffset="-100"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="2100"
								data-easing="Power3.easeInOut"
								data-endspeed="500"
								style="z-index: 4"><a href="<?php echo $slide['btn2_link']; ?>" class="button-3"><?php echo $slide['btn2']; ?></a>
							</div>
						</li>
					<?php 
					endif;
				 	if($slide['tipo_layout'] == 2): 
					?>

						<li data-transition="<?php echo $slide['transicao']; ?>" data-slotamount="7" data-masterspeed="1000">
							<!-- MAIN IMAGE -->
							<img src="<?php echo $this->base."/uploads/".$slide['bg_imagem']; ?>" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							
							<div class="slideshow-bg"
							data-y="310"
							data-x="center"
							data-start="0"></div>
							<!-- LAYERS -->
							
							<!-- LAYER NR. 1 -->
							<div class="tp-caption lfl start"
								data-x="600"
								data-y="100"
								data-speed="400"
								data-start="1300"
								data-easing="easeOut"
								data-endspeed="500"><img src="<?php echo $this->base."/uploads/".$slide['imagem']; ?>" alt="">
							</div>
							
							<!-- Layer NR. 2 -->
							<div class="tp-caption color large_bg sfr start"
								data-x="0"
								data-y="110"
								data-start="1800"
								data-speed="700"
								data-easing="easeOutBounce"
								style="z-index: 4"><?php echo $slide['texto1']; ?>
							</div>
							
							<!-- Layer NR. 3 -->
							<div class="tp-caption color large_bg sft start"
								data-x="0"
								data-y="160"
								data-start="2300"
								data-speed="700"
								data-easing="easeOutBounce"
								style="z-index: 4"><?php echo $slide['texto2']; ?>
							</div>
							
							<!-- Layer NR. 4 -->
							<div class="tp-caption color large_bg sfl start"
								data-x="0"
								data-y="210"
								data-start="2800"
								data-speed="700"
								data-easing="easeOutBounce"
								style="z-index: 4"><?php echo $slide['texto3']; ?>
							</div>
							
							<!-- Layer NR. 5 -->
							<div class="tp-caption color large_bg sft start"
								data-x="0"
								data-y="260"
								data-start="3300"
								data-speed="700"
								data-easing="easeOutBounce"
								style="z-index: 4"><?php echo $slide['texto4']; ?>
							</div>
							
							<!-- Layer NR. 6 -->
							<div class="tp-caption color large_bg sfr start"
								data-x="0"
								data-y="310"
								data-start="3800"
								data-speed="700"
								data-easing="easeOutBounce"
								style="z-index: 4"><?php echo $slide['texto5']; ?>
							</div>
							
							<!-- Layer NR. 7 -->
							<div class="tp-caption color large_bg sft start"
								data-x="0"
								data-y="360"
								data-start="4300"
								data-speed="700"
								data-easing="easeOutBounce"
								style="z-index: 4"><?php echo $slide['texto6']; ?>
							</div>
						</li>
					<?php 
					endif;
				 	if($slide['tipo_layout'] == 3): 
					?>	
						<li data-transition="<?php echo $slide['transicao']; ?>" data-slotamount="7" data-masterspeed="1000">
							<!-- MAIN IMAGE -->
							<img src="<?php echo $this->base."/uploads/".$slide['bg_imagem']; ?>" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							
							<div class="slideshow-bg"
							data-y="310"
							data-x="center"
							data-start="0"></div>
							<!-- LAYERS -->
							
							<!-- LAYER NR. 1 -->
							<div class="tp-caption lfl start"
								data-x="300"
								data-y="150"
								data-speed="400"
								data-start="1300"
								data-easing="easeOut"
								data-endspeed="500"><img src="<?php echo $this->base."/uploads/".$slide['imagem']; ?>" alt="macbookpro">
							</div>
							
							<!-- Layer NR. 2 -->
							<div class="slide-h2 tp-caption randomrotate skewtoleft tp-resizeme start white"
								data-y="60"
								data-x="center"
								data-hoffset="0"
								data-start="2200"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-easing="Power3.easeInOut"
								data-endspeed="300"
								style="z-index: 2"><h2><?php echo $slide['titulo']; ?></h2>
							</div>
							
							<!-- Layer NR. 3 -->
							<div class="tp-caption color large_bg sfr start"
								data-x="0"
								data-y="110"
								data-start="2900"
								data-speed="700"
								data-easing="easeOutBounce"
								style="z-index: 4"><?php echo $slide['texto1']; ?>
							</div>
							
							<!-- Layer NR. 4 -->
							<div class="tp-caption color large_bg sft start"
								data-x="0"
								data-y="160"
								data-start="3400"
								data-speed="700"
								data-easing="easeOutBounce"
								style="z-index: 4"><?php echo $slide['texto2']; ?>
							</div>
							
							<!-- Layer NR. 5 -->
							<div class="tp-caption color large_bg sfl start"
								data-x="0"
								data-y="210"
								data-start="3900"
								data-speed="700"
								data-easing="easeOutBounce"
								style="z-index: 4"><?php echo $slide['texto3']; ?>
							</div>
							
							<!-- Layer NR. 6 -->
							<div class="tp-caption color large_bg sft start"
								data-x="900"
								data-y="110"
								data-start="4400"
								data-speed="700"
								data-easing="easeOutBounce"
								style="z-index: 4"><?php echo $slide['texto4']; ?>
							</div>
							
							<!-- Layer NR. 7 -->
							<div class="tp-caption color large_bg sfr start"
								data-x="930"
								data-y="160"
								data-start="4900"
								data-speed="700"
								data-easing="easeOutBounce"
								style="z-index: 4"><?php echo $slide['texto5']; ?>
							</div>
							
							<!-- Layer NR. 8 -->
							<div class="tp-caption color large_bg sft start"
								data-x="985"
								data-y="210"
								data-start="5400"
								data-speed="700"
								data-easing="easeOutBounce"
								style="z-index: 4"><?php echo $slide['texto6']; ?>
							</div>
						</li>
					<?php 
					endif;
				 	if($slide['tipo_layout'] == 4): 
					?>
						<li data-transition="<?php echo $slide['transicao']; ?>" data-slotamount="7" data-masterspeed="1000">
							<!-- MAIN IMAGE -->
							<img src="<?php echo $this->base."/uploads/".$slide['bg_imagem']; ?>" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							
							<div class="slideshow-bg"
							data-y="310"
							data-x="center"
							data-start="0"></div>
							<!-- LAYERS -->
							
							<!-- LAYER NR. 1 -->
							<div class="slide-h2 tp-caption randomrotate skewtoleft tp-resizeme start white"
								data-y="130"
								data-x="center"
								data-hoffset="0"
								data-start="300"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-easing="Power3.easeInOut"
								data-endspeed="300"
								style="z-index: 2"><h2><?php echo $slide['titulo']; ?></h2>
							</div>
							
							<!-- LAYER NR. 2 -->
							<div class="slide-h3 tp-caption customin white"
								data-y="200"
								data-x="center"
								data-hoffset="0"
								data-start="600"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-easing="Power3.easeInOut"
								data-endspeed="300"
								style="z-index: 2"><h2><?php echo $slide['lead']; ?></h2>
							</div>
			
							<!-- LAYER NR. 3 -->
							<div class="slide-p tp-caption black randomrotate skewtoleft tp-resizeme start" 
								data-x="center" 
								data-hoffset="0" 
								data-y="280" 
								data-speed="500" 
								data-start="1300" 
								data-easing="Power3.easeInOut" 
								data-splitin="none" 
								data-splitout="none" 
								data-elementdelay="0.1" 
								data-endelementdelay="0.1" 
								data-endspeed="500" style="z-index: 6;white-space: pre-line;max-width: 1170px;text-align: center;"><p class="white"><?php echo $slide['texto1']; ?></p>
							</div>
							
							<!-- LAYER NR. 4 -->
							<div class="slide-a slide-a-2 tp-caption customin"
								data-x="center"
								data-y="360"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="1800"
								data-easing="Power3.easeInOut"
								data-endspeed="500"
								style="z-index: 4"><a href="<?php echo $slide['btn1_link']; ?>" class="button-6"><?php echo $slide['btn1']; ?></a>
							</div>
						</li>
					<?php 
					endif;
				 	
			 	endforeach;
				?>
				</ul>
			</div>
		</div><!-- End tp-banner-container -->
	</div><!-- End slideshow -->
<!-- END SLIDESHOW -->

<!--SERVICOS-->
	<div class="sections section-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="head-title"><h6>Serviços</h6></div>
					<div class="row">

						<div class="bxslider-slide bxslider-slide-title blog-silde">
							<ul>
								<?php foreach ($data->servicos as $bloco) :	?>
						 			<li>
										<?php foreach ($bloco as $servTmp) :	
											$serv = $servTmp['Servico'];
										?>
								 			<div class="col-md-3 portfolio-item">
												<div class="portfolio-one">
													<div class="portfolio-head">
														<div class="portfolio-img"><img alt="" src="<?php echo $this->base."/uploads/".$serv['Image']['0'][name]; ?>"></div>
														<div class="portfolio-hover">
															<a class="portfolio-link" href="single-portfolio.html"><i class="fa fa-link"></i></a>
															<a class="portfolio-zoom prettyPhoto" href="<?php echo $this->base."/uploads/".$serv['imagem']; ?>"><i class="fa fa-search"></i></a>
														</div>
													</div><!-- End portfolio-head -->
													<div class="portfolio-content">
														<i class="fa fa-leaf"></i>
														<div class="portfolio-meta">
															<div class="portfolio-name"><h6><a href="single-portfolio.html"><?php echo $serv['designacao']?></a></h6></div>
														</div><!-- End portfolio-meta -->
													</div><!-- End portfolio-content -->
												</div><!-- End portfolio-item -->
											</div>
								 		<?php endforeach; ?>
									</li>
							 	<?php endforeach; ?>						
							</ul>
						</div><!-- End blog-silde -->
					</div><!-- End row -->
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End sections -->
<!-- END SERVICOS -->

<!--DICAS-->
	<div class="sections">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="head-title"><h6>Dicas de Poupança</h6></div>
					<div class="row">
						<div class="bxslider-slide bxslider-slide-title blog-silde">
							<ul>
							<?php foreach ($data->dicas as $bloco) :	?>
					 			<li>
									<?php foreach ($bloco as $dicaTmp) :	
										$dica = $dicaTmp['Dica'];
									?>
										<div class="col-md-3">
											<div class="box-icon">
												<div class="box-icon-i box-icon-i-2 box-icon-i-3 box-icon-i-4"><i class="fa fa-heart"></i></div>
												<div class="box-icon-content">
													<h5><?php echo $dica['titulo']?></h5>
													<p><?php echo $dica['texto']?></p>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</li>
						 	<?php endforeach; ?>
							</ul>
						</div><!-- End blog-silde -->
					</div><!-- End row -->
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End sections -->
<!-- END DICAS -->


<!--NOTICIAS-->
	<div class="sections section-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="head-title"><h6>Notícias</h6></div>
					<div class="row">
						<div class="bxslider-slide bxslider-slide-title blog-silde">
							<ul>
								<?php foreach ($data->noticias as $bloco) :	?>
					 			<li>
									<?php foreach ($bloco as $noticiaTmp) :	
										$noticia = $noticiaTmp;
									?>
									<div class="col-md-4 blog-item">
										<div class="blog-one">
											<div class="blog-img">
												<img alt="" src="<?php echo $this->base."/uploads/".$noticia['Image'][0]['name']; ?>">
												<div class="blog-date"><span>3</span><span>July, 2014</span></div>
											</div><!-- End blog-img -->
											<div class="blog-content">
												<h6><a href="single-blog.html">Blog Tiltle Shall Be Here !</a></h6>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, turpis. <a href="single-blog.html">Read More</a></p>
											</div><!-- End blog-content -->
											<div class="blog-meta">
												<div class="blog-author"><i class="fa fa-user"></i>Author : <a href="#">Begha</a></div>
												<div class="blog-comments"><i class="fa fa-comments"></i>Comments : <a href="#">22</a></div>
											</div><!-- End blog-meta -->
											<div class="clearfix"></div>
										</div><!-- End blog-item -->
									</div>
									<?php endforeach; ?>
								</li>
						 	<?php endforeach; ?>
								
							</ul>
						</div><!-- End blog-silde -->
					</div><!-- End row -->
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End sections -->
<!-- END NOTICIAS -->

<!-- PARCEIROS -->
	<div class="sections sections-padding-b-50">
		<div class="container">
			<div class="head-title"><h6>Parceiros</h6></div>
			<div class="row">
				<div class="bxslider-slide bxslider-slide-title clients-slide">
					<ul>
						<li>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="http://placehold.it/170x70/FFF/171717/"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="http://placehold.it/170x70/FFF/171717/"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="http://placehold.it/170x70/FFF/171717/"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="http://placehold.it/170x70/FFF/171717/"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="http://placehold.it/170x70/FFF/171717/"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="http://placehold.it/170x70/FFF/171717/"></a></div>
							</div>
						</li>
						<li>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="http://placehold.it/170x70/FFF/171717/"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="http://placehold.it/170x70/FFF/171717/"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="http://placehold.it/170x70/FFF/171717/"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="http://placehold.it/170x70/FFF/171717/"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="http://placehold.it/170x70/FFF/171717/"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="http://placehold.it/170x70/FFF/171717/"></a></div>
							</div>
						</li>
					</ul>
				</div><!-- End clients-slide -->
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End sections -->
<!-- END PARCEIROS -->