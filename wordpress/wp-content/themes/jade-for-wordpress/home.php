<?php
/*
Theme Name: Jade for Wordpress
Theme URI: http://teamtreehouse.com/wordpress-bootstrap-theme-tutorial
Description: A theme based on material-design elements. This is the wordpress version of the Ghost original theme.
Author: Michael Boumann
Author URI: https://github.com/hxkclan/jade-for-wordpress
Version: 1.0
Tags: responsive, white, bootstrap, material design

License: Attribution-ShareAlike 3.0 Unported (CC BY-SA 3.0)
License URI: http://creativecommons.org/licenses/by-sa/3.0/
*/
?>
<?php get_header(); ?>

   <div class="container-fluid">
       <div class="container-inside">
       <div class="col-md-8">
            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="row">
                        <div>
                    <div <?php post_class(); ?>>
                        <h4 class="text-left-title modal-post"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a> <p class="text-right postdate"><?php the_time( 'M j y' ); ?></p></h4>

                    </div><!--.post-header-->

                        <div class="entry clear">

                            <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>

                            <?php the_content(); ?>

                        </div><!--. entry-->
                            <a href="<?php echo get_permalink(); ?>" class="readmore">Read More</a>

                            <!-- navigation?-->
                            <?php wp_link_pages(); ?>

                        <footer class="postfooter">
                        <address itemscope itemtype="http://schema.org/Person">
                        <?php the_author(); ?>

                        </footer>
                        <!--.post-footer-->

                    </div><!-- .post-->
                </div>

        	<?php endwhile; else: ?>
        		<p><?php _e('Sorry, this page does not exist.'); ?></p>
        	<?php endif; ?>

        </div>                            <!-- column 1 end! -->

    <?php get_sidebar(); ?>
</div> <!-- container inside -->
</div><!-- container fluid END! -->

<?php get_footer(); ?>