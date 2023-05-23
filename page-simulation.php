<?php get_header() ?>
    <main>
      <div class="simulation__wrapper">
        <div class="page-title">
          <h2>Simulation</h2>
          <p>料金シミュレーション</p>
        </div>
        <div class="calc">
          <img src="<?php echo get_template_directory_uri() ?>/assets/image/simu_calc_icon.png" alt="calc" />
        </div>
        <div class="simu-form__wrapper wow fade-up2">
          <div class="simu-form__inner">
            <div class="simu-form__title">
              <p>
                現在のご利用状況から通話料金をシミュレーションさせていただきます。
              </p>
              <p>
                無料でコンサルティングさせていただきますので、お気軽にお申し込みください。
              </p>
            </div>
            <div class="simu-form">
            <?php echo do_shortcode(' [contact-form-7 id="24" title="シミュレーションフォーム"]'); ?>

           
            </div>
          </div>
        </div>
      </div>
    </main>
   <?php  get_footer()?>