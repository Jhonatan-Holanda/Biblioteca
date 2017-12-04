<?php

//1//
$sql_01 = "SELECT mes FROM reserva WHERE mes = '1'";
$query = mysqli_query($con,$sql_01);

$cont_01 = mysqli_num_rows($query);

$sql = "UPDATE livrosalugados SET mes = '1', livalugados = '$cont_01' WHERE mes = '1'";
$query = mysqli_query($con,$sql);
//2//
$sql_02 = "SELECT mes FROM reserva WHERE mes = '2'";
$query = mysqli_query($con,$sql_02);

$cont_02 = mysqli_num_rows($query);

$sql = "UPDATE livrosalugados SET mes = '2', livalugados = '$cont_02' WHERE mes = '2'";
$query = mysqli_query($con,$sql);
//3//
$sql_03 = "SELECT mes FROM reserva WHERE mes = '3'";
$query = mysqli_query($con,$sql_03);

$cont_03 = mysqli_num_rows($query);

$sql = "UPDATE livrosalugados SET mes = '3', livalugados = '$cont_03' WHERE mes = '3'";
$query = mysqli_query($con,$sql);

//4//
$sql_04 = "SELECT mes FROM reserva WHERE mes = '4'";
$query = mysqli_query($con,$sql_04);

$cont_04 = mysqli_num_rows($query);

$sql = "UPDATE livrosalugados SET mes = '4', livalugados = '$cont_04' WHERE mes = '4'";
$query = mysqli_query($con,$sql);

//5//
$sql_05 = "SELECT mes FROM reserva WHERE mes = '5'";
$query = mysqli_query($con,$sql_05);

$cont_05 = mysqli_num_rows($query);

$sql = "UPDATE livrosalugados SET mes = '5', livalugados = '$cont_05' WHERE mes = '5'";
$query = mysqli_query($con,$sql);

//6//
$sql_06 = "SELECT mes FROM reserva WHERE mes = '6'";
$query = mysqli_query($con,$sql_06);

$cont_06 = mysqli_num_rows($query);

$sql = "UPDATE livrosalugados SET mes = '6', livalugados = '$cont_06' WHERE mes = '6'";
$query = mysqli_query($con,$sql);

//7//
$sql_07 = "SELECT mes FROM reserva WHERE mes = '7'";
$query = mysqli_query($con,$sql_07);

$cont_07 = mysqli_num_rows($query);

$sql = "UPDATE livrosalugados SET mes = '7', livalugados = '$cont_07' WHERE mes = '7'";
$query = mysqli_query($con,$sql);

//8//
$sql_08 = "SELECT mes FROM reserva WHERE mes = '8'";
$query = mysqli_query($con,$sql_08);

$cont_08 = mysqli_num_rows($query);

$sql = "UPDATE livrosalugados SET mes = '8', livalugados = '$cont_08' WHERE mes = '8'";
$query = mysqli_query($con,$sql);

//9//
$sql_09 = "SELECT mes FROM reserva WHERE mes = '9'";
$query = mysqli_query($con,$sql_09);

$cont_09 = mysqli_num_rows($query);

$sql = "UPDATE livrosalugados SET mes = '9', livalugados = '$cont_09' WHERE mes = '9'";
$query = mysqli_query($con,$sql);

//10//
$sql_10 = "SELECT mes FROM reserva WHERE mes = '10'";
$query = mysqli_query($con,$sql_10);

$cont_10 = mysqli_num_rows($query);

$sql = "UPDATE livrosalugados SET mes = '10', livalugados = '$cont_10' WHERE mes = '10'";
$query = mysqli_query($con,$sql);

//11//
$sql_11 = "SELECT mes FROM reserva WHERE mes = '11'";
$query = mysqli_query($con,$sql_11);

$cont_11 = mysqli_num_rows($query);

$sql = "UPDATE livrosalugados SET mes = '11', livalugados = '$cont_11' WHERE mes = '11'";
$query = mysqli_query($con,$sql);

//12//
$sql_12 = "SELECT mes FROM reserva WHERE mes = '12'";
$query = mysqli_query($con,$sql_12);

$cont_12 = mysqli_num_rows($query);

$sql = "UPDATE livrosalugados SET mes = '12', livalugados = '$cont_12' WHERE mes = '12'";
$query = mysqli_query($con,$sql);

?>