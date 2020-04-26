<?php
class GeneralOptions
{
    function RequestOptions()
    {
        $json1 = json_decode(file_get_contents("OpcionesMenuGeneral.json",true));

        $Options = json_encode($json1);

        return $Options;
    }
}
?>