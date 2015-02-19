<?php echo debug($noticia);?>
<meta property="og:locale" content="pt">
 
<meta property="og:url" content="<?php echo $this->base."/Noticia/".$noticia['Noticia']['hashtag'] ?>">
 
<meta property="og:title" content="<?php echo $noticia['Noticia']['titulo'];?>">
<meta property="og:site_name" content="ElectroPoças">
<meta property="og:description" content="<?php echo $noticia['Noticia']['texto'];?>">
<meta property="og:image" content="<?php echo $this->base."/uploads/".$noticia['Image'][0]['name']; ?>">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="800"> 
<meta property="og:image:height" content="600"> 

<script type="text/javascript">

	window.location = "<?php echo $this->base."/Noticia/".$noticia['Noticia']['hashtag'] ?>";

</script>