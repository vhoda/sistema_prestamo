
var formulario_consultaprestamo = document.getElementById('formulario_consultaprestamo');
var respuesta  =  document.getElementById('respuesta');

formulario_consultaprestamo.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('click')

    var datos_consulta = new FormData(formulario_consultaprestamo);

    console.log(datos_consulta)
    console.log(datos_consulta.get('rut'))
    console.log(datos_consulta.get('idproducto'))

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

            var json = data;
            window.location = '../prestamos/registrar_prestamos.php?rut='+json.rut+'&nombre='+json.nombre+'&apellido='+json.apellido+'&carrera='+json.carrera+'&idproducto='+json.idproducto+'&marca='+json.marca+'&modelo='+json.modelo+'&fecha_entrega='+json.fecha_entrega;


            
            

           
        }
        
    })
}); 