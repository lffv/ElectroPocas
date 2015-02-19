<div class="clearfix"></div>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 style="margin-top:17px;"><?php echo __('Dicas de Poupança'); ?></h4>
				
			</div>
			<div class="col-md-6">
				<div class="crumbs"><?php echo __('Você esta aqui: '); ?><a href="<?php echo $this->base ?>/"><?php echo __('Home'); ?></a><span class="crumbs-span">»</span><span><?php echo __('Dicas de Poupança'); ?></span></div>
			</div>
		</div><!-- End row -->
	</div><!-- End container -->
</div>

	<?php   
		$i=1;
		foreach ($data->dicas as $categoria) :
	?>
	<div class="sections <?php if($i%2 == 0){echo'section-2';} $i++; ?>" id="<?php echo $categoria['CategoriasDica']['hashtag'];?>">
	<div class="container" >
		<div class="head-title"><h6><?php echo $categoria['CategoriasDica']['designacao'] ?></h6></div>
		<div class="row">
			<div class="bxslider-slide bxslider-slide-title clients-slide">			
				<ul>
					<?php foreach ($categoria['dica'] as $bloco) :	?>
			 			<li>
							<?php foreach ($bloco as $dica) :	
							?>
							<div class="col-md-3">
								<div class="box-icon">
									<div class="box-icon-i box-icon-i-2"><i class="fa fa-heart"></i></div>
									<div class="box-icon-content">
										<h5><?php echo $dica['titulo'] ?></h5>
										<p><?php echo $dica['texto'] ?></p>
									</div>
								</div>
							</div>
							<?php endforeach;?>
						</li>
					<?php endforeach;?>

				</ul>
			</div><!-- End box-icon-slide -->
		</div><!-- End row -->
	</div><!-- End container -->
</div>
<?php endforeach;?>


<?php 
	if($i%2==0)$class='section-2';
	else $class='';
?>
<!-- PARCEIROS -->
	<div class="sections <?php echo $class ?> sections-padding-b-50" >
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
