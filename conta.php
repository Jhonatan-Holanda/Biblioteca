<?php
require("conexao.php");
//INFORMATIOCA//
$sql = "SELECT curso_Pessoa FROM reserva WHERE curso_Pessoa = 'INFO'";
$query = mysqli_query($con, $sql);

$cinfo = mysqli_num_rows($query);

$sql_in = "UPDATE reservas SET turma = 'INFO', qnt = '$cinfo' WHERE turma = 'INFO'";
$query = mysqli_query($con, $sql_in);

//AGRONEGOCIO//
$sql = "SELECT curso_Pessoa FROM reserva WHERE curso_Pessoa = 'AGRO'";
$query = mysqli_query($con, $sql);

$cagro = mysqli_num_rows($query);

$sql_ag = "UPDATE reservas SET turma = 'AGRO', qnt = '$cagro' WHERE turma = 'AGRO'";
$query = mysqli_query($con, $sql_ag);

//COMERCIO//
$sql = "SELECT curso_Pessoa FROM reserva WHERE curso_Pessoa = 'COME'";
$query = mysqli_query($con, $sql);

$ccome = mysqli_num_rows($query);

$sql_co = "UPDATE reservas SET turma = 'COME', qnt = '$ccome' WHERE turma = 'COME'";
$query = mysqli_query($con, $sql_co);

//ADMINSTRAÇÃO//
$sql = "SELECT curso_Pessoa FROM reserva WHERE curso_Pessoa = 'ADMI'";
$query = mysqli_query($con, $sql);

$cadmi = mysqli_num_rows($query);

$sql_AD = "UPDATE reservas SET turma = 'ADMI', qnt = '$cadmi' WHERE turma = 'ADMI'";
$query = mysqli_query($con, $sql_AD);

?>