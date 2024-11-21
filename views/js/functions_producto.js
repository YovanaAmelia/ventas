
async function listar_productos() {
    try{
      let respuesta = await fetch(base_url+'controller/Producto.php?tipo=listar');
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
                    <td>${item.codigo}</td>
                    <td>${item.nombre}</td>
                    <td>${item.stock}</td>
                    <td>${item.categoria.nombre}</td>
                    <td>${item.id_proveedor}</td>
                    <td>${item.options}</td>
                    
             `;
             document.querySelector('#tbl_productos').appendChild(nueva_fila);
         });
      }
      console.log(json);
    }catch(error){
        console.log("Oops salio un error" + error);
    } 
 }
 if (document.querySelector('#tbl_productos')){
 listar_productos();
 }


async function registrar_producto() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let imagen = document.querySelector('#imagen').value;
    let proveedor = document.querySelector('#proveedor').value;
    if (codigo == "" || nombre == "" || detalle == "" || precio == "" || stock == "" || categoria == "" ||  imagen == "" || proveedor == "") {
        alert("error, campos vacios");
        return;
    }
    try {
        const datos = new FormData(frmRegistrar); // capturamos datos del formulario html
        // enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=registrar', {
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

async function listar_categorias() {
    try {
        let respuesta =await fetch(base_url+'controller/categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
             let contenido_select = '<option value="">Seleccione</option>';
             datos.forEach(element=>{
                contenido_select +='<option value="' + element.id +'">' + element.nombre + '</option>';
             
           
             /*    $('#categoria').append($('<option />', {
                    text: `${element.nombre}` ,
                   value: `${element.id}`
                })); */
            });
            document.getElementById('idcategoria').innerHTML = contenido_select;
        }

    
 console.log(respuesta);
    }catch (e){  
        console.log("Error al cargar categoria"+e);
    }
    
}
//proveedor//
async function listar_Proveedor() {
    try {
        let respuesta =await fetch(base_url+'controller/Proveedor.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
             let contenido_select = '<option value="">Seleccione</option>';
             datos.forEach(element=>{
                contenido_select +='<option value="'+ element.id +'">'+ element.razon_social +'</option>';
             
           

             /*    $('#categoria').append($('<option />', {
                    text: `${element.nombre}` ,
                   value: `${element.id}`
                })); */
            });
            document.getElementById('Proveedor').innerHTML = contenido_select;
        }

    
        console.log(respuesta);
    }catch (e){  

        console.log("Error al cargar proveedor"+e);
    }
    
}
      
