<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/styles.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/shop.ico">

    <!-- Custom fonts for this template-->

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eb7c5ea469.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Tables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script src="js/auth.js"></script>

    <title>Categorías</title>
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
            <li class="nav-item">
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
            <li class="nav-item active">
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
                        <button class="btn btn-secondary dropdown-toggle bg-pos-primary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                    <h1 class="pos-title">Categorías</h1>

                    <button type="button" class="btn btn-success m-3" id="" data-toggle="modal" data-target="#modalCategoryForm" onclick="GetInfo('add');">Añadir Categoría</button>

                    <table class="table" id="categoriesTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody id="tableBody">


                        </tbody>
                    </table>

                    <script>
                        let table = $('#categoriesTable').DataTable({
                            paging: false,
                            language: {
                                url: '//cdn.datatables.net/plug-ins/a5734b29083/i18n/Spanish.json'
                            }
                        });

                        window.onload = GetCategories();

                        function GetCategories() {
                            table.clear();
                            // if (sessionStorage.getItem("selectedBranchId") == null) {
                            //     alert("Debes seleccionar una sucursal primero");
                            //     return;
                            // }
                            // var branchId = sessionStorage.getItem("selectedBranchId");
                            var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var url = 'http://192.168.100.2/categories?';
                            // console.log(token);
                            fetch(url + new URLSearchParams({
                                    linkTo: 'id_user_category',
                                    equalTo: userId,
                                    rel: 'categories,users',
                                    relType: 'category,user'
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
                                                .map(category => {
                                                    return `<tr>
                                                                <td>${category.name_category}</td>
                                                                <td>${category.description_category}</td>
                                                                <td>
                                                                    <button id="deleteitem${category.id_category}" class="btn btn-danger m-1" onclick="DeleteCategory(${category.id_category});">Eliminar</button>
                                                                    <button id="edititem${category.id_category}" class="btn btn-warning m-1" data-toggle="modal" data-target="#modalCategoryForm" onclick="GetInfo('edit',${category.id_category});">Editar</button>
                                                                </td>
                                                            </tr>`
                                                })
                                                .join("")
                                            // document.querySelector("#tableBody").insertAdjacentHTML('afterbegin', html);
                                            table.rows.add($(html)).draw();
                                        }
                                    }
                                })
                        }
                    </script>

                </div>


                <!-- Modal HTML Markup -->
                <div id="modalCategoryForm" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title">Categoría</h1>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="category-name" class="control-label">Nombre de la categoría</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-boxes-stacked"></i></div>
                                            </div>
                                            <input id="category-name" type="text" class="form-control" placeholder="Nombre de la categoría">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="category-description" class="control-label">Descripción de la categoría</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-regular fa-pen-to-square"></i></div>
                                            </div>
                                            <textarea class="form-control" id="category-description" rows="3" placeholder="Descripción de la categoría"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div>
                                            <button type="button" class="btn btn-success" id="btnModal">
                                                Confirmar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <script>
                    async function GetInfo(action, categoryId = 0) {

                        if (action == 'add') {
                            document.getElementById("category-name").value = '';
                            document.getElementById("category-description").value = '';

                            // if (sessionStorage.getItem("selectedBranchId") == null) {
                            //     alert("La acción no puede continuar, selecciona una sucursal primero");
                            //     return;
                            // }
                        } else {
                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            // var branchId = sessionStorage.getItem("selectedBranchId");
                            var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                            var url = 'http://192.168.100.2/categories?';
                            fetch(url + new URLSearchParams({
                                    linkTo: 'id_category',
                                    equalTo: categoryId
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
                                            document.getElementById("category-name").value = data.result[0].name_category;
                                            document.getElementById("category-description").value = data.result[0].description_category;
                                        }
                                    }
                                })
                        }

                        document.getElementById("btnModal").onclick = function() {
                            ActionCategory(action, categoryId);
                        };

                    }

                    function ActionCategory(action, categoryId = 0) {
                        const name = document.getElementById("category-name").value;
                        const description = document.getElementById("category-description").value;

                        var error = false;
                        var errors = '';
                        if (name == '') {
                            errors += 'Debes introducir el nombre de la categoría\n';
                            error = true;
                        }
                        if (description == '') {
                            errors += 'Debes introducir la descripción de la categoría\n';
                            error = true;
                        }

                        if (error) {
                            alert(errors);
                        } else if (action == 'add') {
                            AddItem(name, description);
                        } else {
                            UpdateItem(name, description, categoryId);
                        }
                    }

                    function UpdateItem(name, description, categoryId) {

                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        // var branchId = sessionStorage.getItem("selectedBranchId");
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var url = 'http://192.168.100.2/categories?';
                        fetch(url + new URLSearchParams({
                                id: categoryId,
                                nameId: 'id_category'
                            }), {
                                method: 'PUT',
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                    'Accept': '*/*',
                                    'authorization': token
                                },
                                body: new URLSearchParams({
                                    name_category: name,
                                    description_category: description
                                })
                            })
                            .then((response) => response.json())
                            .then(data => {
                                if (typeof data.status !== 'undefined') {
                                    if (data.status == 200) {
                                        alert('Se modificó la categoría');
                                        GetCategories();
                                        $('#modalCategoryForm').modal('hide');
                                    }
                                }
                            })

                    }

                    function AddItem(name, description) {
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        // var branchId = sessionStorage.getItem("selectedBranchId");
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var url = 'http://192.168.100.2/categories';
                        fetch(url, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                    'Accept': '*/*',
                                    'authorization': token
                                },
                                body: new URLSearchParams({
                                    id_user_category: userId,
                                    name_category: name,
                                    description_category: description
                                })
                            })
                            .then((response) => response.json())
                            .then(data => {
                                if (typeof data.status !== 'undefined') {
                                    if (data.status == 200) {
                                        alert("Se añadió la categoría");
                                        GetCategories();
                                        $('#modalCategoryForm').modal('hide');
                                    }
                                }
                            })
                    }

                    function DeleteCategory(categoryId) {
                        if (confirm("¿Deseas eliminar esta categoría?")) {
                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            // var branchId = sessionStorage.getItem("selectedBranchId");
                            var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                            var url = 'http://192.168.100.2/categories?';
                            fetch(url + new URLSearchParams({
                                    id: categoryId,
                                    nameId: 'id_category'
                                }), {
                                    method: 'DELETE',
                                    headers: {
                                        'Content-Type': 'application/x-www-form-urlencoded',
                                        'Accept': '*/*',
                                        'authorization': token
                                    }
                                })
                                .then((response) => response.json())
                                .then(data => {
                                    if (typeof data.status !== 'undefined') {
                                        if (data.status == 200) {
                                            alert('Se eliminó la categoría');
                                            GetCategories();
                                        }
                                    }
                                })
                        }

                    }
                </script>

                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script type="text/javascript" src="js/main.js"></script>


</body>

</html>