<?php get_header(); ?>

<section class="page-not-found block-text" aria-labelledby="page-not-found-title">
    <div class="container">
        <div class="text">
            <p class="page-not-found-code">404</p>
            <h1 id="page-not-found-title">Page Not Found</h1>
            <p>Sorry, the page you’re looking for may have moved or no longer exists.</p>
            <a class="btn" href="<?php echo esc_url(home_url('/')); ?>"><span>Back to Home</span></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
