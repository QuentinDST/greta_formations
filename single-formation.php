<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	
	<article class="post">
		<?php if ( has_post_thumbnail() ): ?>
			<div class="post__thumbnail">
				<?php the_post_thumbnail('thumbnail'); ?>
			</div>
		<?php endif; ?>

		<h1 class="title-formation"><?php the_title(); ?></h1>

		<div class="post__content">
			<div class="row">
				<div class="col-sm-12">

                <div class="tabs">
                    <ul class="tabs--ul">
                      <li class="tabs--li"><a href="#bref">En bref</a></li>
                      <li class="tabs--li"><a href="#info">Information</a></li>
                      <li class="tabs--li"><a href="#descriptif">Descriptif</a></li>
                      <li class="tabs--li"><a href="#financement">financement</a></li>
                      <li class="tabs--li"><a href="#lieu">Lieu de Formation</a></li>
                    </ul>

                    <div id="bref" class="tab-content">
                      <p>Le développeur web et web mobile développe ou fait évoluer des applications orientées web, ou web mobile ou les deux à la fois, en respectant les normes et standards reconnus par la profession et en suivant l'état de l'art de la sécurité informatique à toutes les étapes. Ces applications sont destinées à des internautes ou des salariés d'entreprise.</p>
                    </div>

                    <div id="info" class="tab-content">
                      <ul>
                        <li>Date de début : 03 octobre 2022</li>
                        <li>Date de fin : 30 juin 2023</li>
                        <li>Durée de la formation : 8 mois</li>
                        <li>Durée en entreprise : 315 heures</li>
                        <li>Durée en centre : 931 heures</li>
                        <li>Niveau de sortie : Niveau 5</li>
                        <li>Publics visés : Demandeur d'emploi / Tout public</li>
                      </ul>
                    </div>

                    <div id="descriptif" class="tab-content">
                      <p>Description du module</p>
                    </div>

                    <div id="financement" class="tab-content">
                      <p>Description du module</p>
                    </div>

                    <div id="lieu" class="tab-content">
                      <p>Description du module</p>
                    </div>

                    
                </div>

					
				</div>
			</div>
	  	</div>
	</article>

<?php endwhile; endif; ?>
<?php get_footer(); ?>