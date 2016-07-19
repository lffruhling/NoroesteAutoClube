 <div id="right_sidebar">
  		
        <div id="sidebar_newsletter">
        	<h1 class="sidebar_newsletter">Assine nossas notícias</h1>
        		<div id="formulario_news">
                <label>
                  <input type="text" name="email" id="email" />
                  <input type="submit" value="Cadastrar" id="cadastrar" class="btn" />
                  <span>Seu e-mail:</span>
                </label>
                </div><!--fecha div formulario news-->
                
                
                <div id="carregandoNews" style="padding:8px 8px 5px 18px; float:left; display:none;">
                <img src="<?php bloginfo('template_directory'); ?>/imagens/ajax-loader.gif" alt="" /> Aguarde, Enviando...
                </div> <!-- Carregando news-->
                <div id="retorno" style="padding:10px; float:left; border:1px solid #090; background:#CFC; width:168px; display:none; font:14px 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold; color:#333">
                
                
                </div> <!--Fecha div retorno-->
                        			       
        </div><!--Fecha a sidebar newslwader-->
			
            <div id="sidebar_enquete">
        		<h1 class="sidebar_enquete">Enquete</h1>
               	<?php if (function_exists('vote_poll') && !in_pollarchive()): ?>
  					<ul>
    				<li><?php get_poll();?></li>
  					</ul>
				<?php endif; ?> 
       		</div><!--Fehca div enquete-->
	
    		<div id="sidebar_siganos">
            	<h1 class="sidebar_siganos">Nos acompanhe também em:</h1>
            		<ul>
                	<li><a href="https://www.facebook.com/pages/Noroeste-Auto-Clube-RS/155006824702352?ref=ts&fref=ts" target="_blank">
                    <img src="<?php bloginfo('template_directory'); ?>/imagens/siganos_face.jpg"  alt=" Siganos no Facebook" /></a></li>
            		<li><a href="http://www.youtube.com/channel/UC_5SPZJngmR7wFIuAS_g-MQ" target="_blank">
                    <img src="<?php bloginfo('template_directory'); ?>/imagens/siganos_youtube.jpg" alt="Siga nosso canal no You Tube"  /></a></li>
                    </ul>
            </div> <!--fecha a dive Siga-nos-->
            <div id="sidebar_categoria">
               <h1 class="sidebar_categoria">Categorias:</h1> 
            
            	 <ul>
               <?php
					$args = array(
 					'orderby' => 'name',
  					'parent' => 0
  					);
						$categories = get_categories( $args );
						foreach ( $categories as $category ) {
						echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a>';
						}
				?>   
                </ul>
            
            </div> <!--Fecha div categoria-->
            
            <div id="sidebar_produtos">
            	<h1 class="sidebar_produtos">Nossos Produtos:</h1>
            		<ul>
                	<li><a href="#">Filie-se ao clube</a></li>
                    <li><a href="#">Camisetas</a></li>
                    <li><a href="#">Adesivos</a></li>
                    </ul>
            </div><!--Fecha div produtos-->
            
      <div id="sidebar_anuncios">
            <img src="<?php bloginfo('template_directory'); ?>/imagens/anuncio200x180.jpg" alt=""  border="" />
           
            
            </div><!--fecha div anuncios sidebar-->
    </div><!--fecha div right sidebar-->