<?php get_header(); ?>
<main >
<?php
    if(have_posts(  )){              
        while(have_posts()):
            the_post();   
            the_content();                        
        endwhile;                  
    }else{
        echo '<p>';
            _e('Pas de contenu', 'patrimoine_lang');
        echo '</p>';
    }
?> 
 </main>
 <?php get_footer(); ?>