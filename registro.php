<?php include ('base_de_datos.php')?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Se habilita el Responsive en la página Web -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Practica - Indexed DB</title>
    <link rel="stylesheet" href="style.css">
    <script src="tt.js"></script>
</head>

<body>
    <header>
      <section>
        <nav>
          <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="Login.html">Login</a></li>
          </ul>
        </nav>
      </section>
    </header>
    <div id="contenedor">
      <form action="<?php"method="post"
    	<section>
        <h2 align="center">Registro Usuarios</h2>
        <form name = "registro_usuario" method = "post">
        
          <table>
          <tr>
              <td>Correo:</td>
              <td><input type="email" name = "email" id = "email" placeholder = "Escriba su Correo"></td>
            </tr>
            <tr>

              <td>Fecha de nacimiento:</td>
              <td><input type="date" name = "Fecha de nacimiento" id = "Fcha de nacimiento" min = "0" max = "120" step = "1" placeholder = "Escriba o seleccione su Edad">
              </td>
            </tr>
            <tr>
              <td>Usuario:</td>
              <td><input type="text" name = "usuario" id = "usuario" placeholder = "Escriba su Usuario"></td>
            </tr>
            <tr>
              <td>Contraseña:</td>
              <td><input type="password" name = "contrasena" id = "contrasena" placeholder = "Escriba su Contraseña"></td>
            </tr>
            <tr>
              <td></td>
              <td>
                <input type="button" id = "Anterior" value = "<--">
                <input type="button" id = "Siguiente" value = "-->">
              </td>
            </tr>
            <tr>
              <td>
                <input type="button" name="VerDatos" id="VerUsuarios" value="Ver Usuarios">
              </td>
              <td align="center">
                  <input type="button" id = "Registrar" value = "Registrar">
                  <input type="button" id = "Buscar" value = "Buscar">
                  <input type="button" id = "Actualizar" value = "Actualizar">
                  <input type="button" id = "Eliminar" value = "Eliminar">
              </td>
            </tr>           
          </table>
        
        </form>
        <div class="limpiar"></div>
    </div>
</body>
</html>.
