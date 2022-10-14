<?php
include 'public/dependencias.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
     <form action="script/login.php" method="POST">
        <h1 class="display-4">H$ PANEL 
		</h1>
     	<h2 style="text-align: center;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Usuário:</label>
     	<input type="text" name="uname" placeholder="nome do usuário...">

     	<label>Senha:</label>
     	<input type="password" name="password" placeholder="************"><br>

     	<button type="submit" class="btn btn-success btn-lg btn-block">Entrar</button>
     </form>
</body>
        <section>
             <h5 style="text-align: center;padding-top: 25px;">
               <p target="_blank" style="font-size: 12px; color: #888a9b!important;text-decoration: none;">&copy; H$ PANEL | Todos os direitos reservados.</p>
               <a href="" style="border: none; text-decoration: none;">
               <i class="ri-discord-fill"></i>
              </a>
             </h5>
         </section>
</html>