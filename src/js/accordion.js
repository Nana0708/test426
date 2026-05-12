'use strict';

/**
 * faq.js
 * FAQアコーディオン
 * - 排他制御あり（1つ開いたら他を閉じる）
 * - 初期表示：1番目だけ開いた状態
 * - アイコン切り替え：.is-open クラスで制御
 * - タッチデバイスでは @include hover mixin 側でアニメーション無効（CSS側対応済み）
 */

const Faq = (() => {
  const ITEM_CLASS    = '.faq__item';
  const TRIGGER_CLASS = '.faq__question';
  const OPEN_CLASS    = 'is-open';

  /**
   * 指定アイテムを閉じる
   * @param {Element} item
   */
  const closeItem = (item) => {
    item.classList.remove(OPEN_CLASS);
    const btn = item.querySelector(TRIGGER_CLASS);
    if (btn) btn.setAttribute('aria-expanded', 'false');
  };

  /**
   * 指定アイテムを開く
   * @param {Element} item
   */
  const openItem = (item) => {
    item.classList.add(OPEN_CLASS);
    const btn = item.querySelector(TRIGGER_CLASS);
    if (btn) btn.setAttribute('aria-expanded', 'true');
  };

  /**
   * クリック時の処理（排他制御）
   * @param {Element} clickedItem - クリックされたアイテム要素
   * @param {NodeList} allItems   - すべてのアイテム要素
   */
  const handleClick = (clickedItem, allItems) => {
    const isAlreadyOpen = clickedItem.classList.contains(OPEN_CLASS);

    // 排他制御：すべて閉じる
    allItems.forEach((item) => closeItem(item));

    // クリックしたアイテムが閉じていた場合のみ開く
    if (!isAlreadyOpen) {
      openItem(clickedItem);
    }
  };

  /**
   * 初期化
   */
  const init = () => {
    const items = document.querySelectorAll(ITEM_CLASS);
    if (!items.length) return;

    // 1番目だけ開いた状態にする（HTML側でも .is-open / aria-expanded="true" を付与済みだが JS でも保証）
    items.forEach((item, index) => {
      if (index === 0) {
        openItem(item);
      } else {
        closeItem(item);
      }
    });

    // 各ボタンにイベントを付与
    items.forEach((item) => {
      const btn = item.querySelector(TRIGGER_CLASS);
      if (!btn) return;

      btn.addEventListener('click', () => {
        handleClick(item, items);
      });

      // キーボード操作（Enter / Space）はブラウザがボタン要素で自動処理するため追加不要
    });
  };

  return { init };
})();

// DOM 読み込み完了後に初期化
document.addEventListener('DOMContentLoaded', () => {
  Faq.init();
});