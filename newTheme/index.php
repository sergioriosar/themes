<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="post mb-4">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer más</a>
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
