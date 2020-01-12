<footer>
   <div class="footer-content">
      <div class="child1">
         <?php get_sidebar( 'footer' ); ?>
      </div>
      <div class="child2">
         <?php get_sidebar( 'footer2' ); ?>
      </div>
      <div class="child3">
         <?php get_sidebar( 'footer3' ); ?>
      </div>
   </div>
    
    <div class="footer-nav">
     <p>Made with Love by Biswarup</p>
       <?php
             $args = [
                'theme_location'     => 'footer-menu',
                'container_class' => 'sub-footer-navigation',
                'container_id'    => '',
                'menu_class'      => 'footer-menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'item_spacing'    => 'preserve',
                'depth'           => 0,
                 ];

            wp_nav_menu( $args );
         ?>
    </div>
</footer>
 </div><!-- continer end --> 
 
    <?php wp_footer();?>
</body>
</html>