<article <?php post_class( 'entry entry-content' ); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_the_permalink() ) . '">', '</a></h1>' ); ?>
		<?php phresh_post_meta_above(); ?>
	</header>

	<div class="entry-main">
		<?php if ( ! is_single( get_the_id() ) ) : ?>
			<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'entry-thumb alignright' ) ); ?>
		<?php endif; ?>

		<?php the_content(); ?>
	</div>

	<footer class="entry-footer">
		<?php phresh_post_meta_below(); ?>
	</footer>
</article>
