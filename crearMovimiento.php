
<?php  include('includes/head.php') ?>
<?php  include('db.php');  ?>


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
                    <h1 class="h3 mb-4 text-gray-800">Nuevo Movimiento</h1>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

  

                
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                                        <h6 class="m-0 font-weight-bold text-primary">Ingresar Nuevo Movimiento</h6>

                            
                           <!-- inicio modal insertar --> 
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear Movimiento</button>
                           
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Datos Nuevo Movimiento</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                    
                                        <div class="modal-body">


                                                <form action="controlMovimiento/createMovimiento.php" method="POST">


                                                 

                                                

                                                



                                 

                                                    <div >
                                                            <?php  
                                                            $query= "  SELECT id, nombre FROM products; ";
                                                            $result =$con->query($query);

                                                            if($result->num_rows>0){
                                                                echo '<label for="products"> Producto  </label>';
                                                                echo ' <select name="producto" class="form-control">';
                                                                    while($row= $result->fetch_assoc()){
                                                                        echo ' <option value="'.$row['id'].'">'.$row['nombre'].'  </option>';
                                                                    }
                                                                echo '</select>';
                                                            }else
                                                            {
                                                                echo 'No hay Categorias';
                                                            }
                                                            
                                                            ?>
                                                    </div>


                                                    <div >
                                                            <?php  
                                                            $query= "SELECT DISTINCT tipo_movimiento FROM movimientos;";
                                                            $result =$con->query($query);

                                                            if($result->num_rows>0){
                                                                echo '<label for="tipo_movimiento"> Tipo Movimiento </label>';
                                                                echo ' <select name="tipo_movimiento" class="form-control">';
                                                                    while($row= $result->fetch_assoc()){
                                                                        echo ' <option value="'.$row['tipo_movimiento'].'">'.$row['tipo_movimiento'].'  </option>';
                                                                    }
                                                                echo '</select>';
                                                            }else
                                                            {
                                                                echo 'No hay Movimientos';
                                                            }
                                                            
                                                            ?>
                                                    </div>



                                                    <div class=mb-3>
                                                        <label for="cantidad">Cantidad</label>
                                                        <input type="number"name="cantidad" class="form-control" require>
                                                    </div>

                                                    <div class=mb-3>
                                                        <label for="observacion">Observacion</label>
                                                        <textarea name="observacion" class="form-control" require> </textarea>
                                                    </div>

                                                 
                    

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="submit" class="btn btn-success">Agregar/Guardar</button>

                                                    </div>

                                                </form>

                                        </div>

                                     </div>
                                </div>
                           </div>

                            <!-- fin modal insertar --> 





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
                                <!-- tabla mostrar producto -->



                            

                        </div>
                            
                    </div>


            <!-- fin tabla -->

     <?php include('includes/footer.php') ?>         