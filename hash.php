<?php 
    require "conexion.php";
    $accion= (isset($_POST['accion']))?$_POST['accion']:"";
    switch($accion){   
        case 'Regenerar':              
            $id_userUpdate= (isset($_POST['idUpdateUser']))?$_POST['idUpdateUser']:"";
            $password=      (isset($_POST['password']))?$_POST['password']:"";
            $conf_password= (isset($_POST['conf_password']))?$_POST['conf_password']:"";
            
            if($password==$conf_password){
                $hashpassword=password_hash($password, PASSWORD_DEFAULT);
                $sql_actualizar = $conn->prepare("UPDATE usuarios SET password=:hashpassword WHERE id=:id");
                $sql_actualizar->bindValue(':id', $id_userUpdate);
                $sql_actualizar->bindValue(':hashpassword', $hashpassword);        
                $sql_actualizar->execute();
                
            }
            else{
                echo "no coinciden los campos contraseña";
            }
        break;  
        }

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        <title>Hash</title>    
    </head>
    <body font-size: 1rem  >
        <?php 
            if(isset($mensaje)){                    
                ?>                
                <div class="alert alert-<?php echo $color; ?>" role="alert">
                    <strong><?php echo $mensaje; ?> </strong>                    
                </div>            
        <?php
            }            
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>        
                <div class="col-md-7">
                    <br><br><br><br>    
                    <div class="card">
                        <div class="card-header bg-grey text-primary" align="center">
                            <img class="d-block mx-auto mb-4" src="../images/logoAlcaldia.jpg" alt="" width="715">
                                <h3>Update usuario</h3>
                                <p class="lead"></p>                        
                            </b></code>
                        </div>
                        <div class="card-body lead">
                            <div class="table-responsive-sm">
                                <form method ="POST" autocomplete="off">
                                    <table class = "table">
                                        <tr>
                                            <td>
                                                <div class="mb-3">
                                                    <label for="idUpdateUser">id:</label>
                                                    <input type="number" class="form-control" name = "idUpdateUser" id="idUpdateUser" placeholder="" value="" required autocomplete="off">
                                                </div>
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="mb-3">
                                                    <label for="password">Contraseña:</label>
                                                    <input type="password" class="form-control" name = "password" id="password" placeholder="Ingrese contraseña" value="" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    <label for="conf_password">Confirme contraseña:</label>
                                                    <input type="password" class="form-control" name = "conf_password" id="conf_password" placeholder="Confirme contraseña" value="" required>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                            
                                        <tr>
                                            <td colspan=3>        
                                                <div class="card-footer" align="center">
                                                    <input type="submit" name="accion" value="Regenerar" class="btn btn-sm btn-primary btn-block"/>
                                                    <a name="" id="" class="btn btn-sm btn-danger" href="index.php" role="button"><i class="fa-solid fa-ban"></i> Cancelar</a>
                                                </div>
                                            </td>    
                                        </tr>    
                                    </table>
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>                               
    </body>
    </html>
   