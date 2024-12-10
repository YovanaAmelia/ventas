
async function listar_compras() {
    try{
      let respuesta = await fetch(base_url+'controller/compras.php?tipo=listar');
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
                    <td>${item.id_producto}</td>
                    <td>${item.cantidad}</td>
                    <td>${item.precio}</td>
                    <td>${item.id_trabajador}</td>
                    <td>${item.options}</td>
                    
             `;
             document.querySelector('#tbl_compra1').appendChild(nueva_fila);
         });
      }
      console.log(json);
    }catch(error){
        console.log("Oops salio un error" + error);
    } 
 }
 if (document.querySelector('#tbl_compra1')){
 listar_compras();
 }

async function registrar_compras() {
    let id_producto = document.getElementById('id_producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let id_trabajador = document.querySelector('#id_trabajador').value;
    if (id_producto == "" || cantidad == "" || precio  == "" || id_trabajador == "") {
        alert("error, campos vacios");
        return;
    }
    try {
        const datos = new FormData(frmRegistrar); // capturamos datos del formulario html
        // enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/compras.php?tipo=registrar', {
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
async function ver_compras(id) {
    const formData = new FormData();
    formData.append('id_compras',id);
    try{
 let respuesta = await fetch(base_url+'controller/compras.php?tipo=ver',{
    method: 'POST',
    mode:'cors',
    cache:'no-cache',
    body:formData
 });
 json = await respuesta.json();
 if (json.status){
    document.querySelector('id_producto').value  =json.contenido.id_producto;
    document.querySelector('#cantidad').value  =json.contenido.cantidad;
    document.querySelector('#precio').value  =json.contenido.precio;
    document.querySelector('#id_trabajador').value  =json.contenido.id_trabajador;
    

 }else{  
    window.location =base_url+"compra1";
 }

 console.log(json);
    }catch (error){
        console.log("oops ocurrio un error"+error);
    }
    
}
async function actualizar_compras(id) {
    let id_producto = document.getElementById('id_producto').value;
     let cantidad = document.querySelector('#cantidad').value;
     let precio = document.querySelector('#precio').value;
     let id_trabajador = document.querySelector('#id_trabajador').value;
    
     if (id_producto == "" || cantidad == "" || precio  == "" || id_trabajador == "") {
         alert("error, campos vacios");
         return;
     }
     try {
         const datos = new FormData(frmActualizar); // capturamos datos del formulario html
         datos.append('id_compras',id);
         // enviar datos hacia el controlador
         let respuesta = await fetch(base_url + 'controller/compras.php?tipo=actualizar', {
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
