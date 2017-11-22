<?php

require 'conexao.php';

if(isset($_POST['Enviar'])){
$nome = $_POST['nome_Livro'];
$genero = $_POST['genero_Livro'];
$autor = $_POST['autor_Livro'];

$dir = "foto/";
$ext = strtolower(substr($_FILES['file']['name'], -4));
$Nimg = md5(microtime()).$ext;
$tam = $_FILES['file']['size'];
$tam = ceil(($tam / 1024) / 1024);
if($tam < 2){
	if($ext == ".jpg" || $ext == ".png" || $ext == ".bmp" || $ext == ".gif"){
		if(move_uploaded_file($_FILES['file']['tmp_name'], $dir.$Nimg)){
			
			$sql = "INSERT INTO livro (nome_Livro, genero_Livro, autor_Livro, imagem_Livro) VALUES ('".$nome."', '".$genero."','".$autor."','".$Nimg."');";
			
			$query = mysqli_query($con, $sql);

			if(!$query){
				echo "<script>alert('Erro ao Cadastrar!')</script>";
			}else{
				echo "<script>confirm('Cadastrado com Sucesso!');
				</script>";
				header('location:tables.php');
			}
		}else{
			echo "<script>alert('Erro ao CADASTRA!')</script>";
		}
	}else{
		echo "Os formatos aceitos: jpg, png, bmp e gif";
	}
}else{
	echo "Tamanho ultrapassou 2MB";
}}
?>