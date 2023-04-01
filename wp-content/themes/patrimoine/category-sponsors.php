<?php get_header(); ?>
<main>
    <div class="inner-container">
        <h1><?php single_cat_title(); ?></h1>      
        <?php
            $catID = get_the_category();
            echo category_description( $catID[0] ); 
         ?>    
        <?php
            if(have_posts(  )){     
                echo '<div class="listing">';             
                    while(have_posts()):                                                                    
                        the_post();   
                            if(has_post_thumbnail()):                                
                                echo '<article class="elt-image"><a href="'.get_the_permalink().'">'; 
                                    the_post_thumbnail( array(150, 150));
                                echo '</a></article>';                                
                            endif;
                    endwhile;     
                echo '</div>';
            }else{
                echo '<p>';
                    _e('Pas de contenu', 'patrimoine_lang');
                echo '</p>';
            }
        ?>     
    </div>   
 </main>
 <?php get_footer(); ?>