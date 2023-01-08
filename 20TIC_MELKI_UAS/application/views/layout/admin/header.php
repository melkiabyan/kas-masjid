<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url('assets_admin/') ?>assets/images/favicon.svg" type="image/x-icon">

    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>assets/vendors/simple-datatables/style.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?= base_url('assets_admin/') ?>index.html"><img style="width:200px; height: 100px;" src="<?= base_url('assets_admin/') ?>assets/images/logo/mylogo.png" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="<?= base_url('assets_admin/') ?>#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item  ">
                            <a href="<?= base_url('Dashboard/') ?>" class='sidebar-link'>
                                <img width="25" src="<?= base_url('assets_admin/') ?>assets/images/icon/dashboard.png" alt="Logo" srcset="">
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Uang Kas</li>

                        <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('assets_admin/') ?>#" class='sidebar-link'>
                                <img width="30" src="<?= base_url('assets_admin/') ?>assets/images/icon/mosque.png" alt="Logo" srcset="">
                                <span>Masjid</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('Masjid/pemasukan') ?>">Pemasukan Kas Masjid</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('Masjid/pengeluaran') ?>">Pengeluaran Kas Masjid</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('Masjid/rekap') ?>">Rekap Keuangan </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('assets_admin/') ?>#" class='sidebar-link'>
                                <img width="30" src="<?= base_url('assets_admin/') ?>assets/images/icon/sosial.png" alt="Logo" srcset="">
                                <span>Sosial</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('Sosial/pemasukan') ?>">Pemasukan Kas Sosial</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('Sosial/pengeluaran') ?>">Pengeluaran Kas Sosial</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('Sosial/rekap') ?>">Rekap Keuangan </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Kurban</li>

                        <li class="sidebar-item  ">
                            <a href="<?= base_url('Kurban/hewan_kurban') ?>" class='sidebar-link'>
                                <img width="30" src="<?= base_url('assets_admin/') ?>assets/images/icon/cow.png" alt="Logo" srcset="">
                                <span>Hewan Kurban</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="<?= base_url('Kurban/') ?>" class='sidebar-link'>
                                <img width="30" src="<?= base_url('assets_admin/') ?>assets/images/icon/user.png" alt="Logo" srcset="">
                                <span>Peserta Kurban</span>
                            </a>
                        </li>
                        <hr>
                        <li class="sidebar-item  ">
                            <a href="<?= base_url('auth/logout') ?>" class='sidebar-link'>
                                <img width="30" src="<?= base_url('assets_admin/') ?>assets/images/icon/logout.png" alt="Logo" srcset="">
                                <span>Logout</span>
                            </a>
                        </li>


                        <!-- <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('assets_admin/') ?>#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Form Elements</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>form-element-input.html">Input</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>form-element-input-group.html">Input Group</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>form-element-select.html">Select</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>form-element-radio.html">Radio</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>form-element-checkbox.html">Checkbox</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>form-element-textarea.html">Textarea</a>
                                </li>
                            </ul>
                        </li> -->

                        <!-- <li class="sidebar-item  ">
                            <a href="<?= base_url('assets_admin/') ?>form-layout.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Form Layout</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('assets_admin/') ?>#" class='sidebar-link'>
                                <i class="bi bi-pen-fill"></i>
                                <span>Form Editor</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>form-editor-quill.html">Quill</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>form-editor-ckeditor.html">CKEditor</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>form-editor-summernote.html">Summernote</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>form-editor-tinymce.html">TinyMCE</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="<?= base_url('assets_admin/') ?>table.html" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Table</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="<?= base_url('assets_admin/') ?>table-datatable.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Datatable</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Extra UI</li>

                        <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('assets_admin/') ?>#" class='sidebar-link'>
                                <i class="bi bi-pentagon-fill"></i>
                                <span>Widgets</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>ui-widgets-chatbox.html">Chatbox</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>ui-widgets-pricing.html">Pricing</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>ui-widgets-todolist.html">To-do List</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('assets_admin/') ?>#" class='sidebar-link'>
                                <i class="bi bi-egg-fill"></i>
                                <span>Icons</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>ui-icons-fontawesome.html">Fontawesome</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>ui-icons-dripicons.html">Dripicons</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('assets_admin/') ?>#" class='sidebar-link'>
                                <i class="bi bi-bar-chart-fill"></i>
                                <span>Charts</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>ui-chart-chartjs.html">ChartJS</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>ui-chart-apexcharts.html">Apexcharts</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="<?= base_url('assets_admin/') ?>ui-file-uploader.html" class='sidebar-link'>
                                <i class="bi bi-cloud-arrow-up-fill"></i>
                                <span>File Uploader</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('assets_admin/') ?>#" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>ui-map-google-map.html">Google Map</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>ui-map-jsvectormap.html">JS Vector Map</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Pages</li>

                        <li class="sidebar-item  ">
                            <a href="<?= base_url('assets_admin/') ?>application-email.html" class='sidebar-link'>
                                <i class="bi bi-envelope-fill"></i>
                                <span>Email Application</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="<?= base_url('assets_admin/') ?>application-chat.html" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Chat Application</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="<?= base_url('assets_admin/') ?>application-gallery.html" class='sidebar-link'>
                                <i class="bi bi-image-fill"></i>
                                <span>Photo Gallery</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="<?= base_url('assets_admin/') ?>application-checkout.html" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>Checkout Page</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('assets_admin/') ?>#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>auth-login.html">Login</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>auth-register.html">Register</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>auth-forgot-password.html">Forgot Password</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('assets_admin/') ?>#" class='sidebar-link'>
                                <i class="bi bi-x-octagon-fill"></i>
                                <span>Errors</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>error-403.html">403</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>error-404.html">404</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('assets_admin/') ?>error-500.html">500</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Raise Support</li>

                        <li class="sidebar-item  ">
                            <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                                <i class="bi bi-life-preserver"></i>
                                <span>Documentation</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                                <i class="bi bi-puzzle"></i>
                                <span>Contribute</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="https://github.com/zuramai/mazer#donate" class='sidebar-link'>
                                <i class="bi bi-cash"></i>
                                <span>Donate</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>