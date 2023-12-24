<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Prak Modul 6</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#kelembapan").load("kelembapan.php");
                $("#sensor_gerak").load("sensor_gerak.php");
                $("#sensor_hujan").load("sensor_hujan.php");
            }, 1000);
        });
    </script>
  </head>
  <body>

  

      <!-- Page Wrapper -->
      <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fab fa-phoenix-framework"></i>
        </div>
        <div class="sidebar-brand-text mx-2 ms-2">Agriculture Monitor</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
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

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter" id="notificationCounter">0+</span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown" id="notificationDropdown">
                        <h6 class="dropdown-header">
                            Alerts Center
                        </h6>
                        <!-- Here the notifications will be dynamically added -->
                    </div>
                </li>


                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Tazkia Damayanti</span>
                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Kelembapan-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Kelembapan </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="kelembapan">0</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-temperature-quarter fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Suhu -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sensor Gerak
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="sensor_gerak"> </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sensor Hujan -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Sensor Hujan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="sensor_hujan"> </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cloud fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; agricultural monitor 2023</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

<!-- pop up notification -->
<div style="position: absolute; top: 20px; right: 20px; z-index: 9999;">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toastSensorHujan" style="margin-bottom: 10px;">
            <div class="toast-header bg-primary text-white">
                <div class="icon-circle bg-primary">
                    <i class="fas fa-cloud text-white"></i>
                </div>
                <strong class="me-auto">Sensor Hujan</strong>
                <small id="toastDateSensorHujan"></small>
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
            <div class="toast-body text-black">
                Terjadi Hujan
            </div>
        </div>

        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toastSensorGerak" style="margin-bottom: 10px;">
            <div class="toast-header bg-danger text-white">
                <div class="icon-circle bg-danger">
                    <i class="fas fa-bug text-white"></i>
                </div>
                <strong class="me-auto">Sensor Gerak</strong>
                <small id="toastDateSensorGerak"></small>
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
            <div class="toast-body text-black">
                Awas Ada Hama
            </div>
        </div>

    </div>
    <!-- End pop up notif -->

    
    <script>
        $(document).ready(function() {
    setInterval(function() {
        $("#kelembapan").load("kelembapan.php");
        $("#sensor_gerak").load("sensor_gerak.php", function(response, status, xhr) {
            if (status == "success") {
                sendNotification($('#sensor_gerak').text(), $('#sensor_gerak').text());
            }
        });
        $("#sensor_hujan").load("sensor_hujan.php", function(response, status, xhr) {
            if (status == "success") {
                sendNotification($('#sensor_gerak').text(), $('#sensor_hujan').text());
            }
        });
    }, 1000);
});

    function sendNotification(sensorGerak, sensorHujan) {
    // Logika notifikasi sesuai dengan data yang dimuat
    if (sensorGerak.trim() === 'gerak') {
        addNotification('Sensor Gerak', 'Awas Ada Hama', 'bg-danger', 'fas fa-bug', 'toastSensorGerak');
        showToast('toastSensorGerak');
    }

    if (sensorHujan.trim() === 'hujan') {
        addNotification('Sensor Hujan', 'Terjadi Hujan', 'bg-primary', 'fas fa-cloud', 'toastSensorHujan');
        showToast('toastSensorHujan');
    }
}

        function showToast(toastId) {
            let toastElement = document.getElementById(toastId);
            let bsToast = new bootstrap.Toast(toastElement);
            bsToast.show();

        }

        function addNotification(title, message, bgColor, icon) {
            let dropdown = document.getElementById('notificationDropdown');
            let counter = document.getElementById('notificationCounter');

            // Create notification item
            let notificationItem = document.createElement('a');
            notificationItem.classList.add('dropdown-item', 'd-flex', 'align-items-center');
            notificationItem.innerHTML = `
        <div class="mr-4">
            <div class="icon-circle ${bgColor}">
                <i class="${icon} text-white"></i>
            </div>
        </div>
        <div>
            <div class="small text-gray-500">${getCurrentDate()}</div>
            <span class="font-weight-bold">${title}: ${message}</span>
        </div>
        <button type="button" class="close ml-auto ms-2" data-dismiss="alert" aria-label="Close" onclick="closeNotification(this)">
            <span aria-hidden="true">&times;</span>
        </button>
    `;

            // Add notification item to dropdown
            dropdown.appendChild(notificationItem);

            // Update counter
            let currentCount = parseInt(counter.textContent);
            counter.textContent = currentCount + 1;
        }

        function closeNotification(button) {
            let notificationItem = button.parentElement;
            notificationItem.remove();

            let counter = document.getElementById('notificationCounter');
            let currentCount = parseInt(counter.textContent);
            counter.textContent = currentCount - 1;
        }



        function getCurrentDate() {
            let date = new Date();
            return date.toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        }
    </script>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>