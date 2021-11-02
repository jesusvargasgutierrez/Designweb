<?php
    $request_body = file_get_contents('php://input');

    $data = json_decode($request_body, true);

    $controller = $data["controller"];
    $model = $data["model"];;
    $request = $data["request"];

    $fileds =  explode(',',$data["fields"]);
    $fields_string = "";

    mkdir("pack".$controller, 0775);
    // $file = fopen('controller.txt',"r");
    // while(! feof($file))
    // {   
    //     echo fgets($file). "<br />";
    // }
    // fclose($file);

    //Make controller
    $str = file_get_contents('template/controller.txt');

    $str = str_replace("[Controller]", $controller, $str);

    $str = str_replace("[Model]", $model, $str);

    $str = str_replace("[Request]", $request, $str);

    file_put_contents("pack".$controller."/".$controller.'Controller.php', $str);

    //Make request
    $str = file_get_contents('template/request.txt');

    $str = str_replace("[request]", $request, $str);

    foreach($fileds as $f){
        $fields_string .= "'".$f."' => '',"."\n";
    }

    $str = str_replace("[fields]", $fields_string, $str);

    file_put_contents("pack".$controller."/".$request.'Request.php', $str);

    //Make scope
    mkdir("pack".$controller."/".$model, 0775);

    $str = file_get_contents('template/scope.txt');

    $str = str_replace("[namespace]", $model, $str);

    file_put_contents("pack".$controller."/".$model.'/Scopes.php', $str);

    //Make method
    $str = file_get_contents('template/method.txt');

    $str = str_replace("[namespace]", $model, $str);

    file_put_contents("pack".$controller."/".$model.'/Methods.php', $str);

    //Make index
    mkdir("pack".$controller."/".$controller, 0775);

    $str = file_get_contents('template/index.txt');

    $str = str_replace("[controller]", $controller, $str);
    $str = str_replace("[module]", $model, $str);

    file_put_contents("pack".$controller."/".$controller.'/index.blade.php', $str);

    //Make create
    $str = file_get_contents('template/create.txt');

    $str = str_replace("[controller]", $controller, $str);

    file_put_contents("pack".$controller."/".$controller.'/create.blade.php', $str);

    //Make show
    $str = file_get_contents('template/show.txt');

    $str = str_replace("[controller]", $controller, $str);

    file_put_contents("pack".$controller."/".$controller.'/show.blade.php', $str);

    exit("Creacion correcta!");