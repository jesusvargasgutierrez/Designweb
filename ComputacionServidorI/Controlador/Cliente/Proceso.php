<?php  
  require_once ("../../Modelo/Clientes/Clientes.php");
class Procesar
{
  /**
   * envia peticiones para listas
   * todos los registros
   */
  public function ListarPersona($Datos){
    $DatosCliente = new Cliente();

              /**
           * arreglo de valores para la
           * peticion
           */
        $Valores = array (
            'BaseDatos' => $Datos,
            'Valores' => 'Persona, Codigo, Nombres, ApellidoPaterno, ApellidoMaterno, NombreCompleto, FechaNacimiento, d.Descripcion as Genero, c.Descripcion as EstadoCivil, Correo, Telefono, b.Descripcion as Estado'
        );
  
          /**
           * se realiza la peticion
           * al endpoint de insert
           */
    $Cliente = $DatosCliente->BuscarCliente($Valores);
    
    return $Cliente;
  }
}
?>