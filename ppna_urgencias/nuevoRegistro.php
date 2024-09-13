<?php
ob_start(); 
session_start();
if($_SESSION){
$USUARIO_REGISTRO=$_SESSION['usuario'];
require "../conexion.php";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

switch($accion){
    case'Guardar': 
        $TD=                (isset($_POST['TD']))?$_POST['TD']:"";
        $DOC=               (isset($_POST['DOC']))?$_POST['DOC']:"";
        $APE1=              (isset($_POST['APE1']))?$_POST['APE1']:"";
        $APE2=              (isset($_POST['APE2']))?$_POST['APE2']:"";
        $NOM1=              (isset($_POST['NOM1']))?$_POST['NOM1']:"";
        $NOM2=              (isset($_POST['NOM2']))?$_POST['NOM2']:"";
        $FECHANACE=         (isset($_POST['FECHANACE']))?$_POST['FECHANACE']:"";
        $SEXO=              (isset($_POST['SEXO']))?$_POST['SEXO']:"";
        $MENSAJE=           (isset($_POST['MENSAJE']))?$_POST['MENSAJE']:"";
        $PARENTESCO=        (isset($_POST['PARENTESCO']))?$_POST['PARENTESCO']:"";
        $OBSERVACION=       (isset($_POST['OBSERVACION']))?$_POST['OBSERVACION']:"";
        $NIVEL_SISBEN=      (isset($_POST['NIVEL_SISBEN']))?$_POST['NIVEL_SISBEN']:"";
        $FICHA=             (isset($_POST['FICHA']))?$_POST['FICHA']:"";
        $DISCAPACIDAD=      (isset($_POST['DISCAPACIDAD']))?$_POST['DISCAPACIDAD']:"";
        $USUARIO_REGISTRO=  (isset($_POST['USUARIO_REGISTRO']))?$_POST['USUARIO_REGISTRO']:"";
        $FECREPORTE=        (isset($_POST['FECREPORTE']))?$_POST['FECREPORTE']:"";
        $GP=                (isset($_POST['GP']))?$_POST['GP']:"";
        $GP_SISBEN=         (isset($_POST['GP_SISBEN']))?$_POST['GP_SISBEN']:"";
        $PUNTAJE=           (isset($_POST['PUNTAJE']))?$_POST['PUNTAJE']:"";
        $PRESTADORA=        (isset($_POST['PRESTADORA']))?$_POST['PRESTADORA']:"";
        $ACTIVO_MOSTRAR=    (isset($_POST['ACTIVO_MOSTRAR']))?$_POST['ACTIVO_MOSTRAR']:"";

        $sql_guardar = $conn->prepare("INSERT INTO ppna (TD, DOC, APE1, APE2, NOM1, NOM2, FECHANACE,SEXO, MENSAJE, PARENTESCO, OBSERVACION, NIVEL_SISBEN, FICHA, DISCAPACIDAD, USUARIO_REGISTRO, FECREPORTE, GP, GP_SISBEN, PUNTAJE, PRESTADORA, ACTIVO_MOSTRAR) 
        VALUES (:TD, :DOC, :APE1, :APE2, :NOM1, :NOM2, :FECHANACE, :SEXO, :MENSAJE, :PARENTESCO, :OBSERVACION, :NIVEL_SISBEN, :FICHA, :DISCAPACIDAD, :USUARIO_REGISTRO, :FECREPORTE, :GP, :GP_SISBEN, :PUNTAJE, :PRESTADORA, '1')");
        $sql_guardar->bindValue(':TD', $TD);
        $sql_guardar->bindValue(':DOC', $DOC);
        $sql_guardar->bindValue(':APE1', $APE1);
        $sql_guardar->bindValue(':APE2', $APE2);
        $sql_guardar->bindValue(':NOM1', $NOM1);
        $sql_guardar->bindValue(':NOM2', $NOM2);
        $sql_guardar->bindValue(':FECHANACE', $FECHANACE);                
        $sql_guardar->bindValue(':SEXO', $SEXO);
        $sql_guardar->bindValue(':MENSAJE', $MENSAJE);
        $sql_guardar->bindValue(':PARENTESCO', $PARENTESCO);
        $sql_guardar->bindValue(':OBSERVACION', $OBSERVACION);
        $sql_guardar->bindValue(':NIVEL_SISBEN', $NIVEL_SISBEN);
        $sql_guardar->bindValue(':FICHA', $FICHA);
        $sql_guardar->bindValue(':DISCAPACIDAD', $DISCAPACIDAD);
        $sql_guardar->bindValue(':USUARIO_REGISTRO', $USUARIO_REGISTRO);
        $sql_guardar->bindValue(':FECREPORTE', $FECREPORTE);
        $sql_guardar->bindValue(':GP', $GP);                
        $sql_guardar->bindValue(':GP_SISBEN', $GP_SISBEN);
        $sql_guardar->bindValue(':PUNTAJE', $PUNTAJE);
        $sql_guardar->bindValue(':PRESTADORA', $PRESTADORA);
        $sql_guardar->execute();
        header("Location: http://204.199.120.6:8011/consultasweb/ppna/reporte.php?doc=" . $DOC);
        
    break;    
    case 'Cancelar':
        session_unset();
        session_destroy();
        header("Location: index.php");       
    break;    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGRESO PPNA URGENCIAS</title>
    

    <link rel="icon" href="../img/logoAlcaldia.ico">
    <link href="../config/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b7cf05d30.js" crossorigin="anonymous"></script>    
    
</head>
<body>
    <div class="container" id="nuevoRegistro">        
        <div class="card"> 
            <div class="card-header" align="center">
            <img class="d-block mx-auto mb-4" src="../img/logoAlcaldia.png" alt="" width="400">
                <h2>Registro PPNA - URGENCIAS</h2>
                
                <code><b></b></code>
            </div>       
            <div class="card-header bg-secondary text-white">                 
            </div>
            <div class="card-body">
                <form method ="POST">
                    <div class="table-responsive-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Tipo de documento:                        
                                        <div class="w-80">
                                            <select name="TD" id="TD" class ="form-control" required>
                                                <option value="">Seleccione...</option>
                                                <option value="CC">CC</option>
                                                <option value="TI">TI</option>
                                                <option value="RC">RC</option>
                                                <option value="CE">CE</option>
                                            </select>
                                        </div>
                                    </th>
                                    <th scope="col">Número de Documento:
                                        <div class="w-80">
                                            <input type="text" name="DOC" id="DOC" class ="form-control" required>
                                        </div>
                                    </th>
                                    <td><div></div></td>
                                    <th scope="col">Quién registra:                        
                                        <div>                                        
                                            <input type="text" name="USUARIO_REGISTRO" id="USUARIO_REGISTRO" class="form-control" value="<?= $USUARIO_REGISTRO; ?>" readonly style="background-color: #e3f1f1;" >
                                        </div>
                                    </th>
                                <tr>
                                </tr>    
                                    <th>Primer Nombre:
                                        <div>
                                            <input type="text" name="NOM1" id="NOM1" class ="form-control" required>
                                        </div>
                                    </th>
                                    <th>Segundo Nombre:
                                        <div>
                                            <input type="text" name="NOM2" id="NOM2" class ="form-control">
                                        </div>
                                    </th>
                                    <th>Primer Apellido:
                                        <div>
                                            <input type="text" name="APE1" id="APE1" class ="form-control" required>
                                        </div>
                                    </th>
                                    <th>Segundo Apellido:
                                        <div>
                                            <input type="text" name="APE2" id="APE2" class ="form-control">
                                        </div>
                                    </th>
                                </tr>                            
                                <tr>
                                    <th scope="col">Fecha de Nacimiento:                        
                                        <div class="w-55">
                                            <input type="date" name="FECHANACE" id="FECHANACE" class ="form-control" required>
                                        </div>
                                    </th>
                                    <th scope="col">Género:
                                        <div class ="form-control">
                                            <input type="radio" name="SEXO" id="M" value="M" checked>
                                            <label for="SEXO">M</label>
                                            <input type="radio" name="SEXO" id="F" value="F">
                                            <label for="SEXO">F</label>
                                        </div>
                                    </th>
                                    <th scope="col">Mensaje:
                                        <div>
                                            <input type="text" name="MENSAJE" id="MENSAJE" class ="form-control" value="">
                                        </div>
                                    </th>
                                    <th scope="col">Parentesco:
                                        <div>
                                            <input type="text" name="PARENTESCO" id="PARENTESCO" class ="form-control">
                                        </div>
                                    </th>
                                </tr>
                                <tr>    
                                    <th scope="col">Observación:
                                        <div>
                                            <input type="text" name="OBSERVACION" id="OBSERVACION" class ="form-control">
                                        </div>
                                    </th>
                                    <th scope="col">Nivel SISBEN:
                                        <div>
                                            <input type="text" name="NIVEL_SISBEN" id="NIVEL_SISBEN" class ="form-control">
                                        </div>
                                    </th>
                                    <th scope="col">Ficha:
                                        <div>
                                            <input type="text" name="FICHA" id="FICHA" class ="form-control">
                                        </div>
                                    </th>
                                    <th scope="col">Discapacidad:
                                        <div class ="form-control">
                                            <input type="radio" name="DISCAPACIDAD" id="NO" value="NO" checked>
                                            <label for="DISCAPACIDAD">No</label>
                                            <input type="radio" name="DISCAPACIDAD" id="SI" value="SI">
                                            <label for="DISCAPACIDAD">Si</label>
                                        </div>
                                    </th>
                                </tr>
                                <tr>                                    
                                    <th scope="col">Grupo Poblacional:                        
                                        <div >
                                            <input type="text" name="GP" id="GP" class="form-control" >
                                        </div>
                                    </th>
                                    <th scope="col">GP SISBEN:                        
                                        <div class="w-80">
                                            <input type= "text" name="GP_SISBEN" id="GP_SISBEN" class ="form-control" >                                                
                                        </div>
                                    </th>
                                    
                                    <th scope="col">Puntaje:                        
                                        <div class="w-80">
                                            <input type="text" name="PUNTAJE" id="PUNTAJE" class="form-control" >
                                        </div>
                                    </th>
                                    <th scope="col">Prestadora:                        
                                        <div class="w-80">
                                            <input type="text" name="PRESTADORA" id="PRESTADORA" class="form-control" >
                                            <input type="hidden" name="FECREPORTE" id="FECREPORTE" value="" class="form-control">
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                </tr>
                            </thead>            
                        </table>
                    </div>      
                    </div>
                    <div class="card-header bg-light">
                        <button type="submit" class="btn btn-primary" name="accion" value="Guardar"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                        <a href = "index.php"class="btn btn-danger" value="cerrar"><i class="fa-solid fa-ban"></i> Cancelar</a>
                    </div>
                </form>        
        </div>
    </div>
</body>
</html>
<script>
  // Capturar la fecha actual
  const currentDate = new Date().toISOString().split('T')[0]; // Formato: YYYY-MM-DD

  // Asignar la fecha al campo oculto
  document.getElementById('FECREPORTE').value = currentDate;
</script>
<?php } 
 else header('Location: index.php');
?>