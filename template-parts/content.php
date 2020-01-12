<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <header role="article-header">
         <?php the_title( '<h1>','</h1>' ); ?>
         <div class="author-info">
            <?php esc_html_e( 'Author:' ); ?> <?php the_author_posts_link(); ?>
         </div>
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