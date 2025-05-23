<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

            <?php 
            while( have_posts() ):
                the_post();
                get_template_part('parts/content', 'single');
                ?>
                <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
                    
                    <header>
                        <h1><?php the_title(); ?></h1>
                        <div class="meta-info">
                            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                            <p>Categories: <?php the_category( ' ' ); ?></p>
                            <p>Tags: <?php the_tags( '', ', ' ); ?></p>     
                        </div>
                    </header>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </article>

                <div class="updevs-pagaination">
                <div class="pages new">
                  <?php next_post_link( '&lauqo %link' ) ?>
                  </div>
                <div class="pages previus">
                  <?php previous_post_link( '%link &raquo' ) ?>
                  </div>
                </div>
                <?php

                if( comments_open() || get_comments_number() ){
                    comments_template();
                }

            endwhile;
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>