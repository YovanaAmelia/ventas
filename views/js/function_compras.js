async function listar_compras() {
    try {
        let respuesta =await fetch(base_url+'controller/compras.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
             let contenido_select = '';
             datos.forEach(element=>{
                contenido_select +='<option value="'+ element.id +'">'+ element.razon_social +'</option>';
             
           

             /*    $('#categoria').append($('<option />', {
                    text: `${element.nombre}` ,
                   value: `${element.id}`
                })); */
            });
            document.getElementById('compras').innerHTML = contenido_select;
        }

    
        console.log(respuesta);
    }catch (e){  

        console.log("Error al cargar compras"+e);
    }
    
}