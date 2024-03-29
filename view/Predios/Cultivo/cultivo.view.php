<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<title>Formulario</title>
</head>
<link rel="stylesheet" href="Assets/css/cultivo.css">
<body>
    <h2>Formulario de datos del cultivo</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="id">ID:</label>
        <input type="text-1" id="id" name="id">

        <label for="fecha">Fecha de Visita:</label>
        <input type="date" id="fecha" name="fecha">

        <label for="cultivo">Cultivo:</label>
        <select id="cultivo" name="cultivo">
            <option value="cacao">Cacao</option>
            <option value="cafe">Cafe</option>
        </select>

        <label for="hactareas"># hectareas:</label>
        <input type="text" id="hectareas" name="hectareas">

        <label for="Edad">Año de siembra:</label>
        <input type="text" id="Edad" name="Edad">

        <label for="años">Edad del cultivo:</label>
        <input type="text" id="años" name="años">

        <label for="analisis">Analisis de suelo:</label>
        <select id="analisis" name="analisis">
            <option value="si">Si</option>
            <option value="No">No</option>
        </select>

        <label for="fecha">Fecha analisis de suelo:</label>
        <input type="date" id="fecha" name="fecha">

        <label for="pH">pH:</label>
        <input type="number" id="pH" name="pH">

        <label for="Textura">Textura:</label>
        <input type="number" id="textura" name="textura">

        <label for="produccion">Produccion:</label>
        <select id="produccion" name="produccion">
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>

        <label for="hectareas"># Hectáreas en produccion:</label>
        <input type="number" id="hectareas" name="hectareas">

        <label for="Cosecha">#cosechas/año:</label>
        <input type="number" id="Cosecha" name="Cosecha">

        <label for="produccion">Produccion/año:</label>
        <input type="number" id="produccion" name="produccion">
        <select id="produccion" name="produccion">
            <option value="kilos">Kilogramos</option>
            <option value="carga">Carga</option>
        </select>

      
        <h3>Georreferenciacion del cultivo</h3>
        <label for="latitud">Latitud:</label>
        <input type="text" id="latitud" name="latitud">

        <label for="longitud">Longitud:</label>
        <input type="text" id="longitud" name="longitud">

        <label for="altura">Altura:</label>
        <input type="text" id="altura" name="altura">

   
        <input type="submit" value="Cancelar">
        <input type="submit" value="Agregar">
        <input type="submit" value="Nuevo"> 
          
    </form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->