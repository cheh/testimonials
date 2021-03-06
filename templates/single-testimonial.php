<?php
/**
 * The Template for displaying single CPT Testimonial.
 *
 */

while ( have_posts() ) :

		the_post(); ?>

		<article <?php cherry_attr( 'post' ); ?>>

			<?php do_action( 'cherry_post_before' );

			// Display a page title.
			cherry_the_post_header();

			$args = array(
				'id'           => get_the_ID(),
				'template'     => 'custom.tmpl',
				'custom_class' => 'testimonials-page-single',
			);
			$data = new Cherry_Testimonials_Data;
			$data->the_testimonials( $args );
			//cherry_the_post_content(); ?>

		</article>

		<?php do_action( 'cherry_post_after' ); ?>

<?php endwhile; ?>