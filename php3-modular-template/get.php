<?php
    include "header.php";
?> 

<main class="main" id="main">
    <h1>Mencoba Method GET (MENDAPATKAN)</h1>
    <p>Method GET untuk mendapatkan data melalui URL.</p>

    <?php
        if (isset($_GET['kirim'])) {
            $nama = $_GET['nama'];
            $tanggal = $_GET['tanggal'];
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
        }
    ?>

    <div class="card">
        <div class="card-header">
            <h4>Masukkan Identitas Anda</h4>
        </div>
        <div class="card-body">
            <form action="" method="get">
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
                <a href="get.php" class="btn btn-warning">Refresh</a>
                <a href="get.php?nama=Jhon+Doe&tanggal=1&bulan=1&tahun=1990&kirim=kirim" class="btn btn-secondary">Contoh</a>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1>Identitas Yang Dikirim</h1>
            <?php
                if (isset($_GET['kirim'])) {
                    if ($nama != null && $tanggal != null && $bulan != null && $tahun != null) {
                        $ttl = $tanggal . "-" . $bulan . "-" . $tahun;
                        ?>
                            <ul>
                                <li>Nama : <?= $nama ?></li>
                                <li>Tanggal - Bulan - Tahun : <?= $ttl ?></li>
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