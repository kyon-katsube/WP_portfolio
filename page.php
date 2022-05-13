<!--お問い合わせフォーム（固定ページ）-->

<?php get_header();?>

    <main class="l-main">

      <div class="p-contact-page">  <!--works個別ページと同じレイアウト-->
        <div class="c-space__contact-inner">
          <h1 class="p-contact-page__title">CONTACT</h1>
            <!--ここにコンタクトフォームを反映させる-->
              <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post();?>
                <?php the_content();?>
              <?php endwhile; ?>
              <?php endif; ?>
  
        </div>
      </div>

<?php get_footer();?>