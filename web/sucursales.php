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

    <title>Sucursales</title>
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
            <li class="nav-item active">
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

                    <h1 class="pos-title">Sucursales</h1>

                    <button type="button" class="btn btn-success m-3" id="" data-toggle="modal" data-target="#modalEmployeeForm" onclick="GetInfo('add');">Añadir Sucursal</button>

                    <table class="table" id="branchesTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody id="tableBody">


                        </tbody>
                    </table>

                    <script>
                        let table = $('#branchesTable').DataTable({
                            paging: false,
                            language: {
                                url: '//cdn.datatables.net/plug-ins/a5734b29083/i18n/Spanish.json'
                            }
                        });



                        window.onload = GetBranchesList();

                        function GetBranchesList() {
                            table.clear();
                            // if (sessionStorage.getItem("selectedBranchId") == null) {
                            //     alert("Debes seleccionar una sucursal primero");
                            //     return;
                            // }
                            // var branchId = sessionStorage.getItem("selectedBranchId");
                            var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var url = 'http://192.168.100.2/branches?';
                            // console.log(token);
                            fetch(url + new URLSearchParams({
                                    linkTo: 'id_user_branch',
                                    equalTo: userId,
                                    rel: 'branches,locations',
                                    relType: 'branch,location'
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
                                                .map(branch => {
                                                    return `<tr>
                                                                <td>${branch.name_branch}</td>
                                                                <td>${branch.city_location} ${branch.estate_location}, ${branch.country_location}<br>${branch.address_location}</td>
                                                                <td>${branch.phone_number_branch}</td>
                                                                <td>${branch.description_branch}</td>
                                                                <td>
                                                                    <button id="deletebranch${branch.id_branch}" class="btn btn-danger m-1" onclick="DeleteEmployee(${branch.id_branch});">Eliminar</button>
                                                                    <button id="editbranch${branch.id_branch}" class="btn btn-warning m-1" data-toggle="modal" data-target="#modalEmployeeForm" onclick="GetInfo('edit',${branch.id_branch});">Editar</button>
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
                <div id="modalEmployeeForm" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title">Sucursal</h1>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="branch-name" class="control-label">Nombre de la sucursal</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-shop"></i></div>
                                            </div>
                                            <input id="branch-name" type="text" class="form-control" placeholder="Nombre de la sucursal">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="branch-country" class="control-label">País</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-earth-americas"></i></div>
                                            </div>
                                            <input id="branch-country" type="text" class="form-control" placeholder="País">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="branch-state" class="control-label">Estado</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-map-location-dot"></i></div>
                                            </div>
                                            <input id="branch-state" type="email" class="form-control" placeholder="Estado">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="branch-city" class="control-label">Ciudad</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-city"></i></div>
                                            </div>
                                            <input id="branch-city" type="text" class="form-control" placeholder="Ciudad">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="branch-address" class="control-label">Dirección</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-map-pin"></i></div>
                                            </div>
                                            <input id="branch-address" type="text" class="form-control" placeholder="Dirección">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="branch-phone" class="control-label">Teléfono</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>
                                            </div>
                                            <input id="branch-phone" type="text" class="form-control" placeholder="Teléfono">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="branch-description" class="control-label">Descripción</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-align-left"></i></div>
                                            </div>
                                            <textarea class="form-control" id="branch-description" rows="3" placeholder="Descripción"></textarea>
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
                    function GetInfo(action, branchId = 0) {

                        if (action == 'add') {
                            document.getElementById("branch-name").value = '';
                            document.getElementById("branch-country").value = '';
                            document.getElementById("branch-state").value = '';
                            document.getElementById("branch-city").value = '';
                            document.getElementById("branch-address").value = '';
                            document.getElementById("branch-phone").value = '';
                            document.getElementById("branch-description").value = '';

                            if (!valid) {
                                alert("La acción no puede continuar");
                                location.reload();
                                return;
                            }
                        } else {

                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                            var url = 'http://192.168.100.2/branches?';
                            fetch(url + new URLSearchParams({
                                    linkTo: 'id_branch',
                                    equalTo: branchId,
                                    rel: 'branches,locations',
                                    relType: 'branch,location'
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
                                            document.getElementById("branch-name").value = data.result[0].name_branch;
                                            document.getElementById("branch-country").value = data.result[0].country_location;
                                            document.getElementById("branch-state").value = data.result[0].estate_location;
                                            document.getElementById("branch-city").value = data.result[0].city_location;
                                            document.getElementById("branch-address").value = data.result[0].address_location;
                                            document.getElementById("branch-phone").value = data.result[0].phone_number_branch;
                                            document.getElementById("branch-description").value = data.result[0].description_branch;
                                        }
                                    }
                                })

                        }

                        document.getElementById("btnModal").onclick = function() {
                            ActionBranch(action, branchId);
                        };

                    }


                    function ActionBranch(action, branchId = 0) {
                        const name = document.getElementById("branch-name").value;
                        const country = document.getElementById("branch-country").value;
                        const estate = document.getElementById("branch-state").value;
                        const city = document.getElementById("branch-city").value;
                        const address = document.getElementById("branch-address").value;
                        const phone = document.getElementById("branch-phone").value;
                        const description = document.getElementById("branch-description").value;

                        var error = false;
                        var errors = '';
                        if (name == '') {
                            errors += 'Debes introducir el nombre de la sucursal\n';
                            error = true;
                        }
                        if (country == '') {
                            errors += 'Debes introducir el país\n';
                            error = true;
                        }

                        if (estate == '') {
                            errors += 'Debes introducir el estado\n';
                            error = true;
                        }

                        if (city == '') {
                            errors += 'Debes introducir la ciudad\n';
                            error = true;
                        }

                        if (address == 0) {
                            errors += 'Debes introducir la dirección\n';
                            error = true;
                        }

                        if (phone == 0) {
                            errors += 'Debes introducir el número de teléfono\n';
                            error = true;
                        }

                        if (error) {
                            alert(errors);
                        } else if (action == 'add') {
                            AddBranch(name, country, estate, city, address, phone, description);
                        } else {
                            UpdateBranch(name, country, estate, city, address, phone, description, branchId);
                        }
                    }

                    

                    function UpdateBranch(name, country, estate, city, address, phone, description, branchId = 0) {

                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        // var branchId = sessionStorage.getItem("selectedBranchId");
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var url = 'http://192.168.100.2/branches?';
                        fetch(url + new URLSearchParams({
                                id: branchId,
                                nameId: 'id_branch'
                            }), {
                                method: 'PUT',
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                    'Accept': '*/*',
                                    'authorization': token
                                },
                                body: new URLSearchParams({
                                    id_branch_branch: branch,
                                    code_branch: code,
                                    name_branch: name,
                                    email_branch: mail,
                                    password_branch: pass,
                                    phone_number_branch: phone,
                                    id_role_branch: role
                                })
                            })
                            .then((response) => response.json())
                            .then(data => {
                                if (typeof data.status !== 'undefined') {
                                    if (data.status == 200) {
                                        alert('Se modificó el empleado');
                                        clearInterval(intervalId);
                                        $('#modalEmployeeForm').modal('hide');
                                        GetBranchesList();
                                    }
                                }
                            })

                    }

                    function AddBranch(name, code, mail, pass, phone, branch, role) {
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        var branchId = sessionStorage.getItem("selectedBranchId");
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var url = 'http://192.168.100.2/branchs?';
                        fetch(url + new URLSearchParams({
                                action: 'register'
                            }), {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                    'Accept': '*/*',
                                    'authorization': token
                                },
                                body: new URLSearchParams({
                                    id_user_branch: userId,
                                    id_branch_branch: branch,
                                    code_branch: code,
                                    name_branch: name,
                                    email_branch: mail,
                                    password_branch: pass,
                                    phone_number_branch: phone,
                                    id_role_branch: role,
                                    suffix: 'branch'
                                })
                            })
                            .then((response) => response.json())
                            .then(data => {
                                alert(JSON.stringify(data));
                                if (typeof data.status !== 'undefined') {
                                    if (data.status == 200) {
                                        alert('Se añadió el empleado');
                                        $('#modalEmployeeForm').modal('hide');
                                        // clearInterval(intervalId);
                                        GetBranchesList();
                                    }
                                }
                            })
                    }

                    function DeleteEmployee(branchId) {
                        if (confirm("¿Deseas eliminar este empleado?")) {
                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var branchId = sessionStorage.getItem("selectedBranchId");
                            var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                            var url = 'http://192.168.100.2/branchs?';
                            fetch(url + new URLSearchParams({
                                    id: branchId,
                                    nameId: 'id_branch'
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
                                            alert('Se eliminó el empleado');
                                            GetBranchesList();
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