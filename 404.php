<?php get_header(); ?>
<div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <h1>Blog</h1>
                    <div class="container">
                        <div class="error_404">
                            <header>
                                <h1><?php esc_html_e( 'Page not found', 'wp_devs' ); ?></h1>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, magni?</p>
                            </header>
                            <div class="error">
                                <p><?php esc_html_e('how about doing a sesrch', 'wp_devs') ?></p>
                                <?php get_search_form(); ?>
                                <?php 
                                the_wiget(
                                    'Wp_woget_Recent_Posts'
                                    array(
                                        'title' => esc_html__('how about doing a sesrch', 'wp_devs'),
                                        'number' =>3;
                                    )
                                )
                                ?>
                            </div>
                        </div>
                    </div>
             </div>
<?php get_footer(); ?>