<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('sipenmaru/images/logo.png') }}">

    <!-- Datatable -->
    <link href="{{ asset('sipenmaru/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Print Datatable -->
    <link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">

    <!-- Daterange picker -->
    <link href="{{ asset('sipenmaru/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{ asset('sipenmaru/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{ asset('sipenmaru/vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet">
    <!-- Material color picker -->
    <link href="{{ asset('sipenmaru/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">

    <!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('sipenmaru/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('sipenmaru/vendor/pickadate/themes/default.date.css') }}">
    <link href="../icon.css?family=Material+Icons" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('sipenmaru/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sipenmaru/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('sipenmaru/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('sipenmaru/vendor/nouislider/nouislider.min.css') }}">
    <!-- SweeatAlert css -->
    <link href="{{ asset('sipenmaru/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('sipenmaru/vendor/toastr/css/toastr.min.css') }}">

    <link href="{{ asset('sipenmaru/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div id="main-wrapper">

        <!--**********************************
    Nav header start
***********************************-->
        <div class="nav-header">
            <a href="dashboard" class="brand-logo">
                <img alt="image" width="25" src="{{ asset('img/icon.png') }}">
                <div class="brand-title">
                    <h2 class="">GKZ</h2>
                </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
    Nav header end
***********************************-->

        <!--**********************************
    Chat box start
***********************************-->
        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="alerts" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notications</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
                                <ul class="contacts">
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">KK</div>
                                            <div class="user_info">
                                                <span>David Nester Birthday</span>
                                                <p class="text-primary">Today</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SOCIAL</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont success">RU</div>
                                            <div class="user_info">
                                                <span>Perfection Simplified</span>
                                                <p>Jame Smith commented on your status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">AU</div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">MO</div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notes">
                        <div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"></rect>
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notes</h6>
                                    <p class="mb-0">Add New Nots</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>New order placed..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Youtube, a video-sharing website..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>john just buy your product..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
    Chat box End
***********************************-->

        <!--**********************************
    Header start
***********************************-->
        <div class="header border-bottom">
            <div class="header-content">

                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                @yield('menunya')
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item d-flex align-items-center">

                            </li>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">

                                    <img class="avatar-lg rounded-circle img-thumbnail" src="" alt="" width="50px" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="profile" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profil </span>
                                    </a>
                                    <a href="/logout" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
    Header end ti-comment-alt
***********************************-->

        <!--**********************************
    Sidebar start
***********************************-->

        <div class="dlabnav">

            <div class="dlabnav-scroll">
                @auth
                <div class="sidebar-user text-center">

                    <a href="profile">
                        <img class="avatar-lg rounded-circle img-thumbnail" src="{{ asset('sipenmaru/images/ava.png') }}" alt="" width="75px" />
                        <div class="badge-bottom"><span class="badge badge-primary">
                            </span>
                        </div>
                        <h6 class="mt-3 f-14 f-w-600">

                        </h6>
                    </a>
                </div>
                @endauth
                <div class="side-bar-profile">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="side-bar-profile-img">

                            <img class="avatar-lg rounded-circle img-thumbnail" src="{{ asset('sipenmaru/images/ava.png') }}" alt="" />
                            <!--<img src="images/user.jpg" alt="">-->
                        </div>
                        <div class="profile-info1">
                            <h4 class="fs-18 font-w500"></h4>
                            <span></span>
                        </div>
                        <div class="profile-button">
                            <i class="fas fa-caret-down scale5 text-light"></i>
                        </div>
                    </div>
                </div>
                <ul class="metismenu" id="menu">
                    <li><a href="dashboard">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Beranda</span>
                        </a>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-book"></i>
                            <span class="nav-text">Data Master </span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="">Pengguna</a></li>
                            <li><a href="">Sekolah</a></li>
                            <li><a href="">Program Studi</a></li>
                            <li><a href="">Jadwal Kegiatan</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-database"></i>
                            <span class="nav-text">Data Transaksi</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="">Pendaftaran</a></li>
                            <li><a href="">Pembayaran</a></li>
                        </ul>
                    </li>

                    <li><a href="" aria-expanded="false">
                            <i class="fa fa-file"></i>
                            <span class="nav-text">Pengumuman</span>
                        </a>
                    </li>
                    <!--<li><a href="#" aria-expanded="false">
                <i class="fa fa-download"></i>
                <span class="nav-text">Pusat Unduhan</span>
            </a>
        </li>-->
                </ul>



                <div class="copyright">
                    <p><strong>SIPENMARU PEI </strong> ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> All Rights Reserved
                    </p>
                    <p class="fs-12">Made with <span class="heart"></span> by Luthfiyah Sakinah</p>
                </div>
            </div>
        </div>
        <!--**********************************
    Sidebar end
***********************************-->

        <!--**********************************
    Content body start
