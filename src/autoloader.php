<?php
function autoloader($className)
{
    $path="src/class/";
    $extension=".class.php";
    $fileName = $path . $className . $extension;
    //echo $fileName;
    if(!file_exists($fileName)){
        return false;
    }
    include_once($fileName);
}
spl_autoload_register('autoloader'); 