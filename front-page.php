<?php get_header(); ?>

<div class="row location">
		<div class="items">
			<p></p>
			<a href="">Métiers</a>
			<a href="">Formation</a>
			<a href="">Contact</a>
		</div>
	</div>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <h1><?= the_title(); ?>	</h1>
    <?= the_category(); ?>	
    <?php the_content(); ?>	

<?php endwhile; endif; ?>

<div class="partenaire"><h4>partenaire</h4></div>

<?php get_footer(); ?>