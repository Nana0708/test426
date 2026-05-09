const parallaxItems = document.querySelectorAll(".js-parallax");

const parallax = () => {
  parallaxItems.forEach((item) => {
    const image = item.querySelector(".c-fv__image");

    if (!image) return;

    const rect = item.getBoundingClientRect();
    const move = rect.top * 0.08;

    image.style.transform = `translate3d(0, ${move}px, 0)`;
  });
};

window.addEventListener("scroll", parallax);
window.addEventListener("load", parallax);


  // ============================================================
// Page Top Button
// ============================================================
const pageTopBtn = document.getElementById('pageTop');

window.addEventListener('scroll', () => {
  if (window.scrollY > 1000) {
    pageTopBtn.classList.add('is-visible');
  } else {
    pageTopBtn.classList.remove('is-visible');
  }
});

pageTopBtn.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});

