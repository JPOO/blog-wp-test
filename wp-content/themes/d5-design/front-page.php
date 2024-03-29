<?php
/*
	Template Name: Front Page
	Design Theme's Front Page to Display the Home Page if Selected
	Copyright: 2012-2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Design 1.0
*/
?>
<?php get_header(); ?>
 <div id="slide-container"><div id="slide"><img src="<?php echo of_get_option('banner-image', get_template_directory_uri() . '/images/slide-image/slide-image1.jpg'); ?>"/></div></div>
<div id="container">
<h1 id="heading"><?php echo 'Nosso site oferece aos clientes uma série de informações a respeito de nossos produtos'; ?></h1>
<?php //get_template_part( 'featured-box' ); ?> 
<?php if (of_get_option('fpost', '0') != '1'): if ( 'posts' == get_option( 'show_on_front' ) ): get_template_part( 'blog' ); endif; endif;?> 
<?php if ( of_get_option('bottom-quotation', 'All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team') != '' ) : ?>
<div id="customers-comment">
<blockquote><?php echo of_get_option('bottom-quotation', 'All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team'); ?></blockquote>
</div>
<?php endif; ?>
<?php get_footer(); ?>