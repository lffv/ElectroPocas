<div class="clearfix"></div>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 style="margin-top:17px;"><?php echo __('Notícias'); ?></h4>
				
			</div>
			<div class="col-md-6">
				<div class="crumbs"><?php echo __('Você esta aqui: '); ?><a href="<?php echo $this->base ?>/"><?php echo __('Home'); ?></a><span class="crumbs-span">»</span><span><?php echo __('Notícias'); ?></span></div>
			</div>
		</div><!-- End row -->
	</div><!-- End container -->
</div>
<div class="sections">
		<div class="container">
			<div class="row">
				<div class="col-md-12 main-content">
					<div class="row">
					<?php foreach ($data->all_noticias as $noticia):
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
						<?php //echo debug($noticia['Noticia']['hashtag']);?>
						<div class="col-md-12" id="<?php echo $noticia['Noticia']['hashtag'];?>">
							<div class="blog-item blog-item-2">
								<div class="blog-img">
									<img alt="<?php echo $noticia['Noticia']['titulo']?>" src="
										<?php echo $this->base."/uploads/".$noticia['Image'][0]['name']; ?>">
										<div class="blog-date"><span><?php echo $dataNoticia[2]; ?></span><span><?php echo $mes.', '.$dataNoticia[0]; ?></span></div>
									</div><!-- End blog-img -->
									<div class="blog-content">
										<h6><a href="#<?php echo $noticia['Noticia']['hashtag']?>"><?php echo $noticia['Noticia']['titulo']?></a></h6>
										<p><?php echo $noticia['Noticia']['texto']?></p>
									</div><!-- End blog-content -->
									<div class="clearfix"></div>
									<div class="social-ul social-ul-2 post-social">
										<ul>
											<li class="social-facebook share-btn" data-url="http://electropocas.pt/OG/share/<?php echo $noticia['Noticia']['id'] ?>"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="social-twitter share-btn" data-text="<?php echo $noticia['Noticia']['titulo'] ?>" data-url="http://electropocas.pt/Noticia/<?php echo $noticia['Noticia']['hashtag'] ?>"><a href="#"><i class="fa fa-twitter share-btn"></i></a></li>
											<li class="social-google share-btn" data-url="http://electropocas.pt/OG/share/<?php echo $noticia['Noticia']['id'] ?>"><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div><!-- End post-social -->
								</div><!-- End blog-item -->

							</div>


					<?php endforeach;?>
						
							
					</div><!-- End row -->
					<div class="pagination">
						<ul>
							<?php if($data->paginationLinks->hasPrev):?>
								<li class="pagination-prev">
									<a href="<?php echo $this->base ?>/Noticias/<?php echo ($data->paginationLinks->page-1); ?>">
										<i class="fa fa-angle-left"></i>
									</a>
								</li>	
							<?php endif;?>
								

							<?php for ($i=1;$i <= $data->paginationLinks->numPages;$i++):?>
								<li <?php if($data->paginationLinks->page == $i){ echo('class="active"'); }?>
								>
									<a href="<?php echo $this->base ?>/Noticias/<?php echo $i; ?>">
										<?php echo $i; ?>
									</a>
								</li>
							<?php endfor; ?>


							<?php if($data->paginationLinks->hasNext):?>
								<li class="pagination-next"><a href="<?php echo $this->base ?>/Noticias/<?php echo ($data->paginationLinks->page+1); ?>"><i class="fa fa-angle-right"></i></a></li>	
							<?php endif;?>
						</ul>
					</div><!-- End pagination -->
				</div><!-- End main-content -->
			</div><!-- End row -->
			
		</div><!-- End container -->
	</div><!-- End sections -->