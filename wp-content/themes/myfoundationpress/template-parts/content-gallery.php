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
		<div class="row contenu-profil">

			<div class="large-12 columns text-center">
				<h2><img src="<?php the_field('profil');?>" class="image-profil" alt="" width="75px"/></h2>


				<style media="screen">
				.contenu-profil {
					position:relative;
				}
					.image-profil {
						left:50%;
						height:75px;
						margin-left:-40px;
						position:absolute;
						border-radius: 50px;
						top:-50px;
					}
				</style>
			</div>

		</div>
		<div class="row">
			<div class="large-6 medium-6 columns text-center">
				<h3><img src="wp-content/themes/myfoundationpress/assets/images/view.svg" width="50px" alt="" /></h3>
				<p>
					<?php the_field('vues');?>
				</p>
			</div>
			<div class="large-6 medium-6 columns text-center">
				<h3><img src="wp-content/themes/myfoundationpress/assets/images/like.svg" width="42px" alt="" /></h3>
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
