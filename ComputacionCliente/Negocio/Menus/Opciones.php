<?php
class OptionsBussines
{
    function RequestOptions()
    {
        $json1 = json_decode(file_get_contents("Opciones.json",true));

        $Options = json_encode($json1);

        return $Options;
    }
}
?>