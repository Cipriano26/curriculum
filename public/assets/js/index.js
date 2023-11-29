// Darkmode
const lightMode = document.querySelector('.sun');
const darkMode = document.querySelector('.moon');

const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

lightMode.onclick = function(){
  document.documentElement.setAttribute('data-theme', 'dark');
  lightMode.style = "display: none";
  darkMode.style = "display: block";
  localStorage.setItem('theme', 'dark');
}

darkMode.onclick = function(){
  document.documentElement.setAttribute('data-theme', 'light');
  lightMode.style = "display: block";
  darkMode.style = "display: none";
  localStorage.setItem('theme', 'light');

}

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'dark') {
        lightMode.style = "display: none";
      darkMode.style = "display: block";
    }
}

$(document).ready(function() {

// Carruseles
    const owlCarousels = $("[id='owl-carousel']");

    owlCarousels.each(function(index, element) {
        $(element).owlCarousel({
            items:2,
            loop:true,
            dots: false,
            navElement: false,
            autoplay:2000,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 3]
        });
    });

// Calcular tiempo entre trabajos
    let fechaInicio = $('#fechaInicio').val();
    let fechaFin = $('#fechaFin').val();
    if (fechaFin === 'Actualidad') {
      let fechaHoy = new Date();
      fechaFin = fechaHoy.toISOString().split('T')[0];
    }
    let tiempoTranscurrido = calcularTiempoTranscurrido(fechaInicio, fechaFin);
    $('#time').text("("+tiempoTranscurrido+")");

    function calcularTiempoTranscurrido(fechaInicio, fechaFin) {
      let inicio = new Date(fechaInicio);
      let fin = new Date(fechaFin);

      let years = fin.getFullYear() - inicio.getFullYear();
      let months = fin.getMonth() - inicio.getMonth();

      if (months < 0) {
        years--;
        months += 12;
      }

      let tiempoTranscurrido = '';

      if (years > 0) {
        tiempoTranscurrido += years + ' año';
        if (years > 1) {
          tiempoTranscurrido += 's';
        }
        tiempoTranscurrido += ' ';
      }
      if (months > 0) {
        tiempoTranscurrido += months + ' mes';
        if (months > 1) {
          tiempoTranscurrido += 'es';
        }
      }

      return tiempoTranscurrido;
    }

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
});
// Accordion
// JavaScript
const accordionGroups = document.querySelectorAll(".accordion-group");

accordionGroups.forEach((group) => {
  group.addEventListener("click", (event) => {
    const accordionItemHeader = event.target.closest(".accordion-item-header");
    if (!accordionItemHeader) return;

    const accordionItem = accordionItemHeader.parentElement;
    const isActive = accordionItem.classList.contains("active");

    // Close all items in the group
    group.querySelectorAll(".accordion-item.active").forEach((item) => {
      if (item !== accordionItem) {
        item.classList.remove("active");
        item.querySelector(".accordion-item-body").style.maxHeight = 0;
      }
    });

    // Toggle the clicked item
    accordionItem.classList.toggle("active");
    const accordionItemBody = accordionItem.querySelector(".accordion-item-body");
    accordionItemBody.style.maxHeight = isActive ? 0 : accordionItemBody.scrollHeight + "px";

    // Stop propagation for sub-accordions
    event.stopPropagation();
  });
});

// button up
const upArrow = document.getElementById('up-arrow');

window.addEventListener('scroll', () => {
  if (window.scrollY > 200) { 
    upArrow.style.display = 'block';
  } else {
    upArrow.style.display = 'none';
  }
});

upArrow.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' }); 
});

//button contact
const buttomArrow = document.getElementById('contact');

buttomArrow.addEventListener('click', () => {
  if (window.innerWidth <= 600) {
    window.scrollTo({
        top: document.body.scrollHeight,
        behavior: 'smooth' 
    });
  } else {
    window.scrollTo({
      top: document.body.scrollHeight - window.innerHeight,
      behavior: 'smooth',
    });
  }
});

/* document.addEventListener('DOMContentLoaded', function() {
    var noScrollLinks = document.querySelectorAll('.ns-TabNav_Link');

    noScrollLinks.forEach(function(link) {
      link.addEventListener('click', function(event) {
        event.preventDefault();
      });
    });
  });



var tabsModule = document.body.querySelector(".ns-TabsModule");
var tabNavList = document.body.querySelector(".ns-TabNav");
var tabNavLinks = document.querySelectorAll(".ns-TabNav_Link");
var tabNavCurrentLinkindicator = tabNavList.querySelector(".ns-TabNav_Indicator");
var tabPanels = document.querySelectorAll(".ns-TabPanel");
document.getElementById("Tab0").style.display = "block";

function positionIndicator() {
  var tabNavListLeftPosition = tabNavList.getBoundingClientRect().left;
  var tabsModuleSectionDataValue = tabsModule.getAttribute("data-active-tab") || '0';
  var tabNavCurrentLinkText = tabNavList.querySelector("[data-tab='" + tabsModuleSectionDataValue + "'] span");
  var tabNavCurrentLinkTextPosition = tabNavCurrentLinkText.getBoundingClientRect();
  tabNavCurrentLinkindicator.style.transform =
    "translate3d(" +
    (tabNavCurrentLinkTextPosition.left - tabNavListLeftPosition) +
    "px,0,0) scaleX(" +
    tabNavCurrentLinkTextPosition.width * 0.01 +
    ")";
}

function hideAllTabPanels() {
  for (i = 0; i < tabPanels.length; i++) {
    tabPanels[i].removeAttribute("style");
  }
};


var tabNavLinkEvent = function() {
  var thisLink = this.getAttribute("data-tab");
  var thisHref = this.getAttribute("href");
  var thisTabPanel = document.querySelector(thisHref);
  tabsModule.setAttribute("data-active-tab", thisLink);
  hideAllTabPanels();
  thisTabPanel.style.display = "block";
  positionIndicator();
};


for (var i = 0; i < tabNavLinks.length; i++) {
  tabNavLinks[i].addEventListener("click", tabNavLinkEvent, false);
}

(function() {
  var resizeTimeout;
  function resizeThrottler() {
    if (!resizeTimeout) {
      resizeTimeout = setTimeout(function() {
        resizeTimeout = null;
        actualResizeHandler();
      }, 66);
    }
  }
  function actualResizeHandler() {
    positionIndicator();
  }
  window.addEventListener("resize", resizeThrottler, false);
})();


positionIndicator();

 */
