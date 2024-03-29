<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<title>Formulario</title>
</head>
<link rel="stylesheet" href="Assets/css/formp.css">
<body>
    <h2>Formulario de datos del predio</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="id">ID:</label>
        <input type="text-1" id="id" name="id">

        <label for="fecha">Fecha de Visita:</label>
        <input type="date" id="fecha" name="fecha">

        <label for="tenencia">Tenencia de la Tierra:</label>
        <select id="tenencia" name="tenencia">
            <option value="propia">Propia</option>
            <option value="arrendada">Arrendada</option>
        </select>

        <label for="predial"># Predial:</label>
        <input type="text" id="predial" name="predial">

        <label for="cedula">Cédula del Propietario:</label>
        <input type="text" id="cedula" name="cedula">

        <label for="nombre">Nombre del Propietario:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="predio">Nombre del Predio:</label>
        <input type="text" id="predio" name="predio">

        <label for="vereda">Vereda:</label>
        <input type="text" id="vereda" name="vereda">

        <label for="corregimiento">Corregimiento:</label>
        <input type="text" id="corregimiento" name="corregimiento">

        <label for="municipio">Municipio:</label>
        <input type="text" id="municipio" name="municipio">

        <label for="departamento">Departamento:</label>
        <input type="text" id="departamento" name="departamento">

        <label for="hectareas"># Hectáreas del Predio:</label>
        <input type="number" id="hectareas" name="hectareas">

        <label for="vivienda">Vivienda:</label>
        <select id="vivienda" name="vivienda">
            <option value="propia">Propia</option>
            <option value="alquilada">Alquilada</option>
        </select>

        <label for="docPredio">Documento del Predio:</label>
        <select id="docPredio" name="docPredio">
            <option value="escritura">Escritura</option>
            <option value="certificado">Certificado</option>
        </select>

        <label for="infraestructura">Infraestructura Productiva:</label>
        <select id="infraestructura" name="infraestructura">
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select>

        <label for="latitud">Latitud:</label>
        <input type="text" id="latitud" name="latitud">

        <label for="longitud">Longitud:</label>
        <input type="text" id="longitud" name="longitud">

        <label for="altura">Altura:</label>
        <input type="text" id="altura" name="altura">

        <label for="cultivos">Cultivos:</label>
        <select id="cultivos" name="cultivos">
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select>

        <button type="button" id="adicionarCultivo">Adicionar Cultivo</button>

        <label for="proyecto">Proyecto Productivo:</label>
        <input type="text" id="proyecto" name="proyecto">

        <label for="docPredio">Documento del Predio (PDF o JPG):</label>
        <input type="file" id="archivo" name="archivo">

     
        <input type="submit" value="Cancelar">
        <input type="submit" value="Aceptar">
    </form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->