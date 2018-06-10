<?php
define('CORE_PATH', dirname(__DIR__));
spl_autoload_register(function($className)
{
    $namespace=str_replace("\\","/",__NAMESPACE__);
    $className=str_replace("\\","/",$className);
    $class=CORE_PATH."/".(empty($namespace)?"":$namespace."/")."{$className}.php";
    include_once($class);
});
?>