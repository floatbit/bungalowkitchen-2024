    </main>

    <?php if (!is_front_page()): ?>
        <?php get_template_part('parts/section-footer'); ?>
    <?php endif; ?>
    
    <?php wp_footer(); ?>
</body>

</html>