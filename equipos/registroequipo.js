
var formulario_equipo = document.getElementById('formulario_equipo');
var respuesta  =  document.getElementById('respuesta');

formulario_equipo.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('click')

    var datos_equipo = new FormData(formulario_equipo);

    console.log(datos_equipo)
    console.log(datos_equipo.get('marca'))
    console.log(datos_equipo.get('modelo'))
    console.log(datos_equipo.get('tipo'))
    console.log(datos_equipo.get('estado'))
    console.log(datos_equipo.get('descripcion'))

    fetch('post.php', {
        method: 'POST',
        body: datos_equipo
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