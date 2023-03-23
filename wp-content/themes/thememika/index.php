<!DOCTYPE html>
<html lang="=en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width-device-width, initial-scale-1.0">
            <?php get_header(); ?>

            <title> Theme mika </title> 
    </head>
    <body>
        <h1>Hello bienvenue sur le site Theme Mika </h1>


        <?php


            if (have_posts()) :    
                while (have_posts()) : the_post(); 
        
            ?>            
                <article>                
                    <header>                
                        <h1>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h1>                    
                        <aside>                        
                            <span><?php the_date(); ?></span>                        
                            <span><?php the_author(); ?> </span>                    
                        </aside>                
                    </header>                
                    <section>                
                        <?php the_content(); ?>                
                    </section>            
                    <footer>                
                        <span><?php the_category(); ?></span>                
                        <span><?php the_tags(); ?></span>            
                    </footer>            
                </article>        
            <?php    
                endwhile;
            endif;
            ?>
        
        </main>




        
    </body>

    <?php get_footer(); ?>
    
</html>