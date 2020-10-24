/*=============================================================
=            OBJETO CON LAS PROPIEDADES DEL SLIDER            =
=============================================================*/

var p = {

  paginacion: document.querySelectorAll('#paginacion li'),
  item: 0,
  cajaSlider: document.querySelector('#Slider ul'),
  imgSlider: document.querySelectorAll('#Slider ul li'),
  avanzar: document.querySelector('#Slider #avanzar'),
  retroceder: document.querySelector('#Slider #retroceder'),
  velocidadSlider: 3000,
  formatearContador: false,
}

/*=====  End of OBJETO CON LAS PROPIEDADES DEL SLIDER  ======*/



/*=========================================================
=            OBJETO CON LOS MÉTODOS DEL SLIDER            =
=========================================================*/

var j = {
  inicioSlider: function() {
    for (var i = 0; i < p.paginacion.length; i++) {
      p.paginacion[i].addEventListener('click', j.paginacionSlider)
      p.imgSlider[i].style.width = (100/p.paginacion.length) + '%'
    }

    p.avanzar.addEventListener('click', j.avanzar)
    p.retroceder.addEventListener('click', j.retroceder)
    j.intervalo();

    p.cajaSlider.style.width = (p.paginacion.length*100) + '%'
  },

  paginacionSlider: function(item) {
    p.item = item.target.parentNode.getAttribute('item') - 1;

    j.movimientoSlider(p.item);
  },

  avanzar: function() {
    var total = p.imgSlider.length - 1;
    if (p.item < total) {
      p.item++;
    } else {
      p.item = 0;
    }

    console.log(p.imgSlider.length);
    j.movimientoSlider(p.item);
  },

  retroceder: function() {
    if (p.item != 0) {
      p.item--;
    } else {
      p.item = p.imgSlider.length - 1;
    }


    console.log(p.item);
    j.movimientoSlider(p.item);
  },

  movimientoSlider: function(item) {
    p.formatearContador = true;

    p.cajaSlider.style.left = item * -100 + '%';

    for (var i = 0; i < p.paginacion.length; i++) {
      p.paginacion[i].style.opacity = .5;
      p.paginacion[i].style.fontSize = '18px';
      p.paginacion[i].style.margin = '0 5px';
    }

    p.paginacion[item].style.opacity = '1';
    p.paginacion[item].style.fontSize = '21px';
    p.paginacion[item].style.margin = '0 5px -2px 5px';

    p.cajaSlider.style.transition = '.7s left ease-in-out';
  },

  intervalo: function() {
    setInterval(function() {
      if (p.formatearContador == true) {
        p.formatearContador = false;
      } else {
        j.avanzar();
      }

    }, p.velocidadSlider)
  }
}

j.inicioSlider();

/*=====  End of OBJETO CON LOS MÉTODOS DEL SLIDER  ======*/