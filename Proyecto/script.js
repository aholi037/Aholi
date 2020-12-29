const form = document.getElementById("FormularioRegistro");

  form.addEventListener("submit", function(event) {
      event.preventDefault();
      let transacciones= new FormData(form); 

  });