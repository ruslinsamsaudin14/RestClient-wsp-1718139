<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Percetakan Sablon</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center klik_menu" id="#dashboard" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ORIGINALITY</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link klik_menu" id="dashboard" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link klik_menu" id="jenissablon" href="#">
                    <i class="fas fa-palette"></i>
                    <span>Jenis Sablon</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link klik_menu" id="barang" href="#">
                    <i class="fas fa-synagogue"></i>
                    <span>Barang</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


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
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">akun</span>
                                <img class="img-profile rounded-circle" src="assets/img/profil.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid val">

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; samsaudinruslin86 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.val').load('dashboard.php');
            $('.klik_menu').on('click', function() {
                let menu = $(this).attr('id');
                console.log(menu);
                if (menu == "dashboard") {
                    $('.val').load('dashboard.php');
                } else if (menu == "jenissablon") {
                    $('.val').load('jenissablon.php');
                    loadTableJenissablon();
                } else if (menu == "barang") {
                    $('.val').load('barang.php');
                    loadTableBarang();
                }
            });
            $('.val').on('click', '.addjs', function() {
                var namajenissablon = $('[name="createNamaJenisSablon"]').val();
                var keterangan = $('[name="createKeterangan"]').val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/percetakan_sablon/JenisSablon",
                    data: {
                        nama_jenis_sablon: namajenissablon,
                        Keterangan: keterangan
                    },
                    dataType: "JSON",
                    headers: {
                        'SABLON-TOKEN': "SABLON-12"
                    },
                    success: function(response) {
                        loadTableJenissablon();
                        var namajenissablon = $('[name="createNamaJenisSablon"]').val("");
                        var keterangan = $('[name="createKeterangan"]').val("");
                    }
                });
            });
            $('.val').on('click', '.editjs', function() {
                var id = $(this).attr('key');
                $.ajax({
                    type: "GET",
                    url: `http://localhost/percetakan_sablon/JenisSablon?id_jenis_sablon=${id}`,
                    dataType: "JSON",
                    headers: {
                        'SABLON-TOKEN': "SABLON-12"
                    },
                    success: function(response) {
                        response.data.forEach(element => {
                            $('[name="id"]').val(element.id_jenis_sablon);
                            $('[name="updateNamaJenisSablon"]').val(element.nama_jenis_sablon);
                            $('[name="updateKeterangan"]').val(element.Keterangan);
                        });
                    }
                });
            });
            $('.val').on('click', '.updatejs', function() {
                var id = $('[name="id"]').val();
                var nama = $('[name="updateNamaJenisSablon"]').val();
                var keterangan = $('[name="updateKeterangan"]').val();
                $.ajax({
                    type: "PUT",
                    url: "http://localhost/percetakan_sablon/JenisSablon",
                    data: {
                        id_jenis_sablon: id,
                        nama_jenis_sablon: nama,
                        Keterangan: keterangan
                    },
                    dataType: "JSON",
                    headers: {
                        'SABLON-TOKEN': "SABLON-12"
                    },
                    success: function(response) {
                        loadTableJenissablon();
                        $('[name="id"]').val("");
                        $('[name="updateNama"]').val("");
                        $('[name="updateKeterangan"]').val("");
                        console.log(response);
                    }
                });
            });
            $('.val').on('click', '.deletejs', function() {
                var id = $(this).attr('key');
                var kondisi = confirm(`anda yakin ingin menghapus data ${id}`);
                if (kondisi == false) {
                    return;
                } else {
                    $.ajax({
                        type: "DELETE",
                        url: "http://localhost/percetakan_sablon/JenisSablon",
                        data: {
                            id_jenis_sablon: id
                        },
                        dataType: "JSON",
                        headers: {
                            'SABLON-TOKEN': "SABLON-12"
                        },
                        success: function(response) {
                            loadTableJenissablon();
                        }
                    });
                }

            });



            function loadTableJenissablon() {
                let html = "";
                $.ajax({
                    type: "GET",
                    url: `http://localhost/percetakan_sablon/JenisSablon`,
                    dataType: "JSON",
                    headers: {
                        'SABLON-TOKEN': "SABLON-12"
                    },
                    success: function(response) {
                        let i = 1;
                        response.data.forEach(element => {
                            console.log(element);
                            html += `<tr>
                                        <th scope="row">${i}</th>
                                        <td>${element.id_jenis_sablon}</td>
                                        <td>${element.nama_jenis_sablon}</td>
                                        <td>${element.Keterangan}</td>
                                        <td>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button key="${element.id_jenis_sablon}" class="btn btn-success btn-sm rounded-0 editjs" type="button" data-toggle="modal" data-target="#updateModalCenterJS"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button key="${element.id_jenis_sablon}" class="btn btn-danger btn-sm rounded-0 deletejs" type="button"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>`;
                            i++;
                        });
                        $('#table_jenissablon').html(html);
                    }
                });
            }

            $('.val').on('click', '.create', function() {
                $.ajax({
                    type: "GET",
                    url: `http://localhost/percetakan_sablon/JenisSablon`,
                    dataType: "JSON",
                    headers: {
                        'SABLON-TOKEN': "SABLON-12"
                    },
                    success: function(response) {
                        var html = "<option>Pilih Jenis Sablon</option>`";
                        response.data.forEach(element => {
                            html += `<option value ="${element.id_jenis_sablon}">${element.nama_jenis_sablon}</option>`;
                        });
                        $('.inputbr').html(html);
                    }
                });
            });

            $('.val').on('click', '.addbrg', function() {
                var jenisid = $('[name="createJenis"]').val();
                var jeniskaos = $('[name="createJenisKaos"]').val();
                var warnakaos = $('[name="createWarnaKaos"]').val();
                var jenissablon = $('[name="createJenisSablon"]').val();
                var harga = $('[name="createHarga"]').val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/percetakan_sablon/Barang",
                    data: {
                        jenis_sablon_id: jenisid,
                        jenis_kaos: jeniskaos,
                        warna_kaos: warnakaos,
                        jenis_sablon: jenissablon,
                        harga: harga
                    },
                    dataType: "JSON",
                    headers: {
                        'SABLON-TOKEN': "SABLON-12"
                    },
                    success: function(response) {
                        loadTableBarang();
                        $('[name="createJenis"]').val("");
                        $('[name="createJenisKaos"]').val("");
                        $('[name="createWarnaKaos"]').val("");
                        $('[name="createJenisSablon"]').val("");
                        $('[name="createHarga"]').val("");
                    }
                });
            });

            $('.val').on('click', '.editbrg', function() {
                $.ajax({
                    type: "GET",
                    url: `http://localhost/percetakan_sablon/Barang`,
                    dataType: "JSON",
                    headers: {
                        'SABLON-TOKEN': "SABLON-12"
                    },
                    success: function(response) {
                        var html = "<option>Pilih Jenis Sablon</option>`";
                        response.data.forEach(element => {
                            html += `<option value ="${element.id_jenis_sablon}">${element.nama_jenis_sablon}</option>`;
                        });
                        $('.inputUpbr').html(html);
                    }
                });
                var id = $(this).attr('key');

                $.ajax({
                    type: "GET",
                    url: `http://localhost/percetakan_sablon/Barang?id_barang=${id}`,
                    dataType: "JSON",
                    headers: {
                        'SABLON-TOKEN': "SABLON-12"
                    },
                    success: function(response) {
                        response.data.forEach(element => {
                            $('[name="id"]').val(element.id_barang);
                            $('[name="update_jenis_sablon_id"]').val(element.jenis_sablon_id);
                            $('[name="updateJenisKaos"]').val(element.jenis_kaos);
                            $('[name="updateWarnaKaos"]').val(element.warna_kaos);
                            $('[name="updateJenisSablon"]').val(element.jenis_sablon);
                            $('[name="updateHarga"]').val(element.harga);
                        });
                    }
                });
            });

            $('.val').on('click', '.updatebrg', function() {
                var id = $('[name="id"]').val();
                var jenissablon_id = $('[name="update_jenis_sablon_id"]').val();
                var jeniskaos = $('[name="updateJenisKaos"]').val();
                var warnakaos = $('[name="updateWarnaKaos"]').val();
                var jenissablon = $('[name="updateJenisSablon"]').val();
                var harga = $('[name="updateHarga"]').val();
                $.ajax({
                    type: "PUT",
                    url: "http://localhost/percetakan_sablon/Barang",
                    data: {
                        id_barang: id,
                        jenis_sablon_id: jenissablon_id,
                        jenis_kaos: jeniskaos,
                        warna_kaos: warnakaos,
                        jenis_sablon: jenissablon,
                        harga: harga
                    },
                    dataType: "JSON",
                    headers: {
                        'SABLON-TOKEN': "SABLON-12"
                    },
                    success: function(response) {
                        loadTableBarang();
                        $('[name="id"]').val("");
                        $('[name="update_jenis_sablon_id"]').val("");
                        $('[name="updateJenisKaos"]').val("");
                        $('[name="updateWarnaKaos"]').val("");
                        $('[name="updateJenisSablon"]').val("");
                        $('[name="updateHarga"]').val("");

                    }
                });
            });

            $('.val').on('click', '.deletebrg', function() {
                var id = $(this).attr('key');
                var kondisi = confirm(`anda yakin ingin menghapus data ${id}`);
                if (kondisi == false) {
                    return;
                } else {
                    $.ajax({
                        type: "DELETE",
                        url: "http://localhost/percetakan_sablon/Barang",
                        data: {
                            id_barang: id
                        },
                        dataType: "JSON",
                        headers: {
                            'SABLON-TOKEN': "SABLON-12"
                        },
                        success: function(response) {
                            loadTableBarang();
                        }
                    });
                }

            });

            function loadTableBarang() {
                let html = "";
                $.ajax({
                    type: "GET",
                    url: `http://localhost/percetakan_sablon/Barang`,
                    dataType: "JSON",
                    headers: {
                        'SABLON-TOKEN': "SABLON-12"
                    },
                    success: function(response) {
                        let i = 1;
                        response.data.forEach(element => {
                            console.log(element);
                            html += `<tr>
                                        <th scope="row">${i}</th>
                                        <td>${element.Jenis_sablon_id}</td>
                                        <td>${element.jenis_kaos}</td>
                                        <td>${element.warna_kaos}</td>
                                        <td>${element.jenis_sablon}</td>
                                        <td>${element.harga}</td>
                                        <td>
                                        <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button key="${element.id_barang}" class="btn btn-success btn-sm rounded-0 editbrg" type="button" data-toggle="modal" data-target="#updateModalCenterbrg"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button key="${element.id_barang}" class="btn btn-danger btn-sm rounded-0 deletebrg" type="button"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>`;
                            i++;
                        });
                        $('#table_barang').html(html);
                    }
                });
            }
        });
    </script>
    <td></td>
</body>

</html>