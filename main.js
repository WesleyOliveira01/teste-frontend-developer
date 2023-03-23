const elementos = document.querySelectorAll("[data-anima]");

const animacao = "animado";

const animacaoDeScroll = () => {
  const scrollTop = window.pageYOffset + (window.innerHeight * 2) / 3;
  elementos.forEach((e) => {
    if (scrollTop > e.offsetTop) {
      e.classList.add(animacao);
    } else {
      e.classList.remove(animacao);
    }
  });
};

animacaoDeScroll();
if (elementos.length) {
  window.addEventListener("scroll", animacaoDeScroll);
}
