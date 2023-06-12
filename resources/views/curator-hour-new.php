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
            <h3 style="color: white">Ташкили соати кураторӣ</h3>
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
                <form action="curator-hour-new.php" method="POST">
                    <div class="col-xl-6">
                        <!-- HTML5 Inputs -->
                        <div class="card mb-4">
                            <h5 class="card-header">Соати куратории нав</h5>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="html5-date-input" class="col-md-2 col-form-label">Сана</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" value="2023-05-10" id="html5-date-input" />
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-time-input" class="col-md-2 col-form-label">Вақти баргузорӣ</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="time" value="12:30:00" id="html5-time-input" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Мавзӯъ</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="Мавзӯъ" id="html5-text-input" />
                                    </div>
                                </div>
                                <div class="mb-3 row" >
                                    <label for="exampleFormControlSelect1" class="col-md-2 col-form-label">Аудитория</label>
                                    <div class="col-md-10">
                                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                            <option selected>Интихоб кунед</option>
                                            <option value="1">Э106</option>
                                            <option value="2">Э107</option>
                                            <option value="3">Э108</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class=" form-check form-switch mb-2">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Хабардоркунии донишҷӯён</label>
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />

                                    </div>
                                </div>
                                <div class="mb-3 row" >

                                    <div class="mb-2">
                                        <button class="btn btn-primary d-grid" style="position: fixed;    right: 43%;   background-color: #79A36F; border-color: #79A36F; " type="submit">Сабт</button>
                                    </div>

                                </div>
                            </div>
                    </div>
                 </div>
                </form>
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