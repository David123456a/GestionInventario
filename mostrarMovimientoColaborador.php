
<?php  include('Includes/head.php') ?>
<?php include('db.php'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

         <!-- ACA va el side bar -->

         <?php  include('Includes/sidebarColaborador.php')  ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">


            <!-- Main Content -->
            <div id="content">


                <!-- aca va el TOPBAR -->

                <?php include('Includes/topbar.php') ?>

   


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Mostrar Movimiento</h1>

                </div>
                <!-- /.container-fluid -->



                <!-- TABLA -->
                 <!-- DataTales Example -->
                <div class="card shadow mb-4">

                    <div class="card-header py-3">

                                <h6 class="m-0 font-weight-bold text-primary">Listado de Movimientos</h6>
                            
                            <div class="card-body">

                                <div class="table-responsive">

                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        
                                        <thead>
                                            <tr>
                                                <th>Id_Movimiento</th>
                                                <th>Producto</th>
                                                <th>Tipo Movimiento</th>
                                                <th>Cantidad </th>
                                                <th>Fecha de Creacion</th>
                                                <th>Observaciones</th>
                                          

                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                            <th>Id_Movimiento</th>
                                                <th>Producto</th>
                                                <th>Tipo Movimiento</th>
                                                <th>Cantidad </th>
                                                <th>Fecha de Creacion</th>
                                                <th>Observaciones</th>
                                                
                                            </tr>
                                        </tfoot>

                                        <tbody>
                                        
                                        <?php include('controlMovimiento/selectTablesIMovimientoRead.php') ?>
                                                                                
                                        </tbody>


                                    </table>

                                </div>
                                
                            </div>

                    </div>

                </div>
                <!-- Fin DataTales Example -->









            
            <!-- End of Main Content -->

     <?php include('Includes/footer.php') ?>         