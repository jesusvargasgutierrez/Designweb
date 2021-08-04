<?php
	require_once ("conexion.php");

	$Conexion = new Conexion();

    $DatosConexion = $Conexion->ObtenerConexionBD('comprascountry');

    $result = $DatosConexion->query("SHOW TABLES");

    if($result)
    {  
        $posts = array();

        while($row = $result->fetch_array(MYSQLI_ASSOC))
        {
            $posts[] = $row;
        }

        $tables_result = $posts;
    }

    $json_tables = json_encode($tables_result);

    $json_decode = json_decode($json_tables,true);

    $result_array = array();

    foreach($json_decode as $element){
        $result = $DatosConexion->query("SHOW COLUMNS FROM ".$element["Tables_in_comprascountry"]);

        $indice = 0;

        if($result)
        { 
            $fields = array();
            while($row = $result->fetch_array(MYSQLI_ASSOC))
            {
                $fields[] = $row["Field"];

                $indice++;
            }
        }

        array_push($result_array, (object)[
            'tabla' => $element["Tables_in_comprascountry"],
            'columnas' => $fields
        ]);
    }

    $result_array = json_encode($result_array);

    $json_decode = json_decode($result_array,true);

    $indice = 0;

    $valores = "";

    $batch = "";

    foreach($json_decode as $res){
        $posts = array();

        $result = $DatosConexion->query("SELECT * FROM ".$res["tabla"]);

        if($result)
        { 
            while($row = $result->fetch_array(MYSQLI_ASSOC))
            {
                $posts[] = $row;
            }
        }

        $col = explode(',',implode(',',$res["columnas"]));

        foreach($posts as $key1 => $value1)
        {
            $valores = "";
            foreach($col as $k){
                $valores .= "'".$posts[$key1][$k]."',";
                
                $indice++;
            }
            $batch .= "\n"."insert into ".$res["tabla"]." (".implode(',',$res["columnas"]).") VALUES (".trim($valores,",").");";
        }
    }

    file_put_contents("batch.txt", $batch);

    echo "Insersiones generadas!";
    
?>
