<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();
    $post_id = get_the_ID();

    $fv_img_id = SCF::get('fv_img', $post_id);
    $fv_img    = $fv_img_id ? wp_get_attachment_image_url($fv_img_id, 'full') : get_template_directory_uri() . '/src/img/salon_fv_default.webp';
?>

    <main class="main p-salons-single">

      <!-- FV -->
      <section class="c-fv">
        <div class="c-fv__heading">
          <div class="c-fv__inner">
            <p class="c-fv__subtitle">VALENTINE ROSE</p>
            <h1 class="c-fv__title"><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="c-fv__image-wrapper js-parallax">
          <div class="c-fv__image">
            <img
              src="<?php echo esc_url($fv_img); ?>"
              alt="<?php the_title(); ?>"
              width="1440"
              height="600">
          </div>
        </div>
      </section>

      <!-- パンくずリスト -->
      <nav class="breadcrumb"><?php breadcrumb(); ?></nav>

      <!-- 店舗紹介文 -->
      <?php $text_shop = SCF::get('text_shop', $post_id); ?>
      <?php if ($text_shop) : ?>
        <section class="p-salons-single__intro">
          <div class="p-salons-single__intro-inner">
            <p class="p-salons-single__intro-text"><?php echo nl2br(esc_html($text_shop)); ?></p>
          </div>
        </section>
      <?php endif; ?>

      <!-- FLOW -->
      <?php
      $flow_groups   = SCF::get('salons_group', $post_id);
      $flow_img_1_id = SCF::get('flow_img_1', $post_id);
      $flow_img_2_id = SCF::get('flow_img_2', $post_id);
      $flow_img_3_id = SCF::get('flow_img_3', $post_id);
      $flow_img_1    = $flow_img_1_id ? wp_get_attachment_image_url($flow_img_1_id, 'medium') : '';
      $flow_img_2    = $flow_img_2_id ? wp_get_attachment_image_url($flow_img_2_id, 'medium') : '';
      $flow_img_3    = $flow_img_3_id ? wp_get_attachment_image_url($flow_img_3_id, 'medium') : '';
      ?>

      <?php if (! empty($flow_groups)) : ?>
        <section class="p-salons-single__flow">
          <div class="p-salons-single__flow-inner">

            <div class="c-section-title">
              <p class="c-section-title__bg capitalize" aria-hidden="true">flow</p>
              <h2 class="c-section-title__main uppercase">flow</h2>
              <p class="c-section-title__sub">お問い合わせからの流れ</p>
            </div>

            <div class="p-salons-single__flow-steps">
              <?php
              $total     = count($flow_groups);
              $img1_step = (int) round($total * 1 / 4);
              $img2_step = (int) round($total * 3 / 5);
              $img3_step = (int) round($total * 4 / 5);

              if ($img1_step === 0) $img1_step = 1;
              if ($img2_step === $img1_step) $img2_step = $img1_step + 1;
              if ($img3_step === $img2_step) $img3_step = min($img2_step + 1, $total - 1);

              foreach ($flow_groups as $i => $group) :
                $step_num   = $i + 1;
                $flow_title = isset($group['flow'])      ? $group['flow']      : '';
                $flow_text  = isset($group['text_flow']) ? $group['text_flow'] : '';

                $pc_left  = '';
                $pc_right = '';

                if ($i === $img1_step && ! empty($flow_img_1)) {
                  $pc_left = $flow_img_1;
                }
                if ($i === $img2_step && ! empty($flow_img_2)) {
                  $pc_right = $flow_img_2;
                }
                if ($i === $img3_step && ! empty($flow_img_3)) {
                  $pc_left = $flow_img_3;
                }

                $sp_img = '';
                if ($i === $img1_step) $sp_img = $flow_img_1;
                if ($i === $img2_step) $sp_img = $flow_img_2;
                if ($i === $img3_step) $sp_img = $flow_img_3;
              ?>
                <div class="p-salons-single__flow-step">

                  <!-- PC左画像スロット -->
                  <div class="p-salons-single__flow-step-img-left">
                    <?php if ($pc_left) : ?>
                      <div class="p-salons-single__flow-step-img p-salons-single__flow-step-img--1">
                        <img src="<?php echo esc_url($pc_left); ?>" alt="" loading="lazy" width="150" height="150">
                      </div>
                    <?php endif; ?>
                  </div>

                  <!-- 中央：番号＋テキスト横並び -->
                  <div class="p-salons-single__flow-step-center">
                    <div class="p-salons-single__flow-step-head">
                      <span class="p-salons-single__flow-step-num"><?php echo $step_num; ?></span>
                      <div class="p-salons-single__flow-step-body">
                        <?php if ($sp_img) : ?>
                          <div class="p-salons-single__flow-step-imgs <?php echo $i % 2 === 0 ? 'p-salons-single__flow-step-imgs--right' : 'p-salons-single__flow-step-imgs--left'; ?>">
                            <div class="p-salons-single__flow-step-img p-salons-single__flow-step-img--<?php echo $i === $img1_step ? '1' : ($i === $img2_step ? '2' : '3'); ?>">
                              <img src="<?php echo esc_url($sp_img); ?>" alt="" loading="lazy" width="90" height="90">
                            </div>
                          </div>
                        <?php endif; ?>
                        <h3 class="p-salons-single__flow-step-title"><?php echo esc_html($flow_title); ?></h3>
                        <p class="p-salons-single__flow-step-text"><?php echo nl2br(esc_html($flow_text)); ?></p>
                      </div>
                    </div>
                    <div class="p-salons-single__flow-step-line"></div>
                  </div>

                  <!-- PC右画像スロット -->
                  <div class="p-salons-single__flow-step-img-right">
                    <?php if ($pc_right) : ?>
                      <div class="p-salons-single__flow-step-img p-salons-single__flow-step-img--2">
                        <img src="<?php echo esc_url($pc_right); ?>" alt="" loading="lazy" width="180" height="180">
                      </div>
                    <?php endif; ?>
                  </div>

                </div>
              <?php endforeach; ?>
            </div>

          </div>
        </section>
      <?php endif; ?>

      <!-- STAFF -->
      <?php
      $img_staff_id  = SCF::get('img_staff',    $post_id);
      $img_staff     = $img_staff_id ? wp_get_attachment_image_url($img_staff_id, 'large') : '';
      $text_staff    = SCF::get('text_staff',    $post_id);
      $name_staff_en = SCF::get('name_staff_en', $post_id);
      $name_staff_ja = SCF::get('name_staff_ja', $post_id);
      ?>
      <section class="p-salons-single__staff">
        <div class="p-salons-single__staff-inner">

          <div class="p-salons-single__staff-card">

            <!-- 左：写真 -->
            <?php if ($img_staff) : ?>
              <div class="p-salons-single__staff-img">
                <img
                  src="<?php echo esc_url($img_staff); ?>"
                  alt="<?php echo esc_attr($name_staff_ja); ?>"
                  loading="lazy"
                  width="480"
                  height="480">
              </div>
            <?php endif; ?>

            <!-- 右：見出し＋テキスト＋名前 -->
            <div class="p-salons-single__staff-info">

              <div class="p-salons-single__staff-heading">
                <p class="p-salons-single__staff-heading-en">Staff</p>
                <span class="p-salons-single__staff-heading-ja">スタッフから挨拶</span>
              </div>

              <?php if ($text_staff) : ?>
                <p class="p-salons-single__staff-text"><?php echo nl2br(esc_html($text_staff)); ?></p>
              <?php endif; ?>

              <?php if ($name_staff_en || $name_staff_ja) : ?>
                <div class="p-salons-single__staff-name-wrap">
                  <?php if ($name_staff_en) : ?>
                    <p class="p-salons-single__staff-name-en"><?php echo esc_html($name_staff_en); ?></p>
                  <?php endif; ?>
                  <?php if ($name_staff_ja) : ?>
                    <span class="p-salons-single__staff-name-ja"><?php echo esc_html($name_staff_ja); ?></span>
                  <?php endif; ?>
                </div>
              <?php endif; ?>

            </div>
          </div>

        </div>
      </section>

      <!-- SHOP INFO -->
      <?php
      $shop_address = SCF::get('shop_address', $post_id);
      $shop_tel     = SCF::get('shop_tel',     $post_id);
      $shop_map     = SCF::get('shop_map',     $post_id);
      ?>
      <section class="p-salons-single__info">
        <div class="p-salons-single__info-inner">


          <div class="p-salons-single__info-wrap">

            <table class="p-salons-single__info-table">
              <tr>
                <th>店舗名</th>
                <td>VALENTINE ROSE <?php the_title(); ?></td>
              </tr>
              <?php if ($shop_address) : ?>
                <tr>
                  <th>住所</th>
                  <td><?php echo esc_html($shop_address); ?></td>
                </tr>
              <?php endif; ?>
              <?php if ($shop_tel) : ?>
                <tr>
                  <th>電話番号</th>
                  <td>
                    <a href="tel:<?php echo esc_attr($shop_tel); ?>">
                      <?php echo esc_html($shop_tel); ?>
                    </a>
                  </td>
                </tr>
              <?php endif; ?>
            </table>

            <?php if ($shop_map) : ?>
              <div class="p-salons-single__info-map">
                <iframe
                  src="<?php echo esc_url($shop_map); ?>"
                  allowfullscreen
                  loading="lazy"
                  title="<?php the_title(); ?>の地図">
                </iframe>
              </div>
            <?php endif; ?>

          </div>
        </div>
      </section>

      <!-- 戻るボタン -->
      <div class="p-salons-single__back">
        <a href="<?php echo esc_url(get_post_type_archive_link('salons')); ?>" class="c-btn">
          店舗一覧へ
        </a>
      </div>
    </main>
<?php endwhile;
endif; ?>



<?php get_footer(); ?>