<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<title>Formulario</title>
</head>
<link rel="stylesheet" href="Assets/css/proyecto.css">
<body>
    <h2>Formulario datos del proyecto</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="id">ID:</label>
        <input type="text-1" id="id" name="id">

        <label for="linea">linea productiva:</label>
        <select id="linea" name="linea">
            <option value="cacao">Cacao</option>
            <option value="cafe">Cafe</option>
            <option value="platano">platano</option>
            <option value="caña">caña</option>
            <option value="ambiental">ambiental</option>
        </select>

        <label for="nombre">Nombre del proyecto:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="objetivo">Objetivo del proyecto:</label>
        <input type="text" id="objetivo" name="objetivo">

        <label for="valor">Valor total del proyecto:</label>
        <input type="number" id="valor" name="valor">
           

        <label for="empresa">Empresa implementadora:</label>
        <input type="text" id="empresa" name="empresa">

        <label for="financiadores">Financiadores del proyecto:</label>
        <input type="text" id="financiadores" name="financiadores">


        <label for="fechap">Fecha de inicio:</label>
        <input type="date" id="fechap" name="fechap">

        <label for="fechaf">Fecha de finalizacion:</label>
        <input type="date" id="fechaf" name="fechaf">

               <label for="departamento">Departamento:</label>
        <input type="text" id="epartamento" name="mepartamento">

        <label for="municipio">Municipio:</label>
        <input type="text" id="municipio" name="municipio">


        <label for="herramientas">Herramientas entregadas:</label>
        <input type="text" id="herramientas" name="herramientas">
       
        <label for="insumos">Insumos entregados:</label>
        <input type="text" id="hinsumos" name="hinsumos">

        

      
      
        <label for="cantidad"># integrantes del proyecto:</label>
        <input type="number" id="cantidad" name="cantidad">

        <input type="submit" value="Cancelar">
        <input type="submit" value="Aceptar">
            
          
    </form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->