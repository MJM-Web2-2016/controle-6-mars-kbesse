<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="small-12 medium-4 large-3 columns">



<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<header>

		<h2><a href="<?php the_permalink(); ?>">
			<?php if (has_post_thumbnail()): ?>
				<div class="thumbnail">
					<?php the_post_thumbnail('accueil'); ?>
				</div>
			<?php endif; ?></a></h2>
		</header>
		<div class="row">
			<div class="large-4 columns text-center">	</div>
			<div class="large-4 columns text-center">
				<h2><img src="<?php the_field('profil');?>" alt="" /></h2>
			</div>
			<div class="large-4 columns text-center">	</div>
		</div>
		<div class="row">
			<div class="large-6 columns text-center">
				<h3>Vues</h3>
				<p>
					<?php the_field('vues');?>
				</p>
			</div>
			<div class="large-6 columns text-center">
				<h3>Like</h3>
				<p>
					<?php the_field('like');?>
				</p>
			</div>
		</div>
	<div class="entry-content">

	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>

</div>
