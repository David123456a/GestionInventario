<?php include('db.php'); ?>

<?php  include('Includes/head.php') ?>



<body id="page-top">



    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php  include('Includes/sidebar.php')  ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">



            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('Includes/topbar.php') ?>

                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                                        <!-- Page Heading -->
                                        <h6 class="h3 mb-2 text-gray-800">Control de proveedores</h6>
                                        <p class="mb-4">Sistema de gestion y admon de proveedores.
                                            <a target="_blank"
                                                href="https://datatables.net">Asistencia Tecnica
                                            </a>
                                        </p>
                 <!-- /.container-fluid -->



                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">

                                                <h6 class="m-0 font-weight-bold text-primary">Tabla  de Proveedor Activos</h6>

                                                <!--BOTON insertar -->                           
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear Proveedor</button>



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
                                                                                        <form action="controlProveedor/createProveedor.php" method="POST">


                                                                                            <div class=mb-3>
                                                                                                <label for="nombre_proveedor">Nombre</label>
                                                                                                <input type="text"name="nombre_proveedor" class="form-control" require>
                                                                                            </div>

                                                                                            <div>
                                                                                                <label for="telefono_proveedor">Telefono </label>
                                                                                                <input type="text" name="telefono_proveedor" class="form-control"require>
                                                                                            </div>

                                                                                            <div>
                                                                                                <label for="direccion_proveedor">Direccion</label>
                                                                                                <input type="text" name="direccion_proveedor" class="form-control"require>            
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
                                                            <th>TELEFONO</th>
                                                            <th>DIRECCION</th>
                                                            <th>CREACION</th>
                                                            <th>ACCIONES</th>
                                                        </tr>
                                                    </thead>
                                                    

                                                    <tbody>

                                                        <?php include('controlProveedor/selectProveedor.php') ?>

                                                    </tbody>
                                                
                                                </table>
                                    </div>

                            </div>

                        </div>

                    </div>

                    <!-- Fin DataTales Example -->

               

            
            <!-- End of Main Content -->



            <?php include('Includes/footer.php') ?>  