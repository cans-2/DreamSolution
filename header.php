<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/assets/image/titleLogo.png">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/image/titleLogo.png">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/hover-min.css" rel="stylesheet">
    <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
new WOW().init();
</script>
    <title>株式会社ドリームソリューション</title>
</head>

<body ontouchstart="">
<?php wp_head() ?>
    <header>
        <div class="header__inner">
            <a href="<?php echo get_home_url() ?>">
                <div class="header__left">
                    <div class="header__left_titlelogo">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/image/titleLogo.png" alt="" />
                    </div>
                    <h1>株式会社<br>ドリームソリューション</h1>
                </div>
            </a>
            <div class="header__right">
                <nav>
                    <ul>
                        <a href="<?php echo get_home_url() ?>">
                            <li>TOP</li>
                        </a>
                        <a href="<?php echo get_home_url() ?>#service">
                            <li>SERVICE</li>
                        </a>
                        <a href="<?php echo get_home_url() ?>/about">
                            <li>ABOUT</li>
                        </a>
                    </ul>
                </nav>
                <div class="header__btn">
                    <a href="<?php echo get_home_url() ?>/simulation" class="header__btn_simu">シミュレーション</a>
                    <a href="<?php echo get_home_url() ?>/contact" class="header__btn_contact">お問い合わせ</a>
                </div>
            </div>
        </div>
        <!-- ハンバーガー -->
        <div class="menu-icon">
            <span class="menu-icon__line menu-icon__line-1"></span>
            <span class="menu-icon__line menu-icon__line-2"></span>
            <span class="menu-icon__line menu-icon__line-3"></span>
        </div>
        <div class="menu">
            <div class="menu__inner">
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
                <a href="/about">
                    <div class="menu__about">
                        <p>ABOUT</p><span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                </a>
                <a href="/privacy">
                    <div class="menu__about">
                        <p>PRIVACY POLICY</p><span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                </a>
                <div class="menu__btns">
                    <a href="<?php echo get_home_url() ?>/simulation" class="menu__btns_simu">シミュレーション</a>
                    <a href="<?php echo get_home_url() ?>/contact" class="menu__btns_contact">お問い合わせ</a>
                </div>
            </div>
        </div>
        <!--TOPへ戻る-->
        <button class="page_top_btn" id="page__top__btn" onclick="scrollToTop()"></button>
    </header>
    <!-- ローディング画面 -->
    <div id="loading">
        <div class="loading-logo">
            <img src="<?php echo get_template_directory_uri() ?>/assets/image/dreamsolution_logo.png" alt="ロゴ">
        </div>
    </div>
    <script>
        window.addEventListener('load', function() {
            const loadingScreen = document.getElementById('loading');
            loadingScreen.style.opacity = 0;
            setTimeout(function() {
                loadingScreen.style.display = 'none';
            }, 1000);
        });
    </script>