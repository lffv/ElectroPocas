<div class="clearfix"></div>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 style="margin-top:17px;"><?php echo __('Contactos'); ?></h4>
			</div>
			<div class="col-md-6">
				<div class="crumbs"><?php echo __('Você esta aqui: '); ?><a href="<?php echo $this->base ?>/"><?php echo __('Home'); ?></a><span class="crumbs-span">»</span><span><?php echo __('Contactos'); ?></span></div>
			</div>
		</div><!-- End row -->
	</div><!-- End container -->
</div><!-- End breadcrumbs -->

<div class="sections sections-padding-t-0">
	
	
	<div class="contact-iframe"><iframe height="480" src="https://maps.google.com/maps?q=Electro+Poças&amp;hl=pt-PT&amp;sll=26.820553,30.802498&amp;sspn=16.874794,19.753418&amp;hnear=Electro+Poças&amp;t=m&amp;z=16&amp;output=embed&amp;markers=color:blue"></iframe></div>
	<div class="gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 main-content">
				<div class="row">
					<div class="col-md-9">
						<div class="head-title"><h6><?php echo __('Contacte-nos'); ?></h6></div>
						<div class="comment-form">
							<form method="post" class="form-js" action="<?php echo $this->base;?>/Home/sendMail">
								<div class="row">
									<div class="col-md-6">
										<div class="form-input">
											<i class="fa fa-user"></i>
											<input name="name" id="name" type="text" placeholder="Nome">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-input">
											<i class="fa fa-envelope"></i>
											<input name="mail" id="mail" type="email" placeholder="Email">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-input">
											<i class="fa fa-comment"></i>
											<textarea name="message" id="message" placeholder="A sua mensagem..."></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<input type="submit" class="button-3" value="Enviar Mensagem">
									</div>
								</div><!-- End row -->
							</form>
						</div><!-- End comment-form -->
					</div>
					<div class="col-md-3">
						<div class="head-title"><h6><?php echo __('Morada'); ?></h6></div>
						<div class="contact-information">
							<ul>
								<li>Edifício do Mercado Municipal <br> Loja H, Britelo,<br>
									4890 - 220, Celorico de Basto.</li>
								<li>Dep. Comercial - 962 877 701</li>
								<li>Dep. Técnico -<br> 962 970 930 | 913 825 171</li>
								<li>Fax - 255 323 021</li>
								<li>Email - info@electropocas.pt</li>
							</ul>
						</div><!-- End contact-information -->
						<div class="head-title" style="margin-top:20px;"><h6><?php echo __('Horário'); ?></h6></div>
						<ul class="business-hours">
							<li>Segunda a Sexta :<br> 9h00 - 12h30; 14h30 - 19h00</li>
							<li>Sábado : 9h00 - 13h00</li>
						</ul>
					</div>
				</div><!-- End row -->
			</div><!-- End main-content -->
		</div><!-- End row -->
		
	</div><!-- End container -->
</div><!-- End sections -->

