<!--relleno-->
<div class="w-100 row m-0" style="background-color: #F4E5FF;">

    <div id="productos" class="w-75" style="min-height: 900px;">
        <h3 class="text-center"> <strong>PRODUCTOS</strong></h3>
        <div class="card w-100 row m-0 mb-1" style="height: 250px;">
            <img src="https://m.media-amazon.com/images/I/81Euh128D4L._AC_SY550_.jpg" alt=""
                class="h-100 p-0 col-2">
            <div id="producto" class="p-0 col-4 h-100">
                <p> <strong>MIGU Ropa de verano para niñas</strong> </p>
                <p> <strong>Color: </strong> Rosa </p>
                <p> <strong>Material: </strong> 100% algodón </p>
                <p> <strong>Talla: </strong> 4 años </p>
            </div>
            <div id="precio" class="col-1 p-0 h-100"><input id="precio_p1" type="hidden" value="30"
                    readonly>S/.30.00</div>
            <div id="cantidad" class="col-3 p-4 h-100 row">
                <button class="btn btn-danger col-2 h-50 m-1" onclick="restarcantidad();">-</button>
                <input id="cantidad_p1" type="number" class="col-6 h-50 m-1" value="1">
                <button class="btn btn-success col-2 h-50 m-1" onclick="sumarcantidad();">+</button>
            </div>
            <div id="subtotal" class="col-1 p-0 h-100">S/.0.00</div>
            <div class="col-1">
                <button class="btn btn-danger">Eliminar</button>
            </div>
        </div>

        <div class="card w-100 row m-0 mb-1" style="height: 250px;">
            <img src="https://m.media-amazon.com/images/I/61AS3ppgPML._AC_SX342_.jpg" alt=""
                class="h-100 p-0 col-2">
            <div id="producto" class="p-0 col-4 h-100">
                <p> <strong>MIGU Ropa de verano para niñas</strong></p>
                <p> <strong>Color: </strong> Amarillo </p>
                <p> <strong>Material: </strong> 100% algodón </p>
                <p> <strong>Talla: </strong> 8 años </p>
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

        <div class="card w-100 row m-0 mb-1" style="height: 250px;">
            <img src="https://m.media-amazon.com/images/I/71IxTVfNzNL._AC_SX342_.jpg" alt=""
                class="h-100 p-0 col-2">
            <div id="producto" class="p-0 col-4 h-100">
                <p> <strong>Ropa de verano para niños</strong></p>
                <p> <strong>Color: </strong> Tricolor </p>
                <p> <strong>Material: </strong> 100% algodón </p>
                <p> <strong>Talla: </strong> 10 años </p>
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
    <!--medios de pagpo-->

    <div id="monto" class="w-25" style=" height: 200px;">
        <h4 class="text-center"> <strong>INFORMACIÓN DE PAGO</strong></h4>
        <H5>Subtotal : S/. 90.00</H5>
        <div class="row col-12">
            <H5 class="col-6">Cód. de Descuento : </H5> <input class="col-6" type="text">
        </div>
        <h5>Descuento: S/. 10.00</h5>
        <h5>Costo de Envío: S/. 15.00</h5>
        <H4>Total : S/. 85.00</H4>
        <div id="medios_pago" class="col-12">
            <a href="https://www.yape.com.pe/" target="_blank"><img class="col-3 m-2"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Yape_text_app_icon.png/250px-Yape_text_app_icon.png"
                    alt=""></a>
            <a href="https://www.viabcp.com/" target="_blank"><img class="col-3 m-2"
                    src="https://www.visa.com.pe/dam/VCOM/regional/lac/SPA/Default/Partner%20With%20Us/Info%20for%20Partners/Info%20for%20Small%20Business/visa-pos-800x400.jpg"
                    alt=""></a>
            <a href="https://www.pagoefectivo.la/pe/" target="_blank"><img class="col-3 m-2"
                    src="https://paginasweb.pe/wp-content/uploads/2016/05/pagoefectivo.png" alt=""></a>
        </div>
        <div class="text-center d-grid gap-2 col-6 mx-auto">
            <a href="" class="btn btn-success">Pagar</a>
            <a href="index.html" class="btn btn-primary">Seguir Comprando</a>
        </div>

    </div>