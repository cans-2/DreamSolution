<footer>
  <div class="footer__top">
    <div class="footer__top_btns">
      <button class="footer__top_btn">
        <a href="/simulation">
          <div class="btn-bg">
            <img src="<?php echo get_template_directory_uri() ?>/assets/image/contact-form.jpeg" alt="" />
          </div>
          <div class="mask"></div>
          <div class="footer__top_btn__content">
            <p>通話料金シミュレーション</p>
            <div class="footer__top_btn_content_h3">
              <h3>SIMULATION</h3>
              <span class="material-symbols-outlined"> trending_flat </span>
            </div>
            <p>
              現在のご利用状況から通話料金をシミュレーションしてみませんか？
            </p>
          </div>
        </a>
      </button>
      <button class="footer__top_btn">
        <a href="/contact">
          <div class="btn-bg">
            <img src="<?php echo get_template_directory_uri() ?>/assets/image/company-image.jpeg" alt="" />
          </div>
          <div class="mask"></div>
          <div class="footer__top_btn__content">
            <p>お問い合わせ</p>
            <div class="footer__top_btn_content_h3">
              <h3>CONTACT</h3>
              <span class="material-symbols-outlined"> trending_flat </span>
            </div>
            <p>
              CTI導入やテレアポ通信費にお悩みの方、お気軽にご相談ください。
            </p>
          </div>
        </a>
      </button>
    </div>
  </div>
  <div class="footer__contact">
    <div class="footer__contact_content">
      <p>お電話でのお問い合わせ</p>
      <p class="tel"><a href="tel:0358220812">03-5822-0812</a></p>
      <p>【受付時間】 10:00~18:00（土日祝日）除く</p>
    </div>
    <?php if (is_front_page()) { ?>
      <div class="footer__contact_banner">
        <a href="#" download="TeamViewer_Setup.exe" class="viewer"><img src="<?php echo get_template_directory_uri() ?>/assets/image/teamviewer_badge_flat1.png" alt="viewer"></a>
        <a href="https://solutionds1.co.jp/dl/sip-download" target="_blank" class="download"><img src="<?php echo get_template_directory_uri() ?>/assets/image/sip_dl.png" alt="download"></a>
      </div>
    <?php } ?>

  </div>
  <div class="footer__bottom">
    <div class="footer__bottom_inner">
      <div class="footer__bottom_left">
        <div class="footer__bottom_left_logo">
          <a href="<?php echo get_home_url() ?>">

            <img src="<?php echo get_template_directory_uri() ?>/assets/image/titleLogo.png" alt="logo" />
          </a>
        </div>
        <div class="footer__bottom_left_content">
          <h1>株式会社ドリームソリューション</h1>
          <p>〒111-0053</p>
          <p>東京都台東区浅草橋1-30-1浅草橋東口ビル8F</p>
          <p class="tel"><a href="tel:0358220812">TEL 03-5822-0812</a></p>
        </div>
      </div>
      <div class="footer__bottom_right">
        <nav>
          <p class="nav-title">
            <span class="material-symbols-sharp"> arrow_drop_down </span>SERVICE
          </p>
          <ul>
            <li><a href="<?php echo get_home_url() ?>/dreamcall-super">秒課金『ドリームコールスーパー』</a></li>
            <li><a href="<?php echo get_home_url() ?>/dream-cloud-pbx">IP電話サービス</a></li>
            <li><a href="<?php echo get_home_url() ?>/dreamcall">クラウドCTI『DREAM CALL』</a></li>
            <li><a href="<?php echo get_home_url() ?>/dream-call-next">クラウドCTI『DREAM CALL NEXT』</a></li>
            <li><a href="<?php echo get_home_url() ?>/ashura">File Marker専用CTI</a></li>
            <li><a href="<?php echo get_home_url() ?>/site-design">Web制作</a></li>
          </ul>
        </nav>
        <nav>
          <p class="nav-title">
            <span class="material-symbols-sharp"> arrow_drop_down </span>INFOMATION
          </p>
          <ul>
            <li><a href="<?php echo get_home_url() ?>">トップ</a></li>
            <li><a href="<?php echo get_home_url() ?>/news">ニュース</a></li>
            <li><a href="<?php echo get_home_url() ?>/column">コラム</a></li>
            <li><a href="<?php echo get_home_url() ?>/about">会社情報</a></li>
            <li><a href="<?php echo get_home_url() ?>/privacy">プライバシーポリシー</a></li>
            <li><a href="<?php echo get_home_url() ?>/contact">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <p class="copy-right">
      Copyright © DREAM SOLUTION All rights reserved.
    </p>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
</body>

</html>