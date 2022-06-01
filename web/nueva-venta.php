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

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <script src="js/auth.js"></script>

    <link href="css/styles.css" rel="stylesheet">

    <title>Nueva venta</title>
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
            <li class="nav-item active">
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

                    <h1 id="titleHistory" class="pos-title">Nueva venta</h1>

                    <div class="mb-3">
                        <input type="text" class="form-control" id="code" placeholder="Código del producto">
                    </div>

                    <script>
                        var items = {};
                        var cont = 0;
                        var customerId = -1;
                        var paymentId = -1;

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
                        window.onload = ResetCode();

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
                                            document.getElementById('code').value = data.result[0].code_code;
                                            GetItem(data.result[0].code_code);
                                            ResetCode();
                                        }
                                    }
                                })
                        }

                        function GetItem(code) {
                            if(sessionStorage.getItem("selectedBranchId") == null){
                                alert("Debes seleccionar una sucursal primero");
                                return;
                            }
                            var branchId = sessionStorage.getItem("selectedBranchId");
                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var url = 'http://192.168.100.2/items?';
                            // console.log(token);
                            fetch(url + new URLSearchParams({
                                    linkTo: 'code_item,id_branch_item',
                                    equalTo: code+','+branchId,
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
                                            if ('item' + data.result[0].id_item in items === false) {
                                                items['item' + data.result[0].id_item] = [data.result[0], 1];

                                                const html = data.result
                                                    .map(saleItem => {
                                                        var current = parseFloat(document.getElementById('totalCheckout').textContent);
                                                        document.getElementById('totalCheckout').textContent = current + saleItem.sale_price_item;
                                                        return `<tr id="row${saleItem.id_item}">
                                                                <th scope="row">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="img/items.svg" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                                                                        <div class="flex-column ms-4">
                                                                            <p class="mb-2">${saleItem.name_item}</p>
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <td class="align-middle">
                                                                    <p class="mb-0" style="font-weight: 500;">$${saleItem.sale_price_item}</p>
                                                                </td>
                                                                <td class="align-middle">
                                                                    <div class="d-flex flex-row">
                                                                        <button class="btn btn-link px-2" onclick="ChangeQuantity('down','quantityitem${saleItem.id_item}');">
                                                                            <i class="fas fa-minus"></i>
                                                                        </button>

                                                                        <input id="quantityitem${saleItem.id_item}" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" style="width: 50px;" />

                                                                        <button class="btn btn-link px-2" onclick="ChangeQuantity('up','quantityitem${saleItem.id_item}');">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                                <td class="align-middle">
                                                                    <p class="mb-0" style="font-weight: 500;" id="totalitem${saleItem.id_item}">$${saleItem.sale_price_item}</p>
                                                                </td>
                                                            </tr>`
                                                    })
                                                    .join("")
                                                document.querySelector("#tableItems").insertAdjacentHTML('afterbegin', html);

                                            } else {
                                                ChangeQuantity('up','quantityitem'+data.result[0].id_item);
                                            }

                                        }
                                    }
                                })
                        }

                        function GetCustomers() {
                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var url = 'http://192.168.100.2/customers?';
                            // console.log(token);
                            fetch(url + new URLSearchParams({
                                    linkTo: 'id_user_customer',
                                    equalTo: 1
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
                                                .map(customer => {
                                                    return `<button class="dropdown-item" id="customer${customer.id_customer}" type="button" onclick="SetCustomer(${customer.id_customer},'${customer.name_customer}');">${customer.name_customer}</button>`
                                                })
                                                .join("")
                                            Clear("dropdownCustomers");
                                            document.querySelector("#dropdownCustomers").insertAdjacentHTML('afterbegin', html);
                                        }
                                    }
                                })
                        }

                        function SetCustomer(id, name) {
                            customerId = id;
                            document.getElementById("dropdownMenuC").innerText = name;

                        }

                        function ChangeQuantity(direction, elementId) {
                            var id = elementId.replace('quantityitem', '');
                            var stock = items['item' + id][0]['stock_item'];
                            var current = items['item' + id][1];
                            if (direction == 'up') {
                                if (current + 1 <= stock) {
                                    document.getElementById(elementId).stepUp();
                                    items['item' + id][1] += 1;
                                    var tot = items['item' + id][1] * items['item' + id][0]['sale_price_item'];
                                    document.getElementById('totalitem' + id).textContent = '$' + tot;
                                } else{
                                    alert("No hay stock suficiente");
                                }
                            } else {
                                if (current - 1 > 0) {
                                    document.getElementById(elementId).stepDown();
                                    items['item' + id][1] -= 1;
                                    var tot = items['item' + id][1] * items['item' + id][0]['sale_price_item'];
                                    document.getElementById('totalitem' + id).textContent = '$' + tot;
                                } else {
                                    if(confirm("Eliminar de la venta?")){
                                        document.getElementById('row' + id).remove();
                                        delete items['item' + id];
                                    }
                                }
                            }
                            var total = 0
                            for (const [key, value] of Object.entries(items)) {
                                total += value[0]['sale_price_item'] * value[1];
                            }
                            // var current = parseFloat(document.getElementById('totalCheckout').textContent);
                            document.getElementById('totalCheckout').textContent = total;
                        }

                        function AddSale() {
                            var error = false;
                            if(sessionStorage.getItem("selectedBranchId") == null){
                                alert("Debes seleccionar una sucursal primero");
                                return;
                            }
                            if (customerId === -1) {
                                alert("Debes elegir un cliente");
                                error = true;
                            }
                            if (Object.keys(items).length === 0) {
                                alert("No hay productos en la venta");
                                error = true;
                            }
                            if (document.getElementById('radioCash').checked == true) {
                                paymentId = 1;
                            } else if (document.getElementById('radioCard').checked == true) {
                                paymentId = 2;
                            } else if (document.getElementById('radioCredit').checked == true) {
                                paymentId = 3;
                            }
                            if (paymentId == -1) {
                                alert("Debes elegir un método de pago");
                                error = true;
                            }
                            if (error == true) {
                                return;
                            } else {
                                var totalQ = 0
                                for (const [key, value] of Object.entries(items)) {
                                    totalQ += value[1];
                                }
                                var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                                var branchId = sessionStorage.getItem("selectedBranchId");
                                var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                                var total = document.getElementById('totalCheckout').textContent;
                                var url = 'http://192.168.100.2/sales';
                                fetch(url, {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/x-www-form-urlencoded',
                                            'Accept': '*/*',
                                            'authorization': token
                                        },
                                        body: new URLSearchParams({
                                            id_branch_sale: branchId,
                                            id_customer_sale: customerId,
                                            id_user_sale: userId,
                                            total_sale: parseFloat(document.getElementById('totalCheckout').textContent),
                                            total_quantity_sale: totalQ,
                                            id_payment_type_sale: paymentId,
                                            id_employee_sale: 1
                                            
                                        })
                                    })
                                    .then((response) => response.json())
                                    .then(data => {
                                        if (typeof data.status !== 'undefined') {
                                            if (data.status == 200) {
                                                AddSalesItems(data.result.lastId);
                                            }
                                        }
                                    })
                            }


                        }

                        function AddSalesItems(saleId){
                            var end = true;
                            for (const [key, value] of Object.entries(items)) {
                                var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                                var branchId = sessionStorage.getItem("selectedBranchId");
                                var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                                var total = document.getElementById('totalCheckout').textContent;
                                var url = 'http://192.168.100.2/sales_item';
                                fetch(url, {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/x-www-form-urlencoded',
                                            'Accept': '*/*',
                                            'authorization': token
                                        },
                                        body: new URLSearchParams({
                                            id_item_sale_item: value[0]['id_item'],
                                            id_sale_sale_item: saleId,
                                            quantity_sale_item: value[1],
                                            total_sale_item: value[1] * value[0]['sale_price_item'] 
                                        })
                                    })
                                    .then((response) => response.json())
                                    .then(data => {
                                        if (typeof data.status !== 'undefined') {
                                            if (data.status !== 200) {
                                                end = false;
                                            }
                                        }
                                    })
                            }
                            if(end){
                                UpdateStock();
                            }
                        }


                        function UpdateStock(){
                            var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                            var url = 'http://192.168.100.2/items?';
                            var end = true;
                            for (const [key, value] of Object.entries(items)) {
                                fetch(url + new URLSearchParams({
                                    id: value[0]['id_item'],
                                    nameId: 'id_item'
                                }), {
                                    method: 'PUT',
                                    headers: {
                                        'authorization': token,
                                        'Content-Type': 'application/x-www-form-urlencoded'
                                    },
                                    body: new URLSearchParams({
                                        'stock_item': value[0]['stock_item'] - value[1]
                                    })
                                })
                                .then((response) => response.json())
                                .then(data => {
                                    if(data.status !== 200){
                                        end = false;
                                    }
                                })
                            }
                            if(end){
                                alert('Se registró la venta');
                                document.getElementById('totalCheckout').textContent = 0;
                                items = {}
                                Clear("tableItems");
                            }
                        }


                        setInterval(() => {
                            GetCodes();
                        }, 1000);
                    </script>

                    <section class="h-100 h-custom">
                        <div class="container h-100 py-5">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="h5">Productos</th>
                                                    <th scope="col">Precio Unitario</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableItems">

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="card shadow-2-strong mb-5 mb-lg-0 al" style="border-radius: 16px;">
                                        <div class="card-body p-4">

                                            <div class="row d-flex justify-content-around">
                                                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                                                    <form>
                                                        <div class="d-flex flex-row pb-3">
                                                            <div class="d-flex align-items-center pe-2">
                                                                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioCash" onclick="paymentId=1" value="" aria-label="..." checked />
                                                            </div>
                                                            <div class="rounded border w-100 p-3">
                                                                <p class="d-flex align-items-center mb-0">
                                                                    <i class="fab fa-solid fa-money-bill-1-wave fa-2x text-dark pe-2 mr-5"></i>Efectivo
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row pb-3">
                                                            <div class="d-flex align-items-center pe-2">
                                                                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioCard" onclick="paymentId=2" value="" aria-label="..." />
                                                            </div>
                                                            <div class="rounded border w-100 p-3">
                                                                <p class="d-flex align-items-center mb-0">
                                                                    <i class="fab fa-regular fa-credit-card fa-2x text-dark pe-2 mr-5"></i>Tarjeta
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row">
                                                            <div class="d-flex align-items-center pe-2">
                                                                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioCredit" onclick="paymentId=3" value="" aria-label="..." />
                                                            </div>
                                                            <div class="rounded border w-100 p-3">
                                                                <p class="d-flex align-items-center mb-0">
                                                                    <i class="fab fa-solid fa-comments-dollar fa-2x text-dark pe-2 mr-5"></i>Crédito
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="col-lg-4 col-xl-3">

                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle bg-pos-primary btn-lg" type="button" id="dropdownMenuC" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="GetCustomers();">
                                                            Seleccionar cliente
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuC" id="dropdownCustomers">
                                                            <!-- Get customers -->
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-xl-3">

                                                    <button type="button" class="btn btn-block btn-lg bg-pos-primary" onclick="AddSale();">
                                                        <div class="d-flex justify-content-between">
                                                            <span>Completar Venta </span>
                                                            <span>$</span>
                                                            <span id="totalCheckout">0.0</span>
                                                        </div>
                                                    </button>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>


                </div>
                <!-- /.container-fluid -->

            </div>

        </div>




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