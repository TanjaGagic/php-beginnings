<?php
session_start();

require_once 'config.php';

require_once 'helpers/system_helper.php';

function myAutoload($class_name)  {
    require_once 'lib/'.$class_name. '.php';
}

spl_autoload_register('myAutoload');