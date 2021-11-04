<?php
require_once('../../vendor/autoload.php');
require_once('../../conexion.php');
require_once('../../models/categories.php');

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
                categories::create([
                    'description'   => $r[0],
                    'type'   => $r[1]
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