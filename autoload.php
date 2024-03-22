<?php

function load ($classname) {
    $file = str_replace("\\", DIRECTORY_SEPARATOR, $classname).'.php';
    if (file_exists($file)) {
        require_once($file);
    }
}

spl_autoload_register('load');