

<?php get_header(); ?>

<h1> <?php echo "Sökresultat för: "; the_search_query(); ?></h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h3 class ="title">
	<a href="<?php the_permalink(); ?>">
    <?php the_title(); ?></a>
</h3>

<?php the_excerpt() ?>

<?php endwhile; endif; ?>

<? get_footer(); ?>