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
    <link href="css/styles.css" rel="stylesheet">


    <script src="js/auth.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment-with-locales.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>


    <title>Inicio</title>
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
            <li class="nav-item active">
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


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-sm mb-4">
                            <div class="card border-left shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div id="branchesTitle" class="text-xs font-weight-bold pos-title text-uppercase mb-1">
                                                SUCURSALES
                                            </div>
                                            <div id="totalBranches" class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-shop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-sm mb-4">
                            <div class="card border-left shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div id="employeesTitle" class="text-xs font-weight-bold pos-title text-uppercase mb-1">
                                                EMPLEADOS
                                            </div>
                                            <div id="totalEmployees" class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-people-group fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-sm mb-4">
                            <div class="card border-left shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div id="categoriesTitle" class="text-xs font-weight-bold pos-title text-uppercase mb-1">
                                                CATEGORÍAS
                                            </div>
                                            <div id="totalCategories" class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-shapes fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-sm mb-4">
                            <div class="card border-left shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div id="suppliersTitle" class="text-xs font-weight-bold pos-title text-uppercase mb-1">
                                                PROVEEDORES
                                            </div>
                                            <div id="totalSuppliers" class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-people-carry-box fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>



                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-sm mb-4">
                            <div class="card border-left shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div id="salesTitle" class="text-xs font-weight-bold pos-title text-uppercase mb-1">
                                                VENTAS
                                            </div>
                                            <div id="totalSale" class="h5 mb-0 font-weight-bold text-gray-800">$0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-sack-dollar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-sm mb-4">
                            <div class="card border-left shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div id="purchasesTitle" class="text-xs font-weight-bold pos-title text-uppercase mb-1">
                                                COMPRAS
                                            </div>
                                            <div id="totalPurchase" class="h5 mb-0 font-weight-bold text-gray-800">$0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-cart-arrow-down fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>



                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold pos-title">Ventas en los últimos 12 meses</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="salesChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Area Chart -->
                        <div class="col-sm">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 id="categoriesChartTitle" class="m-0 font-weight-bold pos-title text-capitalize">Ventas por categorías</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="categoriesSalesChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Area Chart -->
                        <div class="col-sm">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 id="salesChartTitle" class="text-capitalize m-0 font-weight-bold pos-title">Ventas por sucursal</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="branchesSalesChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Area Chart -->
                        <div class="col-sm">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 id="employeesChartTitle" class="text-capitalize m-0 font-weight-bold pos-title">Ventas por sucursal</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="employeesSalesChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>






                </div>
                <!-- End content -->


                <script src="min/locales.js" charset="UTF-8"></script>
                <script>
                    window.onload = Inflate();

                    function Inflate() {
                        moment.locale('es');
                        //Titles
                        document.getElementById('salesTitle').innerText = 'Ventas Totales (' + moment().format('MMMM') + ')';
                        document.getElementById('purchasesTitle').innerText = 'Compras Totales (' + moment().format('MMMM') + ')';

                        //Get data
                        GetTotalSum('sales', 'sale', 'Sale');
                        GetTotalSum('purchases', 'purchase', 'Purchase');
                        GetTotals('branches', 'branch', 'Branches');
                        GetTotals('employees', 'employee', 'Employees');
                        GetTotals('categories', 'category', 'Categories');
                        GetTotals('suppliers', 'supplier', 'Suppliers');
                        GetYearSales();
                        GetCategoriesSales();
                        GetBranchesSales();
                        GetEmployeesSales();
                    }

                    function GetTotalSum(table, suffix, title) {
                        var lowDate = moment().startOf('month').format('YYYY-MM-DD');
                        var topDate = moment().endOf('month').subtract(1, 'day').format('YYYY-MM-DD')
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        var url = 'http://192.168.100.2/' + table + '?';
                        fetch(url + new URLSearchParams({
                                linkTo: 'date_created_' + suffix,
                                between1: lowDate,
                                between2: topDate,
                                filterIn: userId,
                                filterTo: 'id_user_' + suffix,
                                select: 'total_' + suffix
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
                                        var totalSum = 0;
                                        for (var i = 0; i < data.total; i++) {
                                            if (table == 'sales') {
                                                totalSum += data.result[i].total_sale;
                                            } else {
                                                totalSum += data.result[i].total_purchase;
                                            }
                                        }
                                        document.getElementById('total' + title).innerText = '$' + totalSum;
                                    } else if (data.status == 404) {
                                        document.getElementById('total' + title).innerText = '$ 0.0 ';
                                    }
                                }
                            })
                    }

                    function GetTotals(table, suffix, title) {
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        var url = 'http://192.168.100.2/' + table + '?';
                        fetch(url + new URLSearchParams({
                                linkTo: 'id_user_' + suffix,
                                equalTo: userId
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
                                        document.getElementById('total' + title).innerText = data.total;
                                    }
                                }
                            })
                    }

                    async function GetYearSales() {
                        var months = []
                        var monthsNames = []
                        var salesData = new Array(12).fill(0);
                        var aux = moment().subtract(1, 'year').startOf('month').add(1, 'month');
                        for (var i = 1; i <= 12; i++) {
                            monthsNames.push(moment(aux).format('MMMM'));
                            var plus = moment(aux).add(1, 'month').subtract(1, 'day');
                            var month = {
                                low: aux.format('YYYY-MM-DD'),
                                top: plus.format('YYYY-MM-DD')
                            }
                            months.push(month);
                            aux.add(1, 'month');
                        }
                        for (var i = 0; i < 12; i++) {
                            var total = await GetMonthSales(months[i]);
                            salesData[i] = total;
                        }
                        const ctx = document.getElementById('salesChart').getContext('2d');
                        const myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: monthsNames,
                                datasets: [{
                                    label: '$ Vendido',
                                    data: salesData,
                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                    borderColor: 'rgba(255, 99, 132, 1)',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        ticks: {
                                            // Include a dollar sign in the ticks
                                            callback: function(value, index, ticks) {
                                                return '$' + value;
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    }

                    function GetMonthSales(month) {
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        var url = 'http://192.168.100.2/sales?';
                        return fetch(url + new URLSearchParams({
                                linkTo: 'date_created_sale',
                                between1: month.low,
                                between2: month.top,
                                filterIn: userId,
                                filterTo: 'id_user_sale',
                                select: 'total_sale'
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
                                if (data.status == 200) {
                                    var totalSum = 0;
                                    for (var i = 0; i < data.total; i++) {
                                        totalSum += data.result[i].total_sale;
                                    }
                                    return totalSum;
                                } else {
                                    return 0;
                                }
                            })
                            .then(result => result)
                    }

                    async function GetCategoriesSales() {
                        document.getElementById('categoriesChartTitle').innerText = 'Ventas por categoría (' + moment().format('MMMM') + ')';
                        var categories = await GetCategories();
                        var salesData = new Array(categories.length).fill(0);
                        var categoriesNames = [];
                        var colors = [];
                        var borders = [];


                        // https://stackoverflow.com/a/23304189/18070617
                        Math.seed = function(s) {
                            return function() {
                                s = Math.sin(s) * 10000;
                                return s - Math.floor(s);
                            };
                        };


                        // https://stackoverflow.com/a/45772013
                        var dynamicColors = function(id) {
                            var generator = Math.seed(id);
                            var r = Math.floor(generator() * 255);
                            var g = Math.floor(generator() * 255);
                            var b = Math.floor(generator() * 255);
                            return "rgb(" + r + "," + g + "," + b;

                        };
                        for (var i = 0; i < categories.length; i++) {
                            categoriesNames.push(categories[i].name_category);
                            salesData[i] = await GetSalesOf('id_category_item', categories[i].id_category);
                            let color = dynamicColors(categories[i].id_category);
                            colors.push(color + ',0.5)');
                            borders.push(color + ',1)');
                        }
                        const ctx = document.getElementById('categoriesSalesChart').getContext('2d');
                        const myChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: categoriesNames,
                                datasets: [{
                                    label: '$ Vendido',
                                    data: salesData,
                                    backgroundColor: colors,
                                    borderColor: borders,
                                    borderWidth: 1
                                }]
                            },
                            options: {

                            }
                        });
                    }

                    function GetSalesOf(nameId, whereId) {
                        var lowDate = moment().startOf('month').format('YYYY-MM-DD');
                        var topDate = moment().endOf('month').subtract(1, 'day').format('YYYY-MM-DD')
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        // var branchId = sessionStorage.getItem("selectedBranchId");
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var url = 'http://192.168.100.2/sales_item?';
                        return fetch(url + new URLSearchParams({
                                linkTo: 'date_created_sale_item',
                                between1: lowDate,
                                between2: topDate,
                                filterIn: whereId,
                                filterTo: nameId,
                                rel: 'sales_item,sales,items',
                                relType: 'sale_item,sale,item'
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
                                        var totalSum = 0;
                                        for (var i = 0; i < data.total; i++) {
                                            totalSum += data.result[i].total_sale_item;
                                        }
                                    }
                                    return totalSum;
                                } else {
                                    return 0;
                                }
                            })
                    }

                    function GetCategories() {
                        var categoriesIds = []
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        // var branchId = sessionStorage.getItem("selectedBranchId");
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var url = 'http://192.168.100.2/categories?';
                        return fetch(url + new URLSearchParams({
                                linkTo: 'id_user_category',
                                equalTo: userId
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
                                        for (var i = 0; i < data.total; i++) {
                                            categoriesIds.push(data.result[i]);
                                        }
                                    }
                                    return categoriesIds;
                                }
                            })
                    }


                    async function GetCategoriesSales() {
                        document.getElementById('categoriesChartTitle').innerText = 'Ventas por categoría (' + moment().format('MMMM') + ')';
                        var categories = await GetCategories();
                        var salesData = new Array(categories.length).fill(0);
                        var categoriesNames = [];
                        var colors = [];
                        var borders = [];


                        // https://stackoverflow.com/a/23304189/18070617
                        Math.seed = function(s) {
                            return function() {
                                s = Math.sin(s) * 10000;
                                return s - Math.floor(s);
                            };
                        };


                        // https://stackoverflow.com/a/45772013
                        var dynamicColors = function(id) {
                            var generator = Math.seed(id);
                            var r = Math.floor(generator() * 255);
                            var g = Math.floor(generator() * 255);
                            var b = Math.floor(generator() * 255);
                            return "rgb(" + r + "," + g + "," + b;

                        };
                        for (var i = 0; i < categories.length; i++) {
                            categoriesNames.push(categories[i].name_category);
                            salesData[i] = await GetSalesOf('id_category_item', categories[i].id_category);
                            let color = dynamicColors(categories[i].id_category);
                            colors.push(color + ',0.5)');
                            borders.push(color + ',1)');
                        }
                        const ctx = document.getElementById('categoriesSalesChart').getContext('2d');
                        const myChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: categoriesNames,
                                datasets: [{
                                    label: '$ Vendido',
                                    data: salesData,
                                    backgroundColor: colors,
                                    borderColor: borders,
                                    borderWidth: 1
                                }]
                            },
                            options: {

                            }
                        });
                    }


                    async function GetBranchesSales() {
                        document.getElementById('salesChartTitle').innerText = 'Ventas por sucursal (' + moment().format('MMMM') + ')';
                        var branches = await GetBranches();
                        var salesData = new Array(branches.length).fill(0);
                        var branchesNames = [];
                        var colors = [];
                        var borders = [];


                        // https://stackoverflow.com/a/23304189/18070617
                        Math.seed = function(s) {
                            return function() {
                                s = Math.sin(s) * 10000;
                                return s - Math.floor(s);
                            };
                        };


                        // https://stackoverflow.com/a/45772013
                        var dynamicColors = function(id) {
                            var generator = Math.seed(id);
                            var r = Math.floor(generator() * 255);
                            var g = Math.floor(generator() * 255);
                            var b = Math.floor(generator() * 255);
                            return "rgb(" + r + "," + g + "," + b;

                        };
                        for (var i = 0; i < branches.length; i++) {
                            branchesNames.push(branches[i].name_branch);
                            salesData[i] = await GetSalesOf('id_branch_sale', branches[i].id_branch);
                            let color = dynamicColors(branches[i].id_branch);
                            colors.push(color + ',0.5)');
                            borders.push(color + ',1)');
                        }
                        const ctx = document.getElementById('branchesSalesChart').getContext('2d');
                        const myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: branchesNames,
                                datasets: [{
                                    label: '$ Vendido',
                                    data: salesData,
                                    backgroundColor: colors,
                                    borderColor: borders,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        ticks: {
                                            // Include a dollar sign in the ticks
                                            callback: function(value, index, ticks) {
                                                return '$' + value;
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    }


                    function GetBranches() {
                        var branches = []
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        // var branchId = sessionStorage.getItem("selectedBranchId");
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var url = 'http://192.168.100.2/branches?';
                        return fetch(url + new URLSearchParams({
                                linkTo: 'id_user_branch',
                                equalTo: userId
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
                                        for (var i = 0; i < data.total; i++) {
                                            branches.push(data.result[i]);
                                        }
                                    }
                                    return branches;
                                }
                            })
                    }


                    async function GetEmployeesSales() {
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        document.getElementById('employeesChartTitle').innerText = 'Ventas por empleado (' + moment().format('MMMM') + ')';
                        var employees = await GetEmployees();
                        var salesData = new Array(employees.length).fill(0);
                        var employeesNames = [];
                        var colors = [];
                        var borders = [];


                        // https://stackoverflow.com/a/23304189/18070617
                        Math.seed = function(s) {
                            return function() {
                                s = Math.sin(s) * 10000;
                                return s - Math.floor(s);
                            };
                        };


                        // https://stackoverflow.com/a/45772013
                        var dynamicColors = function(id) {
                            var generator = Math.seed(id);
                            var r = Math.floor(generator() * 255);
                            var g = Math.floor(generator() * 255);
                            var b = Math.floor(generator() * 255);
                            return "rgb(" + r + "," + g + "," + b;

                        };
                        for (var i = 0; i < employees.length; i++) {
                            employeesNames.push(employees[i].name_employee);
                            salesData[i] = await GetSalesOf('id_employee_sale', employees[i].id_employee);
                            let color = dynamicColors(employees[i].id_employee);
                            colors.push(color + ',0.5)');
                            borders.push(color + ',1)');
                        }
                        employeesNames.push("Tú");
                        var userSales = await GetSalesOfUser();
                        salesData.push(userSales);
                        let color = dynamicColors(userId);
                        colors.push(color + ',0.5)');
                        borders.push(color + ',1)');
                        const ctx = document.getElementById('employeesSalesChart').getContext('2d');
                        const myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: employeesNames,
                                datasets: [{
                                    label: '$ Vendido',
                                    data: salesData,
                                    backgroundColor: colors,
                                    borderColor: borders,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        ticks: {
                                            // Include a dollar sign in the ticks
                                            callback: function(value, index, ticks) {
                                                return '$' + value;
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    }


                    function GetSalesOfUser() {
                        var lowDate = moment().startOf('month').format('YYYY-MM-DD');
                        var topDate = moment().endOf('month').subtract(1, 'day').format('YYYY-MM-DD')
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        // var branchId = sessionStorage.getItem("selectedBranchId");
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var url = 'http://192.168.100.2/sales_item?';
                        return fetch(url + new URLSearchParams({
                                linkTo: 'date_created_sale_item',
                                between1: lowDate,
                                between2: topDate,
                                filterIn: userId,
                                filterTo: 'id_user_sale',
                                rel: 'sales_item,sales,items',
                                relType: 'sale_item,sale,item'
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
                                        var totalSum = 0;
                                        for (var i = 0; i < data.total; i++) {
                                            if(data.result[i].id_employee_sale==1){
                                                totalSum += data.result[i].total_sale_item;
                                            }
                                        }
                                    }
                                    return totalSum;
                                } else {
                                    return 0;
                                }
                            })
                    }


                    function GetEmployees() {
                        var employees = []
                        var token = 'Bearer ' + JSON.parse(sessionStorage.getItem("user"))['token_user'];
                        // var branchId = sessionStorage.getItem("selectedBranchId");
                        var userId = JSON.parse(sessionStorage.getItem("user"))['id_user'];
                        var url = 'http://192.168.100.2/employees?';
                        return fetch(url + new URLSearchParams({
                                linkTo: 'id_user_employee',
                                equalTo: userId
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
                                        for (var i = 0; i < data.total; i++) {
                                            employees.push(data.result[i]);
                                        }
                                    }
                                    return employees;
                                }
                            })
                    }
                </script>

                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script type="text/javascript" src="js/main.js"></script>


</body>

</html>