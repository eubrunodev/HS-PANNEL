<?php
include_once './public/dependencias.php';

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

  $uname = $_SESSION['user_name'];
?>

<?php
      include './model/conexao.php';

      $sql = "SELECT * FROM stock";
      $dados = mysqli_query($conn, $sql);
      $teste = 0;
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg justify-content-center navbar-dark" style="background-color: #43484d;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://media.discordapp.net/attachments/942567047584415775/944338774488399914/6ae44b7b21ffa750d2b356f841fcc444.png" alt="Logo" 
            class="d-inline-block align-top"
            style="border-radius: 100px;"
            >
        </a>
        <ul class='nav justify-content' style='padding-top: 50px;'>
        <li class='nav-item'>
          <a class='nav-link active' href='#'>Início <img class="me-4" src="https://cdn.discordapp.com/emojis/918248435998658570.png?size=2048" alt="" width="30" /></a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='https://discord.gg/shophs'>Suporte <img class="me-4" src="https://cdn.discordapp.com/emojis/918248436434874428.png?size=2048" alt="" width="30" /></a>
        </li>
        </ul>
        <ul class="nav navbar-right">
            <li class="nav-item" >
            <form action="script/logout.php" method="POST" style="padding-top: 20px;outline: none; padding-left: 11%; justify-content: center; align-items: center; flex-direction: column;"> 
            <span style="color: 5663f7 "><?php echo $uname; ?></span><button type="submit" class="btn btn-danger btn-lg">Sair</button>
            </form>
            </li>
        </ul>
        
    </div>
</nav>
    <div class="container" style="padding-top: 50px;">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                  <h1 style="font-size: 80px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                    H$ PANEL
                  </h1>
                  <p>
                    Com o H$ PANEL, você consegue pegar Link de 4 meses de Gaming da promoção com apenas um Click.   <br>Claro que, você só pode gerar <span style="font-weight: bold;">1</span> Link à cada 10 min.
                  </p>
                  <hr><br><h2 style="color: 5663f7;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 40px; text-align: center; align-items: center;"> 
                        <img class="me-4" src="https://cdn.discordapp.com/emojis/944374064779231293.gif?size=2048" alt="" width="30" /> 
                        4 MESES DE NITRO GAMING
                        <img class="me-4" src="https://cdn.discordapp.com/emojis/944374064779231293.gif?size=2048" alt="" width="30" /> 
                  </h2> <br><br>
                  <a class="btn btn-success btn-lg btn-block" href="./script/gerar_link.php" role="button">
                      Gerar Link
                  </a>
                </div>
            </div>
        </div>
    </div>    
  </body>
  <section>
           <div class="card-footer" style="margin-top:15%;text-align: center;color: #828cff;">
             <h5 style="text-align: center;">
               <p target="_blank" style="font-size: 12px; color: #888a9b!important;text-decoration: none;">&copy; H$ PANEL | Todos os direitos reservados.</p><br>
               <a href="" style="border: none; text-decoration: none;">
               <i class="ri-discord-fill"></i>
              </a>
             </h5>
           </div>
    </section>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>