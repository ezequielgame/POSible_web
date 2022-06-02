<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/styles.css" rel="stylesheet">

    <!-- Custom fonts for this template-->

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eb7c5ea469.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <!-- Date range picker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <link href="css/styles.css" rel="stylesheet">

    <script src="js/auth.js"></script>

    <title>Compras</title>
</head>

<body>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-pos-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-solid fa-shop"></i>
                </div>
                <div class="sidebar-brand-text mx-3">POSible</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Sucursales
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="sucursales">
                    <i class="fa-solid fa-shop"></i>
                    <span>Sucursales</span>
                </a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Empleados
            </div>

            
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="empleados">
                <i class="fa-solid fa-people-group"></i>
                    <span>Empleados</span>
                </a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Caja
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="ventas" data-toggle="collapse" data-target="#collapseSales" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-cash-register"></i>
                    <span>Ventas</span>
                </a>
                <div id="collapseSales" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Ventas:</h6>
                        <a class="collapse-item" href="nueva-venta">Nueva venta</a>
                        <a class="collapse-item" href="ventas">Historial</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="compras" data-toggle="collapse" data-target="#collapsePurchases" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-basket-shopping"></i>
                    <span>Compras</span>
                </a>
                <div id="collapsePurchases" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Compras:</h6>
                        <a class="collapse-item" href="nueva-compra">Nueva compra</a>
                        <a class="collapse-item" href="compras">Historial</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Inventario
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="productos">
                    <i class="fa-solid fa-bottle-water"></i>
                    <span>Productos</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="categorias">
                <i class="fa-solid fa-puzzle-piece"></i>
                    <span>Categorías</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="proveedores">
                    <i class="fa-solid fa-people-carry-box"></i>
                    <span>Proveedores</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Información
            </div>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="info">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>Acerca de</span>
                </a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle bg-pos-primary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="Clear('tableBody');">
                            Seleccionar sucursal
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2" id="dropdownBranches">
                            <!-- Get branches -->
                        </div>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <script>
                                        document.write(JSON.parse(sessionStorage.getItem("user"))['name_user']);
                                    </script>
                                </span>
                                <img class="img-profile rounded-circle" src="img/admin.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="login" onclick="sessionStorage.clear();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h1 id="titleHistory" class="pos-title">Historial de compras</h1>

                    <button type="button" class="btn btn-info m-3" name="btn-range" id="btn-range" onclick="Clear('tableBody');">Seleccionar periodo</button>

                    <script>
                        $('button[name="btn-range"]').daterangepicker();
                        $('button[name="btn-range"]').on('apply.daterangepicker', function(ev, picker) {
                            if(sessionStorage.getItem("selectedBranchId") == null){
                                alert("Debes seleccionar una sucursal primero");
                            }
                            var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var url = 'http://192.168.100.2/purchases?';
                            var aver = url + new URLSearchParams({
                                linkTo: 'date_created_purchase',
                                between1: picker.startDate.format('YYYY-MM-DD'),
                                between2: picker.endDate.format('YYYY-MM-DD'),
                                filterIn: sessionStorage.getItem("selectedBranchId"),
                                filerTo: 'id_branch_purchase',
                                select: 'id_purchase,id_branch_purchase,id_supplier_purchase,id_user_purchase,id_employee_purchase,total_purchase,total_quantity_purchase,id_payment_type_purchase,name_user,name_employee,name_branch,name_payment_type,date_created_purchase',
                                rel: 'purchases,users,employees,branches,payment_types',
                                relType: 'purchase,user,employee,branch,payment_type'
                            });
                            fetch(url + new URLSearchParams({
                                linkTo: 'date_created_purchase',
                                between1: picker.startDate.format('YYYY-MM-DD'),
                                between2: picker.endDate.format('YYYY-MM-DD'),
                                filterIn: sessionStorage.getItem("selectedBranchId"),
                                filerTo: 'id_branch_purchase',
                                select: 'id_purchase,id_branch_purchase,id_supplier_purchase,id_user_purchase,id_employee_purchase,total_purchase,total_quantity_purchase,id_payment_type_purchase,name_user,name_employee,name_branch,name_payment_type,date_created_purchase',
                                rel: 'purchases,users,employees,branches,payment_types',
                                relType: 'purchase,user,employee,branch,payment_type'
                            }), {
                                    method: 'GET',
                                    headers: {
                                        'Accept': '*/*',
                                        'Access-Control-Allow-Origin': '*',
                                        'authorization': token
                                    }
                                })
                                .then((response) => response.json())
                                .then(data => {
                                    if (typeof data.status !== 'undefined') {
                                        if (data.status == 200) {
                                            const html = data.result
                                                .map(purchase => {
                                                    var empName = purchase.name_employee;
                                                    if (purchase.id_employee_purchase == 1) {
                                                        empName = purchase.name_user;
                                                    }
                                                    return `<tr>
                                                            <td><button type="button" class="btn btn-info m-3" id="purchase${purchase.id_purchase}" data-toggle="modal" data-target="#modalCart" onclick="GetPurchaseDetail(this.id);">Información</button></td>
                                                            <td>Compra</td>
                                                            <td>${purchase.total_quantity_purchase}</td>
                                                            <td>$${purchase.total_purchase}</td>
                                                            <td>${empName}</td>
                                                            <td>${purchase.date_created_purchase}</td>
                                                            </tr>`
                                                })
                                                .join("")
                                            document.getElementById("titleHistory").textContent = "Historial de compras (del " + picker.startDate.format('YYYY-MM-DD') + " al " + picker.endDate.format('YYYY-MM-DD') + ")";
                                            document.querySelector("#tableBody").insertAdjacentHTML("afterbegin", html);
                                        } else if (data.status == 404) {
                                            document.getElementById("titleHistory").textContent = "Historial de compras (sin compras en el periodo seleccionado)";
                                        }
                                    }
                                })

                        });
                    </script>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class=" pos-title m-0 font-weight-bold" style="color: #4e0110">Historial de compras</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Detalle</th>
                                            <th>Nombre</th>
                                            <th>No. de Productos</th>
                                            <th>Total</th>
                                            <th>Empleado</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Detalle</th>
                                            <th>Nombre</th>
                                            <th>No. de Productos</th>
                                            <th>Total</th>
                                            <th>Empleado</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="tableBody">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>

        </div>


        <!-- Modal: modalCart -->
        <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Detalle de compra</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody id="modalTableBody">
                                <script>
                                    function GetPurchaseDetail(purchaseId) {
                                        var id = purchaseId.replace("purchase", "");
                                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                                        var url = 'http://192.168.100.2/purchases_item?';
                                        // console.log(token);
                                        fetch(url + new URLSearchParams({
                                                linkTo: 'id_purchase_purchase_item',
                                                equalTo: id,
                                                select: 'id_purchase_item,quantity_purchase_item,total_purchase_item,date_created_purchase_item,date_updated_purchase_item,id_purchase,id_branch_purchase,id_supplier_purchase,id_user_purchase,id_employee_purchase,total_purchase,total_quantity_purchase,id_payment_type_purchase,code_item,name_item,purchase_price_item,stock_item,purchase_price_item,stock_item,id_category_item,id_supplier_item,id_item',
                                                rel: 'purchases_item,purchases,items',
                                                relType: 'purchase_item,purchase,item',
                                                orderBy: 'date_created_purchase'
                                            }), {
                                                method: 'GET',
                                                headers: {
                                                    'Accept': '*/*',
                                                    'Access-Control-Allow-Origin': '*',
                                                    'authorization': token
                                                }
                                            })
                                            .then((response) => response.json())
                                            .then(data => {
                                                if (typeof data.status !== 'undefined') {
                                                    if (data.status == 200) {
                                                        const html = data.result
                                                            .map((item, index) => {
                                                                return `<tr>
                                                                        <th scope="row">${index + 1}</th>
                                                                        <td>${item.name_item}</td>
                                                                        <td>$${item.purchase_price_item}</td>
                                                                        <td>${item.quantity_purchase_item}</td>
                                                                        <td>$${item.total_purchase_item}</td>
                                                                        </tr>`
                                                            })
                                                            .join("")
                                                        Clear("modalTableBody");
                                                        document.querySelector("#modalTableBody").insertAdjacentHTML("afterbegin", html);
                                                    } else if (data.status == 404) {
                                                        Clear("modalTableBody");
                                                        const html = `<tr>
                                                        <td>No se encontraron los productos</td>
                                                        </tr>`
                                                        document.querySelector("#modalTableBody").insertAdjacentHTML("afterbegin", html);
                                                    }
                                                }
                                            })
                                    };
                                </script>


                            </tbody>
                        </table>
                        
                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                        <button type="button" class="btn bg-pos-primary text-white" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal: modalCart -->


        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Moment -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />


        <script type="text/javascript" src="js/main.js"></script>

</body>

</html>