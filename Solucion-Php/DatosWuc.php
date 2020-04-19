<?php
  include_once('Procedures.php');
  include_once('views/adodb/adodb.inc.php');
  include_once('views/Config.php');

class SearchWuc
{
    function ProcedureParameters($EntidadCliente1)
    {
        $DatosProcedures = new Procedures();

        $ArrayProcedure = $DatosProcedures->GetProcedures();

        $Procedure = $ArrayProcedure[$EntidadCliente1->Accion];

        $conn = conectar();

        $sql = "call ".$Procedure."(";

        foreach($EntidadCliente1->Datos as $key => $value)
        {
          if ($value["value"] != $EntidadCliente1->Accion) {
            $Values = $Values."'".$value["value"]."',";
          }
        }

        $sql = $sql.trim($Values,",").")";

        $set = $conn->Execute($sql);

        return ($set == true) ? 1 : 2;
    }

    function ProcedureNoParameters($EntidadCliente1)
    {
        $DatosProcedures = new Procedures();

        $ArrayProcedure = $DatosProcedures->GetProcedures();

        $Procedure = $ArrayProcedure[$EntidadCliente1->Accion];
        
        $conn = conectar();

        $sql = "call ".$Procedure."";

        $set = $conn->Execute($sql);

        while($info = $set->fetchRow()){
            $arreglo1["value"][] = $info;
        }
        echo json_encode($arreglo1);
    }

    function ProcedureNoParameters1()
    {
        // $DatosProcedures = new Procedures();

        // $ArrayProcedure = $DatosProcedures->GetProcedures();

        // $Procedure = $ArrayProcedure[$EntidadCliente1->Accion];
        
        $conn = conectar();

        $sql = "call Cli_Consultar";

        $set = $conn->Execute($sql);

        // $arreglo1["value"][] = "";

        // $array["data"] = []; 
        while(!$set->EOF){
            $arreglo1["data"][] = $set->fetchNextObj();
        }
        //$arreglo1 = $set->getRowAssoc(false);

        //$arreglo1 = $set->fetchObj();

        return json_encode($arreglo1);
    }
}

?>