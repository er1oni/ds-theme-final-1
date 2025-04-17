<<<<<<< HEAD
<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">
                        <div class="page-item">
                            <?php 
                                while( have_posts() ) : the_post();
                                ?>
                                    <article>
                                        <header>
                                            <h1><?php the_title(); ?></h1>
                                        </header>
                                        <?php the_content(); ?>
                                    </article>
                                <?php

                                if( comments_open() || get_comments_number() ){
                                    comments_template();
                                }
                                endwhile;
                            ?>                                
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>
=======




<?php get_header();  ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" 
width="<?php echo get_custom_header()->width ?>" alt=""> 

<!---->

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="home-blog">
                <div class="container">
                    <div class="page-item">
                        <?php
                        
                            while(have_posts()): the_post();
                                ?>
                                <article>
                                   <h1><?php the_title(); ?></h1>
                                      <div class="meta-info">
                                       <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                       <p>Categories: <?php the_category(); ?></p>
                                       <p>Tags: <?php the_tags(); ?></p>
                                      </div> 
                                   <?php the_content(); ?>
                                </article>
                                <?php 
                            endwhile;
                        ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
<!---->
<?php get_footer(); ?>




>>>>>>> b3b77b27b646aa4ecdffedf157de89685a4b9980
