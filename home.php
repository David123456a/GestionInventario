<?php   session_start();  ?>



<?php    include('Includes/head.php');
         include ('db.php');

?>

                                

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


                                

        <!--  va el SIDE BAR -->
        <?php    include('Includes/sidebar.php')  ?>




        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">




            <!-- INICIO TODOS LOS CONTENIDOS topbar, Graficas y footer -->
            <!-- Main Content -->
            <div id="content">




                    <!-- aca va el TOPBAR -->
                    <?php include('Includes/topbar.php') ?>



                        <!-- Contenedor TITULO , CARDS Y GRAFICAS -->
                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                                        <!-- Page Heading -->
                                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                            <h1 class="h3 mb-0 text-gray-800">Dashboard Inventario</h1>
                                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                                <i class="fas fa-download fa-sm text-white-50"></i> Reportes
                                            </a>
                                        </div>







                                <!-- inicio  CARDS -->  
                                <!-- Content Row 1 -->
                                <div class="row">


                                        <!-- Total Costo Inventario --> 
                                        <?php

                                                $query = "   SELECT SUM(precio*stock)AS total FROM products;   ";
                                                $result= $con->query($query);

                                                if($fila = $result->fetch_assoc()){

                                                        echo'
                                                                <div class="col-xl-3 col-md-6 mb-4">
                                                                    <div class="card border-left-dark shadow h-100 py-2">
                                                                        <div class="card-body">
                                                                            <div class="row no-gutters align-items-center">
                                                                                <div class="col mr-2">
                                                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                                        Total Costo Inventario</div>
                                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Q
                                                                                    '
                                                                                
                                                                                        .number_format($fila['total'],2).
                                                                                    '
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <i class="fas fa-sack-dollar fa-2x text-gray-300"></i>
                                                                                
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        ';
                                                }

                                        ?>
                                        <!-- fin Total Costo Inventario --> 



                                        <!-- total de productos disponibles -->
                                        <?php

                                        $query = "   SELECT SUM(stock)AS TotalProductos FROM products;   ";
                                        $result= $con->query($query);

                                        if($fila = $result->fetch_assoc()){

                                                echo'
                                                        <div class="col-xl-3 col-md-6 mb-4">
                                                            <div class="card border-left-primary shadow h-100 py-2">
                                                                <div class="card-body">
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col mr-2">
                                                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                                Total productos disponibles</div>
                                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                            '
                                                                                .number_format($fila['TotalProductos']).
                                                                            '
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <i class="fas fa-product-hunt fa-2x text-gray-300"></i>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                ';
                                        }

                                        ?>
                                        <!-- fin total de productos disponibles -->



                                        <!-- total de Categorias disponibles -->
                                        <?php

                                        $query = "   SELECT COUNT(id)AS TotalCategorias FROM categories;   ";
                                        $result= $con->query($query);

                                        if($fila = $result->fetch_assoc()){

                                                echo'
                                                        <div class="col-xl-3 col-md-6 mb-4">
                                                            <div class="card border-left-success shadow h-100 py-2">
                                                                <div class="card-body">
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col mr-2">
                                                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                                Total de Categorias</div>
                                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                            '
                                                                                .number_format($fila['TotalCategorias']).
                                                                            '
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <i class="fas fa-sack-dollar fa-2x text-gray-300"></i>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                ';
                                        }

                                        ?>
                                        <!-- fin total de Categorias disponibles -->



                                        <!-- TotalProveedores disponibles -->
                                        <?php

                                        $query = "   SELECT COUNT(id_proveedor)AS TotalProveedores FROM proveedor;   ";
                                        $result= $con->query($query);

                                        if($fila = $result->fetch_assoc()){

                                                echo'
                                                        <div class="col-xl-3 col-md-6 mb-4">
                                                            <div class="card border-left-secondary shadow h-100 py-2">
                                                                <div class="card-body">
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col mr-2">
                                                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                                Total de Proveedores</div>
                                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                            '
                                                                                .number_format($fila['TotalProveedores']).
                                                                            '
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                        
                                                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                ';
                                        }

                                        ?>
                                        <!-- fin TotalProveedores disponibles -->


                                        

                                        <!-- total de Categorias Carnes -->
                                        <?php

                                        $query = "   SELECT c.nombre, SUM(p.precio*p.stock)AS TotalCategoriaCarnes 
                                                        FROM products p
                                                        JOIN categories c ON p.category_id = c.id
                                                        WHERE c.nombre = 'Carnes'
                                                        GROUP BY c.nombre   
                                        
                                        ";
                                        $result= $con->query($query);

                                        if($fila = $result->fetch_assoc()){

                                                echo'
                                                        <div class="col-xl-3 col-md-6 mb-4">
                                                            <div class="card border-left-dark shadow h-100 py-2">
                                                                <div class="card-body">
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col mr-2">
                                                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                                Costos Categoria Carnes</div>
                                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Q
                                                                            '
                                                                                .number_format($fila['TotalCategoriaCarnes'],2).
                                                                            '
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <i class="fas fa-calculator fa-2x text-gray-300"></i>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                ';
                                        }

                                        ?>
                                        <!-- fin total de Categorias Carness -->

                            

                                        <!-- total de Categorias Lacteos -->
                                        <?php

                                        $query = "   SELECT c.nombre, SUM(p.precio*p.stock)AS TotalCategoriaLacteos
                                                        FROM products p
                                                        JOIN categories c ON p.category_id = c.id
                                                        WHERE c.nombre = 'Lacteos'
                                                        GROUP BY c.nombre   
                                        
                                        ";
                                        $result= $con->query($query);

                                        if($fila = $result->fetch_assoc()){

                                                echo'
                                                        <div class="col-xl-3 col-md-6 mb-4">
                                                            <div class="card border-left-info shadow h-100 py-2">
                                                                <div class="card-body">
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col mr-2">
                                                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                                Costos Categoria Lacteos</div>
                                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Q
                                                                            '
                                                                                .number_format($fila['TotalCategoriaLacteos'],2).
                                                                            '
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <i class="fas fa-calculator fa-2x text-gray-300"></i>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                ';
                                        }

                                        ?>
                                        <!-- fin total de Categorias Lacteos -->



                                        <!-- total de Categorias Gaseosas -->
                                        <?php

                                        $query = "   SELECT c.nombre, SUM(p.precio*p.stock)AS TotalCategoriaGaseosas
                                                        FROM products p
                                                        JOIN categories c ON p.category_id = c.id
                                                        WHERE c.nombre = 'Gaseosas'
                                                        GROUP BY c.nombre   
                                        
                                        ";
                                        $result= $con->query($query);

                                        if($fila = $result->fetch_assoc()){

                                                echo'
                                                        <div class="col-xl-3 col-md-6 mb-4">
                                                            <div class="card border-left-danger shadow h-100 py-2">
                                                                <div class="card-body">
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col mr-2">
                                                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                                Costos Categoria Gaseosas</div>
                                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Q
                                                                            '
                                                                                .number_format($fila['TotalCategoriaGaseosas'],2).
                                                                            '
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <i class="fas fa-calculator fa-2x text-gray-300"></i>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                ';
                                        }

                                        ?>
                                        <!-- fin total de Categorias Gaseosas -->



                                        <!-- total de Categorias Marisscos -->
                                        <?php

                                        $query = "   SELECT c.nombre, SUM(p.precio*p.stock)AS TotalCategoriaMariscos
                                                        FROM products p
                                                        JOIN categories c ON p.category_id = c.id
                                                        WHERE c.nombre = 'Mariscos'
                                                        GROUP BY c.nombre;     
                                        
                                        ";

                                        $result= $con->query($query);

                                        if($fila = $result->fetch_assoc()){

                                                echo'
                                                        <div class="col-xl-3 col-md-6 mb-4">
                                                            <div class="card border-left-warning shadow h-100 py-2">
                                                                <div class="card-body">
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col mr-2">
                                                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                                Costos Categoria Mariscos</div>
                                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Q
                                                                            '
                                                                                .number_format($fila['TotalCategoriaMariscos'],2).
                                                                            '
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <i class="fas fa-calculator fa-2x text-gray-300"></i>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                ';
                                        }

                                        ?>
                                        <!-- fin total de Categorias Mariscos -->
                                
                                    
                                

                                </div>
                                <!-- end Content Row 1 -->
                                <!-- fin de los CARDS -->










                                <!-- INICIO GRAFICAS GRAFICAS -->
                                <!-- Content Row 2 -->
                                <div class="row">


                                        <!-- Grafica Columnas Producto por Categoria -->
                                        <div class="col-xl-6 col-lg-6">

                                            <div class="card shadow mb-4">

                                               <!-- Card Header - Dropdown -->
                                                <div
                                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                    <h6 class="m-0 font-weight-bold text-primary">Total de productos por Categorias</h6>

                                                    <div class="dropdown no-arrow">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <div class="dropdown-header">MAS DETALLE</div>
                                                            <a class="dropdown-item" href="#">Detalle</a>
                                                        </div>
                                                    </div>

                                                </div>


                                                <!-- Card Body -->
                                                <div class="card-body">
                                                    <!-- el id colum1Grafico busca el archivo =  scriptGraficos/column1Grafico construye la grafica  var chart = new google.visualization.ColumnChart(document.getElementById('colum1Grafico'))-->
                                                    <div id="colum1Grafico" class= "grafico">Grafico Barras</div>
                                                </div>


                                            </div>

                                      </div>
                                        <!-- FIN Grafica Columnas Producto por Categoria -->





                                        <!-- Grafica PIE Productos por proveedores -->
                                        <div class="col-xl-6 col-lg-6">

                                            <div class="card shadow mb-4">

                                                <!-- Card Header - Dropdown -->
                                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                                                    <h6 class="m-0 font-weight-bold text-primary">Productos por Proveedores</h6>

                                                    <div class="dropdown no-arrow">

                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <div class="dropdown-header">Mas Detalle:</div>
                                                            <a class="dropdown-item" href="#">Detalle</a>
                                                        </div>

                                                    </div>

                                                </div>


                                                <!-- Card Body -->
                                                <div class="card-body">
                                                <!--     id= dona1Grafoco busca el archivo .js  script que construye la grafica = var chart = new google.visualization.PieChart(document.getElementById('dona1Grafico'));-->
                                                    <div id="dona1Grafico"class="grafico" >Grafico3</div>     
                                                </div>

                                            </div>

                                        </div>
                                        <!-- Grafica PIE Productos por proveedores -->




                                    
                                        <!-- Grafica Columnas Producto por Categoria -->
                                        <div class="col-xl-6 col-lg-6">

                                            <div class="card shadow mb-4">


                                                <!-- Card Header - Dropdown -->
                                                <div
                                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                    <h6 class="m-0 font-weight-bold text-primary">Total de productos por Categorias</h6>

                                                    <div class="dropdown no-arrow">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <div class="dropdown-header">Mas detalle</div>
                                                            <a class="dropdown-item" href="#">Detalle</a>
                                                        </div>
                                                    </div>

                                                </div>


                                                <!-- Card Body -->
                                                <div class="card-body">
                                                    <!-- el id colum1Grafico busca el archivo .js  script que construye la grafica  var chart = new google.visualization.ColumnChart(document.getElementById('colum1Grafico'))-->
                                                    <div id="colum2Grafico" class= "grafico">Grafico Barras2</div>
                                                </div>


                                            </div>


                                        </div>
                                        <!-- FIN Grafica Columnas Producto por Categoria -->





                                        <!-- Grafica PIE Productos por proveedores -->
                                        <div class="col-xl-6 col-lg-6">

                                            <div class="card shadow mb-4">

                                                <!-- Card Header - Dropdown -->
                                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                                                    <h6 class="m-0 font-weight-bold text-primary">Productos por Proveedores</h6>

                                                    <div class="dropdown no-arrow">


                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <div class="dropdown-header">Mas Detalle:</div>
                                                            <a class="dropdown-item" href="#">Detalle</a>
                                                        </div>

                                                    </div>
                                                </div>


                                                <!-- Card Body -->
                                                <div class="card-body">
                                                <!--     id= dona1Grafoco busca el archivo .js  script que construye la grafica = var chart = new google.visualization.PieChart(document.getElementById('dona1Grafico'));-->
                                                    <div id="dona2Grafico"class="grafico" >Grafico4</div>     
                                                </div>

                                            </div>

                                        </div>
                                        <!-- Grafica PIE Productos por proveedores -->




                                </div>
                                 <!-- Content Row 2 -->
                                <!-- FIN  GRAFICAS GRAFICAS -->









            





                                <!-- Content Row 3 -->
                                <div class="row">



                                        <!-- Content Column 1-->
                                        <div class="col-lg-6 mb-4">

                                            <!-- Project Card Example -->
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h6 class="m-0 font-weight-bold text-primary">Movimientos</h6>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="small font-weight-bold">Movimientos <span
                                                            class="float-right">20%</span></h4>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Content Column 2-->
                                        <div class="col-lg-6 mb-4">

                                            <!-- Project Card Example -->
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h6 class="m-0 font-weight-bold text-primary">Movimientos</h6>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="small font-weight-bold">Movimientos <span
                                                            class="float-right">40%</span></h4>
                                                </div>
                                            </div>

                                        </div>







                                </div>
                                <!-- FIN  Content Row 3 -->


                            

                        </div>
                        <!-- end Page Content -->
                        <!-- FIN Contenedor TITULO , CARDS Y GRAFICAS -->
                        




                    <!-- aca va el FOOTER -->
                    <?php include('Includes/footer.php') ?>


           

            </div>
            <!-- End of Main Content -->
            <!-- INICIO TODOS LOS CONTENIDOS topbar, Graficas y footer -->






           <!-- script para generar recursos en la web  para darle estilo a las graficas -->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <!--        GRAFICA BARRAS1 Cantiadad de productos por categorias -->
            <script type="text/javascript" src = "scriptGraficos/colum1Grafico.js">  </script>
            <!--        FIN GRAFICA BARRAS1 Cantiadad de productos por categorias -->

            <!--     Grafico PIE1 Cantidad de productos por proveerod-->    
            <script type="text/javascript" src = "scriptGraficos/dona1Grafico.js"> </script>
            <!--FIN  Grafico PIE1 Cantidad de productos por proveerod-->  

             <!--       GRAFICA BARRAS2 Cantidad de productos por proveerod-->    
             <script type="text/javascript" src = "scriptGraficos/colum2Grafico.js"> </script>
            <!--        FIN  GRAFICA BARRAS2 Cantidad de productos por proveerod-->  

             <!--    Grafico PIE2 Cantidad de productos por proveerod-->    
             <script type="text/javascript" src = "scriptGraficos/dona2Grafico.js"> </script>
            <!--FIN  Grafico PIE2 Cantidad de productos por proveerod-->  




      
