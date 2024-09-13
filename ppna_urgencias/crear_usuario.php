<?php
    include("../config/conexion.php"); 
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    $correcto=0;
    switch($accion){   
        case 'Crear':              
            $user=(isset($_POST['user']))?$_POST['user']:"";
            $password=(isset($_POST['password']))?$_POST['password']:"";
            $conf_password=(isset($_POST['conf_password']))?$_POST['conf_password']:"";
            if($password==$conf_password){
                $consultaSQL=$conexion->prepare("SELECT * FROM usuarios WHERE user = :user");
                $consultaSQL->bindParam(':user',$user);                
                $consultaSQL->execute();
                if($consultaSQL->rowCount() > 0){
                    $correcto=3;
                }
                else{
                    $hashpassword=password_hash($password, PASSWORD_DEFAULT);
                    $sentenciaSQL=$conexion->prepare("INSERT INTO usuarios (user, password) VALUES (:user,:password)");
                    $sentenciaSQL->bindParam(':user',$user);
                    $sentenciaSQL->bindParam(':password',$hashpassword);
                    $sentenciaSQL->execute();
                    $correcto = 1; 
                }               
            }
            else{ 
                $correcto = 2;                             
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
    <link rel="stylesheet" type="text/css" href="modal.css">
    <title>Ingreso de PPNA Urgencias</title>    
</head>
<body font-size: 1rem  >
    <?php 
        if($correcto==1){
            ?>
            <div class="alert alert-success" role="alert">
                <strong>Registro exitoso</strong>
                <a href="index.php" class="btn btn-success">continuar</a> 
            </div>
            
            <?php
        }
        else if($correcto==2){
            ?>
            <div class="alert alert-danger" role="alert">
                <strong>No coinciden las contraseñas, inténtelo de nuevo</strong>
            </div>
            <?php
        }
        else if($correcto==3){
            ?>
            <div class="alert alert-danger" role="alert">
                <strong>El usuario ya existe en la base de datos</strong>
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
                    <div class="card-header" align="center">
                        <img class="d-block mx-auto mb-4" src="../img/logoAlcaldia.png" alt="" width="480">
                        
                        <p class="lead"></p>                        
                        </b></code>
                    </div>
                    <div class="card-body lead">
                                <form method ="POST">
                                    <div class="mb-3">
                                        <label for="user">Nombre de Usuario:</label>
                                        <input type="text" class="form-control" name = "user" id="user" placeholder="" value="<?php echo isset($_POST['user']) ? $_POST['user'] : ''; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password">Contraseña:</label>
                                        <input type="password" class="form-control" name = "password" id="password" placeholder="" value="" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="conf_password">Confirme contraseña:</label>
                                        <input type="password" class="form-control" name = "conf_password" id="conf_password" placeholder="" value="" required>
                                    </div>

                                    <div class="mb-3">
                                        <input type="submit" name="accion" value="Crear" class="btn btn-sm btn-primary btn-block"/>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>                               
</body>
</html>