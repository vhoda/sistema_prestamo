
var formulario_consultaprestamo = document.getElementById('formulario_consultaprestamo');
var respuesta  =  document.getElementById('respuesta');

formulario_consultaprestamo.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('click')

    var datos_consulta = new FormData(formulario_consultaprestamo);

    console.log(datos_consulta)
    console.log(datos_consulta.get('rut'))
    console.log(datos_consulta.get('sku'))

    fetch('/inventario/prestamos/js/post.php', {
        method: 'POST',
        body: datos_consulta
    })
    .then( res => res.json())
    .then ( data => {
        console.log(data)
        if(data === 'error'){
            respuesta.innerHTML = `
            <div class="alert alert-danger shadow" id="respuesta" role="alert">
                Los campos NO deben estar vacíos
            </div>
            `
        }else{
            respuesta.innerHTML = `
            <div class="alert alert-success shadow" id="respuesta" role="alert">
                ${data}
            </div>
            `
        }
    })
}); 