<?php

$Ipath = get_include_path();

set_include_path($Ipath
        . PATH_SEPARATOR . __DIR__ . "."
        . PATH_SEPARATOR . __DIR__ . "../"
);

// found via http://stackoverflow.com/questions/25219764/phpunit-autoload-classes-within-tests 
function class_auto_loader($className) {
    if (strpos($className, "PHP_") === 0)
        return;
    if (strpos($className, "PHPUnit_") === 0)
        return;
    $phpunit = explode('_', $className);    // could by PHPUNIT_....
    // print_r($phpunit);
    // print_r($className);
    if ($phpunit[0] == "PHPUnit") {
        return $className;
    }
    $parts = explode('\\', $className);
    if ($parts[0] == "Composer") {
        return $className;
    }
    $path = './php/' . implode('/', $parts) . '.php';

    require_once $path;
}

spl_autoload_register('class_auto_loader');


