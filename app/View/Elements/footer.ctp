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

									foreach ($noticias as $bloco) :	

									$i=0;?>
					 				<li>
										<?php foreach ($bloco as $noticiaTmp) :	
											  $noticia = $noticiaTmp;
											  if($i < 2):
											  $newDate = date("M d, Y", strtotime($noticia['Noticia']['data']));
										?>
											
											<div class="widget-post-img"><img alt="" src="<?php echo $this->base."/uploads/".$noticia['Image'][0]['name']; ?>"></div>
											<div class="widget-post-content">
												<h6><a href="#"><?php echo $noticia['Noticia']['titulo'] ?></a></h6>
												<span><?php echo __('Data')?> : <?php echo $newDate?></span>
											</div>

										<?php 
											endif;
											$i++;
										endforeach;?>
									</li>
								<?php endforeach;?>

							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="widget-title"><h6>Latest Tweets</h6></div>
						<div class="widget-twitter">
							<div class="footer-tweet"></div>
						</div>
					</div>
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</footer><!-- End footer -->

	<footer id="footer-bottom">
		<div class="container">
			<div class="copyrights">Copyright 2014 Ori | Designer By <a target="_blank" href="http://7oroof.com/">7oroof</a> | Developer By <a target="_blank" href="http://2code.info/">2code</a></div>
			<nav class="navigation-footer">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="features.html">Features</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="portfolio-description.html">Portfolio</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="shortcodes.html">Shortcodes</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div><!-- End container -->
	</footer><!-- End footer-bottom -->