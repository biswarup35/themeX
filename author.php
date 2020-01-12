<?php get_header();?>
             <main>
                 <div class="author-bio">
                  <?php the_archive_title( '<h1>','</h1>' ); ?>
                  <p>
                      <?php echo the_author_meta( 'description', $post->post_author ); ?>
                  </p>
                 </div>

                 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
                   <?php get_template_part( 'template-parts/content','posts' ); ?>
                 <?php endwhile; else : ?>
                   <?php get_template_part( 'template-parts/content', 'none'); ?>
                 <?php endif;?>
                  <?php echo paginate_links(); ?>
                  
                 <p>Template: Author.php</p>
             </main>
             <aside class="sidebar-aside">
                 <?php get_sidebar(); ?>
             </aside>

             
<?php get_footer();?>