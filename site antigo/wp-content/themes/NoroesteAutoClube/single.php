<?php get_header();?>
    	
		<div id="single">
			<?php if (have_posts()): while (have_posts()) : the_post();?>
    			
				<span class="titulo"><?php the_title();?></span>
                <?php the_content();?>
        	
               <span class="comentarios"><?php comments_template(); ?></span>
                
        	<?php endwhile; else:?>
			<?php endif;?>
        </div><!--fecha div single-->
 
 <div id="single_sidebar">
 <?php include (TEMPLATEPATH . '/single_sidebar.php'); ?>  
 </div><!--fecha single sidebar-->
    
<?php get_footer();?>