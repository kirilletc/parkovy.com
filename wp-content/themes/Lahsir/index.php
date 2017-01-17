<?php get_header();?> 
<div>
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
		<span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span> <?php?>
		<div class="meta">
			<p>Опубликовано: <?php the_time('F j, Y'); ?> в <?php the_time('g:i a'); ?></p> 
			<p>Категории: <?php the_category(',') ?></p> 
			<?php the_tags('<p>Тэги: ', ',', '</p>'); ?>
		</div>
		<?php if ( has_post_thumbnail() ) the_post_thumbnail(); ?>
		<?php the_content(''); ?>
	</div>
	<?php endwhile;
	else: echo ''; endif;?>	 
</div>
<?php get_footer(); ?>