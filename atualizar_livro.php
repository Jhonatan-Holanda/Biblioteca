<?php
	require("conexao.php");

	$nome = $_POST['nome_Livro'];
	$genero = $_POST['genero_Livro'];
	$autor = $_POST['autor_Livro'];
	$id = $_GET['prod_id'];
	
	$sql = "UPDATE livro SET nome_Livro = '$nome', genero_Livro = '$genero', autor_Livro = '$autor' WHERE codigo_Livro = '$id'";
	$query = mysqli_query($con, $sql);

	if(!$query){
		echo "<script>alert('Erro ao Atualizar!')</script>";
	}else{
		echo "<script>alert('Atulaizado com Sucesso!');</script>";
		header('location:tables.php');
	}
?>