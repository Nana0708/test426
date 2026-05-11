/**
 * header / drawer
 * ハンバーガーメニューの開閉制御
 */

document.addEventListener('DOMContentLoaded', () => {
    const hamburger    = document.querySelector('.header__hamburger');
    const drawer       = document.getElementById('sp-drawer');
    const closeBtn     = document.querySelector('.drawer__close');
    const overlay      = document.querySelector('.drawer-overlay');
    const headerInner  = document.querySelector('.header__inner');
  
    if (!hamburger || !drawer) return;
  
    // -----------------------------------------------
    // ドロワーを開く
    // -----------------------------------------------
    const openDrawer = () => {
      hamburger.classList.add('is-open');
      hamburger.setAttribute('aria-expanded', 'true');
      hamburger.setAttribute('aria-label', 'メニューを閉じる');
  
      drawer.classList.add('is-open');
      drawer.setAttribute('aria-hidden', 'false');
  
      overlay?.classList.add('is-open');
  
      // スクロール禁止
      document.body.style.overflow = 'hidden';
    };
  
    // -----------------------------------------------
    // ドロワーを閉じる
    // -----------------------------------------------
    const closeDrawer = () => {
      hamburger.classList.remove('is-open');
      hamburger.setAttribute('aria-expanded', 'false');
      hamburger.setAttribute('aria-label', 'メニューを開く');
  
      drawer.classList.remove('is-open');
      drawer.setAttribute('aria-hidden', 'true');
  
      overlay?.classList.remove('is-open');
  
      // スクロール解除
      document.body.style.overflow = '';
    };
  
    // -----------------------------------------------
    // イベント登録
    // -----------------------------------------------
    hamburger.addEventListener('click', () => {
      const isOpen = hamburger.classList.contains('is-open');
      isOpen ? closeDrawer() : openDrawer();
    });
  
    closeBtn?.addEventListener('click', closeDrawer);
  
    // オーバーレイクリックでも閉じる
    overlay?.addEventListener('click', closeDrawer);
  
    // ドロワー内リンクをクリックしたら閉じる
    const drawerLinks = drawer.querySelectorAll('.drawer__nav-link');
    drawerLinks.forEach(link => {
      link.addEventListener('click', closeDrawer);
    });
  
    // Escape キーで閉じる（アクセシビリティ対応）
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && drawer.classList.contains('is-open')) {
        closeDrawer();
        hamburger.focus();
      }
    });
  });