<?php
error_reporting(0);
//session_start();
if(!isset($_SESSION))
    {
        session_start();
    }
$db_host="localhost"; //localhost server
$db_user="root";	//database username
$db_password="";	//database password
$db_name="mpdkm";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}
?>
