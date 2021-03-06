<?php
/**
 * Copyright (c) 2016 Jorge Patricio Castro Castillo MIT License.
 */

use eftec\bladeone\BladeOne;

include "../lib/BladeOne.php";


$views = __DIR__ . '/views';
$compiledFolder = __DIR__ . '/compiled';
$blade=new BladeOne($views,$compiledFolder,BladeOne::MODE_DEBUG);


try {
    echo $blade->run("Test.includefast"
        , ["name" => "hola mundo"]);
} catch (Exception $e) {
    echo $e->getMessage();
}

/*
echo $blade->run("Test.hello"
    ,["name"=>"hola mundo"
        ,'records'=>$records
        ,'users'=>$users
        ,'drinks7'=>$drinks7
        ,'drinks8'=>$drinks8]);
*/