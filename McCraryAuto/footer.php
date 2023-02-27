<footer class="footer--main">
      <p>Privacy Policy</p>
      <p class="gray-text">Copyright 2022</p>
</footer>

<div class="menu-overlay">
  <i class="fa fa-window-close menu-overlay__close" aria-hidden="true"></i>
  <ul class="menu-overlay-list">
      <li><a href="<?php echo esc_url(site_url('/about'));?>">About</a></li>
      <li><a href="<?php echo esc_url(site_url('/services'));?>">Services</a></li>
      <li><a href="<?php echo esc_url(site_url('/reviews'));?>">Reviews</a></li>
      <li><a href="<?php echo esc_url(site_url('/contact'));?>">Contact</a></li>
  </ul>
</div>



<?php wp_footer(); ?>
</body>
</html>