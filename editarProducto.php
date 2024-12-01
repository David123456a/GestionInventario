
<?php  include('includes/head.php') ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

         <!-- ACA va el side bar -->

         <?php  include('Includes/sidebar.php')  ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">


            <!-- Main Content -->
            <div id="content">


                <!-- aca va el TOPBAR -->

                <?php include('Includes/topbar.php') ?>

   


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Editar Producto</h1>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->





            
                                <!-- tabla mostrar producto -->
                                <div class="card-body">
                                    <div class="table-responsive">

                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Nombre</th>
                                                    <th>Descripcion</th>
                                                    <th>Precio</th>
                                                    <th>Stock</th>
                                                    <th>Categoria</th>
                                                    <th>Fecha de Creacion</th>
                                                    <th>Status</th>
                                                    <th>Proveedor</th>
                                                    <th>ACCIONES</th>

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
                                                    <th>Status</th>
                                                    <th>Proveedor</th>
                                                    <th>ACCIONES</th>
                                                </tr>
                                            </tfoot>


                                            <tbody>
                                            
                                            <?php include('controlInventario/selectTablesInventarioUpdate.php') ?>
                                            
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                <!-- tabla mostrar producto -->





     <?php include('includes/footer.php') ?>         