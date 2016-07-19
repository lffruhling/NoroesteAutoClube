<?php get_header();?>
<?php get_sidebar();?>
    
    <div id="content">
    	
        <div id="content_noticia">
 			                       
            <div id="content_noticiaConteudo">
             <ul>
             <li>
             <?php query_posts('showposts=1&category_name=noticias&offset=0');?>
             <?php if (have_posts()): while (have_posts()) : the_post();?>
            <h1><a href="<?php the_Permalink()?>"><?php the_title();?></a></h1>
            <?php endwhile; else:?>
			<?php endif;?>
             </li>
             <p><?php the_content("Continue Lendo "); ?></p>
             </ul>
            </div><!--Fecha div conteudo--> 
            
            <div id="content_fotoNoticia">
            <?php query_posts('showposts=1&category_name=noticias');?>
             <?php if (have_posts()): while (have_posts()) : the_post();?>
            <span> <a href="<?php the_Permalink()?>">Postado em <?php the_time('j M Y');?></a></span>
            <a href="<?php the_Permalink()?>"><img src="<?php echo get_settings('home'); ?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>" alt="<?php the_title();?>"  width="350" height="175" border="0" /></a>
            <?php endwhile; else:?>
			<?php endif;?>
            </div> <!--Fecha div foto noticia-->
			
        </div><!--fecha div content NOTICIA-->   
    		
         <div id="content_destaque">
            
            <div id="content_fotoDestaque">
             <?php query_posts('showposts=1&category_name=destaques');?>
            <?php if (have_posts()): while (have_posts()) : the_post();?>
            <a href="<?php the_Permalink()?>"><img src="<?php echo get_settings('home'); ?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>" alt="<?php the_title();?>" width="345" height="125" border="0" />
            </a>
            <?php endwhile; else:?>
			<?php endif;?>
            </div> <!--Fecha a Div foto Destaque -->
            
        <div id="content_destaqueConteudo">
            <ul>
            <?php query_posts('showposts=1&category_name=destaques');?>
            <?php if (have_posts()): while (have_posts()) : the_post();?>
            	<li><h1><a href="<?php the_Permalink()?>"><?php the_title();?></a></h1></li>
                 <?php endwhile; else:?>
			<?php endif;?>
			<p><?php the_content("Continue Lendo "); ?></p>
                
            </div><!--final destaque conteudo-->
            
            </div><!--content destaque-->
         
         <div id="content_proximoEncontro">
         
       	   <div id="content_proximoEncontroAnuncio">
            
            <img src="<?php bloginfo('template_directory'); ?>/imagens/Ilustra 200x200 anuncio.jpg" alt=""  border="0" />
            
            </div> <!--fecha encontro anuncio-->
         	
           <div id="content_proximoEncontroConteudo">
            <ul>
             <?php query_posts('showposts=1&category_name=encontros');?>
            <?php if (have_posts()): while (have_posts()) : the_post();?>
            	<li><h1><a href="<?php the_Permalink()?>"><?php the_title();?></a></h1></li>
                <?php endwhile; else:?>
			<?php endif;?>
            <p><?php the_content("Continue Lendo "); ?></p>
            </ul>
            </div><!--fecha proximo encontro conteudo-->
         <div id="content_fotoProxEncontro">
         <?php if (have_posts()): while (have_posts()) : the_post();?>
            <a href="<?php the_Permalink()?>"><img src="<?php echo get_settings('home'); ?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>" alt="<?php the_title();?>" alt="<?php the_title();?>" width="196" height="196" border="0" /></a>
             <?php endwhile; else:?>
			<?php endif;?>
         </div> <!--Fecha a div foto Proximo encontro -->
</div><!--fecha proximo encontro-->
    
<div id="menuInferior">
    
    <ul class="menuInferior">
    		
        	<li> <a href="<?php the_Permalink()?>">Som</a></li> 
        	<li> <a href="<?php the_Permalink()?>">Suspensão</a></li> 
        	<li> <a href="<?php the_Permalink()?>">Preparados</a></li> 
        	<li> <a href="<?php the_Permalink()?>">Originais</a></li>
	</ul>
    
    </div> <!--Fecha div Menu Inferior-->	
    
