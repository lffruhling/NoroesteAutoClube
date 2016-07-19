<div id="dadosPost">
<h1>Dados desta matéria</h1>
<ul>
	<li>Postado em: <?php the_time('j M Y');?></li>
    <li><?php if(function_exists('the_views')){the_views();}?></li>
    <li><?php comments_popup_link('0 comentário','1 comentário','% Comentários'); ?></li>
    <li> <a href="<?php the_Permalink (); ?>/rss">RSS do Artigo</a></li>
   	<li class="title">Este post está em:</li>
    <?php the_category ();?>
</ul>

</div><!--fecha div dadosPost-->
<span class="tags"><?php if (function_exists('the_tags'))the_tags();?></span>

<div id="sidebar_noticias">
<h1>Notícias</h1>
 	<ul>
  		<?php query_posts('showposts=5');?>
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



