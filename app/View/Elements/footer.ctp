	
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="widget-title"><h6><?php echo __('Sobre Nós'); ?></h6></div>
						<div class="widget-about">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
							<div class="social-ul">
								<ul>
									<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
									<li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="widget-title"><h6><?php echo __('Contactos'); ?></h6></div>
						<div class="widget-about-2">
							<ul>
								<li>
									<i class="fa fa-map-marker"></i>
									<div>7oroof.com Network , 2 AlBahr St, Tanta , AlGharbia, Egypt.</div>
								</li>
								<li>
									<i class="fa fa-phone"></i>
									<div>Ori Sales Telephone No : 002 01065370701</div>
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									<div>Ori Sales Email Account : Sales@ori.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="widget-title"><h6>Latest Posts</h6></div>
						<div class="widget-posts">
							<ul>
							

								<?php 
									
									
									foreach ($noticiasFooter as $noticia) :	
										
										$dataNoticia = explode('/',$noticia['Noticia']['data']);
										switch ($dataNoticia[1]) {
											case 1: $mes ="Jan";break;
											case 2: $mes ="Fev";break;
											case 3: $mes ="Mar";break;
											case 4: $mes ="Abr";break;
											case 5: $mes ="Mai";break;
											case 6: $mes ="Jun";break;
											case 7: $mes ="Jul";break;
											case 8: $mes ="Ago";break;
											case 9: $mes ="Set";break;
											case 10: $mes ="Out";break;
											case 11: $mes ="Nov";break;
											case 12: $mes ="Dez";break;
											default:break;
										}
										
										?>

										<li>
											<div class="widget-post-img">
												<img alt="" src="<?php echo $this->base."/uploads/".$noticia['Image'][0]['name']; ?>">
											</div>
											<div class="widget-post-content">
												<h6><a href="#"><?php echo $noticia['Noticia']['titulo'] ?></a></h6>
												<span><?php echo __('Data')?> : <?php echo $mes.' '.$dataNoticia[0].', '.$dataNoticia[2]?></span>
											</div>
										</li>
										
										<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="widget-title"><h6><?php echo __('Ultímos Posts')?></h6></div>
						<div class="widget-twitter">
							<div class="fb-root"></div>
						</div>
					</div>
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</footer><!-- End footer -->

	<footer id="footer-bottom">
		<div class="container">
			<div class="copyrights">Copyright 2014 ElectroPoças  | Developer By <a target="_blank" href="<?php echo $this->base ?>/">ElectroPoças</a></div>
			<nav class="navigation-footer">
				<ul>
					<li class=""><a href="<?php echo $this->base ?>"><?php echo __('Home'); ?></a></li>
					<li class=""><a href="<?php echo $this->base ?>/AboutUs"><?php echo __('Sobre Nós'); ?></a></li>
					<li class=""><a href="<?php echo $this->base ?>/Servicos"><?php echo __('Serviços'); ?></a></li>
					<li class=""><a href="<?php echo $this->base ?>/DicasDePoupanca"><?php echo __('Dicas de Poupanca'); ?></a></li>
					<li class=""><a href="<?php echo $this->base ?>/Noticias"><?php echo __('Notícias'); ?></a></li>
					<li class=""><a href="<?php echo $this->base ?>/Contactos"><?php echo __('Contactos'); ?></a></li>
					
				</ul>
			</nav>
		</div><!-- End container -->
	</footer><!-- End footer-bottom -->