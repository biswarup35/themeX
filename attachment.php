<?php get_header();?>
             <main>
                 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>

                 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                     <header role="article-header">
                         <?php the_title( '<h1>','</h1>' ); ?>
                     </header>
                     <div class="article-body">
                         <?php the_content(); ?>
                     </div>
                     <div class="comments">
                         <?php if ( comments_open() ) : ?>
                         <?php comments_template(); ?>
                         <?php endif; ?> 
                     </div>
                 </article>

                 <?php endwhile; else : ?>
                   <?php get_template_part( 'template-parts/content', 'none'); ?>
                 <?php endif;?>
                 <p>Template: Attachment.php</p>
             </main>
             <aside class="sidebar-aside">
                 <?php get_sidebar(); ?>
             </aside>

             
<?php get_footer();?>