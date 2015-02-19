<div class="clearfix"></div>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 style="margin-top:17px;"><?php echo __('Resultados de pesquisa para "'); echo $search ?>"</h4>
				
			</div>
			<div class="col-md-6">
				<div class="crumbs"><?php echo __('Você esta aqui: '); ?><a href="<?php echo $this->base ?>/"><?php echo __('Home'); ?></a><span class="crumbs-span">»</span><span><?php echo __('Pesquisa'); ?></span></div>
			</div>
		</div><!-- End row -->
	</div><!-- End container -->
</div>

<?php   
	$i=1;
	
	foreach ($data as $result) :
		if(isset($result['designacao'])):
			$values = array('url' => $this->base."/Servico/".$result['slug'],
						  'designacao' => $result['designacao'] );
		else:
			$values = array('url' => $this->base."/".$result['pagina']['url'],
						  'designacao' => $result['pagina']['texto'] );
		endif;
?>
<div class="sections sections-padding-0" style="padding-top:<?php if($i==1) echo"40px"; ?>">
	<div class="container">
		<div class="callout <?php if($i%2 == 0) echo"callout-4";?>">
			<h6><?php echo $values['designacao'] ?></h6>
			<div class="row">
				<div class="col-md-10">
					<p></p>
				</div>
				<div class="col-md-2">
					<div class="callout-a "><a class="button-3" href="<?php echo $values['url'] ?>"><?php echo __('Ir para a página') ?></a></div>
				</div>
			</div>
		</div><!-- End callout -->
		<div class="gap"></div>
	</div><!-- End container -->
</div><!-- End sections -->
<?php $i++; endforeach; ?>


