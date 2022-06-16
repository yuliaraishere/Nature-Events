<?php

if (isset($_POST["save"])) {
    $category = $_POST["Kejadian Alam"];
    $detail = $_POST["Detail"];
    $foto = uploadImage();

    $result = mysqli_query($conn, "INSERT INTO kelam (Kejadian Alam, Detail, Foto) VALUES ('$kelam', '$detail', '$foto')");

    if (!$foto) {
        return false;
    }

    if (isset($result)) {
        echo "<div class='alert alert-info'>Data tersimpan</div>";
        echo "<meta http-equiv='refresh' content='1;url=naev-a.php'>";
    } else {
        echo "<div class='alert alert-info'>Gagal</div>";
    }
}


?>

<!-- HTML form -->
<div class="col-md-10 col-sm-10 col-xs-10">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Add Page
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kelam"><b>Kejadian Alam</b></label>
                            <input type="text" class="form-control" name="Kejadian Alam">
                        </div>
                        <div class="form-group">
                            <label for="detail"><b>Detail</b></label>
                            <textarea class="form-control" name="Detail"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="Foto">
                        </div>
                        <button class="btn btn-primary" name="save">Add</button>
                        </table>
                    </div>
            </div>
        </div>
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

        move_uploaded_file($tmpName, "../assets/images/" . $newname);

        return $newname;
    }

    ?>