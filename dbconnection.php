<?php

$sname= "eu-cdbr-west-03.cleardb.net";

$unmae= "b5a6be30d39473";

$password = "fa37249f";

$db_name = "heroku_774a72d2049e8b8";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
