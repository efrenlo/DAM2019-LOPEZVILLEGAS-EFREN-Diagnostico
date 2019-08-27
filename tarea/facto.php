<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Factorial</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">

</head>

<body>
    <?php
    
    $email = $_POST['email'];
    $guardar = $email;

    
    ?>
   
    <div class="container">
        <div class="jumbotron">
            <h1>
                Bienvenido <?php echo $guardar ?>
            </h1>
            <p>
                Descubre el factorial
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form role="form" method="POST" action="resultado.php">

                    <h2> Introduce el numero</h2>
                    <br>
                    <input type="text" name="numero" class="form-control">
                    <br>
                    <button type="submit" name="calcular" class="btn btn-lg btn-primary btn-block" value="Calcular">
                        Calcular
                    </button>
                </form>
            </div>
            <div class="col-md-8">


            </div>
        </div>
    </div>




    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>