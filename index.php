<?php

function au($class){

    $root_dir = getenv('PROJECT_ROOT_DIR');


    $full_file_path = $root_dir . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if(file_exists($full_file_path)){
	require_once($full_file_path);
    }


}

spl_autoload_register('au');


$a = new \DataMapper\Alpha;

$a->push();

