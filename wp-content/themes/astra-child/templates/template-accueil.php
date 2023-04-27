<?php
/**
 * Template Name: template accueil
 * Template Post Type: post, page, product
 */


get_header(); ?>
<main>
<section class="bordure">
    <h1>BOISSON ÉNERGISANTE <br>100% NATURELLE</h1>


<div class="canette-feuille">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/canette.png" alt="canette" class="canette">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feuille-1.png" alt="feuille">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feuille-2.png" alt="feuille">
</div>
</section>
<section class="plante">
    <h2>L'énergie des plantes</h2>
    <p> Planty, c’est la première boisson<br>
    énergisante composée à 100 % de produits naturels.<br> 
    Avec son goût frais et fruité, retrouvez votre <br>
    énergie grâce aux plantes riches en vitamine B2, <br>
    à n’importe quel moment de la journée.</p>
</section>
</main>

<?php get_footer();