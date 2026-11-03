<?php
/**
* Template Name: Custom Landing Page
* Description: Acustom landing pge templte.
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div class="custom-template-content">
        <?php
        while (have_posts()):
            the_post();
            the_content();
        endwhile;
        ?>
        </div>
    </main>
    <?php
    get_footer();