<?php get_header(); ?>
<main>    
    <div class="inner-container">
        <ul class="post-categories">              
            <?php echo '<a href='.the_category().'>'.single_cat_title().'</a>' ?>
        </ul>  
        <article>   
        <?php
            if(have_posts(  )){       
                    while(have_posts()):                      
                        the_post();     
                        echo '<div class="sponsor_icon">';
                            if(has_post_thumbnail()):
                                echo '<article class="elt-image">'; 
                                    the_post_thumbnail( array(150, 150));
                                echo '</article>';
                            endif;
                        echo '</div>'; 
                        echo '<div class="elt-header">';            
                            the_title('<h2 class="elt-title">' , '</h2>', true);
                        echo '</div>';                        
                        the_content();    

                    endwhile;       
            }else{
                echo '<p>';
                    _e('Pas de contenu', 'patrimoine_lang');
                echo '</p>';
            }
        ?> 
        </article>
    </div>   
 </main>
 <?php get_footer(); ?>