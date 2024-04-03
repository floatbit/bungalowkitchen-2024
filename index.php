<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="prose mx-auto py-10">
            <p>Aliqua occaecat mollit ea ut aute quis sunt ullamco aliquip excepteur ex occaecat sit. Exercitation eiusmod mollit excepteur commodo tempor aute nulla proident. Aliqua est duis ullamco consectetur eiusmod elit magna tempor deserunt quis elit laboris anim incididunt. Consequat sunt nisi cupidatat velit aliqua.</p>
            
            <h4>Sample image using the <code>assets_url</code> function</h4>
            <img src="<?php echo assets_url('/dist/images/sample-image.jpg'); ?>" class="w-80" />

            <h4>Sample image using css</h4>
            <div class="image-test"></div>

            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>