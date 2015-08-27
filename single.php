<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>

	<?php jeo_map(); ?>

	<article id="primary" class="content-area" role="main">
		<header class="page-header">
			<?php the_category(); ?>
			<h1><?php the_title(); ?></h1>
			<div class="post-meta">
				<p class="author"><span class="lsf">&#xE137;</span> <?php _e('by', 'jeo'); ?> <?php the_author(); ?></p>
				<p class="date"><span class="lsf">&#xE12b;</span> <?php the_date(); ?></p>
				<?php the_tags('<p class="tags"><span class="lsf">&#xE128;</span> ', ', ', '</p>'); ?>
			</div>
		</header>
		<section class="content">
			<?php the_content(); ?>
			<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'jeo' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
			?>
			<?php comments_template(); ?>
		</section>
		<aside id="sidebar">
			<ul class="widgets">
				<?php dynamic_sidebar('post'); ?>
			</ul>
		</aside>
	</article>

<?php endif; ?>

<?php get_footer(); ?>
