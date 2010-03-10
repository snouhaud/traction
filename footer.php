<?php global $traction; ?>
</div><!--end main-->
<div id="main-bottom"></div>
</div><!--end wrapper-->
<div id="footer">
  <div class="wrapper clear">
    <div id="footer-about" class="footer-column">
      <h2><?php _e('About', 'traction') ?></h2>
        <?php if ($traction->footerAbout() != '') : ?>
          <?php echo $traction->footerAbout(); ?>
        <?php else : ?>
          <p><?php _e("Did you know you can write your own about section just like this one? It's really easy. Head into the the <em>Traction Options</em> menu and check out the footer section. Type some stuff in the box, click save, and your new about section shows up in the footer.", "traction") ?></p>
          <p><?php _e("We didn't take them, they are a random sampling of the most popular photos on Flickr with the tag 'nature'.", "traction") ?></p>
        <?php endif; ?>
    </div>
    <div id="footer-middle" class="footer-column">
        <?php if ( is_active_sidebar('footer_sidebar') ) echo "<ul>" ?>
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_sidebar') ) : ?>
            <ul>
              <li class="widget">
                <h2 class="widgettitle"><?php _e('Pages'); ?></h2>
                <ul>
                  <?php wp_list_pages('depth=0&title_li='); ?>
                </ul>
              </li>
            </ul>
          <?php endif; ?>
        <?php if ( is_active_sidebar('footer_sidebar') ) echo "</ul>" ?>
    </div>
    <div id="footer-search" class="footer-column">
      <?php if ( is_active_sidebar('footer_sidebar_2') ) echo "<ul>" ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_sidebar_2') ) : ?>
          <h2><?php _e('Search', 'traction') ?></h2>
           <?php if (is_file(STYLESHEETPATH . '/searchform.php')) include (STYLESHEETPATH . '/searchform.php'); else include(TEMPLATEPATH . '/searchform.php'); ?>
        <?php endif; ?>
      <?php if ( is_active_sidebar('footer_sidebar_2') ) echo "</ul>" ?>
    </div>
  </div><!--end wrapper-->
</div><!--end footer-->
<div id="copyright" class="wrapper">
    <?php 
            /*Hey there code reader! Hope you are enjoying Traction so far. I wanted to let you know the footer attribution link plays a vital role in exposing our open source themes to the WordPress community. I would really appreciate it if you could leave this message and the links below intact. Go ahead and add a 'Modified by' or similar next to the link if you have made changes. Questions? Send an email to info {at} thethemefoundry.com.*/
    ?>
        <p class="credit"><a href="http://thethemefoundry.com/traction/">Traction Theme</a> by <a href="http://thethemefoundry.com">The Theme Foundry</a></p>
        <p><?php _e('Copyright', 'traction') ?> &copy; <?php echo date('Y') ?> <?php echo $traction->copyrightName(); ?>. All rights reserved.</p>
        
</div><!--end copyright-->


<?php wp_footer(); ?>
<?php
  if ($traction->statsCode() != '') {
    echo $traction->statsCode();
  }
?>
</body>
</html> 