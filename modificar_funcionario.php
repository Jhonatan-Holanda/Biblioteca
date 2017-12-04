<?php
if(isset($_POST['Enviar'])){
require("conexao.php");

$id= $_GET['prod_id'];
$nome_fun = $_POST['nome'];
$tele_fun = $_POST['tele'];
$mail_fun = $_POST['mail'];
$imagem = $_POST['file'];

$dir = "fotoPerfil/";
$ext = strtolower(substr($_FILES['file']['name'], -4));
$image = md5(microtime()).$ext;
$tam = $_FILES['file']['size'];
$tam = ceil(($tam / 1024) / 1024);
if($tam < 2){
  if($ext == ".jpg" || $ext == ".png" || $ext == ".bmp" || $ext == ".gif"){
    if(move_uploaded_file($_FILES['file']['tmp_name'], $dir.$image)){
      
      $sql = "UPDATE funcionario SET nome_Funcionario = '$nome_fun', telefone_Funcionario = '$tele_fun', email_Funcionario = '$mail_fun', imagem_Funcionario = '$image' WHERE id_funcionario = '$id'";
          
      $query = mysqli_query($con, $sql);

      if(!$query){
        echo "<script>alert('Erro ao Editar!')</script>";
      }else{
        echo "<script>confirm('Edição com Sucesso!');
        </script>";
        header('location:funcionarios.php');
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