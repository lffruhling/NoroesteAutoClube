<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
	<?php if (is_home()){
		bloginfo('name');
	}elseif (is_category()){
		single_cat_title(); echo ' -  ' ; bloginfo('name');
	}elseif (is_single()){
		single_post_title();
	}elseif (is_page()){
		bloginfo('name'); echo ': '; single_post_title();
	}else {
		wp_title('',true);
	} ?>
		</title>
		<style type="text/css" media="screen">
			@import url( <?php bloginfo('stylesheet_url'); ?> );
		</style>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"/> </script>
 			<script type="text/javascript" >
	
			$(function (){
				$("#cadastrar").click(function(){ 
				$("#formulario_news").hide("slow");
				beforeSend: $("#carregandoNews").show("slow");
				var email = $("#email").val();
				$.post("<?php echo get_settings('home'); ?>/newsletter/cadastro.php", {email: email}, function(pegaRetorno){
				complete: $("#carregandoNews").hide("slow");
				$("#retorno").show("slow").text(pegaRetorno);					
				$("#voltar").click(function(){
					$("#retorno").hide("slow");
					$("#formulario_news").hide("slow");
					
						});
					});  
				});
			});
		</script>
 
		<?php wp_head(); ?>
		</head>

		<body>
		<div id="box">

			<div id="header">

				<div id="header_logo">
        		<a href="<?php echo get_settings('home'); ?>" title="Noroeste Auto Clube"> <img src="<?php bloginfo('template_directory'); ?>/imagens/noroesteAutoClube.fw.png" alt="Noroeste Auto Clube" border="0"/> </a>    
       			</div><!--Fecha div logo Header-->
        	
        		<div id="header_anuncioGo">
        		<a href="#" title="Noroeste Auto Clube"> <img src="<?php bloginfo('template_directory'); ?>/imagens/logoGoogle.jpg" alt="Noroeste Auto Clube" border="0"/> </a>
       			</div><!--Fechamento div anuncio do GOOGLE ADS-->
			
       			<div id="header_anuncioPu">
       			<a href="index.php" title="Noroeste Auto Clube"> <img src="<?php bloginfo('template_directory'); ?>/imagens/anunciopub.jpg" alt="Noroeste Auto Clube" border="0"/> </a>
       			</div><!--Fecha div anuncio publicidades-->
            
       			<div id="header_menu">
        		<ul class="menu_paginas">
        			<li> <a href="<?php echo get_settings('home'); ?>">Home</a></li> 
        			<?php wp_list_pages('title_li='); ?> 
      			</ul>
        		</div><!--fecha div menu-->  
       
      			<div id="header_search">
       		    <form role="search" method="get" id="searchform" action="<?php echo get_option('home'); ?>">
  				<span> Pesquisar</span>
                <input value="" name="s" id="s" type="text">
    			<input id="searchsubmit" value="" type="submit" class="btn">
				</form>
       			</div><!-- fecha div Search-->
            
			</div> <!--Fecha a div header-->