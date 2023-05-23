<?php get_header() ?>
<main class="trial-wrapper">
    <div class="page-title">
        <h2>Trial Application</h2>
        <p>DREAM CALL NEXT 無料トライアル申込</p>
    </div>
    <section class="trial-form">
        <div class="trial-form__inner">
            <div class="trial-form__title">
                <h3>無料トライアル</h3>
                <b>お申し込み</b>
            </div>
            <div class="trial-form__check wow fade-up2">
                <b>ご確認お願い致します</b>
                <ul>
                    <li>トライアル期間は最大2週間となります。</li>
                    <li>トライアル期間中は、通話料【18,000秒(5時間)まで】・初期費用・月額固定費用が無料となります。<br>※通話秒数が18,000秒を超過した場合は通話料が発生致します。</li>
                    <li>その他オプション等をご希望の方は別途ご連絡ください。</li>
                    <li>トライアルから正式にお申込みいただいた場合、各種手続き完了後アカウントをそのまま引継ぐ事が可能となります。</li>
                </ul>
            </div>
            <div class="trial-form__card wow fade-up2">
                <div class="trial-form__card_inner">
                    <p>お電話でのお問い合わせ</p>
                    <a class="tel" href="tel:0358220812">03-5822-0812</a>
                    <p>【受付時間】10:00 - 18:00（土日祝日除く）</p>
                </div>
            </div>
            <div class="wow fade-up2">
                <p class="trial-form__contact">メールでのお問い合わせ</p>
                <div class="trial-form__wrapper">
                    <?php echo do_shortcode('[contact-form-7 id="39" title="Trial-Form"]'); ?>
                </div>

            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>