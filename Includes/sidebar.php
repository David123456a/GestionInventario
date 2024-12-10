        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


            <!-- Sidebar - Brand LOGO  -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-solid fa-user"></i> 
                </div>

                <div class="sidebar-brand-text mx-3">LOGO EMPRESA </div>
            </a>



            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard SECCION HOME -->
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>HOME</span>
                </a>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Heading  GESTION DE PRODUCTOS estos solo son titulos y aparecen transparente en la pagina-->
            <div class="sidebar-heading">
                GESTION DE PRODUCTOS
            </div>

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
                        <a class="collapse-item" href="crearProducto.php">Nuevo Producto</a>
                        <a class="collapse-item" href="mostrarProducto.php">Mostrar productos</a>
                        <a class="collapse-item" href="editarProducto.php">Editar productos</a>
                        <a class="collapse-item" href="eliminarProducto.php">Eliminar productos</a>
                    </div>
                </div>
            </li>

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
                        <h6 class="collapse-header">Gestion de inventario:</h6>
                        <a class="collapse-item" href="utilities-color.html">Control de Categorias</a>
                        <a class="collapse-item" href="utilities-border.html">Control de proveedores</a>
                      
                    </div>
                </div>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Heading MOVIMIENTOS INVENTARIO estos solo son titulos y aparecen transparente en la pagina -->
            <div class="sidebar-heading">
                MOVIMIENTOS INVENTARIO
            </div>

            <!-- Nav Item - Pages Collapse Menu INVENTARIO -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu3"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-solid fa-up-down-left-right"></i>
                    <span>Movimientos</span>
                </a>
                <div id="menu3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gestion de Movimientos:</h6>
                        <a class="collapse-item" href= crearMovimiento.php>Entrada de Movimientos</a>
                        <a class="collapse-item" href= #>Salida de Momivimientos</a>
                        <a class="collapse-item" href= #>Consulta de Movimientos</a>
                        
                    </div>
                </div>
            </li>




             <!-- Divider -->
             <hr class="sidebar-divider">

            <!-- Nav Item - Tales USUARIOS -->
            <li class="nav-item">
                <a class="nav-link" href="controlUsuarios.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Control de usuarios</span></a>
            </li>


            
            <!-- Nav Item - Charts REPORTES-->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reportes</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) FLECHA COMPRIR SIDEBAR -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          
        </ul>
        <!-- End of Sidebar -->