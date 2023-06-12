<!DOCTYPE html>

<html
        lang="en"
        class="light-style layout-menu-fixed"
        dir="ltr"
        data-theme="theme-default"
        data-assets-path="../assets/"
        data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Куратори гурӯҳ</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container" style="flex-direction:column">

        <div style="justify-content: center; align-items: center; background: #79A36F;height: 100px;width: 99.6%;z-index: 0;margin-top: 3px;margin-left: 0.2%;display: flex;align-content: center">
            <h3 style="color: white">Маълумот оид ба донишҷӯёни гурӯҳ</h3>
        </div>
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.html" class="app-brand-link">
               <span class="app-brand-logo demo">
                <img src="../assets/img/avatars/curator.svg" style="width: 50px">
               </span>
                    <div class="demo menu-text ms-2" style="display: flex;flex-direction: column">
                        <span class="fw-bolder">Исобоева Ф.Р.</span>
                        <span style="font-size: 11px; padding-top: 5px;">Куратор</span>
                    </div>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <?php
            include_once 'left-menu.html';
            ?>
        </aside>
        <div class="layout-page" style="width: 100%; height: 100%">
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">

                <!-- Hoverable Table rows -->
                <div class="card">
                    <div class="table-responsive text-nowrap">
                        <h5 class="card-header">Гурӯҳи 4_40.01.01ра</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Донишҷӯ</th>
                                <th>Суроға</th>
                                <th>Телефон</th>
                                <th>Санаи таваллуд</th>
                                <th>Ҷинс</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">

                            <tr>
                                <td>1</td>
                                <td>

                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li
                                                data-bs-toggle="tooltip"
                                                data-popup="tooltip-custom"
                                                data-bs-placement="top"
                                                class="avatar avatar-xs pull-up"
                                                title="Lilian Fuller"
                                        >
                                            <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                        </li>

                                        <li> <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Исобоева Фараҳноз Рустамовна</strong></li>
                                    </ul>

                                </td>
                                <td>шаҳри Хуҷанд, микроноҳияи 19, х.10</td>
                                <td>987654321</td>
                                <td>01.01.2001</td>
                                <td><span class="badge bg-label-warning me-1">Зан</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">

                                            <a class="dropdown-item" href="javascript:void(0);"
                                            ><i class="bx bx-edit-alt me-1"></i> Иваз</a
                                            >
                                        </button>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>

                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li
                                                data-bs-toggle="tooltip"
                                                data-popup="tooltip-custom"
                                                data-bs-placement="top"
                                                class="avatar avatar-xs pull-up"
                                                title="Lilian Fuller"
                                        >
                                            <img src="../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                        </li>

                                        <li> <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Ғафуров Сӯҳроб Насимҷонович</strong></li>
                                    </ul>

                                </td>
                                <td>шаҳри Хуҷанд, микроноҳияи 8, х.4</td>
                                <td>927880101</td>
                                <td>12.03.2001</td>
                                <td><span class="badge bg-label-primary me-1">Мард</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">

                                            <a class="dropdown-item" href="javascript:void(0);"
                                            ><i class="bx bx-edit-alt me-1"></i> Иваз</a
                                            >
                                        </button>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>

                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li
                                                data-bs-toggle="tooltip"
                                                data-popup="tooltip-custom"
                                                data-bs-placement="top"
                                                class="avatar avatar-xs pull-up"
                                                title="Lilian Fuller"
                                        >
                                            <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                        </li>

                                        <li> <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Каримов Манучеҳр Анварҷонович</strong></li>
                                    </ul>

                                </td>
                                <td>ноҳияи Б.Ғафуров, к. Д.Холматов 32</td>
                                <td>928880909</td>
                                <td>23.07.2001</td>
                                <td><span class="badge bg-label-primary me-1">Мард</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">

                                            <a class="dropdown-item" href="javascript:void(0);"
                                            ><i class="bx bx-edit-alt me-1"></i> Иваз</a
                                            >
                                        </button>

                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Hoverable Table rows -->
            </div>
            </div>
        </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
</div>


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
