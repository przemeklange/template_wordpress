<?php if (have_posts()) : while ( have_posts()) : the_post();?>
      <div class="blog-post">
        <h2 class="wielkiel"><?php the_title()?></h2>
        <?php wp_attachment_is_image()?>
        <?php the_content()?>
      </div>
      <?php endwhile; ?>
    <?php else: ?>
      <h3>Brak postów do wyświetlenia</h3>
    <?php endif; ?>