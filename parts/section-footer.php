<?php
  $location_fields = bungalowkitchen_get_location_fields();
  $location_term = bungalowkitchen_get_location_term();
  $reservation_button_id = 'sr-res-footer-button';
  if ($location_term && !empty($location_term->slug)) {
    $reservation_button_id .= '-' . $location_term->slug;
  }
  $location_defaults = [
    'facebook' => ['url' => 'https://www.facebook.com/bungalowkitchentiburon/'],
    'instagram' => ['url' => 'https://instagram.com/bungalowkitchentiburon'],
    'phone_number' => '415-366-4088',
    'google_maps_url' => 'https://maps.app.goo.gl/GKLXgK7q9dMm16sz5',
    'address' => "5 Main Street Tiburon\nCalifornia 94920",
    'hours' => [
      ['day' => 'MONDAY', 'hours' => 'Closed'],
      ['day' => 'TUESDAY', 'hours' => '5pm-9pm'],
      ['day' => 'WEDNESDAY', 'hours' => '11am-9pm'],
      ['day' => 'THURSDAY', 'hours' => '11am-9pm'],
      ['day' => 'FRIDAY', 'hours' => '11am-9pm'],
      ['day' => 'SATURDAY', 'hours' => '11am-9pm'],
      ['day' => 'SUNDAY', 'hours' => '11am-8pm'],
    ],
  ];
  foreach ($location_defaults as $key => $value) {
    if (empty($location_fields[$key])) {
      $location_fields[$key] = $value;
    }
  }
