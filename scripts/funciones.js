let x = $(document);
x.ready(iniciarEventos);
function iniciarEventos()
{
    let x = $("#boton");
    x.click(hisoclick);
}
function hisoclick()
{
    let sueld = $("#Sueldo").val();
    let ab = $("#Guardiasab").val();
    let noab= $("#Guardiasnoab").val();
    let guardiasp= $("#Guardias pasivas").val();
    $.ajax({
        async: true,
        type: "POST",
        dataType: "html",
        contentType: "application/x-www-form-urlencoded",
        url: "/scripts/calcular.php",
        data: 'Guardiasab='+ab+'&Guardiasnoab='+noab+'&Sueldo='+sueld+'&Guardiasp='+guardiasp, 
        beforeSend: inicioEnvio,
        success: llegadaDatos,
        timeout: 120000,
        error: problemas
      });
      return false;
}
function inicioEnvio()
{
    let x=$("#resultados");
    let cadena = `<div class="spinner-grow text-success">
    <span class="visually-hidden">Cargando</span>
    </div>`;
    x.html(cadena);
}
function llegadaDatos(datos)
{
    $("#resultados").text(datos);
}
function problemas()
{
    $("#resultados").text('Problemas en el servidor.');
}
