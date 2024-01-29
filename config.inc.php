<?php
define("DB",[
    "host" => "localhost",
    "user" => "root",
    "pwd" => "",
    "name" => "change-to-database-name"
]);

define("TESTMODE",true);
if(TESTMODE) {
    error_reporting(E_ALL);
    ini_set("display_errors",1);
}
else {
    error_reporting(0);
    ini_set("display_error",0);
}
?>