<?php  

include "../model/conexao.php";

$sql = "SELECT * FROM stock";
$result = mysqli_query($conn, $sql);