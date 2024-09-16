<?php
/**
 * Template Name: Home
 */

get_header();
?>

<section id="home_hero" class="flex items-center justify-center h-[900px] relative bg-cover bg-no-repeat bg-center" style="background-image: url(<?= get_field( 'hero_background' ) ?>)">
    <div class="container">
        <div class="text-center">
            <?php if( $heading = get_field( 'hero_heading' ) ): ?>
                <h1 class="text-white roboto-condensed font-bold"><?= $heading ?></h1>
            <?php endif; ?>
            <?php if( $description = get_field( 'hero_description' ) ): ?>
                <div class="description text-white">
                    <?= $description ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php if( $text = get_field( 'intro_text' ) ): ?>
<section id="home_intro" class="py-[100px]">
    <div class="container">
        <div class="columns-2">
            <?= $text ?>
        </div>
    </div>
</section>
<?php endif ?>

<?php
get_footer();