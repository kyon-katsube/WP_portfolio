<!--works個別ページ（投稿ページ）-->

<?php get_header();?>

    <main class="l-main">

      <article class="p-article">
        <div class="c-space__article-inner">
          <h1 class="p-article__title">WORKS   <span>~Description of works~</span></h1>
          <?php
            if(have_posts()):
               while(have_posts()):the_post();
            ?>
            <h2 class="p-article__workname"><?php the_title();?></h2>
            <h3 class="p-article__workskill">
              <!--カテゴリー名を複数すべて表示-->
              <?php echo the_category();?>
            </h3>
            <div class="p-article__img">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="p-article__body">
              <?php 
                  $article__body__info = get_the_content();
                  $article__body__info = str_replace('<h4','<h4 class="p-article__body__info-title" ',$article__body__info);
                  $article__body__info = str_replace('<li','<li class="p-article__body__list" ',$article__body__info);
                  echo  $article__body__info;
              ?>
              <?php endwhile;
                endif; ?>   
            </div>

          <div class="p-article__home-link">
            <a href="<?php echo esc_url(home_url('/'));?>#works">Works一覧へ</a>
          </div>
        </div>
      </article>

<?php get_footer();?>