<?php
function autoload($class)
{
    $file = str_replace(array('_', '\\'), '/', $class).'.php';
    if ($fullpath = stream_resolve_include_path($file)) {
        include $fullpath;
        return true;
    }
    return false;
}

spl_autoload_register("autoload");

set_include_path(
    implode(PATH_SEPARATOR, array(get_include_path())).PATH_SEPARATOR
          . dirname(__DIR__) . '/src' . PATH_SEPARATOR
          . __DIR__ . '/src' . PATH_SEPARATOR
          . __DIR__ . '/vendor/Savvy/src' . PATH_SEPARATOR
          . __DIR__ . '/vendor/RegExpRouter/src' . PATH_SEPARATOR
);
// Set to false on production machines
ini_set('display_errors', true);
error_reporting(E_ALL);

// Set this to the web root for the site
SelfServe\Controller::$url = '/workspace/SelfServe/www/';
