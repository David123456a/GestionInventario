<?php include('db.php'); ?>

<?php  include('Includes/head.php') ?>



<body id="page-top">



    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php  include('Includes/sidebarColaborador.php')  ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">



            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('Includes/topbar.php') ?>

                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                                        <!-- Page Heading -->
                                        <h6 class="h3 mb-2 text-gray-800">Control de usuarios</h6>
                                        <p class="mb-4">Sistema de gestion y admon de usuarios.
                                            <a target="_blank"
                                                href="https://datatables.net">Asistencia Tecnica
                                            </a>
                                        </p>
                 <!-- /.container-fluid -->



                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">

                                                <h6 class="m-0 font-weight-bold text-primary">Tabla  de Usuario Activos</h6>

                                                <!--BOTON insertar -->  
                                                <!--                          
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear Usuario</button>
                                                 -->


                                                                    <!-- MODAL MODAL insertar --> 
                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">

                                                                                        <div class="modal-header">
                                                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Datos usuario nuevo</h1>
                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                        </div>
                                                                        
                                                                                <div class="modal-body">

                                                                                        <!-- FORMULAIO -->
                                                                                        <form action="controlUsuarios/createUsuario.php" method="POST">


                                                                                            <div class=mb-3>
                                                                                                <label for="name">Nombre</label>
                                                                                                <input type="text"name="name" class="form-control" require>
                                                                                            </div>

                                                                                            <div>
                                                                                                <label for="email">Correo</label>
                                                                                                <input type="text" name="email" class="form-control"require>
                                                                                            </div>

                                                                                            <div>
                                                                                                <label for="user">Usuario</label>
                                                                                                <input type="text" name="user" class="form-control"require>            
                                                                                            </div>

                                                                                            <div>
                                                                                                <label for="contraseña">Contraseña</label>
                                                                                                <input type="text" name="contraseña" class="form-control"require>
                                                                                            
                                                                                            </div>

                                                                                    

                                                                                            <div>
                                                                                                    <?php  
                                                                                                        $query= "  SELECT id_rol, nombre nombre_rol FROM rol; ";
                                                                                                        $result =$con->query($query);

                                                                                                        if($result->num_rows>0){
                                                                                                                        echo '<label for="rol">   rol     </label>';
                                                                                                                        echo ' <select name="ID_ROL" class="form-control">';
                                                                                                                    while($row= $result->fetch_assoc()){
                                                                                                                        echo '<option value="' . $row['id_rol'] .  '">' . $row['nombre_rol'].  '</option>';
                                                                                                                    }
                                                                                                                        echo '</select>';
                                                                                                        }else
                                                                                                        {
                                                                                                            echo 'No hay Roles';
                                                                                                        }
                                                                                                    
                                                                                                    ?>
                                                                                            </div>
                                                            

                                                                                            
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                                <button type="submit" name="submit" class="btn btn-success">Agregar/Guardar</button>

                                                                                            </div>

                                                                                        </form>
                                                                                        <!-- FIN FORMULAIO -->

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- fin MODAL insertar --> 




                                         <!-- Se evalua si viene datos de la variable SESSION Para ser mostrado  -->
                                         <?php if (isset($_SESSION['message'])) {?> 
                                                                                <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                                                                                <?=$_SESSION['message']?>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                                </div>
                                        <?php session_unset(); }?>






                                

                            <div class="card-body">

                                                   

                                    <div class="table-responsive">


                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>NOMBRE</th>
                                                            <th>CORREO</th>
                                                            <th>USUARIO</th>
                                                            <th>PASSWORD</th>
                                                            <th>ID_R</th>
                                                            <th>ROL</th>
                                                            <th>CREACION</th>
                                                            <th>ACCIONES</th>
                                                        </tr>
                                                    </thead>
                                                    

                                                    <tbody>

                                                        <?php include('controlUsuarios/selectTablesColaborador.php') ?>

                                                    </tbody>
                                                
                                                </table>
                                    </div>

                            </div>

                        </div>

                    </div>

                    <!-- Fin DataTales Example -->

               

            
            <!-- End of Main Content -->



            <?php include('Includes/footer.php') ?>  