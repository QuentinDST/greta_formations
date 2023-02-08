<?php get_header(); ?>

<h1>Retrouvez ici nos dernières actualités</h1>
<h2>je suis sur mon template</h2>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <?= the_category(); ?>	
    <?= the_content(); ?>	

<?php endwhile; endif; ?>

<?php get_footer(); ?>