        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


            <!-- Sidebar - Brand LOGO  -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="homeSupervisor.php">
                
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-solid fa-user"></i> 
                </div>

                <div class="sidebar-brand-text mx-3">LOGO EMPRESA </div>
            </a>



            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard SECCION HOME -->
            <li class="nav-item active">
                <a class="nav-link" href="homeSupervisor.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>HOME</span>
                </a>
            </li>







            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Heading  GESTION DE PRODUCTOS  PRODUCTOS PRODUCTOS estos solo son titulos y aparecen transparente en la pagina-->
            <div class="sidebar-heading">
                GESTION DE PRODUCTOS
            </div>

           <!-- INVENTARIO INVENTARIO INVENTARIO INVENTARIO Gestion de productos CRUD --> 
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu1"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-solid fa-store"></i>
                    <span>Gestion de Inventario</span>
                </a>
                <div id="menu1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">INVENTARIO:</h6>

                        <a class="collapse-item" href="mostrarProductoSupervisor.php">Mostrar productos</a>
                        <a class="collapse-item" href="crearProductoSupervisor.php">Crear Producto</a>                       
                        <a class="collapse-item" href="editarProductoSupervisor.php">Editar productos</a>
                        <a class="collapse-item" href="eliminarProductoSupervisor.php">Eliminar productos</a>
                       


                    </div>
                </div>
            </li>






            <!-- CATEROGIA PROVEEDOR      CATEGORIA PROVEEDOR     CATEGORIA PROVEEDOR  CURUD -->
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu2"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-solid fa-user-tag"></i>
                    <span>Categoria y proveedores</span>
                </a>
                <div id="menu2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">CATEGORIA / PROVEEDOR:</h6>
                        <!-- 
                        <a class="collapse-item" href="controlCategorias.php">Control de Categorias</a>
                        <a class="collapse-item" href="controlProveedores.php">Control de proveedores</a>
                        -->
                      
                    </div>
                </div>
            </li>










            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Heading MOVIMIENTOS INVENTARIO estos solo son titulos y aparecen transparente en la pagina -->
            <div class="sidebar-heading">
                MOVIMIENTOS INVENTARIO
            </div>

            <!-- Nav Item - Pages Collapse  LISTA MOVIMIENTOS MOVIMIENTOS MOVIMIENTOS -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu3"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-solid fa-up-down-left-right"></i>
                    <span>Movimientos</span>
                </a>
                <div id="menu3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">MOVIMIENTOS:</h6>
                      
                        <a class="collapse-item" href= crearMovimientoSupervisor.php>Crear Entrada/Salida </a> 
                        <!--         
                        <a class="collapse-item" href= mostrarMovimiento.php>Mostrar Movimientos</a>         -->
                        
                    </div>
                </div>
            </li>







             <!-- Divider -->
             <hr class="sidebar-divider">

            <!-- Nav Item - TaBLes USUARIOS  USUARIOS USUARIOS -->
            <li class="nav-item">
                <a class="nav-link" href="homeSupervisor.php"> <!-- Se cambio la ruta para que no pueda editar usuario -->
                    <i class="fas fa-fw fa-table"></i>
                    
                    <span>Control de usuarios</span></a>        
            </li>







            
            <!--FIN Nav Item - Charts REPORTES  REPORTES REPORTES -->
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">                                                     <!--listaReporte es el id que llama a la lista   -->
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#listaReporte"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-solid fa-chart-area"></i>
                    <span>Reportes</span>
                </a>
                <div id="listaReporte" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Reportes :</h6>
                        <a class="collapse-item" href="reportePdf/productoPdf.php">Reporte de Productos</a>
                        <a class="collapse-item" href="reportePdf/movimientoPdf.php">Reporte de Movimientos</a> 
                        <a class="collapse-item" href="reportePdf/categoriaPdf.php">Reporte de Categorias</a>
                        <a class="collapse-item" href="reportePdf/proveedorPdf.php">Reporte de proveedores</a>
                        <a class="collapse-item" href="reportePdf/usuarioPdf.php">Reporte de Usuarios</a>
                      
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->

            <!--FIN Nav Item - Charts REPORTES  REPORTES REPORTES -->






            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) FLECHA COMPRIR SIDEBAR -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          
        </ul>
        <!-- End of Sidebar -->