<?php
require("conexao.php");

$id = $_GET['prod_id'];
$sql = "DELETE FROM reserva WHERE id_Reserva = '$id'";

$query =  mysqli_query($con, $sql);
if($query){
echo '
	<script>
		alert("Reserva removido!");
		setTimeout(function(){
			window.location = "mostra_reserva.php";
		}, 500);
 	</script>';
}
?>