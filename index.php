<?php
<<<<<<< HEAD
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
=======

get_header();
pageBanner(array(
    'title'    => 'Welcome to our blog',
    'subtitle' => 'Keep up with our latest news'

));

?>

<div class="container container--narrow page-section">
    <?php
    while (have_posts()) {
        the_post(); ?>
        <div class="post-item">
            <h2 class="headline headline--medium headline--post-title">
                <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                    <?php the_title(); ?>
                </a>
            </h2>
            <div class="metabox">
                <p>
                    Posted by <?php the_author_posts_link();  ?> on <?php the_time('Y');  ?> in <?php echo get_the_category_list(', ');  ?>
                </p>
            </div>
            <div class="generic-content">
                <?php the_excerpt(); ?>
                <p>
                    <a class="btn btn--blue" href="<?php the_permalink();  ?>" target="_blank" rel="noopener noreferrer">
                        Continue reading &raquo;
                    </a>
                </p>
            </div>
        </div>
    <?php }

    echo paginate_links();

    ?>

</div>

<?php get_footer(); ?>
>>>>>>> fee66acc1b66e3ccdb95cdb6e169f73ae59d0da6
