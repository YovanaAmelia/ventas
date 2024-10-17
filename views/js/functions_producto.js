async function registrar_producto() {
let codigo= document.getElementById('codigo').value;
let nombre= document.querySelector('#nombre').value;
let detalle= document.querySelector('#detalle').value;
let precio= document.querySelector('#precio').value;
let stock= document.querySelector('#stock').value;
let categoria= document.querySelector('#categoria').value;
let fecha_v= document.querySelector('#fecha_v').value;
let imagen= document.querySelector('#imagen').value;
let proveedor= document.querySelector('#proveedor').value;
if (codigo== "" || nombre== "" || detalle== "" || precio== "" || stock== "" ||
    categoria== "" || fecha_v== "" || imagen== "" || proveedor== "" ){

alert("error,campos vacios");
return;
}
try{  
    //capturamos datos del formulario html// 
const datos=new FormData(frmRegistrar);
// enviar datos asia el controlador//
let respuesta = await fetch(base-url+'controller/Producto.php?tipo=registrar',{
    method: 'POST',
    mode: 'cors',
    cache: 'no-cache',
    body: datos
});
console.log(respuesta);
}catch (e){
    console.log("Oops, ocurrio un error"+e);
}

}
