document.addEventListener("DOMContentLoaded", function() {
	var introSlide = document.getElementById("introSlide");
	var backgroundVideo = document.getElementById("backgroundVideo");
  
	// Función para cambiar el contenido del slider
	function updateSlideContent() {
	  if (window.innerWidth <= 768) {
		// En dispositivos móviles, cambia el video
		backgroundVideo.src = "../images/simaoimages/1mini.mp4";
		introSlide.classList.add("mobile-layout");
	  } else {
		// En otros casos, utiliza el video original
		backgroundVideo.src = "../images/simaoimages/1.mp4";
		introSlide.classList.remove("mobile-layout");
	  }
	}
  
	// Llama a la función al cargar la página y en cambios de tamaño de ventana
	updateSlideContent();
	window.addEventListener("resize", updateSlideContent);
  });

  document.addEventListener("DOMContentLoaded", function() {
	var introSlide1 = document.getElementById("introSlide1");
	var backgroundVideo1 = document.getElementById("backgroundVideo1");
  
	// Función para cambiar el contenido del slider
	function updateSlideContent() {
	  if (window.innerWidth <= 768) {
		// En dispositivos móviles, cambia el video
		backgroundVideo1.src = "../images/simaoimages/2mini.mp4";
		introSlide1.classList.add("mobile-layout");
	  } else {
		// En otros casos, utiliza el video original
		backgroundVideo1.src = "../images/simaoimages/2.mp4";
		introSlide1.classList.remove("mobile-layout");
	  }
	}
  
	// Llama a la función al cargar la página y en cambios de tamaño de ventana
	updateSlideContent();
	window.addEventListener("resize", updateSlideContent);
  });
  
  