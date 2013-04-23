<?php get_header() ?>
 
	<div class="content">
 
		<section class="main">
		<?php
		while (have_posts()) {
			the_post();
		?>
			<article id="post-<?php the_ID() ?>" <?php post_class() ?>>
				<header>
					<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
					<time datetime="<?php the_time('c') ?>"><?php the_time(get_option('date_format')) ?></time>
				</header>
 
				<div>
					<?php the_content() ?>
				</div>

				<footer>
					<p class="categories">Categorias: <?php the_category(', ') ?></p>
					<p class="tags">Palavras-chave: <?php the_tags(false, ', ') ?> </p>
				</footer>
				
			</article>
		<?php } ?>
		</section>
 
		<?php get_sidebar() ?>
		
	</div>
 
<?php get_footer() ?>