<?php
  include_once('Procedures.php');
  include_once('views/adodb/adodb.inc.php');
  include_once('views/Config.php');

class Account
{
    function ProcedureParameters($EntidadCliente1)
    {
        $DatosProcedures = new Procedures();

        $ArrayProcedure = $DatosProcedures->GetProcedures();

        $Procedure = $ArrayProcedure[$EntidadCliente1->Accion];

        //$conn = conectar();

        $sql = "call ".$Procedure."(";

        foreach($EntidadCliente1->Datos as $key => $value)
        {
          if ($value["value"] != $EntidadCliente1->Accion) {
            $Values = $Values."'".$value["value"]."',";
          }
        }

        echo $sql.trim($Values,",").")";

        //$set = $conn->Execute($sql);
        //$respuesta = ($set->RecordCount()) ? 2 : 1;
    }
}

?>