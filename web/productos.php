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

    <title>Productos</title>
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
            <li class="nav-item active">
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

                    <h1 class="pos-title">Productos</h1>

                    <button type="button" class="btn btn-success m-3" id="" data-toggle="modal" data-target="#modalItemForm" onclick="GetInfo('add');">Añadir Producto</button>

                    <table class="table" id="itemsTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Precio Compra</th>
                                <th>Precio Venta</th>
                                <th>Stock</th>
                                <th>Categoría</th>
                                <th>Proveedor</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Precio Compra</th>
                                <th>Precio Venta</th>
                                <th>Stock</th>
                                <th>Categoría</th>
                                <th>Proveedor</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody id="tableBody">


                        </tbody>
                    </table>

                    <script>
                        let table = $('#itemsTable').DataTable({
                            paging: false,
                            language: {
                                url: '//cdn.datatables.net/plug-ins/a5734b29083/i18n/Spanish.json'
                            }
                        });



                        window.onload = GetItems();

                        function GetItems() {
                            table.clear();
                            if (sessionStorage.getItem("selectedBranchId") == null) {
                                alert("Debes seleccionar una sucursal primero");
                                return;
                            }
                            var branchId = sessionStorage.getItem("selectedBranchId");
                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var url = 'http://192.168.100.2/items?';
                            // console.log(token);
                            fetch(url + new URLSearchParams({
                                    linkTo: 'id_branch_item',
                                    equalTo: branchId,
                                    rel: 'items,branches,categories,suppliers',
                                    relType: 'item,branch,category,supplier'
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
                                                .map(item => {
                                                    return `<tr>
                                                                <td>${item.code_item}</td>
                                                                <td>${item.name_item}</td>
                                                                <td>$${item.purchase_price_item}</td>
                                                                <td>$${item.sale_price_item}</td>
                                                                <td>${item.stock_item}</td>
                                                                <td>${item.name_category}</td>
                                                                <td>${item.name_supplier}</td>
                                                                <td>
                                                                    <button id="deleteitem${item.id_item}" class="btn btn-danger m-1" onclick="DeleteItem(${item.id_item});">Eliminar</button>
                                                                    <button id="edititem${item.id_item}" class="btn btn-warning m-1" data-toggle="modal" data-target="#modalItemForm" onclick="GetInfo('edit',${item.id_item});">Editar</button>
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
                <div id="modalItemForm" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title">Producto</h1>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="item-name" class="control-label">Nombre del producto</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-basket-shopping"></i></div>
                                            </div>
                                            <input id="item-name" type="text" class="form-control" placeholder="Nombre del producto">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="item-code" class="control-label">Código del producto</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-barcode"></i></div>
                                            </div>
                                            <input id="item-code" type="text" class="form-control" placeholder="Código del producto">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="item-sale-price" class="control-label">Precio de Venta</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-tag"></i></div>
                                            </div>
                                            <input id="item-sale-price" type="number" class="form-control" placeholder="Precio de venta">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="item-purchase-price" class="control-label">Precio de Compra</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-money-check-dollar"></i></div>
                                            </div>
                                            <input id="item-purchase-price" type="number" class="form-control" placeholder="Precio de compra">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="item-stock" class="control-label">Existencias</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-calculator"></i></div>
                                            </div>
                                            <input id="item-stock" type="number" class="form-control" placeholder="Existencias">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="item-category" class="control-label">Categoría</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-boxes-stacked"></i></div>
                                            </div>
                                            <select id="item-category" class="form-control">
                                                <option id="cat0">Selecciona una categoría</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="item-supplier" class="control-label">Proveedor</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa-solid fa-people-carry-box"></i></div>
                                            </div>
                                            <select id="item-supplier" class="form-control">
                                                <option id='sup0'>Selecciona un proveedor</option>
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

                    async function GetInfo(action, itemId = 0) {


                        while (document.getElementById("item-category").lastChild.id !== 'cat0') {
                            document.getElementById("item-category").removeChild(document.getElementById("item-category").lastChild);
                        }
                        while (document.getElementById("item-supplier").lastChild.id !== 'sup0') {
                            document.getElementById("item-supplier").removeChild(document.getElementById("item-supplier").lastChild);
                        }

                        await new Promise(r => setTimeout(r, 100));
                        var valid = GetCategories() && GetSuppliers();
                        await new Promise(r => setTimeout(r, 100));
                        // Clear('item-supplier');
                        // Clear('item-category');
                        // .insertAdjacentHTML("afterbegin", '<option id="cat0">Selecciona una categoría</option>');
                        // document.querySelector("#item-supplier").insertAdjacentHTML("afterbegin", '<option id="sup0">Selecciona un proveedor</option>');

                        if (action == 'add') {
                            document.getElementById("item-name").value = '';
                            document.getElementById("item-code").value = '';
                            document.getElementById("item-sale-price").value = '';
                            document.getElementById("item-purchase-price").value = '';
                            document.getElementById("item-stock").value = '';

                            if (!valid) {
                                alert("La acción no puede continuar");
                                location.reload();
                                return;
                            }
                        } else {

                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var branchId = sessionStorage.getItem("selectedBranchId");
                            var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                            var url = 'http://192.168.100.2/items?';
                            fetch(url + new URLSearchParams({
                                    linkTo: 'id_item',
                                    equalTo: itemId
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
                                            document.getElementById("item-name").value = data.result[0].name_item;
                                            document.getElementById("item-code").value = data.result[0].code_item;
                                            document.getElementById("item-sale-price").value = data.result[0].sale_price_item;
                                            document.getElementById("item-purchase-price").value = data.result[0].purchase_price_item;
                                            document.getElementById("item-stock").value = data.result[0].stock_item;
                                            document.getElementById("cat" + data.result[0].id_category_item).selected = true;
                                            document.getElementById("sup" + data.result[0].id_supplier_item).selected = true;
                                        }
                                    }
                                })



                        }

                        ResetCode();


                        document.getElementById("btnModal").onclick = function() {
                            ActionItem(action, itemId);
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
                                        document.getElementById('item-code').value = data.result[0].code_code;
                                        table.search.value = data.result[0].code_code;
                                        table.search(data.result[0].code_code).draw();
                                        ResetCode();
                                    }
                                }
                            })
                    }


                    function GetCategories() {
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
                                            .map((category, index) => {
                                                return `<option id=cat${category.id_category}>${category.name_category}</option>`
                                            })
                                            .join("")
                                        document.querySelector("#item-category").insertAdjacentHTML("beforeend", html);
                                        return true;
                                    } else if (data.status == 404) {
                                        alert("No tienes categorías creadas");
                                        return false;
                                    }
                                }
                            })
                        return true;
                    }

                    function GetSuppliers() {
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        var url = 'http://192.168.100.2/suppliers?';
                        // console.log(token);
                        fetch(url + new URLSearchParams({
                                linkTo: 'id_user_supplier',
                                equalTo: userId,
                                rel: 'suppliers,users',
                                relType: 'supplier,user'
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
                                            .map((supplier, index) => {
                                                return `<option id=sup${supplier.id_supplier}>${supplier.name_supplier}</option>`
                                            })
                                            .join("")
                                        document.querySelector("#item-supplier").insertAdjacentHTML("beforeend", html);
                                        return true;
                                    } else if (data.status == 404) {
                                        alert("No tienes proveedores creados");
                                        return false;
                                    }
                                }
                            })
                        return true;
                    }

                    function ActionItem(action, itemId = 0) {
                        const name = document.getElementById("item-name").value;
                        const code = document.getElementById("item-code").value;
                        const sale = document.getElementById("item-sale-price").value;
                        const purchase = document.getElementById("item-purchase-price").value;
                        const stock = document.getElementById("item-stock").value;

                        const catOptions = document.getElementById("item-category").options;
                        const category = catOptions[catOptions.selectedIndex].id.replace('cat', '');

                        const supOptions = document.getElementById("item-supplier").options;
                        const supplier = supOptions[supOptions.selectedIndex].id.replace('sup', '');

                        var error = false;
                        var errors = '';
                        if (name == '') {
                            errors += 'Debes introducir el nombre del producto\n';
                            error = true;
                        }
                        if (code == '') {
                            errors += 'Debes introducir el código del producto\n';
                            error = true;
                        }

                        if (sale == '') {
                            errors += 'Debes introducir el precio de venta del producto\n';
                            error = true;
                        }

                        if (purchase == '') {
                            errors += 'Debes introducir el precio de compra producto\n';
                            error = true;
                        }

                        if (stock == '') {
                            errors += 'Debes introducir las existencias producto\n';
                            error = true;
                        }

                        if (category == 0) {
                            errors += 'Debes seleccionar una categoría\n';
                            error = true;
                        }

                        if (supplier == 0) {
                            errors += 'Debes seleccionar un proveedor\n';
                            error = true;
                        }

                        if (error) {
                            alert(errors);
                        } else if (action == 'add') {
                            AddItem(name, code, sale, purchase, stock, category, supplier);
                        } else {
                            UpdateItem(name, code, sale, purchase, stock, category, supplier, itemId);
                        }
                    }

                    function UpdateItem(name, code, sale, purchase, stock, category, supplier, itemId) {

                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        var branchId = sessionStorage.getItem("selectedBranchId");
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var url = 'http://192.168.100.2/items?';
                        fetch(url + new URLSearchParams({
                                id: itemId,
                                nameId: 'id_item'
                            }), {
                                method: 'PUT',
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                    'Accept': '*/*',
                                    'authorization': token
                                },
                                body: new URLSearchParams({
                                    code_item: code,
                                    name_item: name,
                                    sale_price_item: sale,
                                    purchase_price_item: purchase,
                                    stock_item: stock,
                                    id_category_item: category,
                                    id_supplier_item: supplier
                                })
                            })
                            .then((response) => response.json())
                            .then(data => {
                                if (typeof data.status !== 'undefined') {
                                    if (data.status == 409) {
                                        alert('Ya exite un producto con ese código');
                                    } else {
                                        alert('Se modificó el producto');
                                        clearInterval(intervalId);
                                        $('#modalItemForm').modal('hide');
                                        GetItems();
                                    }
                                }
                            })

                    }

                    function AddItem(name, code, sale, purchase, stock, category, supplier) {
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        var branchId = sessionStorage.getItem("selectedBranchId");
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var url = 'http://192.168.100.2/items';
                        fetch(url, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                    'Accept': '*/*',
                                    'authorization': token
                                },
                                body: new URLSearchParams({
                                    id_branch_item: branchId,
                                    code_item: code,
                                    name_item: name,
                                    sale_price_item: sale,
                                    purchase_price_item: purchase,
                                    stock_item: stock,
                                    id_category_item: category,
                                    id_supplier_item: supplier
                                })
                            })
                            .then((response) => response.json())
                            .then(data => {
                                if (typeof data.status !== 'undefined') {
                                    if (data.status == 409) {
                                        alert('Ya exite un producto con ese código');
                                    } else {
                                        alert('Se Añadió el producto');
                                        $('#modalItemForm').modal('hide');
                                        // clearInterval(intervalId);
                                        GetItems();
                                    }
                                }
                            })
                    }

                    function DeleteItem(itemId) {
                        if (confirm("¿Deseas eliminar este producto?")) {
                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var branchId = sessionStorage.getItem("selectedBranchId");
                            var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                            var url = 'http://192.168.100.2/items?';
                            fetch(url + new URLSearchParams({
                                    id: itemId,
                                    nameId: 'id_item'
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
                                            alert('Se eliminó el producto');
                                            GetItems();
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