// -----------------------------------------------
// FV テキスト フェードインアニメーション
// -----------------------------------------------
document.addEventListener("DOMContentLoaded", () => {
    const textWrapper = document.querySelector(".fv__text-wrapper");
  
    if (!textWrapper) return;
  
    // 少しディレイを入れてからフェードイン（ページ読み込み直後の自然な演出）
    setTimeout(() => {
      textWrapper.classList.add("is-visible");
    }, 200);
  });