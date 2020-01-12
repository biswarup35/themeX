<?php get_header();?>
             <main>
                 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
                   <?php get_template_part( 'template-parts/content' ); ?>
                 <?php endwhile; else : ?>
                   <?php get_template_part( 'template-parts/content', 'none'); ?>
                 <?php endif;?>
                  <?php echo paginate_links(); ?>
                 <p>Template: Index.php</p>
             </main>
             <aside class="sidebar-aside">
                 <?php get_sidebar(); ?>
             </aside>

             
<?php get_footer();?>