
var formulario_alumno = document.getElementById('formulario_alumno');
var respuesta  =  document.getElementById('respuesta');

formulario_alumno.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('click')

    var datos_alumno = new FormData(formulario_alumno);

    console.log(datos_alumno)
    console.log(datos_alumno.get('rut'))
    console.log(datos_alumno.get('nombres'))
    console.log(datos_alumno.get('apellidos'))
    console.log(datos_alumno.get('carrera'))
    console.log(datos_alumno.get('cohorte'))
    console.log(datos_alumno.get('direccion'))
    console.log(datos_alumno.get('fechanacimiento'))

    fetch('post.php', {
        method: 'POST',
        body: datos_alumno
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