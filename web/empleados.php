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

    <title>Empleados</title>
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
            <li class="nav-item active">
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

                    <h1 class="pos-title">Empleados</h1>

                    <button type="button" class="btn btn-success m-3" id="" data-toggle="modal" data-target="#modalEmployeeForm" onclick="GetInfo('add');">Añadir Empleado</button>

                    <table class="table" id="employeesTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Código</th>
                                <th>Correo Electrónico</th>
                                <th>Teléfono</th>
                                <th>Sucursal</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Código</th>
                                <th>Correo Electrónico</th>
                                <th>Teléfono</th>
                                <th>Sucursal</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody id="tableBody">


                        </tbody>
                    </table>

                    <script>
                        let table = $('#employeesTable').DataTable({
                            paging: false,
                            language: {
                                url: '//cdn.datatables.net/plug-ins/a5734b29083/i18n/Spanish.json'
                            }
                        });



                        window.onload = GetEmployees();

                        function GetEmployees() {
                            table.clear();
                            // if (sessionStorage.getItem("selectedBranchId") == null) {
                            //     alert("Debes seleccionar una sucursal primero");
                            //     return;
                            // }
                            // var branchId = sessionStorage.getItem("selectedBranchId");
                            var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var url = 'http://192.168.100.2/employees?';
                            // console.log(token);
                            fetch(url + new URLSearchParams({
                                    linkTo: 'id_user_employee',
                                    equalTo: userId,
                                    rel: 'employees,roles,branches',
                                    relType: 'employee,role,branch',
                                    select: 'id_employee,id_user_employee,id_branch_employee,id_role_employee,code_employee,name_employee,email_employee,phone_number_employee,name_role,name_branch'
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
                                                .map(employee => {
                                                    return `<tr>
                                                                <td>${employee.name_employee}</td>
                                                                <td>${employee.code_employee}</td>
                                                                <td>${employee.email_employee}</td>
                                                                <td>${employee.phone_number_employee}</td>
                                                                <td>${employee.name_branch}</td>
                                                                <td>${employee.name_role}</td>
                                                                <td>
                                                                    <button id="deleteemployee${employee.id_employee}" class="btn btn-danger m-1" onclick="DeleteEmployee(${employee.id_employee});">Eliminar</button>
                                                                    <button id="editemployee${employee.id_employee}" class="btn btn-warning m-1" data-toggle="modal" data-target="#modalEmployeeForm" onclick="GetInfo('edit',${employee.id_employee});">Editar</button>
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
                                <h1 class="modal-title">Empleado</h1>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="employee-name" class="control-label">Nombre del empleado</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-person"></i></div>
                                            </div>
                                            <input id="employee-name" type="text" class="form-control" placeholder="Nombre del empleado">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="employee-code" class="control-label">Código del empleado</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-barcode"></i></div>
                                            </div>
                                            <input id="employee-code" type="text" class="form-control" placeholder="Código del empleado">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="employee-mail" class="control-label">Correo Electrónico</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                                            </div>
                                            <input id="employee-mail" type="email" class="form-control" placeholder="Correo del empleado">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="employee-phone" class="control-label">Número de teléfono</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>
                                            </div>
                                            <input id="employee-phone" type="text" class="form-control" placeholder="Teléfono del empleado">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="employee-pass" class="control-label">Contraseña</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                                            </div>
                                            <input id="employee-pass" type="password" class="form-control" placeholder="Contraseña">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="employee-cpass" class="control-label">Confirma la contraseña</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                                            </div>
                                            <input id="employee-cpass" type="password" class="form-control" placeholder="Confirma la contraseña">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="employee-branch" class="control-label">Sucursal</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-shop"></i></div>
                                            </div>
                                            <select id="employee-branch" class="form-control">
                                                <option id="suc0">Selecciona una sucursal</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="employee-role" class="control-label">Rol</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-person-military-to-person"></i></div>
                                            </div>
                                            <select id="employee-role" class="form-control">
                                                <option id='rol0'>Selecciona un rol</option>
                                            </select>
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
                    intervalId = setInterval(() => {
                        GetCodes();
                    }, 1000);
                    var intervalId = 0;

                    async function GetInfo(action, employeeId = 0) {


                        while (document.getElementById("employee-branch").lastChild.id !== 'suc0') {
                            document.getElementById("employee-branch").removeChild(document.getElementById("employee-branch").lastChild);
                        }
                        while (document.getElementById("employee-role").lastChild.id !== 'rol0') {
                            document.getElementById("employee-role").removeChild(document.getElementById("employee-role").lastChild);
                        }

                        await new Promise(r => setTimeout(r, 100));
                        var valid = GetBranchesOptions() && GetRoles();
                        await new Promise(r => setTimeout(r, 100));
                        // Clear('employee-role');
                        // Clear('employee-branch');
                        // .insertAdjacentHTML("afterbegin", '<option id="cat0">Selecciona una categoría</option>');
                        // document.querySelector("#employee-role").insertAdjacentHTML("afterbegin", '<option id="sup0">Selecciona un proveedor</option>');
                        document.getElementById("employee-pass").value = '';
                        document.getElementById("employee-cpass").value = '';

                        if (action == 'add') {
                            document.getElementById("employee-name").value = '';
                            document.getElementById("employee-code").value = '';
                            document.getElementById("employee-mail").value = '';
                            document.getElementById("employee-phone").value = '';

                            if (!valid) {
                                alert("La acción no puede continuar");
                                location.reload();
                                return;
                            }
                        } else {

                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var branchId = sessionStorage.getItem("selectedBranchId");
                            var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                            var url = 'http://192.168.100.2/employees?';
                            fetch(url + new URLSearchParams({
                                    linkTo: 'id_employee',
                                    equalTo: employeeId
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
                                            document.getElementById("employee-name").value = data.result[0].name_employee;
                                            document.getElementById("employee-code").value = data.result[0].code_employee;
                                            document.getElementById("employee-mail").value = data.result[0].email_employee;
                                            document.getElementById("employee-phone").value = data.result[0].phone_number_employee;
                                            document.getElementById("suc" + data.result[0].id_branch_employee).selected = true;
                                            document.getElementById("rol" + data.result[0].id_role_employee).selected = true;
                                        }
                                    }
                                })

                        }
                        ResetCode();
                        document.getElementById("btnModal").onclick = function() {
                            ActionItem(action, employeeId);
                        };

                    }


                    function ResetCode() {
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user']
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        var query = '?id=' + userId + 'nameId=id_user_code';
                        var url = 'http://192.168.100.2/codes?';
                        // console.log(token);
                        fetch(url + new URLSearchParams({
                                id: userId,
                                nameId: 'id_user_code'
                            }), {
                                method: 'PUT',
                                headers: {
                                    'authorization': token,
                                    'Content-Type': 'application/x-www-form-urlencoded'
                                },
                                body: new URLSearchParams({
                                    'code_code': ''
                                })
                            })
                            .then((response) => response.json())
                            .then(data => {})
                    }

                    function GetCodes() {
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        var url = 'http://192.168.100.2/codes?';
                        // console.log(token);
                        fetch(url + new URLSearchParams({
                                linkTo: 'id_user_code',
                                equalTo: JSON.parse(sessionStorage.getItem("user"))['id_user'],
                                select: 'code_code'
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
                                    if (data.status == 200 && data.result[0].code_code != '') {
                                        document.getElementById('employee-code').value = data.result[0].code_code;
                                        table.search.value = data.result[0].code_code;
                                        table.search(data.result[0].code_code).draw();
                                        ResetCode();
                                    }
                                }
                            })
                    }


                    function GetBranchesOptions() {
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        var url = 'http://192.168.100.2/branches?';
                        // console.log(token);
                        fetch(url + new URLSearchParams({
                                linkTo: 'id_user_branch',
                                equalTo: userId,
                                rel: 'branches,users',
                                relType: 'branch,user'
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
                                            .map((branch, index) => {
                                                return `<option id=suc${branch.id_branch}>${branch.name_branch}</option>`
                                            })
                                            .join("")
                                        document.querySelector("#employee-branch").insertAdjacentHTML("beforeend", html);
                                        return true;
                                    } else if (data.status == 404) {
                                        alert("No tienes sucursales creadas");
                                        return false;
                                    }
                                }
                            })
                        return true;
                    }

                    function GetRoles() {
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        var url = 'http://192.168.100.2/roles?';
                        // console.log(token);
                        fetch(url + new URLSearchParams({
                                linkTo: 'id_user_role',
                                equalTo: 1,
                                rel: 'roles,users',
                                relType: 'role,user'
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
                                            .map((role, index) => {
                                                if (role.id_role != 1) {
                                                    return `<option id=rol${role.id_role}>${role.name_role}</option>`
                                                }
                                            })
                                            .join("")
                                        document.querySelector("#employee-role").insertAdjacentHTML("beforeend", html);
                                        return true;
                                    } else if (data.status == 404) {
                                        alert("No tienes roles creados");
                                        return false;
                                    }
                                }
                            })
                        return true;
                    }

                    function ActionItem(action, employeeId = 0) {
                        const name = document.getElementById("employee-name").value;
                        const code = document.getElementById("employee-code").value;
                        const mail = document.getElementById("employee-mail").value;
                        const phone = document.getElementById("employee-phone").value;
                        const pass = document.getElementById("employee-pass").value;
                        const cpass = document.getElementById("employee-cpass").value;

                        const sucOptions = document.getElementById("employee-branch").options;
                        const branch = sucOptions[sucOptions.selectedIndex].id.replace('suc', '');

                        const rolOptions = document.getElementById("employee-role").options;
                        const role = rolOptions[rolOptions.selectedIndex].id.replace('rol', '');

                        var error = false;
                        var errors = '';
                        if (name == '') {
                            errors += 'Debes introducir el nombre del empleado\n';
                            error = true;
                        }
                        if (code == '') {
                            errors += 'Debes introducir el código del empleado\n';
                            error = true;
                        }

                        if (mail == '') {
                            errors += 'Debes introducir el correo del empleado\n';
                            error = true;
                        }

                        if (phone == '') {
                            errors += 'Debes introducir el número de teléfono\n';
                            error = true;
                        }

                        if (branch == 0) {
                            errors += 'Debes seleccionar una sucursal\n';
                            error = true;
                        }

                        if (role == 0) {
                            errors += 'Debes seleccionar un rol\n';
                            error = true;
                        }

                        var changePass = false;
                        if (pass !== '' || cpass !== '') {
                            //input
                            if (pass !== cpass) {
                                errors += 'Las contraseñas no coinciden\n';
                                error = true;
                            } else {
                                if (ValidatePassword(pass)) {
                                    changePass = true;
                                } else {
                                    errors += 'La contraseña no es segura\n';
                                    error = true;
                                }
                            }
                        }

                        if (error) {
                            alert(errors);
                        } else if (action == 'add') {
                            AddEmployee(name, code, mail, pass, phone, branch, role);
                        } else {
                            if (changePass) {
                                UpdateEmployee(name, code, mail, phone, branch, role, employeeId, pass);
                            } else {
                                UpdateEmployee(name, code, mail, phone, branch, role, employeeId);
                            }
                        }
                    }

                    function ValidatePassword(pw) {

                        return /[A-Z]/.test(pw) &&
                            /[a-z]/.test(pw) &&
                            /[0-9]/.test(pw) &&
                            /[^A-Za-z0-9]/.test(pw) &&
                            pw.length >= 8;

                    }

                    function UpdateEmployee(name, code, mail, phone, branch, role, employeeId, pass = '') {

                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        var branchId = sessionStorage.getItem("selectedBranchId");
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var url = 'http://192.168.100.2/employees?';
                        var body;
                        if (pass == '') {
                            body = new URLSearchParams({
                                id_branch_employee: branch,
                                code_employee: code,
                                name_employee: name,
                                email_employee: mail,
                                phone_number_employee: phone,
                                id_role_employee: role
                            })
                        } else {
                            body = new URLSearchParams({
                                id_branch_employee: branch,
                                code_employee: code,
                                name_employee: name,
                                email_employee: mail,
                                password_employee: pass,
                                phone_number_employee: phone,
                                id_role_employee: role
                            })
                        }
                        fetch(url + new URLSearchParams({
                                id: employeeId,
                                nameId: 'id_employee'
                            }), {
                                method: 'PUT',
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                    'Accept': '*/*',
                                    'authorization': token
                                },
                                body: body
                            })
                            .then((response) => response.json())
                            .then(data => {
                                if (typeof data.status !== 'undefined') {
                                    if (data.status == 200) {
                                        alert('Se modificó el empleado');
                                        clearInterval(intervalId);
                                        $('#modalEmployeeForm').modal('hide');
                                        GetEmployees();
                                    }
                                }
                            })

                    }

                    function AddEmployee(name, code, mail, pass, phone, branch, role) {
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        var branchId = sessionStorage.getItem("selectedBranchId");
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var url = 'http://192.168.100.2/employees?';
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
                                    id_user_employee: userId,
                                    id_branch_employee: branch,
                                    code_employee: code,
                                    name_employee: name,
                                    email_employee: mail,
                                    password_employee: pass,
                                    phone_number_employee: phone,
                                    id_role_employee: role,
                                    suffix: 'employee'
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
                                        GetEmployees();
                                    }
                                }
                            })
                    }

                    function DeleteEmployee(employeeId) {
                        if (confirm("¿Deseas eliminar este empleado?")) {
                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var branchId = sessionStorage.getItem("selectedBranchId");
                            var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                            var url = 'http://192.168.100.2/employees?';
                            fetch(url + new URLSearchParams({
                                    id: employeeId,
                                    nameId: 'id_employee'
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
                                            GetEmployees();
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