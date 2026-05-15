
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  $post_id = get_the_ID();
?>

<main class="main p-salons-single">

  <!-- MAIN CONTENT -->
  <div class="content-wrap">

    <!-- 紹介文（SCF: text_shop） -->
    <?php $text_shop = SCF::get( 'text_shop', $post_id ); ?>
    <?php if ( $text_shop ) : ?>
      <div class="intro-text">
        <?php echo nl2br( esc_html( $text_shop ) ); ?>
      </div>
    <?php endif; ?>

    <!-- FLOW（SCF: salons_group の繰り返し） -->
    <div class="flow-section">
      <div class="section-title">
        <span class="en-bg" aria-hidden="true">Flow</span>
        <span class="en">FLOW</span>
        <span class="ja">お問い合わせからの流れ</span>
      </div>

      <?php
      $flow_groups = SCF::get( 'salons_group', $post_id );
      if ( ! empty( $flow_groups ) ) :
      ?>
        <div class="flow-steps">
          <?php foreach ( $flow_groups as $i => $group ) :
            $step_num   = $i + 1;
            $flow_title = isset( $group['flow'] )      ? $group['flow']      : '';
            $flow_text  = isset( $group['text_flow'] ) ? $group['text_flow'] : '';
          ?>
            <div class="flow-step">
              <div class="step-circle"><?php echo $step_num; ?></div>
              <div class="step-body">
                <h3><?php echo esc_html( $flow_title ); ?></h3>
                <p><?php echo nl2br( esc_html( $flow_text ) ); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>

    <!-- STAFF（SCF: img_staff / text_staff / name_staff_en / name_staff_ja） -->
    <div class="staff-section">
      <div class="section-title">
        <span class="en-bg" aria-hidden="true">Staff</span>
        <span class="en">STAFF</span>
        <span class="ja">スタッフ紹介</span>
      </div>

      <?php
      // SCFの画像フィールドはIDで返ってくるのでURLに変換する
      $img_staff_id = SCF::get( 'img_staff', $post_id );
      $img_staff    = $img_staff_id ? wp_get_attachment_image_url( $img_staff_id, 'medium' ) : '';
      $text_staff     = SCF::get( 'text_staff',     $post_id );
      $name_staff_en  = SCF::get( 'name_staff_en',  $post_id );
      $name_staff_ja  = SCF::get( 'name_staff_ja',  $post_id );
      ?>
      <div class="staff-card">
        <div>
          <?php if ( $img_staff ) : ?>
            <img
              src="<?php echo esc_url( $img_staff ); ?>"
              class="staff-photo"
              alt="<?php echo esc_attr( $name_staff_ja ); ?>">
          <?php endif; ?>
        </div>
        <div class="staff-info">
          <?php if ( $text_staff ) : ?>
            <p class="staff-intro"><?php echo nl2br( esc_html( $text_staff ) ); ?></p>
          <?php endif; ?>
          <?php if ( $name_staff_en ) : ?>
            <p class="staff-name-en"><?php echo esc_html( $name_staff_en ); ?></p>
          <?php endif; ?>
          <?php if ( $name_staff_ja ) : ?>
            <span class="staff-name-ja"><?php echo esc_html( $name_staff_ja ); ?></span>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- 店舗情報（SCF: shop_name / shop_address / shop_tel / shop_map） -->
    <div class="info-section">
      <div class="section-title">
        <span class="en-bg" aria-hidden="true">Shop Info</span>
        <span class="en">SHOP INFO</span>
        <span class="ja">店舗情報</span>
      </div>

      <?php
      $shop_name    = SCF::get( 'shop_name',    $post_id );
      $shop_address = SCF::get( 'shop_address', $post_id );
      $shop_tel     = SCF::get( 'shop_tel',     $post_id );
      $shop_map     = SCF::get( 'shop_map',     $post_id );
      ?>

      <div class="info-inner">

        <!-- 左：店舗情報テキスト -->
        <table class="info-table">
          <?php if ( $shop_name ) : ?>
            <tr>
              <th>店舗名</th>
              <td><?php echo esc_html( $shop_name ); ?></td>
            </tr>
          <?php endif; ?>
          <?php if ( $shop_address ) : ?>
            <tr>
              <th>住所</th>
              <td><?php echo esc_html( $shop_address ); ?></td>
            </tr>
          <?php endif; ?>
          <?php if ( $shop_tel ) : ?>
            <tr>
              <th>電話番号</th>
              <td>
                <a href="tel:<?php echo esc_attr( $shop_tel ); ?>">
                  <?php echo esc_html( $shop_tel ); ?>
                </a>
              </td>
            </tr>
          <?php endif; ?>
        </table>

        <!-- 右：Googleマップ -->
        <?php if ( $shop_map ) : ?>
          <div class="info-map">
            <iframe
              src="<?php echo esc_url( $shop_map ); ?>"
              allowfullscreen
              loading="lazy">
            </iframe>
          </div>
        <?php endif; ?>

      </div>
    </div>

    <!-- 予約ボタン -->
    <div class="reserve-btn-wrap">
      <a href="<?php echo home_url('/reserve'); ?>" class="btn-large-reserve">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <rect x="3" y="4" width="18" height="18" rx="2"/>
          <line x1="16" y1="2" x2="16" y2="6"/>
          <line x1="8" y1="2" x2="8" y2="6"/>
          <line x1="3" y1="10" x2="21" y2="10"/>
        </svg>
        予約はこちらから
      </a>
    </div>

  </div><!-- /content-wrap -->

<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
