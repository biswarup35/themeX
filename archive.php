<?php get_header();?>
             <main>
                 <?php the_archive_title( '<h1>','</h1>' ); ?>

                 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
                   <?php get_template_part( 'template-parts/content','posts' ); ?>
                 <?php endwhile; else : ?>
                   <?php get_template_part( 'template-parts/content', 'none'); ?>
                 <?php endif;?>
                  <?php echo paginate_links(); ?>
                  
                 <p>Template: Archive.php</p>
             </main>
             <aside class="sidebar-aside">
                 <?php get_sidebar(); ?>
             </aside>

             
<?php get_footer();?>