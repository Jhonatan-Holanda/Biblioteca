<?php
require("conexao.php");

$id = $_GET['prod_id'];
$sql = "DELETE FROM funcionario WHERE id_Funcionario = '$id'";

$query =  mysqli_query($con, $sql);
if($query){
echo '
	<script>
		alert("funcionario removido!");
		setTimeout(function(){
			window.location = "funcionarios.php";
		}, 500);
 	</script>';
}
?>