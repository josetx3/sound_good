<?php
class MenuView
{
    function showMenu()
    {
?>
        <!DOCTYPE html>
        <html lang="ed">

        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <title>Dashboard - NiceAdmin Bootstrap Template</title>
            <meta content="" name="description">
            <meta content="" name="keywords">
            <!-- Favicons -->
            <link href="assets/img/favicon.png" rel="icon">
            <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

            <!-- Google Fonts -->
            <link href="https://fonts.gstatic.com" rel="preconnect">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

            <!-- Vendor CSS Files -->
            <link href="Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="Assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
            <link href="Assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
            <link href="Assets/vendor/quill/quill.snow.css" rel="stylesheet">
            <link href="Assets/vendor/quill/quill.bubble.css" rel="stylesheet">
            <link href="Assets/vendor/remixicon/remixicon.css" rel="stylesheet">
            <link href="Assets/vendor/simple-datatables/style.css" rel="stylesheet">
            <link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">

            <!-- Template Main CSS File -->
            <link href="assets/css/style.css" rel="stylesheet">

            <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
        </head>

        <body>

            <!-- ======= Header ======= -->
            <header id="header" class="header fixed-top d-flex align-items-center">

                <div class="d-flex align-items-center justify-content-between">
                    <a href="index.php" class="logo d-flex align-items-center">
                        <img src="assets/img/logo.png" alt="">
                        <span class="d-none d-lg-block">NiceAdmin</span>
                    </a>
                    <i class="bi bi-list toggle-sidebar-btn"></i>
                </div><!-- End Logo -->


                <nav class="header-nav ms-auto">
                    <ul class="d-flex align-items-center">

                        <li class="nav-item">
                            <a class="nav-link nav-icon" href="#" role="button" onclick="Menu.closeSession()">
                                <i class="bi bi-power"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown pe-3">

                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                                <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                            </a><!-- End Profile Iamge Icon -->

                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <h6>Kevin Anderson</h6>
                                    <span>Web Designer</span>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                        <i class="bi bi-person"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <!-- <a class="dropdown-item d-flex align-items-center" data-widget="control-sidebar" href="#" role="button" onclick="Menu.closeSession()"> -->
                                    <a class="dropdown-item d-flex align-items-center" href="#" role="button" onclick="Menu.closeSession()">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Sign Out</span>
                                    </a>
                                </li>

                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->

                    </ul>
                </nav><!-- End Icons Navigation -->

            </header><!-- End Header -->

            <!-- ======= Sidebar ======= -->
            <aside id="sidebar" class="sidebar">

                <ul class="sidebar-nav" id="sidebar-nav" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item">
                        <a class="nav-link " href="index.php">
                            <i class="bi bi-grid"></i>
                            <span>Inicio</span>
                        </a>
                    </li><!-- End Inicio Nav -->

                    <li class="nav-heading text-center">Paginas</li>

                    <li class="nav-item">
                        <a href="#" onclick="Menu.menu('MedicController/paginateMedic')" class="nav-link collapse">
                            <i class="bi bi-person"></i>
                            <span>Medicos</span>
                        </a>
                    </li><!-- End Profile Page Nav -->
                    <li class="nav-item">
                        <a href="#" onclick="Menu.menu('AppointmentController/paginateAppointment')" class="nav-link collapse">
                            <i class="bi bi-person"></i>
                            <span>Citas</span>
                        </a>
                    </li><!-- End Profile Page Nav -->
                    <li class="nav-item">
                        <a href="#" onclick="Menu.menu('PatientsController/paginatePatients')" class="nav-link collapse">
                            <i class="bi bi-person"></i>
                            <span>Pacientes</span>
                        </a>
                    </li><!-- End Profile Page Nav -->
                    <li class="nav-item">
                        <a href="#" onclick="Menu.menu('InvoicesController/paginateInvoices')" class="nav-link collapse">
                            <i class="bi bi-person"></i>
                            <span>Facturas</span>
                        </a>
                    </li><!-- End Profile Page Nav -->

                </ul>

            </aside><!-- End Sidebar-->

            <main id="main" class="main">

                <div class="content">
                    <div class="container-fluid">

                        <div id="content">

                            <div class="col-xxl-12 col-xl-12">

                                <div class="card info-card customers-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Texto <span>| Medilab</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="ps-3">
                                                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ducimus tempora commodi odio velit culpa ipsam architecto molestias necessitatibus assumenda reprehenderit amet nam delectus voluptas aperiam modi, pariatur nisi expedita!</h6>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- End Customers Card -->

                        </div>

                    </div><!-- /.container-fluid -->
                </div>

            </main><!-- End #main -->

            <!-- MODAL DE PAIS -->
            <div class="modal fade" id="my_modal" tabindex="-1">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal_title">Actualizar pais</h5>
                            </button>
                        </div>
                        <div id="modal_content" class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN MODAL PAIS -->

            <!-- MODAL DE RELIGION -->
            <div class="modal fade" id="my_modal" tabindex="-1">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal_title">Actualizar religion</h5>
                            </button>
                        </div>
                        <div id="modal_content" class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN MODAL DE RELIGION -->

            <!-- ======= Footer ======= -->
            <footer id="footer" class="footer">
                <div class="copyright">
                    &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </footer><!-- End Footer -->

            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/chart.js/chart.min.js"></script>
            <script src="assets/vendor/echarts/echarts.min.js"></script>
            <script src="assets/vendor/quill/quill.min.js"></script>
            <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
            <script src="assets/vendor/tinymce/tinymce.min.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>

            <script src="assets/vendor/toastr/toastr.min.js"></script>
            <script src="assets/vendor/jquery/jquery.min.js"></script>
            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>
            <script src="assets/js/Menu.js"></script>
            <script src="assets/js/Medic.js"></script>
            <script src="assets/js/Appointment.js"></script>
            <script src="assets/js/Patients.js"></script>
            <script src="assets/js/Invoices.js"></script>

        </body>

        </html>

<?php

    }
}

?>