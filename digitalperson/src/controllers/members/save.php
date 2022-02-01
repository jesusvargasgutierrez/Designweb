<?php
require_once('../../vendor/autoload.php');
require_once('../../conexion.php');
require_once('../../models/members.php');

if(isset($_FILES["file"]["type"])){
    $file = $_FILES['file']['name'];

    move_uploaded_file($_FILES['file']['tmp_name'],'../../tmp/'.$file);

    if ($xlsx = SimpleXLSX::parse('../../tmp/'.$file)) {
        $row = $xlsx->rows();

        foreach($row as $i => $r){
            if($i != 0){
                members::create([
                    'equivalence' => $r[0]
                    ,'fullname' => $r[1]
                    ,'birth_date' => $r[2]
                    ,'credit_limit' => $r[3]
                    ,'settlement_credit' => $r[4]
                    ,'allow_consumption' => $r[5]
                    ,'street' => $r[6]
                    ,'colony' => $r[7]
                    ,'zipcode' => $r[8]
                    ,'phone' => $r[8]
                    ,'cellphone' => $r[10]
                    ,'email' => $r[11]
                    ,'business_name' => $r[12]
                    ,'rfc' => $r[13]
                    ,'street_tax' => $r[14]
                    ,'colony_tax' => $r[15]
                    ,'zipcode_tax' => $r[16]
                    ,'rfc_tax' => $r[17]
                    ,'observation' => $r[18]
                    ,'observation_additional' => $r[19]
                    ,'type_membership' => $r[20]
                    ,'annual_cost' => $r[21]
                    ,'type_shop' => $r[22]
                    ,'id_certificate' => $r[23]
                    ,'id_type_maintenance' => $r[24]
                    ,'plain_payment' => $r[25]
                    ,'start_membership' => $r[26]
                    ,'finish_membership' => $r[27]
                    ,'numbers_month' => $r[28]
                    ,'membership_cost' => $r[29]
                    ,'others_installment' => $r[30]
                    ,'membership_amount' => $r[31]
                    ,'membership_advance' => $r[32]
                    ,'balance_membership' => $r[33]
                    ,'pay_month' => $r[34]
                    ,'installments_month' => $r[35]
                    ,'debt_month' => $r[36]
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