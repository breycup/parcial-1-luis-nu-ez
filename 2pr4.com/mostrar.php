<?php
require_once("controllers/autos_controllers.php");
$id1=$_GET["id"];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>ALQUILER DE AUTOS S.A</title>
</head>
<body>

<div class="container-fluid">
        <center>
         <h1> lista de carros</hi>
         </center>
       
        <div class="row">
            <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">MARCA</th>
                        <th scope="col">MODELO</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">DIAS</th>
                        <th scope="col">PRECIO A PAGAR</th>
                        <th scope="col">FOTO</th>
                        
                    </tr>
                </thead>
                <tbody>

                <?php  
                    foreach(autos_controller::mostrar() as $objautos) {?>
                   

                   <?php
                  $id= $objautos->getid() ;
                  if($id==$id1){
                    
                    $marca= $objautos->getmarca() ;
                    $modelo= $objautos->getmodelo() ;
                    $precio= $objautos->getprecio() ;
                    $dias= $objautos->getdias() ;
                    $presiopagar= $objautos->getpreciopagar() ;
                    $foto= $objautos->getfoto() ;
                  }
                   ?>
                   <?php
                }?>

                    <tr>
                        <th scope="row"> <?php echo $id1?> </th>
                        <td> <br>  <?php echo $marca?> </td>
                        <td> <br>  <?php echo $modelo?> </td>
                        <td> <br>  <?php echo $precio?> </td>
                        <td> <br>  <?php echo $dias?> </td>
                        <td> <br>  <?php echo $presiopagar?> </td>
                        <td> <img src="<?php echo $foto ?>" alt=""> </td>
                        
                    
                        
                    </tr>
                    

                   
                   
                </tbody>
            </table>


        </div>
       

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>