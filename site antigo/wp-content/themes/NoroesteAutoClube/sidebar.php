		<div id="sidebar_left">
    	<h1 class="noticias">Notícias</h1>
    		<ul>
            <?php
			$id_da_categoria = get_cat_id ('noticias');
			wp_list_categories('sort_column=name&child_of='."$id_da_categoria".'&title_li='); ?>           
            </ul>
            
            <h1 class="destaques">Destaques</h1>
    		<ul>
              <?php
			$id_da_categoria = get_cat_id ('Destaques');
			wp_list_categories('sort_column=name&child_of='."$id_da_categoria".'&title_li='); ?>           
            </ul>
    
     		 <h1 class="encontros">Encontros</h1>
    		<ul>
            <?php
			$id_da_categoria = get_cat_id ('Encontros');
			wp_list_categories('sort_column=name&child_of='."$id_da_categoria".'&title_li='); ?>          
            </ul>
            
            <div id="left_adsense">
            <a href="index.php" title="Noroeste Auto Clube"> <img src="<?php bloginfo('template_directory'); ?>/imagens/pub_leftSidebar_bg.jpg" alt="Noroeste Auto Clube" border="0"/> </a>
            </div><!--Fecha div anuncio adsense left-->
            
    </div> <!--fecha sidebar left-->