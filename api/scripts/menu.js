//menu-mobile//

const btnMobile = document.getElementById('btn-mobile');

function toggleMenu(event) {
  if (event.type === 'touchstart') event.preventDefault();
  const nav = document.getElementById('nav');
  nav.classList.toggle('active');
  const active = nav.classList.contains('active');
  event.currentTarget.setAttribute('aria-expanded', active);
  if (active) {
    event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
  } else {
    event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
  }
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);

//scroll-reveal//

const sr = ScrollReveal({
  origin: 'top',
  distance: '50px',
  duration: 3000,
  reset: false
});

sr.reveal('.header-nav',{delay: 100})
sr.reveal('.header-logo',{delay: 100})
sr.reveal('.card-body',{delay: 400})
sr.reveal('.scr1',{delay: 200})
sr.reveal('.scr2',{delay: 400})
sr.reveal('.scr3',{delay: 600})
sr.reveal('.scr4',{delay: 400})
sr.reveal('.scr5',{delay: 600})