async function listar_personas() {
    try{
      let respuesta = await fetch(base_url+'controller/persona.php?tipo=listar');
      json = await respuesta.json();
      if (json.status){
         let datos = json.contenido;
         let cont  = 0;
         datos.forEach(item =>{
             let nueva_fila = document.createElement("tr");
             //id de la fila y id de base de datos//
             nueva_fila.id = "fila"+item.id;
             cont+=1;
             nueva_fila.innerHTML = `
                    <th>${cont}</th>
                    <td>${item.nro_identidad}</td>
                    <td>${item.razon_social}</td>
                    <td>${item.telefono}</td>
                    <td>${item.correo}</td>
                    <td>${item.departamento}</td>
                    <td>${item.provincia}</td>
                    <td>${item.distrito}</td>
                    <td>${item.cod_postal}</td>
                    <td>${item.direccion}</td>
                    <td>${item.rol}</td>
                    <td>${item.password}</td>
                    
                    <td>${item.options}</td>
                    
             `;
             document.querySelector('#tbl_persona1').appendChild(nueva_fila);
         });
      }
      console.log(json);
    }catch(error){
        console.log("Oops salio un error" + error);
    } 
 }
 if (document.querySelector('#tbl_persona1')){
 listar_personas();
 }


async function Registrar_persona() {
    let nro_identidad = document.getElementById('nro_identidad').value;
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let cod_postal = document.querySelector('#cod_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;

   /*  let password = document.querySelector('# password').value; */

    if (nro_identidad == "" || razon_social == "" || telefono == "" || correo == "" || departamento == "" || provincia == "" ||  distrito == "" || cod_postal == ""||
        direccion == ""|| rol == "") {
        alert("error, campos vacios");
        return;
    }
    try {
        const datos = new FormData(frmRegistrar); // capturamos datos del formulario html
        // enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/persona.php?tipo=registrar', {
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
async function ver_persona(id) {
    const formdata = new FormData();
    formdata.append('id_persona',id);
    try{
 let respuesta = await fetch(base_url+'controller/persona.php?tipo=ver',{
    method: 'POST',
    mode:'cors',
    cache:'no-cache',
    body:formdata
 });
 json = await respuesta.json();
 if (json.status){
    document.getElementById('nro_identidad').value =json.contenido.nro_identidad;
    document.querySelector('#razon_social').value =json.contenido.razon_social;
    document.querySelector('#telefono').value =json.contenido.telefono;
    document.querySelector('#correo').value =json.contenido.correo;
    document.querySelector('#departamento').value =json.contenido.departamento;
    document.querySelector('#provincia').value =json.contenido.provincia;
    document.querySelector('#distrito').value =json.contenido.distrito;
    document.querySelector('#cod_postal').value =json.contenido.cod_postal;
    document.querySelector('#direccion').value =json.contenido.direccion;
    document.querySelector('#rol').value =json.contenido.rol;
   
 }else{  
    window.location =base_url+"persona1";
 }

 console.log(json);
    }catch (error){
        console.log("oops ocurrio un error"+error);
    }
    
}
async function actualizar_Persona(id) {
    let nro_identidad = document.getElementById('nro_identidad').value;
     let razon_social = document.querySelector('#razon_social').value;
     let telefono = document.querySelector('#telefono').value;
     let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
     let provincia = document.querySelector('#provincia').value;
     let distrito = document.querySelector('#distrito').value;
     let cod_postal = document.querySelector('#cod_postal').value;
     let direccion = document.querySelector('#direccion').value;
     let rol = document.querySelector('#rol').value;
     if (nro_identidad == "" || razon_social == "" || telefono == "" || correo == "" || departamento == "" || provincia == "" ||  distrito == "" || cod_postal == ""||
        direccion == ""|| rol == "") {
         alert("error, campos vacios");
         return;
     }
     try {
         const datos = new FormData(frmActualizar); // capturamos datos del formulario html
         datos.append('id_persona',id);
         // enviar datos hacia el controlador
         let respuesta = await fetch(base_url + 'controller/persona.php?tipo=actualizar', {
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

      
