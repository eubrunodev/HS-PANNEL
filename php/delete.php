<?php  

if(isset($_GET['id'])){
   include "../model/conexao.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM stock
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../views/search_link.php?success=successfully deleted");
   }else {
      header("Location: ../views/search_link.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../views/search_link.php");
}