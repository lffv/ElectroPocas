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


<meta prefix="og: http://ogp.me/ns#" property="og:title" content="<?php echo $noticia['Noticia']['titulo'];?>" />
<meta prefix="og: http://ogp.me/ns#" property="og:site_name" content="ElectroPoças" />
<meta prefix="og: http://ogp.me/ns#" property="og:type" content="<?php echo $noticia['Noticia']['texto'];?>" />
<meta prefix="og: http://ogp.me/ns#" property="og:image" content="<?php echo $this->base."/uploads/".$noticia['Image'][0]['name']; ?>" />


<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="ElectroPoças" />
<meta name="twitter:title" content="<?php echo $noticia['Noticia']['titulo'];?>" />
<meta name="twitter:description" content="<?php echo $noticia['Noticia']['texto'];?>" />
<meta name="twitter:image" content="<?php echo $this->base."/uploads/".$noticia['Image'][0]['name']; ?>" />
<meta name="twitter:url" content="<?php echo $this->base."/Noticia/".$noticia['Noticia']['hashtag'] ?>" />

<script type="text/javascript">

	window.location = "<?php echo $this->base."/Noticia/".$noticia['Noticia']['hashtag'] ?>";

</script>