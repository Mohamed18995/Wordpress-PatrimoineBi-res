<?php get_header(); ?>
<main>    
    <div class="inner-container">
        <div class="brewery_backlink">
            <a href="<?php echo get_url_by_slug('brasseries'); ?>">< Brasseries</a>
        </div>
        <?php
            if(have_posts(  )){  
                echo '<article >';
                while(have_posts()):                        
                    the_post();  
                    echo '<div class="brewery_logo">'; 
                        if(has_post_thumbnail()):                               
                             
                                the_post_thumbnail( array(150, 150));                                                                                      
                        endif;    
                        echo '</div>';         
                        echo '<h2>'  ;
                            the_title();
                        echo '</h2>';
                    echo '<div class="brewery_desc">';        
                    the_content();
                    echo '</div>';
                                               
                endwhile;  
                echo '</article>';                      
            }else{
                echo '<p>';
                    _e('Pas de contenu', 'patrimoine_lang');
                echo '</p>';
            }
        ?>     
    </div>   
 </main>
 <?php get_footer(); ?>