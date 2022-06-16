<?php

include "../../connect.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../assets/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


    <!-- FONTAWESOME STYLES-->
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />

    <style>
        .table {
            border-collapse: collapse !important;
        }

        .table td,
        .table th {
            background-color: #fff !important;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #ddd !important;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">
            <h2>ADMIN <em>PAGE</em></h2>
        </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../../logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">List</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Content List
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="naev-a.php">Nature Events</a>
                                <a class="nav-link" href="../dino/dino-a.php">Dinosaur Period</a>
                            </nav>
                        </div>
                        <div>
                            <a class="nav-link" href="../sub-list.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Submission List
                            </a>
                        </div>
                        <div class="sb-sidenav-menu-heading">Logout</div>
                        <a class="nav-link" href="../../logout.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Yulia Rizki Anjani
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">


            <!-- TABLE -->
            <div class="col-md-10 col-sm-10 col-xs-10">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-table me-1"></i>
                                            Submission List
                                        </div>
                                        <div class="card-body">
                                            <table id="datatablesSimple">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kejadian Alam</th>
                                                        <th>Detail</th>
                                                        <th>Foto</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $result = mysqli_query($conn, "SELECT * FROM kelam ORDER BY id ASC");
                                                    ?>
                                                    <?php
                                                    $i = 1;
                                                    while ($data = mysqli_fetch_assoc($result)) {
                                                    ?>

                                                        <tr>
                                                            <td><?= $i ?></td>
                                                            <td><?= $data["Kejadian Alam"] ?></td>
                                                            <td><?= $data["Detail"] ?></td>
                                                            <td>
                                                                <img src="../../assets/images/<?= $data["Foto"]; ?>" width="90" alt="...">
                                                            </td>
                                                            <td>
                                                                <a href="naev-a.php?halaman=edit&id=<?= $data["id"]; ?>" class="btn btn-warning btn-sm">Edit</a>

                                                                <a href="naev-a.php?halaman=hapus&id=<?= $data["id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin dihapus')">Hapus</a>
                                                            </td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php $i++;
                                                    } ?>
                                    <?php if (!isset($_GET["halaman"])) { ?>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <a href="naev-a.php?halaman=tambah" class="btn btn-primary">Add</a>
                                        </div>
                                    <?php } ?>
                                    </tbody>
                            </table>
                        </div>
                        <?php

                        function uploadImage()
                        {
                            $namaFile = $_FILES["foto"]["name"];
                            $sizeFile = $_FILES["foto"]["size"];
                            $error = $_FILES["foto"]["error"];
                            $tmpName = $_FILES["foto"]["tmp_name"];

                            // mengecek apakah ada file yang diupload
                            if ($error === 4) {
                                echo "<script>alert(\"Silahkan Upload gambar\");</script>";
                                return false;
                            }

                            // mengecek ekstensi file gambar yang diupload
                            $allowextensions = ["jpg", "jpeg", "png"];
                            $extension = explode(".", $namaFile); // trick untuk memecah nama file pada titik untuk mengetahui extension yanng dipakai
                            $extension = strtolower/*memaksa string menjadi kecil semua kemudian diambil */(end($extension)); // mengambil text atau nama file paling belakang setelah dipecah (mengambil nama ekstensinya)

                            if (!in_array/*mengecek isi array pertama sama seperti array kedua*/($extension, $allowextensions)) {
                                echo "<script>alert(\"extensi yang diperbolehkan jpg, jpeg, png\");</script>";
                                return false;
                            }

                            // mengecek ukuran file
                            if ($sizeFile > 1000000) {
                                echo "<script>alert('ukuran file terlalu besar');</script>";
                                return false;
                            }

                            // mengganti nama file dengan random number agar tidak terjadi tabrakan ketika file di server

                            $newname = uniqid() . "." . $extension; // function uniqid untuk memberikan id uniq

                            move_uploaded_file($tmpName, "../../assets/images/" . $newname);

                            return $newname;
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; ©2022NatureEvent</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>