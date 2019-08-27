
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


    <div class="container">
        <div class="jumbotron">
            <h1>
                Resultado
            </h1>
            <p>

            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="facto.php">Volver</a>

            </div>
            <div class="col-md-8">
                <?php

                $email = $_POST['numero'];
                //$num = new Factorial($email);


                ?>
                <table border="1" align="center">



                    <tr>
                        <td align="center">Numero</td>
                        <td align="center">Resultado</td>

                    </tr>

                    <?php
                    
                    $fac=1;
                 
                    for ($i = 1; $i < $email+1; $i++) {
                        
                        $fac = $fac * $i;
                        
                       
                        ?>
                    <tr>
                        <td align="center"> <?php echo $i  ?> x  </td>
                        <td align="center"><?php echo $fac ?></td>
                    </tr>

                    <?php
                
                    }
                    ?>








                </table>


            </div>
        </div>
    </div>




    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>