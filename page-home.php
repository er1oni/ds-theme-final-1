<<<<<<< HEAD
<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                        Hero
                    </section>
                    <section class="services">
                        <h2>Services</h2>
                        <div class="container">
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-1' )){
                                        dynamic_sidebar( 'services-1' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-2' )){
                                        dynamic_sidebar( 'services-2' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-3' )){
                                        dynamic_sidebar( 'services-3' );
                                    }
                                ?>
                            </div>
                        </div>
                    </section>
                    <section class="home-blog">
                        <h2>Latest News</h2>
                        <div class="container">
                            <?php 

                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 5,
                                'category__in'  => array( 1 ),
                                'category__not_in' => array( 10 )
                            );

                            $postlist = new WP_Query( $args );

                                if( $postlist->have_posts() ):
                                    while( $postlist->have_posts() ) : $postlist->the_post();
                                    ?>
                                    <article class="latest-news">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="meta-info">
                                        <p>
                                            by <span><?php the_author_posts_link(); ?></span> 
                                            Categories: <span><?php the_category( ' ' ); ?></span>
                                            Tags: <?php the_tags( '', ', ' ); ?>
                                        </p>
                                        <p><span><?php echo get_the_date(); ?></p>
                                        </div>
                                        <?php the_excerpt(); ?>
                                    </article>
                                    <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else: ?>
                                    <p>Nothing yet to be displayed!</p>
                            <?php endif; ?>                                
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>
=======
<?php get_header();  ?>

<!---->

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">
                Hero
            </section>
            <section class="services">
                Services
            </section>
            <section class="home-blog">
                <div class="container">
                    <div class="blog-items">
                        <?php
                        if(have_posts()):
                            while(have_posts()): the_post();
                                ?>
                                <article>
                                   <h2><?php the_title(); ?></h2>
                                      <div class="meta-info">
                                       <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                       <p>Categories: <?php the_category(); ?></p>
                                       <p>Tags: <?php the_tags(); ?></p>
                                      </div> 
                                   <?php the_content(); ?>
                                </article>
                                <?php 
                            endwhile;
                        else: ?>
                           <p>Nothing to be displayed</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
<!---->
<?php get_footer(); ?>




>>>>>>> b3b77b27b646aa4ecdffedf157de89685a4b9980
