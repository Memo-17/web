const cards = document.querySelectorAll('.service-card');
const panels = document.querySelectorAll('.panel');

window.addEventListener('scroll', showCards);

function showCards() {
  cards.forEach((card) => {
    if (isInViewport(card)) {
      card.classList.add('show');
    } else {
      card.classList.remove('show');
    }
  });
}

function isInViewport(el) {
  const scrollTrigger = (window.innerHeight / 5) * 3;

  const elTop = el.getBoundingClientRect().top;

  return elTop < scrollTrigger;
}

panels.forEach((panel) => {
  panel.addEventListener('click', () => {
    removeActiveClasses();
    panel.classList.add('active');
  });
});

function removeActiveClasses() {
  panels.forEach((panel) => {
    panel.classList.remove('active');
  });
}
