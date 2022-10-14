<?php
    // dados do sem banco de dados
    $servidor = "localhost";
    $user = "root";
    $password = "";
    $db = "hs_panel";

    if(mysqli_connect($servidor, $user, $password, $db)){
        $conn = mysqli_connect($servidor, $user, $password, $db);
    } else {
		echo "Connection failed!";
	}
	

    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'>
                $texto
            </div>";
    }

    // formatação da data de nascimento
    function mostra_data($data){
        $d = explode("-", $data);    // replace
        $escreve = $d[2] . "/" . $d[1] . "/" . $d[0];
        return $escreve;
    }
?>
