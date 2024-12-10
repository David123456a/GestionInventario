<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>





<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            

                            <!-- imagen -->
                            <div class="col-lg-6 d-none d-lg-block " style="padding: 0;">
                                <img src="img/img1.jpg" alt="image de login"
                                style="width: 100% ; height: 100%; object-fit:cover ; border-radius: 0;">
                            </div>
                            <!-- imagen -->

                          
                            <div class="col-lg-6">

                                <div class="p-5">

                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Control de inventario</h1>
                                    </div>



                                      <!--  col FORMULARIO ingreso datos usuarios -->  <!--  col formulario -->
                                    <form class="user" action="login2.php" method="POST">

                                        <div class="form-group">
                                            <input type="email" name ="usuario" id="usuario" class="form-control form-control-user"
                                                aria-describedby="emailHelp"  
                                                placeholder="Ingrese correo">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="contraseña" id="contraseña" class="form-control form-control-user"
                                                placeholder="Ingrese su contraseña">
                                        </div>
                                        <!-- FIN  col formulario -->  <!--  col formulario -->


                                        
                                        <button type="submit"class="btn btn-primary btn-user btn-block">Acceder</button>




                                    </form>


                                    



                                    
                                    
                 



                                                                    


                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Olvide mi contraseña</a>
                                    </div>



                                                       






                                   
                                </div>



                                




                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script src="js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>