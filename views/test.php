<?php
include '../public/dependencias.php';
include '../php/read.php';

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!doctype html>
<html lang='pt-br'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
  </head>
  <body>
    
    <div class='container' style='padding-top: 50px;'>
        <div class='row'>
            <div class='col'>
              <div class='jumbotron'>
                    <table class='table table-hover'>
                        <tr>
                        <h4 class="display-4 text-center" style="text-align: center; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Search Link</h4>
                        <p class="lead" style="text-align: center; color: #23272A;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Panel Developed by GlockH$</p>
                            <a class='btn btn-success btn-lg btn-block' href='./new_link.php' role='button'><i class='ri-file-line'></i> New Link</a>
                            <hr>
                            <th scope='col'>Link</th>
                            <th scope='col'>Dt. Register</th>
                            <th colspan='3'>Options</th>
                        </tr>
                      <tbody>
            						<?php 
            						   $i = 0;
            						   while($rows = mysqli_fetch_assoc($result)){
            						   $i++;
            						 ?>
            						<tr>
            						  <td><?=$rows['link']?></td>
                          <td><?=mostra_data($rows['dt_registro'])?></td>
            						  <td>
            							  <a href="../php/delete.php?id=<?=$rows['id']?>" 
            								 class='btn btn-danger'><i class="ri-delete-bin-6-line"></i> Delete</a>
            						  </td>
            						</tr>
            						<?php } ?>
                      </tbody>
                    </table>
              </div>
            </div>
        </div>
    </div>
  </body>
</html>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>