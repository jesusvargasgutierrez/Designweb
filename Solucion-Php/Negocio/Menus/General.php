<?php
class General
{
    function RequestOptions()
    {
        $json1 = json_decode(file_get_contents("General.json",true));

        $Options = json_encode($json1);

        return $Options;
    }
}
?>