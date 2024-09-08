</div> <!-- #content -->

<footer class="site-footer">
    <div class="site-info">
        <?php
        printf(
            /* translators: %s: WordPress */
            esc_html__('Proudly powered by %s', 'techwithnavi-theme'),
            '<a href="' . esc_url(__('https://wordpress.org/', 'techwithnavi-theme')) . '">techwithnavi</a>'
        );
        ?>
    </div>
</footer>
<script>
  document.addEventListener( 'DOMContentLoaded', function() {
      document.querySelector( '.track-form-submission' ).addEventListener( 'submit', function() {
          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
              'event': 'form_submission'
          });
      });
  });
</script>

<?php wp_footer(); ?>
</body>
</html>
