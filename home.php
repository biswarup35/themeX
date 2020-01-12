<?php get_header();?>
             <main>
                 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
                   <?php get_template_part( 'template-parts/content','posts' ); ?>
                 <?php endwhile; else : ?>
                   <?php get_template_part( 'template-parts/content', 'none'); ?>
                 <?php endif;?>
                  <div class="pagination">
                      <?php echo paginate_links(); ?>
                  </div>
                 <p>Template: Home.php</p>
             </main>
             <aside class="sidebar-aside">
                 <?php get_sidebar(); ?>
             </aside>

             
<?php get_footer();?>