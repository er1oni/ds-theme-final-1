<?php get_header(); ?>
<div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <h1>Blog</h1>
                    <div class="container">
                        <div class="error_404">
                            <header>
                                <h1>page not found</h1>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, magni?</p>
                            </header>
                            <div class="error">
                                <p>how about doing a search</p>
                                <?php get_search_form(); ?>
                                <?php 
                                the_wiget(
                                    'Wp_woget_Recent_Posts'
                                )
                                ?>
                            </div>
                        </div>
                    </div>
             </div>
<?php get_footer(); ?>