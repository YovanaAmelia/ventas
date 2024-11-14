async function  iniciar_sesion() {
    let usuario = document.querySelector('#usuario');
    let password = document.querySelector('#password');
    if (usuario=="" || password==""){
        alert('campos vacios');
        return;
    }
//
    try {
        // capturamos datos del formulario html
        const datos = new FormData(frm_iniciar_sesion); 
        // enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Login.php?tipo=iniciar_sesion', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
if(json.status){
    //swal("iniciar_sesion",json.mensaje,"success");
    location.replace(base_url+"nuevo-producto");
}else{  
    swal("iniciar_sesion",json.mensaje,"error");
}
        console.log(json);

    } catch (e) {
        console.log("Oops, ocurrio un error" + e);
    }

}
//

if(document.querySelector('#frm_iniciar_sesion')){


    let frm_iniciar_sesion= document.querySelector('#frm_iniciar_sesion');
    frm_iniciar_sesion.onsubmit = function (e){
        e.preventDefault();
        iniciar_sesion();


    }
}
async function cerrar_sesion(){
    try{
        let respuesta = await fetch(base_url+'controller/Login.php? tipo=cerrar_sesion',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
        });
        json = await respuesta.json();
        if(json.status){
            location.replace(base_url+'login');

        }
    }catch(error){
        console.log('ocurrio un error' + error);
    }
}
