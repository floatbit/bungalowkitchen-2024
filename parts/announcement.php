<?php if (is_front_page()) : ?>
  <?php if ( have_rows( 'announcement_bar', 'option' ) ) : ?>
	<?php while ( have_rows( 'announcement_bar', 'option' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'show_announcement_bar' ) == 1 ) : ?>
		<?php $image = get_sub_field( 'image' ); ?>
		<?php if ( $image ) : ?>
			
		<?php endif; ?>
    <div class="announcement">
      <a href="<?php the_sub_field( 'url' ); ?>" target="_blank">
      <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" class="w-full"/>
      </a>
    </div>

		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
<?php endif; ?>