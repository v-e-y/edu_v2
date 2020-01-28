<?php declare(strict_types=1);

// TODO: add one function for check is file exist.
spl_autoload_register(function (string $className){
    if (strpos($className, "Model")) {
        if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'Model' . DIRECTORY_SEPARATOR . $className . '.php')) {
            require_once __DIR__ . DIRECTORY_SEPARATOR . 'Model' . DIRECTORY_SEPARATOR . $className . '.php';
        }
    } else if (strpos($className, "Controller")) {
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . $className . '.php' ??  new Exception("No such file in Controller folder", 1);
    } else if (strpos($className, "View")) {
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR . $className . '.php' ?? new Exception("No such file in View folder", 1);
    } else {
        echo 'We are sorry. Some error in website';
    }
});