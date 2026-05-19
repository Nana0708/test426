<?php
$current_step = isset($current_step) ? $current_step : 1;
?>

<div class="parts-p-reserve">
  <div class="parts-p-reserve__inner">

    <div class="parts-p-reserve__lead">
      <h2 class="parts-p-reserve__title">mail form</h2>
      <p class="parts-p-reserve__text">
        脱毛の無料体験や施術のご予約などをご希望の方は、<br>
        以下のフォームに必要事項を入力の上でお問い合わせください。<br>
        なお、当日または翌日のご予約を希望の方は、お電話で問い合わせください。
      </p>
    </div>

    <div class="parts-p-reserve__steps">
      <div class="parts-p-reserve__step <?php echo $current_step === 1 ? 'is-active' : ''; ?>">
        <span class="parts-p-reserve__step-num">Step 01</span>
        <span class="parts-p-reserve__step-label">内容入力</span>
      </div>
      <div class="parts-p-reserve__step <?php echo $current_step === 2 ? 'is-active' : ''; ?>">
        <span class="parts-p-reserve__step-num">Step 02</span>
        <span class="parts-p-reserve__step-label">内容確認</span>
      </div>
      <div class="parts-p-reserve__step <?php echo $current_step === 3 ? 'is-active' : ''; ?>">
        <span class="parts-p-reserve__step-num">Step 03</span>
        <span class="parts-p-reserve__step-label">送信完了</span>
      </div>
    </div>

  </div>
</div>

