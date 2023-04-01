<?php get_header(); ?>
<main class="galerie_photos">   
<?php
    if(have_posts(  )){    
        echo '<div class="inner-container">';   
            while(have_posts()):     
                the_post();     
                the_content();                           
            endwhile;    
        echo '</div>';     
    }else{
        echo '<p>';
            _e('Pas de contenu', 'patrimoine_lang');
        echo '</p>';
    }
?> 

 </main>
 <?php get_footer(); ?>