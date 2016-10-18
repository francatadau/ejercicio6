<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando clase alumno</title>
  </head>
  <body>
  <?php
  //incluimos la clase creada anteriormente
  include 'ClaseAlumno.php';
  //generamos los ejemplos
  $alumno1 = new claseAlumno();
  $alumno1->setNombre('Fran');
  echo "El nombre del alumno es: " .$alumno1->getNombre();

  $alumno1->setEdad(15);
  echo "<br> Mi edad es: " .$alumno1->getEdad();

  $alumno1->setCurso(4);
  echo "<br> Esta en el curso: " .$alumno1->getCurso();

  $alumno1->setCiclo("DAW");
  echo "<br> Esta en el ciclo: " .$alumno1->getCiclo();
   ?>
  </body>
</html>
