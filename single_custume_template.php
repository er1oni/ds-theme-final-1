<!-- easy challengeeeeeeeeeeeeeeee -->

<?php
/**
 * Template Name: Single Custom
 * Description: 1,2,3,4,5,6,7,8,  8,7,6,5,4,3,2,1 Description ma i mir najher 
 */

get_header();

if (in_category('featured')) : ?>
    <div class="custom-single-container">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="custom-single-header">
                <h1 class="custom-single-title"><?php the_title(); ?></h1>
            </header>
            
            <div class="custom-single-thumbnail">
                <?php 
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large'); 
                } else {
                    echo '<img src="fpp,small,lustre,wall_texture,product,750x1000.u1.jpg' . get_template_directory_uri() . '/assets/images/default-thumbnail.jpg" alt="Default Thumbnail">';
                }
                ?>
            </div>
            
            <div class="custom-single-content">
                <?php the_content(); ?>
            </div>
        </article>
    </div>
<?php else :
    get_template_part('single'); 
endif;

get_footer();
?>
