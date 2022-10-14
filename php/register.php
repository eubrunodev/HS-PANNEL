<?php 

if (isset($_POST['create'])) {
	include "../model/conexao.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$link = validate($_POST['link']);
	$datetime = date_create()->format('Y-m-d');

	$user_data = 'link='.$link.'';



       $sql = "INSERT INTO stock(link, dt_registro) 
               VALUES('$link', '$datetime')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../views/search_link.php?success=successfully created");
       }else {
          header("Location: ../views/search_link.php?error=unknown error occurred&$user_data");
       }


}