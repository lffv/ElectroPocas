<div class="sections">
		<div class="container">
			<div class="row">
				<div class="col-md-12 main-content">
					<div class="row">
					<?php foreach ($data->all_noticias as $noticia):

							$newDate = date("M, Y", strtotime($noticia['Noticia']['data']));
							$newDateDay = date("d", strtotime($noticia['Noticia']['data']));
							
							echo debug($noticia['Noticia']['data']);

						?>
						<div class="col-md-12">
							<div class="blog-item blog-item-2">
								<div class="blog-img">
									<img alt="" src="
										<?php echo $this->base."/uploads/".$noticia['Image'][0]['name']; ?>">
										<div class="blog-date"><span><?php echo $newDateDay; ?></span><span><?php echo $newDate; ?></span></div>
									</div><!-- End blog-img -->
									<div class="blog-content">
										<h6><a href="single-blog.html"><?php echo $noticia['Noticia']['titulo']?></a></h6>
										<p><?php echo $noticia['Noticia']['texto']?></p>
									</div><!-- End blog-content -->
									<div class="clearfix"></div>
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