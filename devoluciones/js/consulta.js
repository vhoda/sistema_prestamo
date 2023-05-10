
var formulario_consulta = document.getElementById('formulario_consulta');
var respuesta  =  document.getElementById('respuesta');

formulario_consulta.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('click')

    var datos_consulta = new FormData(formulario_consulta);

    console.log(datos_consulta)
    console.log(datos_consulta.get('rut'))

    fetch('/inventario/devoluciones/js/post.php', {
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