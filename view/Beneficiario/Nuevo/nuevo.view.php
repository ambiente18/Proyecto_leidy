<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<title>Formulario de beneficiarios</title>
</head>
<link rel="stylesheet" href="Assets/css/form.css">
<body>
    <h2>Formulario Datos del beneficiario</h2>
    <form action="procesar.php" method="POST">
        <!-- Datos de Identificación -->
        <label>ID: <input type="text" name="id"></label>
        <label>Fecha de Visita: <input type="date" name="fecha_visita"></label>
        <label>Cédula: <input type="text" name="cedula"></label>

        <!-- Nombres y Apellidos -->
        <label>Primer Nombre: <input type="text" name="primer_nombre"></label>
        <label>Segundo Nombre: <input type="text" name="segundo_nombre"></label>
        <label>Primer Apellido: <input type="text" name="primer_apellido"></label>
        <label>Segundo Apellido: <input type="text" name="segundo_apellido"></label>

        <!-- Lugar y Fecha de Nacimiento -->
        <label>Lugar de Nacimiento: <input type="text" name="lugar_nacimiento"></label>
        <label>Fecha de Nacimiento: <input type="date" name="fecha_nacimiento"></label>

        <!-- Dirección y Contacto -->
        <label>Dirección: <input type="text" name="direccion"></label>
        <label>Celular: <input type="tel" name="celular"></label>

        <!-- Datos Adicionales -->
        <label>Edad: <input type="number" name="edad"></label>
        <label>Sexo: <input type="radio" name="sexo" value="masculino"> Masculino
            <input type="radio" name="sexo" value="femenino"> Femenino</label>
        <label>Etnia: <input type="text" name="etnia"></label>

        <label>Tipo de Sangre: 
            <select name="tipo_sangre">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <!-- Otras opciones de tipo de sangre -->
            </select>
        </label>

        <label>RH: 
            <select name="rh">
                <option value="Positivo">Positivo</option>
                <option value="Negativo">Negativo</option>
            </select>
        </label>

        <label>Nivel Educativo: 
            <select name="nivel_educativo">
                <option value="Primaria">Primaria</option>
                <option value="Secundaria">Secundaria</option>
                <option value="Universitario">Universitario</option>
                <!-- Otras opciones de nivel educativo -->
            </select>
        </label>

        <label>Seguridad Social: 
            <select name="seguridad_social">
                <option value="EPS">EPS</option>
                <option value="SISBEN">SISBEN</option>
                <option value="Ninguna">Ninguna</option>
                <!-- Otras opciones de seguridad social -->
            </select>
        </label>

        <label>Estado Civil: 
            <select name="estado_civil">
                <option value="Soltero">Soltero</option>
                <option value="Casado">Casado</option>
                <option value="Viudo">Viudo</option>
                <!-- Otras opciones de estado civil -->
            </select>
        </label>

        <!-- Datos del Cónyuge -->
        <label>Nombre del Cónyuge: <input type="text" name="nombre_conyuge"></label>
        <label>Cédula del Cónyuge: <input type="text" name="cedula_conyuge"></label>
        <label>Edad del Cónyuge: <input type="number" name="edad_conyuge"></label>

        <!-- Situación de Desplazamiento -->
        <label>Situación de Desplazamiento: 
            <select name="desplazamiento">
                <option value="Desplazado por conflicto armado">Desplazado por conflicto armado</option>
                <option value="Desplazado por desastre natural">Desplazado por desastre natural</option>
                <option value="Sin desplazamiento">Sin desplazamiento</option>
                <!-- Otras opciones de situación de desplazamiento -->
            </select>
        </label>

        <!-- Discapacidad -->
        <label>Discapacidad: 
            <select name="discapacidad">
                <option value="Ninguna">Ninguna</option>
                <option value="Visual">Visual</option>
                <option value="Auditiva">Auditiva</option>
                <!-- Otras opciones de discapacidad -->
            </select>
        </label>

        <!-- Grupo Familiar -->
        <label>Grupo Familiar: 
            <select name="grupo_familiar">
                <option value="Ninguno">Ninguno</option>
                <option value="Familia A">Familia A</option>
                <option value="Familia B">Familia B</option>
                <!-- Otras opciones de grupo familiar -->
            </select>
        </label>

        <label>Asociaciones a las que Pertenece: <input type="text" name="asociaciones"></label>
        <input type="file" name="documento_identidad" accept=".pdf, .jpg, .jpeg" />

        <input type="submit" class= "btn-1"value="Aceptar">
        <input type="submit" class= "btn-1"value="Cancelar">
    </form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->