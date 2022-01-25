<?php
require_once('../../vendor/autoload.php');
require_once('../../conexion.php');
require_once('../../models/products.php');

// $spreadsheet = new Spreadsheet();
// $sheet = $spreadsheet->getActiveSheet();
// $sheet->setCellValue('A1', 'Hello World !');

// $writer = new Xlsx($spreadsheet);
// $writer->save('hello world.xlsx');

if(isset($_FILES["file"]["type"])){
    $file = $_FILES['file']['name'];

    move_uploaded_file($_FILES['file']['tmp_name'],'../../tmp/'.$file);

    if ($xlsx = SimpleXLSX::parse('../../tmp/'.$file)) {
        $row = $xlsx->rows();

        foreach($row as $i => $r){
            if($i != 0){
                products::create([
                    'description' => $r[0]
                    ,'quick_code' => $r[1]
                    ,'id_provider' => $r[2]
                    ,'id_category' => $r[3]
                    ,'id_unity' => $r[4]
                    ,'id_unity_purcharse' => $r[5]
                    ,'sales_price' => $r[6]
                    ,'shop_price' => $r[7]
                    ,'factor' => $r[8]
                    ,'price_purcharse_without_tax' => $r[9]
                    ,'price_purcharse_without_tax_unity' => $r[10]
                    ,'utility' => $r[11]
                    ,'pricesalewithouttax' => $r[12]
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