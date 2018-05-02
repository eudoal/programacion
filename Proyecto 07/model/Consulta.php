<?php
require_once "Db.php";

/**
 *
 */
class Consulta
{
  private $db;
  private $conector;

  function __construct()
  {
  $this->db=new Db();
  $this->db->conectar();
  $this->conector=$this->db->getConector();
  }

  public function insertarUsuario()
{

  if (isset($_POST["Registros"])) {
     if ($this->conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
      }else  {
        $registro = "INSERT INTO juegos.usuarios (correo, nombre, apellidos, edad, curso)
        VALUES ('$_POST[correo]', '$_POST[nombre]', '$_POST[apellidos]', '$_POST[edad]','$_POST[curso]')";

        if ($this->conector->query($registro) === TRUE) {
          echo "<br><h1 align = center>Registro Completado</h1><br>";
        }else {
          ?>
          <center><img src="img/8C1.gif" alt="AGGGGHHHHHH" /></center>
          <?php
          echo "<br><h1 align = center>Registo Fallido</h1><br>";

        }

    }
}
}

  public function actualizarUsuario()
{


  if (isset($_POST["actualizar"])) {
     if ($this->conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
      }

      else {

        $correo=$_POST["correo"];
        $buscarUsuario = "SELECT * FROM usuarios WHERE correo = '$_POST[correo]' ";
        $result = $this->conector->query($buscarUsuario);
        $count = mysqli_num_rows($result);

        if ($count == 0) {
          echo "<br><h1 align = center>No hay usuario que Actualizar</h1>";
          ?>
          <center><img src="img/meme_pc_wtf.gif" /></center>
          <?php
          echo "<h1 align = center>Por favor, introduce un Email válido</h1><br>";

       }

      else  {
        $actualiza = "UPDATE usuarios SET nombre= '$_POST[newNombre]', apellidos= '$_POST[newApellidos]', edad= '$_POST[newEdad]', curso= '$_POST[newCurso]' WHERE correo = '$_POST[correo]'";

        if ($this->conector->query($actualiza) === TRUE) {
          echo "<br><h1 align = center>Actualización Correcta</h1><br>";
        }
    }
  }
  }
}

  public function borrar()
{
  if (isset($_POST["eliminar"])) {

    if ($this->conector->connect_errno) {
       echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
     }
     else {

       $correo=$_POST["correo"];
       $buscarUsuario = "SELECT * FROM usuarios WHERE correo = '$_POST[correo]' ";
       $result = $this->conector->query($buscarUsuario);
       $count = mysqli_num_rows($result);

       if ($count == 0) {
         echo "<br><h1 align = center>No hay usuario que borrar</h1><br>";
         ?>
         <center><img src="img/8C1.gif" /></center>
         <?php
         echo "<h1 align = center>Por favor, introduce un Email válido</h1><br>";
      }
          else {
          $borrar = "DELETE FROM usuarios WHERE correo = '$_POST[correo]'";

            if ($this->conector->query($borrar) === TRUE) {
              echo "<br><h1 align = center>Has sido borrado</h1><br>";
            }
          }
    }
  }
}
  public function getUsuarios()
  {
      $resultado = $this->conector->query("SELECT * FROM usuarios");
      return $resultado;
  }



}
?>
