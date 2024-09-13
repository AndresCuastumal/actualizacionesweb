<?php
session_start();
    session_unset();
    session_destroy();

    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include("../conexion.php"); 
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    switch($accion){   
        case 'Ingresar':              
            $user=(isset($_POST['user']))?$_POST['user']:"";
            $password=(isset($_POST['password']))?$_POST['password']:"";
            $hashpassword=password_hash($password, PASSWORD_DEFAULT);
            $sentenciaSQL=$conn->prepare("SELECT * FROM usuarios WHERE usuario=:user");
            $sentenciaSQL->bindParam(':user',$user);
            $sentenciaSQL->execute();
            $registro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);           
            if(password_verify($password, $registro['password'])){
                $_SESSION['usuario']=$registro['nom_usuario'].' '.$registro['ape_usuario'];
                header('Location: nuevoRegistro.php');                
                }
            else{ ?>
                <div class="alert alert-danger" role="alert">
                    <strong>El usuario o la contraseña no coinciden, intente nuevamente</strong> 
                </div>
                
                
        <?php   }                     
        break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logoAlcaldia.ico">
    <link href="../config/css/bootstrap.min.css" rel="stylesheet">
    <title>Ingreso de PPNA Urgencias</title>    
</head>
<body font-size: 1rem  >
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
                                        <input type="text" class="form-control" name = "user" id="user" placeholder="" value="" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password">Contraseña:</label>
                                        <input type="password" class="form-control" name = "password" id="password" placeholder="" value="" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <input type="submit" name="accion" value="Ingresar" class="btn btn-sm btn-primary btn-block"/>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>                            
</body>
</html>