<?php

require 'conexao.php';

if(isset($_POST['Enviar'])){
  $nome = $_POST['nome_Funcionario'];
  $telefone = $_POST['telefone_Funcionario'];
  $email = $_POST['email_Funcionario'];
  $senha = $_POST['senha_Funcionario'];

$dir = "fotoPerfil/";
$ext = strtolower(substr($_FILES['file']['name'], -4));
$image = md5(microtime()).$ext;
$tam = $_FILES['file']['size'];
$tam = ceil(($tam / 1024) / 1024);
if($tam < 2){
	if($ext == ".jpg" || $ext == ".png" || $ext == ".bmp" || $ext == ".gif"){
		if(move_uploaded_file($_FILES['file']['tmp_name'], $dir.$image)){
			
			$sql = "INSERT INTO funcionario (nome_Funcionario, telefone_Funcionario, email_Funcionario, senha_Funcionario, imagem_Funcionario) VALUES ('".$nome."','".$telefone."','".$email."','".$senha."','".$image."');";
    			
			$query = mysqli_query($con, $sql);

			if(!$query){
				echo "<script>alert('Erro ao Cadastrar!')</script>";
			}else{
				echo "<script>confirm('Cadastrado com Sucesso!');
				</script>";
				header('location:login.php');
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