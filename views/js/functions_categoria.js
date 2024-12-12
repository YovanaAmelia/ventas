async function listar_categorias() {
    try{
      let respuesta = await fetch(base_url+'controller/categoria.php?tipo=listar');
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
                    <td>${item.nombre}</td>
                    <td>${item.detalle}</td>
                    <td>${item.options}</td>
                    
             `;
             document.querySelector('#tbl_categoria1').appendChild(nueva_fila);
         });
      }
      console.log(json);
    }catch(error){
        console.log("Oops salio un error" + error);
    } 
 }
 if (document.querySelector('#tbl_categoria1')){
    listar_categorias();
 }

async function registrar_categorias() {
    
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
async function ver_categoria(id) {
    const formData = new FormData();
    formData.append('id_categoria',id);
    try{
 let respuesta = await fetch(base_url+'controller/categoria.php?tipo=ver',{
    method: 'POST',
    mode:'cors',
    cache:'no-cache',
    body:formData
 });
 json = await respuesta.json();
 if (json.status){
   
    document.querySelector('#nombre').value  =json.contenido.nombre;
    document.querySelector('#detalle').value  =json.contenido.detalle;
   

 }else{  
    window.location =base_url+"categoria1";
 }

 console.log(json);
    }catch (error){
        console.log("oops ocurrio un error"+error);
    }
    
}
async function actualizar_categoria(id) {
  
     let nombre = document.querySelector('#nombre').value;
     let detalle = document.querySelector('#detalle').value;

     if ( nombre == "" || detalle == "" ) {
         alert("error, campos vacios");
         return;
     }
     try {
         const datos = new FormData(frmActualizar); // capturamos datos del formulario html
         datos.append('id_producto',id);
         // enviar datos hacia el controlador
         let respuesta = await fetch(base_url + 'controller/categoria.php?tipo=actualizar', {
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
 
<<<<<<< HEAD
 }  
 async function eliminar_categoria(id) {
    swal({
        title:"Realmente desea eliminar el producto",
        Text:'',
        icon:"warning",
        buttons:true,
        dangerMode:true
    }).then((willDelete)=>{
if(willDelete){
    fnt_eliminar(id);
}
    })
    
}
async function fnt_eliminar(id){
 const formdata = new FormData();
 formdata.append('id_producto', id);
 try{
let respuesta = await fetch(base_url + 'controller/categoria.php?tipo=eliminar',{
    method: 'POST',
    mode: 'cors',
    cache: 'no-cache',
    body: formdata
});
json = await respuesta.json();
if(json.status){
    swal("Eliminar", "eliminado correctamente", "success");
   
    document.querySelector('#fila'+id).remove();
}else{  
    swal('Eliminar','error al eliminar producto','warning');
    
}
 }catch (e){
    console.log("ocurrio error"+e);
 }
}
=======
 }

 async function ver_categoria(id) {
    const formData = new FormData();
    formData.append('id_categoria', id); 
    try {
        let respuesta = await fetch(base_url+'controller/categoria.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_categoria').value = json.contenido.id;
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;
        }else{
            window.location = base_url+"categoria";
        }
        console.log(json);
    } catch (error) {
        console.log("oops ocurrio un error al editar categoria"+error)
    }
}

async function actualizarCategoria() {
    const datos = new FormData(formActualizarCat);
    try {
        let respuesta = await fetch(base_url + 'controller/categoria.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if(json.status){
            swal("Registro", json.mensaje, "success");
        }else{
            swal("Registro", json.mensaje, "error");
        }
        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrio un error categoria"+e);
    }
 }
>>>>>>> c3f765f05265c02dd23501c9a40163ee66feb18e
