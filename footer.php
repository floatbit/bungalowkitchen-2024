    </main>

    <?php //if (!is_front_page()): ?>
        <?php get_template_part('parts/section-footer'); ?>
    <?php //endif; ?>
    
    <?php wp_footer(); ?>
    <script>
      window.addEventListener('load', function () {
        if (
          window.SevenroomsWidget &&
          document.getElementById('sr-res-main-button')
        ) {
          SevenroomsWidget.init({
            venueId: 'bungalowkitchen',
            triggerId: 'sr-res-main-button',
            type: 'reservations',
            styleButton: false,
            clientToken: ''
          });
        }
      });
    </script>
</body>

</html>