?>
<footer>
  <div class="container container-footer">
    <div class="md:flex gap-10">
      <div class="basis-3/12">
        <h3>Follow Us</h3>
        <p class="social">
          <?php if (!empty($location_fields['facebook'])): ?>
          <a href="<?php echo $location_fields['facebook']['url']; ?>" target="_blank">
            <img src="<?php echo assets_url('/dist/images/icon-facebook.png'); ?>"/>
          </a>
          <?php endif; ?>
          <?php if (!empty($location_fields['instagram'])): ?>
          <a href="<?php echo $location_fields['instagram']['url']; ?>" target="_blank">
            <img src="<?php echo assets_url('/dist/images/icon-instagram.png'); ?>"/>
          </a>
          <?php endif; ?>
        </p>
        <h3>Call Us</h3>
        <p>
          <?php if (!empty($location_fields['phone_number'])): ?>
          <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $location_fields['phone_number']); ?>"><?php echo $location_fields['phone_number']; ?></a>
          <?php endif; ?>
        </p>
        <h3>Visit Us</h3>
        <p>
          <a href="<?php echo $location_fields['google_maps_url']; ?>" target="_blank">
            <?php echo nl2br($location_fields['address']); ?>
          </a>
        </p>
      </div>
      <div class="basis-5/12">
        <div class="newsletter-signup">
          <h3>Keep Up With<br>The Good Times</h3>
          <?php if (empty($location_fields['newsletter_link'])): ?>
          <form action="#" class="pre-newsletter">
            <div class="inputs">
              <input type="email" placeholder="Type your email here" id="email" required autocomplete="email">
              <div class="submit-wrapper">
                <input type="submit" value="YEAH!">
              </div>
            </div>
          </form>
          <div class="reveal">
            <div class="reveal-content">
              <button class="close-button" data-close aria-label="Close signup form" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
              <style>
                .bk-newsletter-form { background: #fff; padding: 18px 12px 8px; color: #31261d; }
                .bk-newsletter-form h2 { margin: 0 0 8px; }
                .bk-newsletter-form .bk-required { margin: 0 0 18px; font-size: 13px; }
                .bk-newsletter-field { margin-bottom: 14px; }
                .bk-newsletter-field label { display: block; margin-bottom: 5px; font-weight: 600; }
                .bk-newsletter-field input { width: 100%; border: 1px solid #7d9383; background: #fffdf8; padding: 10px 12px; color: #31261d; }
                .bk-newsletter-submit { border: 0; background: #31261d; color: #fff; padding: 11px 22px; cursor: pointer; text-transform: uppercase; }
                .bk-newsletter-submit:hover { background: #f28365; }
                .bk-newsletter-submit:disabled { opacity: .65; cursor: wait; }
                .bk-newsletter-status { min-height: 22px; margin-top: 12px; }
                .bk-newsletter-success { padding: 42px 24px; text-align: center; color: #fffdf8; text-shadow: 0 2px 10px rgba(49, 38, 29, 0.7); }
                .bk-newsletter-hp { position: absolute !important; left: -9999px !important; width: 1px !important; height: 1px !important; overflow: hidden !important; }
              </style>
              <form action="https://docs.google.com/forms/d/e/1FAIpQLSdGrpNUGLJ4Vt8oEC50Nc1hfKLOhqHVAVP-tUtSxjl4RaDDTg/formResponse" method="post" target="bk-newsletter-target" id="bk-newsletter-form" class="bk-newsletter-form">
                <h2>Join the Good Times</h2>
                <p class="bk-required"><span aria-hidden="true">*</span> Required fields</p>
                <div class="bk-newsletter-field">
                  <label for="mce-EMAIL">Email Address *</label>
                  <input type="email" name="entry.363447893" id="mce-EMAIL" required autocomplete="email">
                </div>
                <div class="bk-newsletter-field">
                  <label for="bk-first-name">First Name *</label>
                  <input type="text" name="entry.1134613230" id="bk-first-name" required autocomplete="given-name">
                </div>
                <div class="bk-newsletter-field">
                  <label for="bk-last-name">Last Name *</label>
                  <input type="text" name="entry.1670716511" id="bk-last-name" required autocomplete="family-name">
                </div>
                <div class="bk-newsletter-field">
                  <label for="bk-zip">ZIP Code *</label>
                  <input type="text" name="entry.1480154692" id="bk-zip" required inputmode="numeric" autocomplete="postal-code" pattern="[0-9]{5}(-[0-9]{4})?">
                </div>
                <div class="bk-newsletter-field">
                  <label for="bk-birthday">Birthday <span>(optional, MM/DD)</span></label>
                  <input type="text" name="entry.1461643582" id="bk-birthday" inputmode="numeric" placeholder="MM/DD" pattern="(0[1-9]|1[0-2])/(0[1-9]|[12][0-9]|3[01])">
                </div>
                <div class="bk-newsletter-hp" aria-hidden="true">
                  <label for="bk-website">Leave this field blank</label>
                  <input type="text" id="bk-website" tabindex="-1" autocomplete="off">
                </div>
                <input type="hidden" name="fvv" value="1">
                <input type="hidden" name="pageHistory" value="0">
                <input type="hidden" name="submit" value="Submit">
                <input type="submit" value="Subscribe" class="bk-newsletter-submit">
                <p class="bk-newsletter-status" role="status" aria-live="polite"></p>
              </form>
              <div class="bk-newsletter-success" id="bk-newsletter-success" hidden tabindex="-1">
                <h2>You are in.</h2>
                <p>Keep an eye on your inbox for the good times.</p>
              </div>
              <iframe name="bk-newsletter-target" id="bk-newsletter-target" title="Newsletter signup response" hidden></iframe>
              <script>
                (function () {
                  var form = document.getElementById('bk-newsletter-form');
                  var frame = document.getElementById('bk-newsletter-target');
                  var success = document.getElementById('bk-newsletter-success');
                  var status = form ? form.querySelector('.bk-newsletter-status') : null;
                  var submit = form ? form.querySelector('.bk-newsletter-submit') : null;
                  var submitted = false;
                  if (!form || !frame || !success) return;
                  form.addEventListener('submit', function (event) {
                    if (document.getElementById('bk-website').value) {
                      event.preventDefault();
                      return;
                    }
                    submitted = true;
                    submit.disabled = true;
                    submit.value = 'Joining...';
                    status.textContent = 'Submitting your signup...';
                  });
                  frame.addEventListener('load', function () {
                    if (!submitted) return;
                    submitted = false;
                    form.hidden = true;
                    success.hidden = false;
                    success.focus();
                  });
                }());
              </script>
            </div>
          </div>
                    <?php else:
            $newsletter_link = $location_fields['newsletter_link'];
          ?>
          <p class="pre-newsletter" <?php print empty($location_fields['join_team_link']) ? '' : 'style="margin-bottom: 10px !important;"';?>>
            <a href="<?php echo esc_url($newsletter_link['url']); ?>" target="<?php echo esc_attr(!empty($newsletter_link['target']) ? $newsletter_link['target'] : '_self'); ?>" class="btn" style="margin: 0 !important;"><?php echo esc_html(!empty($newsletter_link['title']) ? $newsletter_link['title'] : 'YEAH!'); ?></a>
          </p>
          <?php endif; ?>

<?php if (!empty($location_fields['join_team_link'])):
$join_team_link = $location_fields['join_team_link'];
?>
<p class="pre-newsletter">
            <a href="<?php echo esc_url($join_team_link['url']); ?>" target="<?php echo esc_attr(!empty($join_team_link['target']) ? $join_team_link['target'] : '_self'); ?>" class="btn" style="margin: 0 !important;"><?php echo esc_html(!empty($join_team_link['title']) ? $join_team_link['title'] : 'YEAH!'); ?></a>
          </p>
        <?php endif;?>

        </div>
        <?php
          if (!empty($location_fields['hours'])) {
            print '<p>';
            foreach ($location_fields['hours'] as $row) {
              print sprintf(
                '<span class="day">%s</span>: <span class="time">%s</span><br>',
                $row['day'],
                $row['hours']
              );
            }
            print '</p>';
          }
        ?>
      </div>
      <div class="basis-4/12 self-end">
        <p class="bird-container text-center md:text-right">
          <img src="<?php echo assets_url('/dist/images/bird-footer.png'); ?>" class="bird" />
        </p>
        <p class="text-center md:text-right">
          <?php if ($location_term && 'tiburon' === $location_term->slug): ?>
          <a href="https://www.opentable.com/r/the-bungalow-kitchen-tiburon" class="btn bk-opentable-trigger">Make a Reservation</a>
          <?php else: ?>
          <a href="#" class="btn" id="<?php echo esc_attr($reservation_button_id); ?>">Make a Reservation</a>
          <?php endif; ?>
        </p>
      </div>
    </div>
  </div>
</footer>