<div id="content_som">
        
        	<div id="content_fotoSom">
            <?php query_posts('showposts=1&category_name=Som');?>
         	<?php if (have_posts()): while (have_posts()) : the_post();?>
            <a href="<?php the_Permalink()?>"><img src="<?php echo get_settings('home'); ?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>" alt="<?php the_title();?>" alt="<?php the_title();?>" width="145" height="95" border="0" /></a>
             <?php endwhile; else:?>
			<?php endif;?>
         	</div> <!--Fecha a div foto som-->
                 
         <div id="content_somConteudo">
          <?php query_posts('showposts=1&category_name=Som');?>
         <p><?php the_content("Continue Lendo "); ?></p>        
         </div><!--fecha som conteudo-->
                  	
     </div><!--fecha div som-->

<div id="content_suspensao">
        	
            <div id="content_fotoSuspensao">
             <?php query_posts('showposts=1&category_name=suspensao-2');?>
         	<?php if (have_posts()): while (have_posts()) : the_post();?>
            <a href="<?php the_Permalink()?>"><img src="<?php echo get_settings('home'); ?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>" alt="<?php the_title();?>" alt="<?php the_title();?>" width="145" height="95" border="0" /></a>
             <?php endwhile; else:?>
			<?php endif;?>
         	</div> <!--Fecha a div foto suspensao-->
            
         <div id="content_suspesaoConteudo">
         <?php query_posts('showposts=1&category_name=suspensao-2');?>
         <p><?php the_content("Continue Lendo "); ?></p>
         </div><!--fecha a div suspensão conteudo-->		
            
	 </div><!--fecha div suspensao-->
        
<div id="content_preparados">
			
            <div id="content_fotoPreparados">
            <?php query_posts('showposts=1&category_name=preparacao-2');?>
         	<?php if (have_posts()): while (have_posts()) : the_post();?>
            <a href="<?php the_Permalink()?>"><img src="<?php echo get_settings('home'); ?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>" alt="<?php the_title();?>" alt="<?php the_title();?>" width="145" height="95" border="0" /></a>
             <?php endwhile; else:?>
			<?php endif;?>
         	</div> <!--Fecha a div foto preparados-->
        
        <div id="content_preparadosConteudo">
        <?php query_posts('showposts=1&category_name=preparacao-2');?>
        <p><?php the_content("Continue Lendo "); ?></p>
        </div><!--Fecha div preparado conteudo-->
        
	 </div><!--fecha div preparados-->    
  
<div id="content_originais">

        	<div id="content_fotoOriginais">
            <?php query_posts('showposts=1&category_name=Originais');?>
         	<?php if (have_posts()): while (have_posts()) : the_post();?>
            <a href="<?php the_Permalink()?>"><img src="<?php echo get_settings('home'); ?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>" alt="<?php the_title();?>" alt="<?php the_title();?>" width="145" height="95" border="0" /></a>
             <?php endwhile; else:?>
			<?php endif;?>
         	</div> <!--Fecha a div foto originais-->
        	
     	<div id="content_originaisConteudo">
        <?php query_posts('showposts=1&category_name=Originais');?>
         <p><?php the_content("Continue Lendo "); ?></p>
        </div><!--fecha a div originais conteudo-->
            
	 </div><!--fecha a div originais-->
  
  <div id="separa">
  
  </div><!--fecha div separa-->
  
    <div id="content_video">
<h1>Video do Mês</h1>
   <?php query_posts('showposts=1&category_name=videos');?>
            <?php if (have_posts()): while (have_posts()) : the_post();?>
            	<?php $key="vga";echo get_post_meta($post->ID,$key,true);?>
                <?php endwhile; else:?>
			<?php endif;?>
            
            
            </div><!--fecha div video-->
<div id="anuncio_inferior">
  <img src="<?php bloginfo('template_directory'); ?>/imagens/anuncio300x95.fw.png" alt="" height="120" />
  <img src="<?php bloginfo('template_directory'); ?>/imagens/anuncio300x95.fw.png" alt="" height="120" />
  </div><!--fecha div anuncio inferior-->
    </div><!--fecha content-->
 
 <?php include (TEMPLATEPATH . '/right_sidebar.php'); ?>  
    
<?php get_footer();?>