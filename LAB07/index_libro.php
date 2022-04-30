<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inventario de Libros</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
  <div class="todo">

  <nav class="navbar fixed-top navbar-expand-lg navbar-expand-md navbar-light bg-dark p-md-3">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" style="color:white">Biblioteca Digital</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                  
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-light" type="submit">Search</button>
                  <a class="nav-link active" aria-current="page" style="color:rgba(42, 42, 46, 0)">      </a>
                </form>
                <a href="index.html"><button class="btn btn-outline-light" type="submit">Exit</button></a>
              </div>
            </div>
          </nav>

          <br><br><br>

    <h1 class="text-center">Lista de Libros</h1>
    <br>
    
    <div id="contenido">
      <table style="margin: auto; width: 800px; border-collapse;" class = "table table-striped">
        <thead>
          <th><center>Titulo</center></th>
          <th><center>Autor</center></th>
          <th><center>Año</center></th>
          <th><center>URL</center></th>
          <th><center>Especialidad</center></th>
          <th><center>Editorial</center></th>
          <th colspan="3" class="text-center"> <a href="reg_libro.php"> <button type="button" class="btn btn-info">Registrar Libro</button> </a> </th>
        </thead>
        <tbody>
          <?php
          include("con_db.php");
          $sentencia="SELECT * FROM biblioteca";
          $resultado=$conex->query($sentencia);
          while($filas = $resultado->fetch_assoc())
          {
            
            echo "<tr>";
              echo "<td>"; echo $filas['Titulo']; echo "</td>";
              echo "<td>"; echo $filas['Autor']; echo "</td>";
              echo "<td>"; echo $filas['Año']; echo "</td>";
              echo "<td><a href='"; echo $filas['URL']; echo "'><button class='btn btn-warning' type='submit'>Leer Libro</button></a></td>";
              echo "<td>"; echo $filas['Especialidad']; echo "</td>";
              echo "<td>"; echo $filas['Editorial']; echo "</td>";
              echo "<td>  <a href='modif_prod1_libro.php?id=".$filas['Id']."'> <button type='button' class='btn btn-success editbtn'>Modificar</button> </a> </td>";
              echo "<td> <a href='eliminar_libro.php?id=".$filas["Id"]."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
            echo "</tr>";
          }

          ?>
        </tbody>
      </table>

      <br>
      <div class="text text-center">

        <a href="index.html"><button class="btn btn-outline-dark" type="button">  Exit</button></a>

      </div>

    </div>

  </div>

</body>
</html>