<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <header role="article-header">

         <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">','</a></h2>' ); ?>
         <div class="author-info">
            <?php esc_html_e( 'Author:' ); ?> <?php the_author_posts_link(); ?>
         </div>
     </header>
     <div class="article-body">
         <?php the_excerpt(); ?>
     </div>
</article>