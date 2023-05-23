<?php get_header() ?>
    <main>
        <div class="contact__wrapper">
            <div class="page-title">
              <h2>Contact</h2>
              <p>お問い合わせ</p>
            </div>
            <div class="calc">
              <img src="<?php echo get_template_directory_uri() ?>/assets/image/contact_mail_icon.png" alt="mail">
            </div>
            <div class="contact-form__wrapper wow fade-up2">
                <div class="contact-form__inner">
                  <div class="contact-form__title">
                    <p>株式会社ドリームソリューションにお問い合わせいただき、誠にありがとうございます。</p>
                    <p>お問い合わせは以下のフォームまたは、お電話よりお願い致します。</p>
                  </div>
                  <div class="contact-form__card">
                    <div class="contact-form__card_inner">
                        <p>お電話でのお問い合わせ</p>
                        <p class="tel">03-5822-0812</p>
                        <p>【受付時間】10:00 - 18:00（土日祝日除く）</p>
                    </div>
                  </div>
                  <div class="contact-form__content">
                    <p>内容を確認次第、メールにてご連絡致します。尚、お問い合わせ内容によりましては、ご回答に時間がかかる場合がございます。また、お客様からいただいたEメールアドレスが違っている場合や、システム障害などによりお返事できない場合がございます。大変お手数ですが返答のない場合は、お電話でその旨お問い合わせください。</p>
                  </div>
                  <div class="contact-form">

                    <?php echo do_shortcode('[contact-form-7 id="19" title="コンタクトフォーム 1"]'); ?>
                

                  </div>
                </div>
              </div>
          </div>
    </main>
   <?php get_footer() ?>