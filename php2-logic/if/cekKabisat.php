<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Tahun Kabisat</title>
</head>
<body>
    <h1>Cek Tahun Kabisat</h1>
    <p><i>Tahun Kabisat adalah tahun yang terjadi 4 Tahun sekali. Dimana pada Bulan Februari bertambah harinya sebanyak satu hari.</i></p>
    <hr>
    <p>Berikut Cek Tahun Kabisat : </p>
    <p>Cek Tahun = 
        <?php
            $tahun = 2028;
        ?>
        <?= $tahun ?> 
        (<?= $tahun % 4 != 0 ? "Bukan Tahun Kabisat" : "Tahun Kabisat" ?>)
    </p>
</body>
</html>

<?php
                        if (isset($_POST['login'])) {
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                    ?>
                <div class="pt-4 pb-2">
                    <?php 
                    
                        if ($username == "admin" && $password == "admin#1234") {
                        
                        ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="spinner-border text-success" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <strong class="text text-success">Login Sukses!!</strong> *Jika tidak berpindah halaman, <a href="dashboard.php" class="text text-success"><u>klik disini!</u></a>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                        
                    </div>
                    
                    <script>
                      // cara pertama
                        setTimeout(function() {
                            window.location.href = 'dashboard.php';
                        }, 2000);
                    </script>
                            <?php
                            } else {
                        ?>

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        <strong>Login Gagal!!</strong> username atau password salah. 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                            <?php
                            }
                        ?>
                </div>
                <?php
                    }
                ?>