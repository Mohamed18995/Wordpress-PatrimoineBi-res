<?php  
/*
* Template Name: Liste des Brasseries
 */
    get_header(); 
 ?>
<main >  
<div class="inner-container">     
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
            the_content();            
            
        endwhile;          
    }else{
        echo '<p>';
            _e('Pas de contenu', 'patrimoine_lang');
        echo '</p>';
    }
?> 
</div>
 </main>
 <?php get_footer(); ?>