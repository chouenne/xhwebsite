<footer>
  <div class="conatiner">
    <div class="footer_logo">
      <?php the_custom_logo(); ?>
    </div>

    <div class="social-media">
      <div class="social-icon">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin"></i>
      </div>
    </div>
  </div>

  <p>copyright
    <?php echo date('Y'); ?> by
    <?php bloginfo('name'); ?>
  </p>
</footer>
<!-- Back to Top Button -->
<div id="back-to-top">
  <a href="#top" title="Back to Top">&#11014;</a>
</div>

<?php wp_footer(); ?>
</body>

</html>