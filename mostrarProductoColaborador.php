
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
                    <h1 class="h3 mb-4 text-gray-800">Mostrar Producto</h1>

                </div>
                <!-- /.container-fluid -->



                <!-- TABLA -->
                 <!-- DataTales Example -->
                <div class="card shadow mb-4">

                    <div class="card-header py-3">

                                <h6 class="m-0 font-weight-bold text-primary">Listado de productos</h6>
                            
                            <div class="card-body">

                                <div class="table-responsive">

                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        
                                        <thead>
                                            <tr>
                                                <th>Id_Prod</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Precio</th>
                                                <th>Stock</th>
                                                <th>Categoria</th>
                                                <th>Fecha de Creacion</th>
                                                <th>Status</th>
                                                <th>Proveedor</th>
                                            

                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>id</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Precio</th>
                                                <th>Stock</th>
                                                <th>Categoria</th>
                                                <th>Fecha de Creacion</th>
                                                <th>Proveedor</th>
                                                <th>Estado</th>
                                                
                                            </tr>
                                        </tfoot>

                                        <tbody>
                                        
                                        <?php include('controlInventario/selectTablesInventarioRead.php') ?>
                                                                                
                                        </tbody>


                                    </table>

                                </div>
                                
                            </div>

                    </div>

                </div>
                <!-- Fin DataTales Example -->









            
            <!-- End of Main Content -->

     <?php include('Includes/footer.php') ?>         