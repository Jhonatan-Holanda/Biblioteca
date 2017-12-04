<?php
if(isset($_POST['Enviar'])){
require("conexao.php");

$id= $_GET['prod_id'];
$nome_liv = $_POST['nome_Livro'];
$genero_liv = $_POST['genero_Livro'];
$autor_liv = $_POST['autor_Livro'];
$p = $_POST['pratileira_Livro'];
$fila = $_POST['fila_Livro'];

$dir = "foto/";
$ext = strtolower(substr($_FILES['file']['name'], -4));
$image = md5(microtime()).$ext;
$tam = $_FILES['file']['size'];
$tam = ceil(($tam / 1024) / 1024);
if($tam < 2){
  if($ext == ".jpg" || $ext == ".png" || $ext == ".bmp" || $ext == ".gif"){
    if(move_uploaded_file($_FILES['file']['tmp_name'], $dir.$image)){
      
      $sql = "UPDATE livro SET nome_Livro = '$nome_liv', genero_Livro = '$genero_liv', autor_Livro = '$autor_liv', imagem_Livro = '$image', pratileira_Livro = '$p', fila_Livro = '$fila' WHERE codigo_Livro = '$id'";
          
      $query = mysqli_query($con, $sql);

      if(!$query){
        echo "<script>alert('Erro ao Editar!')</script>";
      }else{
        echo "<script>confirm('Edição com Sucesso!');
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