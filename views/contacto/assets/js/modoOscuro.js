var newspan = document.getElementById('modo_oscuro');

function cambiar_color(color) {
  const fondo = document.getElementById('main');
  const header = document.getElementById('header');
  if (document.getElementById('modo_oscuro').innerHTML == 'Modo Oscuro') {
    fondo.style.background = color;
    header.style.background = color;
    newspan.textContent = 'Modo Claro';
    newspan.style.fontWeight = 'bold';
    newspan.style.background = 'white';
  } else {
    fondo.style.background = 'none';
    header.style.background = 'none';
    newspan.innerHTML = 'Modo Oscuro';
    newspan.style.fontWeight = 'bold';
    newspan.style.background = 'none';
  }
}

// Ventana flotante

const eventosO = {
  bautizos: {
    title: 'Banquetes para tus Eventos de Bautizos',
    image: 'assets/images/buffet/bautizo.jpg',
    description:
      'Además de los múltiples servicios y comodidades ofrecidos, nos sentimos' +
      'orgullosos de presentar nuestros servicio de Buffet para Bautizos.' +
      'Un excelente ejemplo es el buffet de exquisita comida ecuatoriana e internacional. Nuestro' +
      'personalizado servicio y reconocida gastronomía nacional e internacional' +
      'elaborada por el Chef Ejecutivo, Sven Hanne, harán de su evento, un día único y memorable.' +
      'Además contamos con el servicio de Buffet a domicilio',
  },
  bodas: {
    title: 'Banquetes para tu Fiesta de Bodas',
    image: 'assets/images/buffet/bodas.jpeg',
    description:
      'Además de los múltiples servicios y comodidades ofrecidos, nos sentimos' +
      'orgullosos de presentar nuestros servicio de Buffet para Bodas.' +
      'Un excelente ejemplo es el buffet de exquisita comida ecuatoriana e internacional. Nuestro' +
      'personalizado servicio y reconocida gastronomía nacional e internacional' +
      'elaborada por el Chef Ejecutivo, Sven Hanne, harán de su evento, un día único y memorable.' +
      'Además contamos con el servicio de Buffet a domicilio',
  },
  graduacion: {
    title: 'Banquetes para celebrar tu Graduación',
    image: 'assets/images/buffet/graduacion.jpg',
    description:
      'Además de los múltiples servicios y comodidades ofrecidos, nos sentimos' +
      'orgullosos de presentar nuestros servicio de Buffet para Graduación.' +
      'Un excelente ejemplo es el buffet de exquisita comida ecuatoriana e internacional. Nuestro' +
      'personalizado servicio y reconocida gastronomía nacional e internacional' +
      'elaborada por el Chef Ejecutivo, Sven Hanne, harán de su evento, un día único y memorable.' +
      'Además contamos con el servicio de Buffet a domicilio',
  },

  quinceañera: {
    title: 'Banquetes para tu Fiesta de Quinceañera',
    image: 'assets/images/buffet/quinceañera.png',
    description:
      'Además de los múltiples servicios y comodidades ofrecidos, nos sentimos' +
      'orgullosos de presentar nuestros servicio de Buffet para Quinceañera.' +
      'Un excelente ejemplo es el buffet de exquisita comida ecuatoriana e internacional. Nuestro' +
      'personalizado servicio y reconocida gastronomía nacional e internacional' +
      'elaborada por el Chef Ejecutivo, Sven Hanne, harán de su evento, un día único y memorable.' +
      'Además contamos con el servicio de Buffet a domicilio',
  },
};

function getTemplate(eventog) {
  return `
  <div>
  <img class="vimg" src="${eventog.image}" alt="${eventog.title}">
    <h2>${eventog.title}</h2>
    <p class="ventana_p">${eventog.description}</p>
</div>
  `;
}

const eventos = document.querySelectorAll('.evento');
const botonab = document.querySelectorAll('.botona');

botonab.forEach((button) => {
  button.addEventListener('click', function (e) {
    const eventname = e.target.textContent.toLowerCase();
    document.getElementById('vent').innerHTML = getTemplate(
      eventosO[eventname]
    );
    document.getElementById('vent').style.display = 'block';
  });
  button.addEventListener('blur', cerrarVentana);
});

function cerrarVentana() {
  document.getElementById('vent').style.display = 'none';
}
