<!doctype html>
<html lang="en">
<!--begin::Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
        name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
    />
    <meta
        name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
        crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
        integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
        crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
        crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="../../dist/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
        crossorigin="anonymous"
    />
    <!-- jsvectormap -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
        integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
        crossorigin="anonymous"
    />
</head>
<!--end::Head-->
<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<!--begin::App Wrapper-->
<div class="app-wrapper">
    <!--begin::Header-->
    <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                        <i class="bi bi-list"></i>
                    </a>
                </li>
{{--                <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>--}}
{{--                <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>--}}
            </ul>
        </div>
        <!--end::Container-->
    </nav>
    <!--end::Header-->
    <!--begin::Sidebar-->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">

        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <!--begin::Sidebar Menu-->
{{--                <ul--}}
{{--                    class="nav sidebar-menu flex-column"--}}
{{--                    data-lte-toggle="treeview"--}}
{{--                    role="menu"--}}
{{--                    data-accordion="false"--}}
{{--                >--}}
{{--                    <li class="nav-item menu-open">--}}
{{--                        <a href="#" class="nav-link active">--}}
{{--                            <i class="nav-icon bi bi-speedometer"></i>--}}
{{--                            <p>--}}
{{--                                Dashboard--}}
{{--                                <i class="nav-arrow bi bi-chevron-right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./index.html" class="nav-link active">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Dashboard v1</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./index2.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Dashboard v2</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./index3.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Dashboard v3</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="./generate/theme.html" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-palette"></i>--}}
{{--                            <p>Theme Generate</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-box-seam-fill"></i>--}}
{{--                            <p>--}}
{{--                                Widgets--}}
{{--                                <i class="nav-arrow bi bi-chevron-right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./widgets/small-box.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Small Box</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./widgets/info-box.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>info Box</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./widgets/cards.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Cards</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-clipboard-fill"></i>--}}
{{--                            <p>--}}
{{--                                Layout Options--}}
{{--                                <span class="nav-badge badge text-bg-secondary me-3">6</span>--}}
{{--                                <i class="nav-arrow bi bi-chevron-right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./layout/unfixed-sidebar.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Default Sidebar</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./layout/fixed-sidebar.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Fixed Sidebar</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./layout/layout-custom-area.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Layout <small>+ Custom Area </small></p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./layout/sidebar-mini.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Sidebar Mini</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./layout/collapsed-sidebar.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Sidebar Mini <small>+ Collapsed</small></p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./layout/logo-switch.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Sidebar Mini <small>+ Logo Switch</small></p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./layout/layout-rtl.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Layout RTL</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-tree-fill"></i>--}}
{{--                            <p>--}}
{{--                                UI Elements--}}
{{--                                <i class="nav-arrow bi bi-chevron-right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./UI/general.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>General</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./UI/icons.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Icons</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./UI/timeline.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Timeline</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-pencil-square"></i>--}}
{{--                            <p>--}}
{{--                                Forms--}}
{{--                                <i class="nav-arrow bi bi-chevron-right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./forms/general.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>General Elements</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-table"></i>--}}
{{--                            <p>--}}
{{--                                Tables--}}
{{--                                <i class="nav-arrow bi bi-chevron-right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./tables/simple.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Simple Tables</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-header">EXAMPLES</li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-box-arrow-in-right"></i>--}}
{{--                            <p>--}}
{{--                                Auth--}}
{{--                                <i class="nav-arrow bi bi-chevron-right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-box-arrow-in-right"></i>--}}
{{--                                    <p>--}}
{{--                                        Version 1--}}
{{--                                        <i class="nav-arrow bi bi-chevron-right"></i>--}}
{{--                                    </p>--}}
{{--                                </a>--}}
{{--                                <ul class="nav nav-treeview">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="./examples/login.html" class="nav-link">--}}
{{--                                            <i class="nav-icon bi bi-circle"></i>--}}
{{--                                            <p>Login</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="./examples/register.html" class="nav-link">--}}
{{--                                            <i class="nav-icon bi bi-circle"></i>--}}
{{--                                            <p>Register</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-box-arrow-in-right"></i>--}}
{{--                                    <p>--}}
{{--                                        Version 2--}}
{{--                                        <i class="nav-arrow bi bi-chevron-right"></i>--}}
{{--                                    </p>--}}
{{--                                </a>--}}
{{--                                <ul class="nav nav-treeview">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="./examples/login-v2.html" class="nav-link">--}}
{{--                                            <i class="nav-icon bi bi-circle"></i>--}}
{{--                                            <p>Login</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="./examples/register-v2.html" class="nav-link">--}}
{{--                                            <i class="nav-icon bi bi-circle"></i>--}}
{{--                                            <p>Register</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./examples/lockscreen.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Lockscreen</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-header">DOCUMENTATIONS</li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="./docs/introduction.html" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-download"></i>--}}
{{--                            <p>Installation</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="./docs/layout.html" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-grip-horizontal"></i>--}}
{{--                            <p>Layout</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="./docs/color-mode.html" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-star-half"></i>--}}
{{--                            <p>Color Mode</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-ui-checks-grid"></i>--}}
{{--                            <p>--}}
{{--                                Components--}}
{{--                                <i class="nav-arrow bi bi-chevron-right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./docs/components/main-header.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Main Header</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./docs/components/main-sidebar.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Main Sidebar</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-filetype-js"></i>--}}
{{--                            <p>--}}
{{--                                Javascript--}}
{{--                                <i class="nav-arrow bi bi-chevron-right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="./docs/javascript/treeview.html" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Treeview</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="./docs/browser-support.html" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-browser-edge"></i>--}}
{{--                            <p>Browser Support</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="./docs/how-to-contribute.html" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-hand-thumbs-up-fill"></i>--}}
{{--                            <p>How To Contribute</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="./docs/faq.html" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-question-circle-fill"></i>--}}
{{--                            <p>FAQ</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="./docs/license.html" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-patch-check-fill"></i>--}}
{{--                            <p>License</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-header">MULTI LEVEL EXAMPLE</li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-circle-fill"></i>--}}
{{--                            <p>Level 1</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-circle-fill"></i>--}}
{{--                            <p>--}}
{{--                                Level 1--}}
{{--                                <i class="nav-arrow bi bi-chevron-right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Level 2</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>--}}
{{--                                        Level 2--}}
{{--                                        <i class="nav-arrow bi bi-chevron-right"></i>--}}
{{--                                    </p>--}}
{{--                                </a>--}}
{{--                                <ul class="nav nav-treeview">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#" class="nav-link">--}}
{{--                                            <i class="nav-icon bi bi-record-circle-fill"></i>--}}
{{--                                            <p>Level 3</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#" class="nav-link">--}}
{{--                                            <i class="nav-icon bi bi-record-circle-fill"></i>--}}
{{--                                            <p>Level 3</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#" class="nav-link">--}}
{{--                                            <i class="nav-icon bi bi-record-circle-fill"></i>--}}
{{--                                            <p>Level 3</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    <i class="nav-icon bi bi-circle"></i>--}}
{{--                                    <p>Level 2</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-circle-fill"></i>--}}
{{--                            <p>Level 1</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-header">LABELS</li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-circle text-danger"></i>--}}
{{--                            <p class="text">Important</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-circle text-warning"></i>--}}
{{--                            <p>Warning</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon bi bi-circle text-info"></i>--}}
{{--                            <p>Informational</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
                <!--end::Sidebar Menu-->
            </nav>
        </div>
        <!--end::Sidebar Wrapper-->
    </aside>
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        @yield('content')
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
            Blog
        </strong>
    </footer>
    <!--end::Footer-->
</div>
<!--end::App Wrapper-->
<!--begin::Script-->
<!--begin::Third Party Plugin(OverlayScrollbars)-->
<script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
    integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
    crossorigin="anonymous"
></script>
<!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"
></script>
<!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
<script src="../../dist/js/adminlte.js"></script>
<!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
<script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
    };
    document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            });
        }
    });
</script>
<!--end::OverlayScrollbars Configure-->
<!-- OPTIONAL SCRIPTS -->
<!-- sortablejs -->
<script
    src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
    integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ="
    crossorigin="anonymous"
></script>
<!-- sortablejs -->
<script>
    const connectedSortables = document.querySelectorAll('.connectedSortable');
    connectedSortables.forEach((connectedSortable) => {
        let sortable = new Sortable(connectedSortable, {
            group: 'shared',
            handle: '.card-header',
        });
    });

    const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
    cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = 'move';
    });
</script>
<!-- apexcharts -->
<script
    src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
    integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
    crossorigin="anonymous"
></script>
<!-- jsvectormap -->
<script
    src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
    integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y="
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
    integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY="
    crossorigin="anonymous"
></script>
</body>
<!--end::Body-->
</html>
