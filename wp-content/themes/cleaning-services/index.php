<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cleaning_Services
 */
$cleaning_services_opt = cleaning_services_options();
get_header();
?>
<?php
$show_breadcrumb = $cleaning_services_opt['cleaning_services-show-breadcrumb'] ;
 
if (!is_front_page() && (!$show_breadcrumb || $show_breadcrumb == 1)) :
    ?>
    <?php do_action('cleaning_services_breadcrumb');     ?>
<?php endif; ?>
<div class="page-main">
	<div class="container">
				<div class="row">
					<div class="col-md-9 aside blog-post ">
  				<?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                         	get_template_part( 'template-parts/content', get_post_format() ); 
                         endwhile;
                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif;  
      ?>
    <?php
   
            // Previous/next page navigation.
      the_posts_pagination( array(
        'prev_text'          => esc_html__( '&laquo; Previous', 'cleaning-services' ),
        'next_text'          => esc_html__( 'Next &raquo;', 'cleaning-services' ),
        'before_page_number' => '',
      ) );
            ?>
      	</div>
      	 <div class="col-md-3 aside">
	      <?php get_sidebar(); ?>
	      </div>
      	</div>
      </div>
</div>
<?php
get_footer();
