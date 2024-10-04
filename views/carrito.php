<div class="w-100 row m-0">
        <div id="productos" class="w-75" style="min-height: 900px;">
            <h3 class="text-center">PRODUCTOS</h3>
            <div class="card w-100 row m-0 mb-1" style="height: 120px;">
                <img src="./views/plantilla/img/imag16.png"
                    alt="" class="h-100 p-0 col-2">
                <div id="producto" class="p-0 col-4 h-100">
                    <p>Se diseñaron con un único objetivo, anotar goles. Equipados con la última tecnología. </p>
                </div>
                <div id="precio" class="col-1 p-0 h-100"><input id="precio_p1" type="hidden" value="30"
                        readonly>S/.30.00</div>
                <div id="cantidad" class="col-3 p-4 h-100 row">
                    <button class="btn btn-danger col-2 h-50 m-1" onclick="restarcantidad();">-</button>
                    <input id="cantidad_p1" type="number" class="col-6 h-50 m-1" value="1">
                    <button class="btn btn-success col-2 h-50 m-1" onclick="sumarcantidad();">+</button>
                </div>
                <div id="subtotal" class="col-2 p-0 h-100">S/.90.00</div>
                
                </div>
                
         
            <div class="card w-100 row m-0 mb-1" style="height: 120px;">
                <img src="./views/plantilla/img/imag12.png"
                    alt="" class="h-100 p-0 col-2">
                <div id="producto" class="p-0 col-4 h-100">
                    <p>Estas zapatillas adidas Superstar para niños fusionan la legendaria silueta. </p>
                </div>
                <div id="precio" class="col-1 p-0 h-100"><input id="precio_p1" type="hidden" value="30"
                        readonly>S/.30.00</div>
                <div id="cantidad" class="col-3 p-4 h-100 row">
                    <button class="btn btn-danger col-2 h-50 m-1" onclick="restarcantidad();">-</button>
                    <input id="cantidad_p1" type="number" class="col-6 h-50 m-1" value="1">
                    <button class="btn btn-success col-2 h-50 m-1" onclick="sumarcantidad();">+</button>
                </div>
                <div id="subtotal" class="col-2 p-0 h-100">S/.90.00</div>
                
                </div>
          
            <div class="card w-100 row m-0 mb-1" style="height: 120px;">
                <img src="./views/plantilla/img/imag17.png"
                    alt="" class="h-100 p-0 col-2">
                <div id="producto" class="p-0 col-4 h-100">
                    <p>Este producto representa solo una de nuestras soluciones. </p>
                </div>
                <div id="precio" class="col-1 p-0 h-100"><input id="precio_p1" type="hidden" value="30"
                        readonly>S/.30.00</div>
                <div id="cantidad" class="col-3 p-4 h-100 row">
                    <button class="btn btn-danger col-2 h-50 m-1" onclick="restarcantidad();">-</button>
                    <input id="cantidad_p1" type="number" class="col-6 h-50 m-1" value="1">
                    <button class="btn btn-success col-2 h-50 m-1" onclick="sumarcantidad();">+</button>
                </div>
                <div id="subtotal" class="col-2 p-0 h-100">S/.90.00</div>
                 </div>
        
            <div class="card w-100 row m-0 mb-1" style="height: 120px;">
                <img src="./views/plantilla/img/imag11.png"
                    alt="" class="h-100 p-0 col-2">
                <div id="producto" class="p-0 col-4 h-100">
                    <p>Te invitamos a ver las imágenes para apreciar más detalles . </p>
                </div>
                <div id="precio" class="col-1 p-0 h-100"><input id="precio_p1" type="hidden" value="30"
                        readonly>S/.30.00</div>
                <div id="cantidad" class="col-3 p-4 h-100 row">
                    <button class="btn btn-danger col-2 h-50 m-1" onclick="restarcantidad();">-</button>
                    <input id="cantidad_p1" type="number" class="col-6 h-50 m-1" value="1">
                    <button class="btn btn-success col-2 h-50 m-1" onclick="sumarcantidad();">+</button>
                </div>
                <div id="subtotal" class="col-2 p-0 h-100">S/.90.00</div>
            </div>
        
            <div class="card w-100 row m-0 mb-1" style="height: 120px;">
                <img src="./views/plantilla/img/imag14.png"
                    alt="" class="h-100 p-0 col-2">
                <div id="producto" class="p-0 col-4 h-100">
                    <p> Liviano de cuero sintético con un look prémium que hace ligeros sus pasos. </p>
                </div>
                <div id="precio" class="col-1 p-0 h-100"><input id="precio_p1" type="hidden" value="30"
                        readonly>S/.30.00</div>
                <div id="cantidad" class="col-3 p-4 h-100 row">
                    <button class="btn btn-danger col-2 h-50 m-1" onclick="restarcantidad();">-</button>
                    <input id="cantidad_p1" type="number" class="col-6 h-50 m-1" value="1">
                    <button class="btn btn-success col-2 h-50 m-1" onclick="sumarcantidad();">+</button>
                </div>
                <div id="subtotal" class="col-2 p-0 h-100">S/.90.00</div>
                
            </div>
             </div>
        
        <div id="monto" class="w-25" style=" height: 200px;">
            <h4 class="text-center">INFORMACIÓN DE PAGO</h4>
            <H5>Subtotal : S/. 90.00</H5>
            <div class="row col-12">
                <H5 class="col-6">Cód. de Descuento : </H5> <input class="col-6" type="text">
            </div>
            <h5>Descuento: S/. 10.00</h5>
            <h5>Costo de Envío: S/. 15.00</h5>
            <H4>Total : S/. 85.00</H4>
            <div id="medios_pago" class="col-12">
                <a href="https://www.yape.com.pe/" target="_blank"><img class="col-3 m-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Yape_text_app_icon.png/250px-Yape_text_app_icon.png" alt=""></a>
                <a href="https://www.viabcp.com/" target="_blank"><img class="col-3 m-2" src="https://www.visa.com.pe/dam/VCOM/regional/lac/SPA/Default/Partner%20With%20Us/Info%20for%20Partners/Info%20for%20Small%20Business/visa-pos-800x400.jpg" alt=""></a>
                <a href="https://www.pagoefectivo.la/pe/" target="_blank"><img class="col-3 m-2" src="https://paginasweb.pe/wp-content/uploads/2016/05/pagoefectivo.png" alt=""></a>
            </div>
        
            <div class="text-center d-grid gap-2 col-6 mx-auto">
                <a href="" class="btn btn-success">Pagar</a>
                <a href="index.html" class="btn btn-primary">Seguir Comprando</a>
           
            </div>
        </div>
       
</body>
<script>
    function sumarcantidad() {
        var precio = document.getElementById('precio_p1').value;
        var cantidad = document.getElementById('cantidad_p1').value;
        var nueva_cantidad = parseInt(cantidad) + 1;
        document.getElementById('cantidad_p1').value = nueva_cantidad;
        calcular_subtotal(precio, nueva_cantidad);
    }
    function restarcantidad() {
        var precio = document.getElementById('precio_p1').value;
        var cantidad = document.getElementById('cantidad_p1').value;
        if (cantidad > 1) {
            var nueva_cantidad = parseInt(cantidad) - 1;
            document.getElementById('cantidad_p1').value = nueva_cantidad;
            calcular_subtotal(precio, nueva_cantidad);
        }

    }
    function calcular_subtotal(precio, cantidad) {
        var subtotal = precio * cantidad;
        document.getElementById('subtotal').innerHTML = 'S/. ' + subtotal;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>