<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Ejercicios con PHP</title>
  </head>
  <body>


      <div class="container m-3">
          <?php
            // Mostrar un Hola Mundo y Mostrar un Hola Mundo dentro de una estructura HTML
              echo ("Hola Mundo")
          ?>
      </div>
          <br>


      <div class="container m-3">

          <?php
            // Crea dos variables y sumarlas y muestra el resultado.
              $obj1 = 1;
              $obj2 = 2;

                $resultado = ($obj1 + $obj2);

                  echo ($resultado)
          ?>
      </div>

      <br>


      <div class="container m-3">

          <?php
            // Muestra los números del 1 al 10 en linea.
              $numero1 = 1;
                while ($numero1 < 11){
                  echo ($numero1 . " ");

                  $numero1++;
              }

          ?>

      </div>

      <br>


      <div class="container m-3">
          <?php
            // Muestra los números del 1 al 10 en linea.
              for ($numero2 = 1; $numero2 < 11; $numero2++){
                echo ($numero2 . " ");

            }
          ?>
      </div>

      <br>


        <?php
        //Cógete cualquier imagen y pon un img con la ruta de la imagen con PHP.
            $ruta = "leon-hd.jpg";
        ?>

        <img class="m-3" src=" <?php echo $ruta; ?> " height="100px" width="100px">

      <br>



      <select class="m-3">
          <?php
          //Create un select en HTML y metele los números del 1 al 10 como opciones.

          for ($opt=1; $opt <= 10 ; $opt++) {
              echo '<option value="'.$opt.'">'.$opt.'</option>';
          }
          ?>

      </select>

      <br>


<!-- Acá tuve que mirar la guía porque no lo entendía XD -->

      <div class="container m-3">
            <table border=2>
          <?php

              // Cabecera (1º fila)
              echo '<tr>';
              echo '<th>0</th>';

              for ($i=1; $i <= 10; $i++) {
                  echo '<th>';
                  echo $i;
                  echo '</th>';
              }

              echo '</tr>';

              // contenido

              //columna vertical
              for ($i=1; $i <= 10; $i++) {
                  echo '<tr>';
                  echo '<th>';
                  echo $i;
                  echo '</th>';

                  //calculo tabla multiplicar
                  for ($j=1; $j <= 10; $j++) {

                      echo '<td>';
                      echo $i * $j;
                      echo '</td>';

                  }

                  echo '</tr>';
              }
          ?>
          </table>
      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
