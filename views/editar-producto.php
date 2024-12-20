<body>
    <div class ="form-container">
        <form class ="form" action="" id="frmActualizar">
                           <h1>Editar producto</h1>
        <input type="hidden" name ="id_producto" id="id_producto">
        <input type="hidden" name ="img" id="img">

        <div class ="form-row">
        <div class ="form-colum">
            <label for="codigo">Código</label>
            <input type="text" id="codigo" name="codigo" placeholder="Código" readonly disabled>
        </div>
        <div class ="form-colum">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre"  name="nombre" placeholder="Nombre" required>

        </div>
        <div>
            <label for="detalle">Detalle</label>
            <input type="text" id="detalle"  name="detalle" placeholder="Detalle" required>
        </div>
        <div>
            <label for="precio">Precio</label>
            <input type="number" id="precio"    name="precio" placeholder="Precio" required>

            
        </div>
        <div>
            <label for="categoria">Categoría</label>
            <select name="categoria" id="categoria" required>
                <option>-- seleccione --</option>
                </select> 
        </div>
        <div>
            <label for="fecha_vencimiento">Fecha de Vencimiento</label>
            <input type="date" id="fecha_v"  name="fecha_v" placeholder="Fecha de Vencimiento" required>

        </div>
        <div>
            <label for="imagen">Imagen</label>
            <input type="file"class="form-control"  id="imagen" name="imagen"  placeholder="URL de la Imagen" >
        </div>
        <div>
            <label for="proveedor">Proveedor</label>
            <select name="proveedor" id="proveedor" required>
                <option>-- seleccione --</option>
                </select> 
        </div>

        <button type="button" onclick="actualizar_producto();">Actualizar</button>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </form>

    <script src="<?php echo BASE_URL; ?>views/js/functions_producto.js"></script>
    <script ></script>

    <script>listar_categorias();</script>
    <script>listar_proveedor();</script>

    <script>
        //http://localhost/sistema_final/editar-producto/polo
        const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina[1]; ?>;
        ver_producto(id_p);
    </script>

</body>





<head>
    <style>
 form { 
            background: white; /* Fondo blanco para el formulario */
            padding: 20px; /* Espaciado interno */
            border-radius: 8px; /* Bordes redondeados */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra suave alrededor del formulario */
            max-width: 400px; /* Ancho máximo del formulario */
            margin: auto; /* Centra el formulario en la página */
        }

        div {
            margin-bottom: 15px; /* Espaciado entre los campos */
        }

        label {
            display: block; /* Hace que la etiqueta ocupe toda la línea */
            margin-bottom: 5px; /* Espaciado debajo de la etiqueta */
            font-weight: bold; /* Texto en negrita */
        }

        input {
            width: 100%; /* Hace que el campo ocupe todo el ancho disponible */
            padding: 10px; /* Espaciado interno en los campos */
            border: 1px solid #ccc; /* Borde gris claro */
            border-radius: 4px; /* Bordes ligeramente redondeados */
            box-sizing: border-box; /* Incluye el padding y el borde en el ancho total */
        }

        input:focus {
            border-color: #007BFF; /* Cambia el color del borde al recibir foco */
            outline: none; /* Elimina el contorno predeterminado del navegador */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Sombra azul suave alrededor del campo */
        }

        button {
            background-color: blueviolet; /* Color de fondo del botón */
            color: white; /* Color del texto del botón */
            border: none; /* Sin borde */
            padding: 10px; /* Espaciado interno */
            border-radius: 4px; /* Bordes ligeramente redondeados */
            cursor: pointer; /* Cambia el cursor al pasar el mouse */
            width: 100%; /* Hace que el botón ocupe todo el ancho disponible */
            font-size: 16px; /* Tamaño de la fuente */
        }

        button:hover {
            background-color: magenta; /* Cambia el color de fondo al pasar el mouse */
        }
    </style>
</head>