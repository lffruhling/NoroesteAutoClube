<div id="sidebar_noticias">
<h1>Notícias</h1>
 	<ul>
  		<?php query_posts('showposts=10');?>
  		<?php if (have_posts()): while (have_posts()) : the_post();?>
  		<li>
        <h2><a href="<?php the_Permalink()?>"><?php the_title();?></a></h2>
        <span><?php the_time('j M Y');?> / <?php if(function_exists('the_views')){the_views();}?> </span>
        <p><a href="<?php the_Permalink()?>"><?php the_excerpt_rereloaded(20,'');?> </a></p>
        </li>
  		
		<?php endwhile; else:?>
  		<?php endif;?>
  	</ul>
    
</div><!--fecha div noticias-->

<div id="publicidade">
<h1>Publicidade</h1>
<span class="anuncio">
<img src="<?php bloginfo('template_directory'); ?>/imagens/anuncio310x150.fw.png"/>
<img src="<?php bloginfo('template_directory'); ?>/imagens/anuncio310x150.fw.png"/>
</span>
</div><!--fecha div publicidade-->



