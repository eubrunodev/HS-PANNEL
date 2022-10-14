<?php
include '../public/dependencias.php';
include '../php/read.php';

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  $uname = $_SESSION['user_name'];
?>

<!doctype html>
<html lang='pt-br'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
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
          <a class='nav-link active' href='../home.php'>Início <img class="me-4" src="https://cdn.discordapp.com/emojis/918248435998658570.png?size=2048" alt="" width="30" /></a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='https://discord.gg/shophs'>Suporte <img class="me-4" src="https://cdn.discordapp.com/emojis/918248436434874428.png?size=2048" alt="" width="30" /></a>
        </li>
        </ul>
        <ul class="nav navbar-right">
            <li class="nav-item" >
            <form action="../logout.php" method="POST" style="padding-top: 20px;outline: none; padding-left: 11%; justify-content: center; align-items: center; flex-direction: column;"> 
            <span style="color: 5663f7 "><?php echo $uname; ?></span><button type="submit" class="btn btn-danger btn-lg">Sair</button>
            </form>
            </li>
        </ul>
        
    </div>
</nav>
    <div class='container' style='padding-top: 50px;'>
        <div class='row'>
            <div class='col'>
              <div class='jumbotron'>
                    <table class='table table-hover'>
                        <tr>
                        <h1 style="font-size: 80px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                          H$ PANEL
                        </h1>
                        <p class="lead" style="text-align: center; color: #23272A;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Gerador de Link</p>

                            <hr>
                            <th scope='col'>Link de 4 meses de Nitro Gaming:</th>
                            <th colspan='3'></th>
                        </tr>
                      <tbody>
            				    <?php 
                          $link = mysqli_fetch_assoc($result);
            						 ?>
            						<tr>
                            <td><?=$link['link']?></td>
            						  <td>
            							  <a href="../php/delete.php?id=<?=$rows['id']?>" 
            								 class='btn btn-success'> Copiar Link <img class="me-4" src="https://cdn.discordapp.com/emojis/891549976579149846.png?size=2048" alt="" width="20" /></a>
            						  </td>
            						</tr>
            						<?php //} ?>
                      </tbody>
                    </table>
              </div>
            </div>
        </div>
    </div>
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
  </body>
</html>
<style>
*{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
p{
  align-items: center;
  text-align: center;
}
h1{
  align-items: center;
  text-align: center;
}
.navbar-brand img {
    width: 70px;
    border-radius: 5px;
}
.nav-item {
    padding-left: 30px;
    font-size: 30px;
}
.nav-item a{
    text-decoration: none;
    color: #ffffff;
}
.nav-item a:hover{
    color: #7253ff;
}
.nav-item b{
    text-decoration: none;
    color: #ffffff;
}
.nav-item b:hover{
    color: #23272A;
}
.nav-item button {
    border-radius: 10px;
    height: 60px;
    font-size: 20px;
    width: 100px;
    transition: all 0.2s ease;
}
.nav-item button:hover {
    border-radius: 20px;
    font-size: 30px;
}
.nav{
  height: 150px;
}
.jumbotron{
  background-color: #dfdfdf; 
  width: 100%; 
  height: 100%;
}
</style>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>