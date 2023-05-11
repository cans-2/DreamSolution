<?php get_header() ?>
<main>
  <div class="main-bg">
    <img id="mainBg" src="<?php echo get_template_directory_uri() ?>/assets/image/mainvisual1.jpeg" alt="main">
    <div class="main-bg__catch">
      <div id="catch1">
        <p class="left">お客様と共に作る</p>
        <p class="right">お客様と共に成長し続ける</p>
      </div>
      <div id="catch2">
        <p class="left2">無駄な電話料金を払っていませんか？</p>
        <p class="right2">その悩み、秒課金で</p>
        <p class="right2">解決いたします。</p>
      </div>
    </div>
  </div>

  <!-- banner -->
  <section class="banner">
    <div id="splide1" class="banner__inner splide">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="banner__item splide__slide">
            <a href="/dreamcall-super"><img src="<?php echo get_template_directory_uri() ?>/assets/image/banner/1.jpg" alt="banner"></a>
          </li>
          <li class="banner__item splide__slide">
            <a href="/dream-cloud-pbx"><img src="<?php echo get_template_directory_uri() ?>/assets/image/banner/2.jpg" alt="banner"></a>
          </li>
          <li class="banner__item splide__slide">
            <a href="/dreamcall"><img src="<?php echo get_template_directory_uri() ?>/assets/image/banner/3.jpg" alt="banner"></a>
          </li>
          <li class="banner__item splide__slide">
            <a href="/dream-call-next"><img src="<?php echo get_template_directory_uri() ?>/assets/image/banner/4.jpg" alt="banner"></a>
          </li>
          <li class="banner__item splide__slide">
            <a href="/ashura"><img src="<?php echo get_template_directory_uri() ?>/assets/image/banner/5.jpg" alt="banner"></a>
          </li>
          <li class="banner__item splide__slide">
            <a href="/site-design"><img src="<?php echo get_template_directory_uri() ?>/assets/image/banner/6.jpg" alt="banner"></a>
          </li>

        </ul>
      </div>
    </div>
  </section>
  <!--  -->
  <section class="mission">
    <div class="mission-bg">
      <div class="mission-bg__text">
        <p>DREAM</p>
        <p>SOLUTION</p>
      </div>
    </div>
    <div class="mission__inner">
      <p class="sec-title__p">MISSION</p>
      <h2 class="sec-title__h2">通信費最適化のご提案</h2>
      <div class="mission__inner_content">
        <p>
          固定電話料金は、サービスとプランを最適化することで削減することができます。ドリームソリューションでは、携帯の電話サービスの中から、お客様のオフィス規模や環境に合わせて最適なソリューションをご提案致します。
        </p>
      </div>
      <p class="scroll">SCROLL</p>
    </div>
  </section>
  <!--  -->
  <section id="service" class="service">
    <div class="diamond"></div>
    <div class="service__title">
      <p class="sec-title__p">SERVICE</p>
      <h2 class="sec-title__h2">電話回線の<br>コンサルティング</h2>
      <p>
        ドリームソリューションは法人向け電話通信サービスを取り扱っております。お客様のご利用状況を詳しくお伺いすることで、ご要望に合わせたプランをご提案致します。また、課題解決のため、システム開発などのご提案も行うことができ、お客様の事業をフルサポートで最適化させていただきます。
      </p>
    </div>
    <div class="service__item_wrapper">
      <div class="service__item">
        <div class="service__item_img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/image/service/service-ip.jpeg" alt="service" />
        </div>
        <div class="service__item_card">
          <h2>IP電話サービス</h2>
          <p class="service__item_card_p">
            インターネット環境があれば、どこでもご利用いただける電話サービスです。当社から発行するID・パスワード・・ドメインを設定していただくだけで、インターネット経由で工事不要にて電話をご利用いただけます。
          </p>
          <a href="/dream-call-pbx" class="detail hvr-glow">
            <p>詳細はこちら</p>
            <span class="material-symbols-outlined"> open_in_new </span>
          </a>
        </div>
      </div>
      <div class="service__item">
        <div class="service__item_img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/image/service/service-byokakin.jpeg" alt="service" />
        </div>
        <div class="service__item_card">
          <h2>秒課金『ドリームコールスーパー』</h2>
          <p class="service__item_card_p">
            営業電話の総コール数のうち、80％以上の通話が1分以内に終了しているという統計データがあります。一般的なプランでは通話に対し3分ごとに通話料が課金されるため、1分以内の電話に3分相当の料金が発生しています。
            つまり、営業電話業務には非常に不利な課金形態と言えます。
            弊社のサービス【ドリームコールスーパー】では通話料の課金単位を業界最短の１秒に設定することで実際の通話時間分お支払いいただくことで通信費を最大90％削減することが可能となります。
          </p>
          <a href="/dreamcall-super" class="detail hvr-glow">
            <p>詳細はこちら</p>
            <span class="material-symbols-outlined"> open_in_new </span>
          </a>
        </div>
      </div>
      <div class="service__item">
        <div class="service__item_img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/image/service/service-cti-next.jpeg" alt="service" />
        </div>
        <div class="service__item_card">
          <h2>クラウドCTI『DREAM CALL NEXT』</h2>
          <p class="service__item_card_p">
            インターネット環境があれば、どこでもご利用いただける電話サービスです。当社から発行するID・パスワード・・ドメインを設定していただくだけで、インターネット経由で工事不要にて電話をご利用いただけます。
          </p>
          <a href="/dream-call-next" class="detail hvr-glow">
            <p>詳細はこちら</p>
            <span class="material-symbols-outlined"> open_in_new </span>
          </a>
        </div>
      </div>
      <div class="service__item">
        <div class="service__item_img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/image/service/service-cti2.jpeg" alt="service" />
        </div>
        <div class="service__item_card">
          <h2>クラウドCTI『DREAM CALL』</h2>
          <p class="service__item_card_p">
            低コストでシンプル、業務効率UPを可能にするコールシステム。
            テレアポにかかる電話料金を下げたいけど、PCの操作に抵抗のあるオペレーターが多い、年配のオペレーターが多いという場合はクラウドCTI『DREAM CALL』をお試しください。
          </p>
          <a href="/dreamcall" class="detail hvr-glow">
            <p>詳細はこちら</p>
            <span class="material-symbols-outlined"> open_in_new </span>
          </a>
        </div>
      </div>
      <div class="service__item">
        <div class="service__item_img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/image/service/service-web2.jpeg" alt="service" />
        </div>
        <div class="service__item_card">
          <h2>Webサイト&アプリケーション制作</h2>
          <p class="service__item_card_p">
            会社の顔となるホームページの制作を行います。しっかりとしたホームページを持っておくことでお客様からの信頼を勝ち取るツールになります。
            また、営業管理を行うためのWebアプリケーションの制作を行います。日々の営業結果や営業成績を一元管理でき、生産性の向上に繋がります。
          </p>
          <a href="/site-design" class="detail hvr-glow">
            <p>詳細はこちら</p>
            <span class="material-symbols-outlined"> open_in_new </span>
          </a>
        </div>
      </div>
      <div class="service__item">
        <div class="service__item_img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/image/service/img_ashura2.png" alt="service" />
        </div>
        <div class="service__item_card">
          <h2>File Maker専用CTI</h2>
          <p class="service__item_card_p">
            ファイルメーカーと連動し、ファイルメーカーの顧客管理画面上に「発信ボタン」と「録音ボタン」を追加するだけでClick to Callと通話録音がご利用できます。
          </p>
          <a href="/ashura" class="detail hvr-glow">
            <p>詳細はこちら</p>
            <span class="material-symbols-outlined"> open_in_new </span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!--シミュレーション -->
  <section class="simuration">
    <div class="simuration-bg">
      <video autoplay playsinline loop muted src="<?php echo get_template_directory_uri() ?>/assets/video/simulation-movie.mp4"></video>
    </div>
    <div class="simuration__content">
      <h2>通話料金</h2>
      <h2>シミュレーション</h2>
      <p>現在のご利用状況から通話料金を<br>シミュレーションしてみませんか？</p>
      <a href="/simulation" class="detail hvr-bob">
        <p>詳細はこちら</p>
        <span class="material-symbols-outlined"> open_in_new </span>
      </a>
    </div>
  </section>
  <!-- ニュース -->
  <section id="news" class="news">
    <div class="news__bg">
      <div class="news__content">
        <p class="sec-title__p">NEWS</p>
        <h2 class="sec-title__h2">新着情報</h2>
        <div class="news__content_item_wrapper">
          <?php if ($news_query->have_posts()) : ?>
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
              <div class="news__content_item">
                <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
                <p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
        <a href="/news" class="news__btn">
          <p>もっと見る</p>
          <span class="material-symbols-outlined"> trending_flat </span>
        </a>
      </div>
    </div>
  </section>
  <!-- about us -->
  <section class="about">
    <div class="about__wrapper">
      <p class="sec-title__p">ABOUT US</p>
      <h2 class="sec-title__h2">インタビュー</h2>
    </div>
    <div class="about__video">
      <video controls src="<?php echo get_template_directory_uri() ?>/assets/video/simulation-movie.mp4"></video>
    </div>
  </section>
  <!-- company -->
  <section class="company">
    <div class="company__wrapper">
      <div class="company__img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/image/top-company.jpg" alt="company" />
      </div>
      <div class="company__content">
        <div class="company__content_inner">
          <p class="sec-title__p">COMPANY</p>
          <h2 class="sec-title__h2">会社情報</h2>
          <div class="company__content_p">
            ドリームソリューションは、東京
            浅草橋に本社を構える電話回線のコンサルティング会社です。自社のコールセンター運営経験を活かし活かし、お客様にとって、最適な通信サービスを提供します。通信事業者として、取引先様との「win-win」を基本理念に、質の高いサービスの提供を目指しています。
          </div>
        </div>
        <a href="/about" class="detail hvr-glow">
          <p>詳細はこちら</p>
          <span class="material-symbols-outlined"> open_in_new </span>
        </a>
      </div>
    </div>
  </section>
  <!--  -->
  <section id="column" class="column">
    <div class="column__inner">
      <div class="column__title">
        <p class="sec-title__p">COLUMN</p>
        <h2 class="sec-title__h2">お役立ちコラム</h2>
      </div>
      <div class="column__item_wrapper">
        <div id="splide2" class="splide">
          <div class="splide__track">
            <ul class="splide__list">
              <?php if ($column_query->have_posts()) : ?>
                <?php while ($column_query->have_posts()) : $column_query->the_post(); ?>
                  <?php
                  // 投稿の最初の画像をアイキャッチ画像として取得する
                  $image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                  // 画像が存在しない場合に、デフォルトの画像を使用する
                  if (!$image) {
                    $image = get_template_directory_uri() . '/assets/image/dammy.jpg';
                  }
                  ?>
                  <li class="splide__slide column__item">
                    <a href="<?php the_permalink(); ?>">
                      <div class="column__item_img">
                        <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>">
                      </div>
                      <div class="column__item_content">
                        <p><?php the_title(); ?></p>
                      </div>
                    </a>
                  </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php endif; ?>


            </ul>
          </div>
        </div>

      </div>
      <a href="/column" class="news__btn">
        <p>もっと見る</p>
        <span class="material-symbols-outlined"> trending_flat </span>
      </a>
    </div>
  </section>
</main>
<?php get_footer() ?>