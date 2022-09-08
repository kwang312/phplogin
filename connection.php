<?php

$dbhost = "mradb.cjdclftyxl60.ap-southeast-1.rds.amazonaws.com";
$dbuser = "admin";
$dbpass = "quang123";
$dbname = "login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
