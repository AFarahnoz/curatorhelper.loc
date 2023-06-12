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
            <h3 style="color: white">Пешрафт</h3>
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
                <div class="card" style="padding: 20px">
                    <div class="table-responsive text-nowrap">
                        <div class="demo-inline-spacing">
                        <label>
                            Соли хониш
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                <option selected>2022-2023</option>
                                <option value="2">2021-2022</option>
                                <option value="2">2020-2021</option>
                                <option value="2">2019-2020</option>

                            </select>
                        </label>

                        <label class="col-md-1">Нимсола
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                <option selected>1</option>
                                <option value="2">2</option>
                            </select>
                        </label>
                        <label class="col-md-6">Фан
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                <option selected>Сикли 1: Асосҳои бунёди низомҳо ва шабакаҳои телекоммуникатсионӣ</option>
                                <option value="2">Сикли 2: Технологияҳо ва забонҳои Интернет-барномасозӣ</option>
                                <option value="2">Сикли 3: </option>
                                <option value="2">Сикли 4: </option>
                                <option value="2">Сикли 5: </option>
                            </select>
                        </label>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Донишҷӯ</th>
                                <th>КМН1</th>
                                <th>СМ1</th>
                                <th>КМН2</th>
                                <th>СМ2</th>
                                <th>ҒОИБ</th>
                                <th>БАЛИ УСТОД</th>
                                <th>БАЛИ МТ</th>
                                <th>ҲАМАГӢ</th>
                                <th>бАҲО БО ҲАРФ</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">

                            <tr>
                                <td>1</td>
                                <td><strong>Исобоева Фараҳноз Рустамовна</strong></td>
                                <td>9</td>
                                <td>10</td>
                                <td>9</td>
                                <td>10</td>
                                <td>1</td>
                                <td>50</td>
                                <td>50</td>
                                <td>100</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong>Ғафуров Сӯҳроб Насимҷонович</strong></td>
                                <td>10</td>
                                <td>10</td>
                                <td>9</td>
                                <td>9</td>
                                <td>0</td>
                                <td>50</td>
                                <td>50</td>
                                <td>100</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong>Каримов Манучеҳр Анварҷонович</strong></td>
                                <td>9</td>
                                <td>8</td>
                                <td>8</td>
                                <td>9</td>
                                <td>5</td>
                                <td>48</td>
                                <td>50</td>
                                <td>98</td>
                                <td>A</td>
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
