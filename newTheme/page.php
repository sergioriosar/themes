<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="page mb-4">
                        <h1 class="page-title"><?php the_title(); ?></h1>
                        
                        <div class="page-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile;
            else :
                echo '<p>No hay contenido disponible</p>';
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
