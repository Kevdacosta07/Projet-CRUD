<?php

const DBHOST = "localhost";
const DBUSER = "root";
const DBPASS = "";
const DBNAME = "intro_bulma";
const DBPORT = 3306;

$dsn = "mysql:dbname=".DBNAME.";host=".DBHOST.";port=".DBPORT;

try
{
    $db = new PDO($dsn, DBUSER, DBPASS);

    $db->exec("SET NAMES utf8");

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}

catch (PDOException $e)
{
    die($e);
}
