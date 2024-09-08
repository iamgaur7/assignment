<?php get_header(); ?>

<main id="primary" class="site-main">
    <header class="page-header">
        <h1 class="page-title"><?php _e('Oops! That page can’t be found.', 'navi-business'); ?></h1>
    </header>

    <div class="page-content">
        <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'navi-business'); ?></p>

        <?php get_search_form(); ?>
    </div>
</main>

<?php get_footer(); ?>
