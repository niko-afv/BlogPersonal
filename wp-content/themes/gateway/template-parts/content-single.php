<?php
/**
 * The template used for displaying page content in single.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
if ( has_post_thumbnail() ) { 
                        $post_thumbnail_id = get_post_thumbnail_id();
                        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                        $img_url = $post_thumbnail_url;
		}
?>
         <div class="featured-image" style="
    background-image: url(<?php echo $img_url; ?>);
    height: 300px;
    background-position: 0 50%;
    background-size: cover;
    margin-bottom: 15px;
">
  
  
</div>
	<!--<div class="featured-image">
		<?php // Featured Image
		 // end featured image ?>
	</div><!-- .featured-image -->

	<header class="entry-header">
		<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>

		<div class="entry-meta">
			<?php gateway_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gateway' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer clearfix">

		<span class="left">
			<?php 
				if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
					<a href="<?php comments_link(); ?>"><i class="fa fa-comment"></i></a>
			<?php } ?>
			<a href="<?php echo esc_url( get_permalink() ) ?>"><i class="fa fa-link"></i></a>
		</span>

		<span class="right"><?php gateway_entry_footer(); ?></span>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->