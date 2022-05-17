<?php get_header();?>

    <main class="l-main">

      <!-- イントロ-->
      <div class="p-split">
        <div class="p-split__body">
          <p class="p-split__body__title">KYOKO<br>KATSUBE</p>
          <p class="p-split--body__text">
            サイトをご覧頂きありがとうございます。<br>
            コーディングやWordPressの構築はお任せください。<br>
            ご要望に真摯に向き合ったWebサイト作成を目指しています。
          </p>
        </div>
        <div class="p-split__img"></div> <!--右側のメイン画像-->
      </div>
      <!-- /split -->

      <!-- works -->
      <section class="p-works c-space__section" id="works"> <!--cはセクションごとの余白調整-->
        <div class="c-space__inner"><!--cはセクションごとの余白調整-->
          <h2 class="c-title">WORKS</h2>
          <div class="p-works__list">
          <!--すべての投稿（works)の取得-->
              <?php $args = array("post_type" => "post", "posts_per_page" => -1); ?>
              <?php $myposts = get_posts($args); ?>
              <?php if($myposts): ?>
              <?php foreach($myposts as $post) : setup_postdata($post); ?>
                <a class="p-works__list__item" href="<?php the_permalink();?>"><!--固定ページのスラッグ（パーマリンク）を記入する-->
                  <div class="p-works__list__item__img"><?php the_post_thumbnail();?></div>
                  <p class="p-works__list__item__name"><?php the_title();?></p>
                  <p class="p-works__list__item__info">
                    <?php					
                        $category = get_the_category();
                        if ($category) {
                          foreach($category as $cat){
                            echo $cat->cat_name;
                          }
                        }
                    ?>
                  </p>
              </a>
            <?php endforeach; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        </div>
      </section>
      <!-- /works -->

      <!-- skill -->
      <section class="p-skill c-space__section" id="skill"> <!--cはセクションごとの余白調整-->
        <div class="c-space__inner"> <!--cはセクションごとの余白調整-->
          <h2 class="c-title">SKILL</h2>
          <div class="p-skill__list">

            <div class="p-skill__list__wrapper">
                <h3 class="p-skill__list__wrapper__title">コーディング</h3>
                <div class="p-skill__list__wrapper__contents">
                    <p class="p-skill__list__wrapper__contents__intro">オンラインスクールの<a href="https://raise-tech.net/courses/wordpress-sidejob-course" target="_blank">WordPressコース</a>で約5ヶ月・500時間学習し、WordPressの基本的な構築まで習得しました。</p>
                    <div class="p-skill__list__wrapper__contents__item">
                      <p class="p-skill__list__wrapper__contents__item__img"><img src="<?php echo get_template_directory_uri();?>/img/htmlcss.png" alt="HTML&CSS"></p>
                      <div class="p-skill__list__wrapper__contents__item__body">
                        <h4 class="p-skill__list__wrapper__contents__item__body__name">HTML5/CSS3</h4>
                        <p class="p-skill__list__wrapper__contents__item__body__text">
                          CSSはSass(SCSS記法)を利用し効率的かつ正確に、さらにCSS設計（FLOCSS)も用いて「予測しやすい」「再利用しやすい」「保守しやすい」「管理しやすい」記述を行います。<br>
                          また、CSSを利用した簡単なアニメーションの実装も可能です。
                        </p>
                      </div>
                    </div>
                    <div class="p-skill__list__wrapper__contents__item">
                      <p class="p-skill__list__wrapper__contents__item__img"><img src="<?php echo get_template_directory_uri();?>/img/wp.png" alt="wordpress"></p>
                      <div class="p-skill__list__wrapper__contents__item__body">
                        <h4 class="p-skill__list__wrapper__contents__item__body__name">WordPress</h4>
                        <p class="p-skill__list__wrapper__contents__item__body__text">
                          ブロックエディタや子テーマからの構築はもちろん、オリジナルテーマの構築を得意としています。プラグインを使用した基本的なカスタマイズや簡単なカスタム投稿などの設置も行います。
                        </p>
                      </div>
                    </div>
                    <div class="p-skill__list__wrapper__contents__item">
                      <p class="p-skill__list__wrapper__contents__item__img"><img src="<?php echo get_template_directory_uri();?>/img/js.png" alt="javascript/jquery"></p>
                      <div class="p-skill__list__wrapper__contents__item__body">
                        <h4 class="p-skill__list__wrapper__contents__item__body__name">JavaScript(jQuery)</h4>
                        <p class="p-skill__list__wrapper__contents__item__body__text">
                          ハンバーガーメニュー・クリックイベント・sliderなど、動きのあるサイトの実装が可能です。
                        </p>
                      </div>
                    </div>
                    <div class="p-skill__list__wrapper__contents__item">
                      <p class="p-skill__list__wrapper__contents__item__img"><img src="<?php echo get_template_directory_uri();?>/img/github.png" alt="tool"></p>
                      <div class="p-skill__list__wrapper__contents__item__body">
                        <h4 class="p-skill__list__wrapper__contents__item__body__name">ツール</h4>
                        <p class="p-skill__list__wrapper__contents__item__body__text">
                          コードエディターはVsCode、WordPress実装はLocalを使用。また、GitHubを使ったソースコードの連携が可能です。
                        </p>
                      </div>
                    </div>
                </div>    
            </div>
            <div class="p-skill__list__wrapper">
              <h3 class="p-skill__list__wrapper__title">ディレクション</h3>
              <div class="p-skill__list__wrapper__contents">
                <p class="p-skill__list__wrapper__contents__intro">Web制作会社にて半年間ディレクター業務を経験。お客様との折衝・スケジュール管理・SEO対策などのディレクション業務に従事しました。</p>
                </p>
                  <div class="p-skill__list__wrapper__contents__item">
                    <p class="p-skill__list__wrapper__contents__item__img"><img src="<?php echo get_template_directory_uri();?>/img/meeting.png" alt="営業"></p>
                    <div class="p-skill__list__wrapper__contents__item__body">
                      <h4 class="p-skill__list__wrapper__contents__item__body__name">営業・スケジュール管理</h4>
                      <p class="p-skill__list__wrapper__contents__item__body__text">
                        お客様から丁寧にヒアリングし、ご要望を解決できるようなサイト作りをご提案いたします。Cacooにてサイトマップ・ワイヤーフレーム作成、Backlogにてスケジュール管理を行います。<br>
                        お客様・社内とコンタクトを密にし、納期通りのスケジュールで必ず遂行できるよう配慮します。
                      </p>
                    </div>
                  </div>
                  <div class="p-skill__list__wrapper__contents__item">
                    <p class="p-skill__list__wrapper__contents__item__img"><img src="<?php echo get_template_directory_uri();?>/img/writing.png" alt="ライティング"></p>
                    <div class="p-skill__list__wrapper__contents__item__body">
                      <h4 class="p-skill__list__wrapper__contents__item__body__name">ライティング</h4>
                      <p class="p-skill__list__wrapper__contents__item__body__text">
                        お客様からの原稿のリライトや、検索順位を上げるためのキーワードを含めたメタディスクリプションの作成、ブログやコラム記事の作成代行などを行います。約15年間紙パンフレットの作成に従事していたので、校正も得意です。
                      </p>
                    </div>
                  </div>
                  <div class="p-skill__list__wrapper__contents__item">
                    <p class="p-skill__list__wrapper__contents__item__img"><img src="<?php echo get_template_directory_uri();?>/img/seo.png" alt="SEO"></p>
                    <div class="p-skill__list__wrapper__contents__item__body">
                      <h4 class="p-skill__list__wrapper__contents__item__body__name">SEO対策</h4>
                      <p class="p-skill__list__wrapper__contents__item__body__text">
                        Google Analyticsを利用したアクセス解析レポートを元に、サイト閲覧率や購入率を上げるための提案（新着記事の投稿・既存サイトのブラッシュアップなど）を行います。
                      </p>
                    </div>
                  </div>
              </div>            
            </div>
            <div class="p-skill__list__wrapper">
              <h3 class="p-skill__list__wrapper__title">デザイン ※勉強中</h3>
              <div class="p-skill__list__wrapper__contents">
                <p class="p-skill__list__wrapper__contents__intro">オンラインスクールの<a href="https://raise-tech.net/courses/design-course" target="_blank">デザインコース</a>を今春から受講中。９月末までにサイトデザインを作れるレベルを目標に猛勉強中です。</p>
                  <div class="p-skill__list__wrapper__contents__item">
                    <p class="p-skill__list__wrapper__contents__item__img"><img src="<?php echo get_template_directory_uri();?>/img/psdai.png" alt="photoshop/illustrator"></p>
                    <div class="p-skill__list__wrapper__contents__item__body">
                      <h4 class="p-skill__list__wrapper__contents__item__body__name">PhotoShop/Illustrator</h4>
                      <p class="p-skill__list__wrapper__contents__item__body__text">
                        基本的な操作（画像トリミングなど）は可能です。今後バナー作成やデザインカンプの作成を学んでいきます。
                      </p>
                    </div>
                  </div>
                  <div class="p-skill__list__wrapper__contents__item">
                    <p class="p-skill__list__wrapper__contents__item__img"><img src="<?php echo get_template_directory_uri();?>/img/xdfigma.png" alt="xd/figma"></p>
                    <div class="p-skill__list__wrapper__contents__item__body">
                      <h4 class="p-skill__list__wrapper__contents__item__body__name">XD・Figma</h4>
                      <p class="p-skill__list__wrapper__contents__item__body__text">
                        デザインカンプ作成ツールについても習得予定です。  
                      </p>
                    </div>
                  </div>
              </div>            
            </div>
        </div><!--c-space__inner-->
      </section>
      <!-- /skill -->

      <!-- About me -->
      <section class="p-about c-space__section" id="about"> <!--cはセクションごとの余白調整-->
        <div class="c-space__inner"><!--cはセクションごとの余白調整-->
          <h2 class="c-title">ABOUT ME</h2>
          <div class="p-about__body">
            <div class="p-about__body__img"></div> <!--左側の自画像-->
            <p class="p-about__body__text">
              島根県出雲市在住。夫と3歳の子供の3人家族。<br>
              旅行会社で長年国内旅行の商品企画に携わり全国を駆け巡る日々を送っていましたが、コロナ禍の煽りを受け退職。<br>
              セカンドキャリアとしてかねてから憧れていたWebデザイナーへの転身を決意し、昨年秋から勉強に励んでいます。<br>
              好きな言葉は「人事を尽くして天命を待つ」。<br>
              <br>
              無形のモノを自分で形にすることが好きで、地道なコーディング作業も形になる喜びがあるから苦になりません。<br>
              長年制作に携わってきた旅行パンフレットと同様、誰が見ても「見やすく・わかりやすい」Webデザイン・コーディングを目指しています。<br>
              また、これまでの社会人経験も生かし、ディレクションもこなせるオールラウンダーになることが最終目標です。
            </p>
          </div>
        </div>
      </section>
      <!-- contact -->
      <section class="p-contact c-space__section" id="contact"> <!--cはセクションごとの余白調整-->
        <div class="c-space__inner"> <!--cはセクションごとの余白調整-->
          <h2 class="c-title">CONTACT</h2>
          <p class="p-contact__text">
            お問い合わせは、恐れ入りますが以下のフォームからご連絡頂ければ幸いです。
          </p>
          <div class="p-contact__form">
            <!-- <a class="p-contact__list__form" href="kyokong0329@gmail.com" target="_blank" rel="noopener noreferrer">E-mailはこちら</a> -->
            <!-- <form action="<?php the_permalink(); ?>">  -->
              <button class="p-contact__form__button c-button" type="button" onclick="location.href='<?php echo home_url('/contact'); ?>'">お問い合わせはこちら</button>
          </div>
        </div>
      </section>
      <!-- /contact -->

    
    <?php get_footer();?>