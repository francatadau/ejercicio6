<?php
/**
 * Clase creada por Francisco Ortolá
 * Clase ejemplo de definición
 */
class claseAlumno
{
  // Declaración de una propiedad
  public $nombre = "";
  public $edad = "";
  public $curso = "";
  public $ciclo ="";

  //Setter
  public function setNombre($nuevoNombre){
    $this->nombre=$nuevoNombre;
  }

  public function setEdad($nuevaEdad){
    if ($nuevaEdad<18) {
    $this->edad=18;
    }else{
    $this->edad=$nuevaEdad;
  }
}

  public function setCurso($nuevoCurso){
    if ($nuevoCurso=1) {
      $this->curso=$nuevoCurso;
    }elseif ($nuevoCurso=2) {
      $this->curso=$nuevoCurso;
    }else {
      $this->curso=1;
  }
}
  public function setCiclo($nuevoCiclo){
    $this->ciclo=$nuevoCiclo;
  }
  //Getters
  public function getNombre() {
      return $this->nombre;
    }
  public function getEdad() {
      return $this->edad;
  }

  public function getCurso(){
    return $this->curso;
  }

  public function getCiclo(){
    return $this->ciclo;
  }
}
?>
