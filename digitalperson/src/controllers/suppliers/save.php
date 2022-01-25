<?php
require_once('../../vendor/autoload.php');
require_once('../../conexion.php');
require_once('../../models/suppliers.php');

if(isset($_FILES["file"]["type"])){
    $file = $_FILES['file']['name'];

    move_uploaded_file($_FILES['file']['tmp_name'],'../../tmp/'.$file);

    if ($xlsx = SimpleXLSX::parse('../../tmp/'.$file)) {
        $row = $xlsx->rows();

        foreach($row as $i => $s){
            if($i != 0){
                suppliers::create([
                    "fullname" => $s[0]
                    ,"phone" => $s[1]
                    ,"email" => $s[2]
                    ,"credit_limit" => $s[3]
                    ,"credit_day" => $s[4]
                    ,"subaccount" => $s[5]
                    ,"paydays" => $s[6]
                    ,"discountdays" => $s[7]
                    ,"discountpercent" => $s[8]
                    ,"attentionshop" => $s[9]
                    ,"attentionpay" => $s[10]
                    ,"address" => $s[11]
                    ,"colony" => $s[12]
                    ,"city" => $s[13]
                    ,"state" => $s[14]
                    ,"zipcode" => $s[15]
                    ,"rfc" => $s[16]
                    ,"curp" => $s[17]
                ]);
            }
        }

        unlink('../../tmp/'.$file);
        ?>
            <script type="text/javascript">
                alert("Importacion correcta");
                history.go(-1);
            </script>
        <?php
        //header("Location: ../../views/products/index.php");
    } else {
        ?>
            <script type="text/javascript">
                alert("Ha ocurrido un error al importar");
                history.go(-1);
            </script>
        <?php
        //echo SimpleXLSX::parseError();
    }
}