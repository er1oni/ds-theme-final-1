<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                <?php
                $hero_subtitle = get_theme_mod('set_hero_subtitle', 'Please, type some subtitle');
                $hero_button_link = get_theme_mod('set_hero_button_link', '#');
                $hero_button_text = get_theme_mod('set_hero_button_text', 'Learn More');
                $hero_height = get_theme_mod('set_hero_heigh', '');
                $hero_height = get_theme_mod('set_hero_heigh', 800);
                $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background'));

                ?>


                    .
                    <section class="hero" style="">
                        <div class="overlay" style="min_height: 800px">
                            <div class="container">
                                <div class="hero-items">
                                    <h1>Lorem, ipsum dolor.</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, dolores.</p>
                                    <a href="#">learn more</a>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section class="services">
                        <h2><<?php esc_html_e('Services' 'wp-devs') ?></h2>
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
                                     get_template_parts('parts/content', 'latest-news');
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
