<div class="col-md-3">
    <label for="inputState" class="form-label">Fecha de Inscripcion</label>
    <input class="form-control" type="date" id="fecha" name="txtFecha" placeholder="Fecha de Nacimiento" required>
    <!---para la fecha actual--->
    <script>
      // Obtener la fecha actual en formato "YYYY-MM-DD"
      function obtenerFechaActual() {
        const fechaActual = new Date();
        const year = fechaActual.getFullYear();
        const month = (fechaActual.getMonth() + 1).toString().padStart(2, '0');
        const day = fechaActual.getDate().toString().padStart(2, '0');
        return `${year}-${month}-${day}`;
      }
      // Establecer el valor predeterminado
      document.getElementById('fecha').value = obtenerFechaActual();
    </script>
    <!--------------------------------->
  </div>