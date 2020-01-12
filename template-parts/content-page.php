<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <header role="article-header">
         <?php the_title( '<h1>','</h1>' ); ?>
     </header>
     <div class="article-body">
         <?php the_content(); ?>
     </div>
</article>