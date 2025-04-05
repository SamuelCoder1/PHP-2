<?php

$c = isset($_REQUEST['c']) ? $_REQUEST['c'] :'Home';
$m = isset($_REQUEST['m']) ? $_REQUEST['m'] :'home';
$u = isset($_REQUEST['u']) ? $_REQUEST['u'] :'users';

$c = $c . "Controller";

if(file_exists("controllers/$c.php")) {
    include("controllers/$c.php");
    $c = new $c;

    call_user_func(array($c,$m));

} else {
    print "El archivo $m no existe";
}
