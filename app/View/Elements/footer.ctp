	
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="widget-title"><h6><?php echo __('Sobre Nós'); ?></h6></div>
						<div class="widget-about">
							<p>O nosso principal objectivo, baseia-se em garantir inovação, qualidade e responsabilidade, dando assim credibilidade que nos possibilita criar com o cliente uma relação sólida e de longa duração.</p>
							<div class="social-ul">
								<ul>
									<li class="social-facebook"><a target="_blank" href="http://www.facebook.com/electropocas"><i class="fa fa-facebook"></i></a></li>

									<li class="social-twitter"><a target="_blank" href="http://twitter.com/electropocas"><i class="fa fa-twitter"></i></a></li>

									<li class="social-google"><a target="_blank" href="http://plus.google.com/+ElectroPoçasCeloricodeBasto"><i class="fa fa-google-plus"></i></a></li>

									<li class="social-pinterest"><a target="_blank" href="http://www.pinterest.com/ElectroPocas"><i class="fa fa-pinterest"></i></a></li>

									<li class="social-vimeo"><a  target="_blank" href="http://vimeo.com/electropocas"><i class="fa fa-vimeo-square"></i></a></li>

									<li class="social-linkedin"><a target="_blank" href="http://www.linkedin.com/company/electro-po-as"><i class="fa fa-linkedin"></i></a></li>
									
									<li class="social-youtube"><a target="_blank" href="#"><i class="fa fa-youtube-play"></i></a></li>
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
									<div>Edifício do Mercado Municipal - Loja H, Britelo,</br> 4890 - 220, Celorico de Basto.</div>
								</li>
								<li>
									<i class="fa fa-phone"></i>
									<div>Dep. Comercial : 962 877 701</div>
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									<div>Email : info@electropocas.pt</div>
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
										
										$dataNoticia = explode('-',$noticia['Noticia']['data']);
										$dataNoticia[2] = substr($dataNoticia[2],0, 2);
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
												<img alt="<?php echo $noticia['Noticia']['titulo'] ?>" src="<?php echo $this->base."/uploads/".$noticia['Noticia']['imagem_mini']; ?>">
											</div>
											<div class="widget-post-content">
												<h6><a href="<?php echo $this->base."/Noticia/".$noticia['Noticia']['hashtag'] ?>"><?php echo $noticia['Noticia']['titulo'] ?></a></h6>
												<span><?php echo __('Data')?> : <?php echo $mes.' '.$dataNoticia[2].', '.$dataNoticia[0]?></span>
											</div>
										</li>
										
										<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="footer-widget">
						<div class="widget-title"><h6><?php echo __('electropocas.pt')?></h6></div>
						<div class="widget-posts menu-footer">
							<ul>
								<li class=""><a href="<?php echo $this->base ?>"><?php echo __('Home'); ?></a></li>
								<li class=""><a href="<?php echo $this->base ?>/AboutUs"><?php echo __('Sobre Nós'); ?></a></li>
								<li class=""><a href="<?php echo $this->base ?>/Servicos"><?php echo __('Serviços'); ?></a></li>
								<!--<li class=""><a href="<?php echo $this->base ?>/DicasDePoupanca"><?php echo __('Dicas de Poupanca'); ?></a></li>-->
								<li class=""><a href="<?php echo $this->base ?>/Noticias"><?php echo __('Notícias'); ?></a></li>
								<li class=""><a href="<?php echo $this->base ?>/Contactos"><?php echo __('Contactos'); ?></a></li>
							</ul>

						</div>
					</div>
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</footer><!-- End footer -->

	<footer id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyrights">&copy; 2014 ElectroPoças</div>
				</div>
				<div class="col-md-9">
					<img style="" src="<?php echo $this->base ?>/images/Footer_LeaderLogos.jpg" />
				</div>
			</div>
		</div><!-- End container -->
	</footer><!-- End footer-bottom -->