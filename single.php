<?php get_header() ?>
<div id="container" class="single-wrapper">
  <main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        ?>
        <article class="single">
          <div class="single__inner">
            <div class="single__datecate">
              <p class="single-date"><?php the_time('Y/m/d'); ?></p>
              <p class="single-cate"><?php echo $catname; ?></p>
            </div>
            <h1 class="single__title">
              <?php the_title(); ?>
            </h1>
            <div class="single__text"><?php the_content(); ?></div>
          </div>
        </article>
    <?php endwhile;
    endif; ?>

    <ul class="post-link">
      <li><?php previous_post_link('%link', '< 前の記事へ'); ?></li>
      <li><?php next_post_link('%link', '次の記事へ >'); ?></li>
    </ul>
  </main>
</div>
<?php get_footer() ?>