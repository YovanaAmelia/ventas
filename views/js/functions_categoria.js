async function registrar_categoria() {
    
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    
    if ( nombre == "" || detalle == "" ) {
        alert("error, campos vacios");
        return;
    }
    try {
        const datos = new FormData(frmRegistrar); // capturamos datos del formulario html
        // enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/categoria.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
if(json.status){
    swal("Registro",json.mensaje,"success");
}else{  
    swal("Registro",json.mensaje,"error");
}
        console.log(json);

    } catch (e) {
        console.log("Oops, ocurrio un error" + e);
    }

}