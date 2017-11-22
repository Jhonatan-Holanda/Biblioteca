<?php
require("conexao.php");

$id = $_GET['prod_id'];
$sql = "DELETE FROM livro WHERE codigo_Livro = '$id'";

$query =  mysqli_query($con, $sql);
if($query){
echo '
	<script>
		alert("Livro removido!");
		setTimeout(function(){
			window.location = "tables.php";
		}, 500);
 	</script>';
}
?>