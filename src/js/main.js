const parallaxItems = document.querySelectorAll(".js-parallax");

const isDesktop = window.matchMedia("(min-width: 768px)").matches;

if (isDesktop) {
  const parallax = () => {
    parallaxItems.forEach((item) => {
      const image = item.querySelector(".c-fv__image");

      if (!image) return;

      const rect = item.getBoundingClientRect();

      const windowCenter = window.innerHeight / 2;
      const elementCenter = rect.top + rect.height / 2;

      const distance = elementCenter - windowCenter;

      const move = distance * -0.1;

      image.style.transform = `translate3d(0, ${move}px, 0)`;
    });

    requestAnimationFrame(parallax);
  };

  requestAnimationFrame(parallax);
}


  // ============================================================
// Page Top Button
// ============================================================
const pageTopBtn = document.getElementById('pageTop');

window.addEventListener('scroll', () => {
  if (!pageTopBtn) return; // ← これを先頭に追加
  if (window.scrollY > 1000) {
    pageTopBtn.classList.add('is-visible');
  } else {
    pageTopBtn.classList.remove('is-visible');
  }
});

/*!
TOP Feature スライダー
------------------------------
*/
jQuery(function ($) {
  const slider = $(".js-slider");
  const windowHeight = $(window).height();
  // Slick Sliderを初期化し、自動再生を無効にする
  slider.slick({
    autoplay: false,
    autoplaySpeed: 5000, // スライドの切り替わりまでの時間（ミリ秒）
    fade: true, // フェード効果を有効にする
    cssEase: 'linear', // CSSアニメーションのイージングを設定
    slidesToShow: 1, // 1枚分を表示
    slidesToScroll: 1,// スクロール時に1枚分スライドする
    swipe: false, // タッチ操作を無効にする
    arrows: false ,// 矢印を非表示にする
    pauseOnHover: false, // ホバー時に自動再生を停止しない
    responsive: [
      {
        breakpoint: 1025, // 1024px以下の場合の設定
        settings: {
          centerPadding: '6%',// 両端の見切れるスライド幅
          centerMode: true,// 前後スライドを部分表示 
          fade: false, // フェード効果を無効にする     
        }
      },
    ]
  });
  // スライダーが変更された後に実行されるコード
  $('.slider').on('afterChange', function(event, slick, currentSlide){
    // すべての .js-feature__guide から active クラスを削除
    $('.js-feature__guide').removeClass('active');
    // 現在のスライドに対応する .js-feature__guide に active クラスを追加
    $('.js-feature__guide').eq(currentSlide).addClass('active');
  });
  
  // スライダーが画面内に入ったときに自動再生を有効にする処理
  slider.on("init", function () {
    // Slick Sliderが初期化されたときの処理
    if (slider.height() <= windowHeight) {
      // スライダーの高さがウィンドウの高さ以下の場合、自動再生を有効にする
      slider.slick("slickPlay");
    }
  });
  $(window).on("scroll", function () {
    const rect = slider[0].getBoundingClientRect();
    if (rect.top < windowHeight && rect.bottom >= 0) {
      // スライダーが画面内に入った場合、自動再生を有効にする
      slider.slick("slickPlay");
    } else {
      // 画面外に出た場合、自動再生を停止
      slider.slick("slickPause");
    }
  });
  // ウィンドウがリサイズされたときに再評価する
  $(window).on("resize", function () {
    if (slider.height() <= windowHeight) {
      // スライダーの高さがウィンドウの高さ以下の場合、自動再生を有効にする
      slider.slick("slickPlay");
    }
  });
});

// 来店希望日の未入力時テキストを非表示
document.querySelectorAll('.p-reserve-date input[type="date"]').forEach(function(input) {
  // 初期状態
  if (!input.value) {
    input.style.color = 'transparent';
  }
  // 値が変わったとき
  input.addEventListener('change', function() {
    if (this.value) {
      this.style.color = '';
    } else {
      this.style.color = 'transparent';
    }
  });
});