***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Pendaftar</h4>

                                <!-- center modal -->
                                <div>
                                    <button class="btn btn-info waves-effect waves-light mb-4" onclick="printDiv('cetak')"><i class="fa fa-print"> </i></button>
                                    <a href="form-registration"><button type="button" class="btn btn-primary mb-4" style="margin-bottom: 1rem;"><i class="mdi mdi-plus me-1"></i>Tambah
                                            Pendaftaran</button></a>
                                </div>
                            </div>
                            <div class="card-body" id="cetak">
                                <div class="table-responsive">


                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No Peserta</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal Daftar</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>23</td>
                                                <td>bagas</td>
                                                <td></td>
                                                <td><strong></strong></a></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <span class="badge badge-success">Terverifikasi<span class="ms-1 fa fa-check"></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-7" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <circle fill="#000000" cx="5" cy="12" r="2">
                                                                                </circle>
                                                                                <circle fill="#000000" cx="12" cy="12" r="2">
                                                                                </circle>
                                                                                <circle fill="#000000" cx="19" cy="12" r="2">
                                                                                </circle>
                                                                            </g>
                                                                        </svg></span></button>
                                                                <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-7">
                                                                    <div class="py-2"><a class="dropdown-item" href="/verified-registration/">Terverifikasi</a><a class="dropdown-item" href="/notverified-registration/">Belum
                                                                            Terverifikasi</a>
                                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-success" href="/finish-registration/">Selesai
                                                                        </a>
                                                                    </div>
                                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="/invalid-registration/">Tidak
                                                                        Sah</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-secondary shadow btn-xs sharp me-1" title="Detail Registration" href="detail-registration/"><i class="fa fa-file-alt"></i></a>
                                        <a class="btn btn-primary shadow btn-xs sharp me-1" title="Edit" href="edit-registration/"><i class="fa fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash" data-bs-toggle="modal" data-bs-target=".delete"></i></a>
                                        <div class="modal fade delete" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus Data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-center"><i class="fa fa-trash"></i><br> Anda yakin ingin
                                                        menghapus data ini?<br>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Batalkan</button>
                                                        <a href="delete-registration">
                                                            <button type="submit" class="btn btn-danger shadow">
                                                                Ya, Hapus Data!
                                                            </button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
    Content body end
***********************************-->




    <!--**********************************
    Footer start
***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright ©
                <script>
                    document.write(new Date().getFullYear())
                </script> <br>
                Designed &amp; Developed by <a href="https://www.instagram.com/piaaasan/" target="_blank">Luthfiyah
                    Sakinah</a>
            </p>
        </div>
    </div>
    <!--**********************************
    Footer end
***********************************-->

    <!--**********************************
   Support ticket button start
***********************************-->

    <!--**********************************
   Support ticket button end
***********************************-->


    </div>
    <!--**********************************
Main wrapper end
***********************************-->

    <!--**********************************
Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('sipenmaru/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('sipenmaru/vendor/apexchart/apexchart.js') }}"></script>

    <script src="{{ asset('sipenmaru/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('sipenmaru/vendor/peity/jquery.peity.min.js') }}"></script>
    <!-- Dashboard 1 -->
    <script src="{{ asset('sipenmaru/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('sipenmaru/vendor/owl-carousel/owl.carousel.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('sipenmaru/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/js/plugins-init/datatables.init.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('sipenmaru/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('sipenmaru/js/pages/datatables.init.js') }}"></script>


    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="{{ asset('sipenmaru/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- clockpicker -->
    <script src="{{ asset('sipenmaru/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
    <!-- asColorPicker -->
    <script src="{{ asset('sipenmaru/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>
    <!-- Material color picker -->
    <script src="{{ asset('sipenmaru/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
    </script>
    <!-- pickdate -->
    <script src="{{ asset('sipenmaru/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/pickadate/picker.date.js') }}"></script>

    <!-- Daterangepicker -->
    <script src="{{ asset('sipenmaru/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
    <!-- Clockpicker init -->
    <script src="{{ asset('sipenmaru/js/plugins-init/clock-picker-init.js') }}"></script>
    <!-- asColorPicker init -->
    <script src="{{ asset('sipenmaru/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
    <!-- Material color picker init -->
    <script src="{{ asset('sipenmaru/js/plugins-init/material-date-picker-init.js') }}"></script>
    <!-- Pickdate -->
    <script src="{{ asset('sipenmaru/js/plugins-init/pickadate-init.js') }}"></script>

    <!-- Sweetalert -->
    <script src="{{ asset('sipenmaru/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/js/plugins-init/sweetalert.init.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('sipenmaru/vendor/toastr/js/toastr.min.js') }}"></script>

    <!-- All init script -->
    <script src="{{ asset('sipenmaru/js/plugins-init/toastr-init.js') }}"></script>

    <script src="{{ asset('sipenmaru/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('sipenmaru/js/custom.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('sipenmaru/js/demo.js') }}"></script>
    <script src="{{ asset('sipenmaru/js/styleSwitcher.js') }}"></script>
</body>

</html>