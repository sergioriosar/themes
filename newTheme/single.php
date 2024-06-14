<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="post mb-4">
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-content">
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
