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