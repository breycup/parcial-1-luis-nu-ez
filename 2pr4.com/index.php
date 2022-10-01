<?php
require_once("controllers/autos_controllers.php");
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



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="imagenes//13.jpg" class="img-fluid" alt="..."> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">new autos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorías </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">familiares</a></li>
                        <li><a class="dropdown-item" href="#">deportivos</a></li>
                        <li><a class="dropdown-item" href="#">camiones</a></li>
                        <li><a class="dropdown-item" href="#">dos puertas</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Texto Buscado" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imagenes//11.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagenes//8.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagenes//10.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<br> 



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
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(autos_controller::mostrar() as $objautos){?>
                    <tr>
                        <th scope="row"> <?php echo $objautos->getid()?> </th>
                        <td> <br>  <?php echo $objautos->getmarca()?> </td>
                        <td> <br>  <?php echo $objautos->getmodelo()?> </td>
                        <td> <br>  <?php echo $objautos->getprecio()?> </td>
                        <td> <br>  <?php echo $objautos->getdias()?> </td>
                        <td> <br>  <?php echo $objautos->getpreciopagar()?> </td>
                        <td> <img src="<?php echo $objautos->getfoto()?>" alt=""> </td>
                        <td> <a href="mostrar.php?id=<?php echo $objautos->getid()?>">  <br>  <button type="button" class="btn btn-success">MOSTRAR</button> </a> </td> 
                        
                    </tr>
                   <?php }?>
                </tbody>
            </table>


        </div>





        



    </div>
   
                    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>