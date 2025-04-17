<<<<<<< HEAD
<?php get_header(); ?>
=======
<?php get_header();  ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" 
width="<?php echo get_custom_header()->width ?>" alt=""> 

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
                                   <?php the_post_thumbnail(array(275,275)); ?>
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
                    <?php get_sidebar(); ?>
                </div>
            </section>
        </main>
    </div>
</div>
<!---->
<?php get_footer(); ?>

>>>>>>> b3b77b27b646aa4ecdffedf157de89685a4b9980

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <h1>Blog</h1>
                    <div class="container">
                        <div class="blog-items">
                            <?php 
                                if( have_posts() ):
                                    while( have_posts() ) : the_post();
                                    ?>
                                        <article>
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 275, 275 ) ); ?></a>
                                            <div class="meta-info">
                                                <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                                <p>Categories: <?php the_category( ' ' ); ?></p>
                                                <p>Tags: <?php the_tags( '', ', '); ?></p>
                                            </div>
                                            <?php the_excerpt(); ?>
                                        </article>
                                    <?php
                                    endwhile;
                                    ?>

                                    <div class="updevs-pagaination">
                                        <div class="pages new">
                                          <?php previus_posts_link( "<< Newer posts" ) ?>
                                        </div>
                                        <div class="pages old">
                                        <?php previus_posts_link( " Older posts" ) ?>
                                        </div>
                                    </div>
                                else:
                                    <p>Nothing yet to be displayed!</p>
                            <?php endif; ?>                                
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>