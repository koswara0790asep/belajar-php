<?php
    include "header.php";
?> 

<main class="main" id="main">
    <h1>Mencoba Method POST (MENGIRIMKAN)</h1>
    <p>Method POST untuk mengirimkan data melalui FORM ke File.</p>

    <?php
        if (isset($_POST['kirim'])) {
            $nama = $_POST['nama'] ?? null;
            $tanggal = $_POST['tanggal'] ?? null;
            $bulan = $_POST['bulan'] ?? null;
            $tahun = $_POST['tahun'] ?? null;
        }
        if (isset($_POST['contoh'])) {
            $nama = "Jhon Doe";
            $tanggal = 1;
            $bulan = 1;
            $tahun = 1990;
        }
    ?>

    <div class="card">
        <div class="card-header">
            <h4>Masukkan Identitas Anda</h4>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form form-control" placeholder="Masukkan Nama...">
                <div class="row">
                    <label for="tanggal">Tanggal - Bulan - Tahun</label>
                    <div class="col-md-4">
                        <select name="tanggal" id="tanggal"  class="form form-control">
                            <option value="#" selected disabled>-- Pilih Tanggal --</option>
                            <?php
                                for ($i=1; $i <= 31; $i++) { 
                                    ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="bulan" id="bulan"  class="form form-control">
                            <option value="#" selected disabled>-- Pilih Bulan --</option>
                            <?php
                                for ($i=1; $i <= 12; $i++) { 
                                    ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="tahun" id="tahun"  class="form form-control">
                            <option value="#" selected disabled>-- Pilih tahun --</option>
                            <?php
                                for ($i=1990; $i <= 2025; $i++) { 
                                    ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <button type="submit" name="kirim" id="kirim" value="kirim" class="btn btn-primary">Kirim</button>
                <button type="reset" class="btn btn-danger">Hapus</button>
                <a href="post.php" class="btn btn-warning">Refresh</a>
                <button type="submit" name="contoh" id="contoh" value="contoh" class="btn btn-secondary">Contoh</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1>Identitas Yang Dikirim</h1>
            <?php
                if (isset($_POST['kirim']) || isset($_POST['contoh'])) {
                    if ($nama != null && $tanggal != null && $bulan != null && $tahun != null) {
                        ?>
                            <ul>
                                <li>Nama : <?= $nama ?></li>
                                <li>Tanggal - Bulan - Tahun : <?= $tanggal ?> - <?= $bulan ?> - <?= $tahun ?></li>
                            </ul>
                        <?php
                    } else {
                        ?>
                            <h4 class="text text-center">Belum Ada Data Masuk!!</h4>
                        <?php
                    }
                } else {
                    ?>
                        <h4 class="text text-center">Belum Ada Data!!</h4>
                    <?php
                }
            ?>
        </div>
    </div>
</main>

<?php
    include "footer.php";
?>