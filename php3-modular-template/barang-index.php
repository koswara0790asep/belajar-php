<?php
    include "header.php";
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Barang</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Data Barang</li>
        </ol>
        </nav>
    </div><!-- End Page Title --> 

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

        <?php 
            // Untuk Insert Data
            $interval = date_interval_create_from_date_string('7 hours');
            if (isset($_POST['create'])) {
                
                $name = $_POST['name'] ?? null;
                $category = $_POST['category'] ?? null;
                $stock = $_POST['stock'] ?? null;
                $created_at = date_add(date_create(), $interval);
                $created_at = date_format($created_at, 'Y-m-d H:i:s');
                $updated_at = date_add(date_create(), $interval);
                $updated_at = date_format($updated_at, 'Y-m-d H:i:s');
 
                // Cek Data Masuk
                // echo "$name, $category, $stock, $created_at, $updated_at";

                if ($name != null && $category != null && $stock != null && $created_at != null && $updated_at != null) {
                    $sql = "INSERT INTO supplies VALUES (NULL, '$name', '$category', '$stock', '$created_at', '$updated_at')";
                    $hasilCreate = $conn->query($sql);

                    if ($hasilCreate) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Data Barang Berhasil Tambah! ✅
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                    } else {
                      ?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              Data Barang Tidak Berhasil Ditambahkan! ❌
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      <?php
                    }
                } else {
                  ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          Data Barang Tidak Boleh Kosong! 📝
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  <?php
                }
            }

            // Untuk Update Data
            if (isset($_POST['update'])) { 
                $id = $_POST['id'];               
                $name = $_POST['name'];
                $category = $_POST['category'];
                $stock = $_POST['stock'];
                $created_at = $_POST['created_at'];
                $updated_at = date_add(date_create(), $interval);
                $updated_at = date_format($updated_at, 'Y-m-d H:i:s');

                if ($id != null && $name != null && $category != null && $stock != null && $created_at != null && $updated_at != null) {
                    // $sql = "UPDATE table_name SET column1 = "$column1", column2 = "$column2", .... WHERE id = $id";
                    $sql = "UPDATE supplies SET name = '$name', category = '$category', stock = '$stock', created_at = '$created_at', updated_at = '$updated_at' WHERE id = '$id';";
                    $hasilUpdate = $conn->query($sql);

                    if ($hasilUpdate) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Data Barang Berhasil Diperbaharui! ✅
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                    } else {
                      ?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              Data Barang Tidak Berhasil Diperbaharui! ❌
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      <?php
                    }
                } else {
                  ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          Data Barang Tidak Boleh Kosong! 📝
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  <?php
                }
            }

            // Untuk Delete Data
            if (isset($_POST['delete'])) { 
                $id = $_POST['id'];               
 
                if ($id != null) {
                    // $sql = "DELETE FROM table_name WHERE id = $id";
                    $sql = "DELETE FROM supplies WHERE id = '$id';";
                    $hasilDelete = $conn->query($sql);

                    if ($hasilDelete) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Data Barang Berhasil Dihapus! ✅
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                    } else {
                      ?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              Data Barang Tidak Berhasil Dihapus! ❌
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      <?php
                    }
                } else {
                  ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          ID Data Barang Tidak Ditemukan / Tidak Ada! 📝
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  <?php
                }
            }
        ?>

        <div class="card p-4">
            <div class="card-head">
                <h1>Form Tambah Data Barang</h1>
            </div>
            <div class="card-body">
                <!-- Cek name & id pada atribut input agar sesuai dengan yang ada pada kolom-kolom tabel -->
                <form method="POST" action="barang-index.php">
                    <div class="row mb-3">
                        <label for="id" class="col-sm-2 col-form-label">Kode Barang</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name="id" placeholder="Kode Barang Tercatat Otomatis...." disabled>
                        <input type="hidden" class="form-control" id="id" name="id" placeholder="Masukkan Kode Barang....">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Barang....">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Satuan</legend>
                        <div class="col-sm-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" id="Makanan" value="Makanan">
                            <label class="form-check-label" for="Makanan">
                            Makanan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" id="Minuman" value="Minuman">
                            <label class="form-check-label" for="Minuman">
                            Minuman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" id="Obat" value="Obat">
                            <label class="form-check-label" for="Obat">
                            Obat
                            </label>
                        </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="stock" class="col-sm-2 col-form-label">Stok Barang</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" name="stock" id="stock" placeholder="Masukkan Stok Barang...">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Produksi & Pembaharuan</label>
                        <div class="col-sm-5">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-calendar-plus-fill"></i></span>
                            <input type="datetime" name="created_at" id="created_at" class="form-control" disabled>
                        </div>
                        </div>
                        <div class="col-sm-5">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-calendar-x-fill"></i></span>
                            <input type="datetime" name="updated_at" id="updated_at" class="form-control" disabled>
                        </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="create" id="create" value="create" class="btn btn-primary">💾 Submit</button>
                        <button type="reset" class="btn btn-secondary">🔄️ Reset</button>
                    </div>
                </form><!-- End Horizontal Form -->
            </div>
        </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar / List Produk</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th><b>K</b>ode Barang</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Tanggal Produksi</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Tanggal Pembaharuan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody> 
                <?php
                    $supplies = $conn->query("SELECT * FROM supplies");

                    foreach ($supplies as $supply) {
                    
                ?>
                  <tr>
                    <td>SUP00<?= $supply['id'] ?></td>
                    <td><?= $supply['name'] ?></td>
                    <td><?= $supply['category'] ?></td>
                    <td><?= $supply['stock'] ?></td>
                    <td><?= date_format(date_create($supply['created_at']), 'D, d M Y H:i:s') ?></td>
                    <td><?= date_format(date_create($supply['updated_at']), 'D, d M Y H:i:s') ?></td>
                    <td>
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editSUP00<?= $supply['id'] ?>">✏️</button>
                      <!-- Vertically centered Modal Edit -->
                      <div class="modal fade" id="editSUP00<?= $supply['id'] ?>" tabindex="-1">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header bg-warning">
                              <h5 class="modal-title">Edit Form</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <!-- Horizontal Form -->
                              <form method="POST" action="barang-index.php">
                                <div class="row mb-3">
                                  <label for="id" class="col-sm-2 col-form-label">Kode Barang</label>
                                  <div class="col-sm-10">
                                    <!-- Untuk Front End -->
                                    <input type="text" class="form-control" id="id" name="id" placeholder="Kode Barang Tercatat Otomatis...." value="<?= $supply['id'] ?>" disabled>
                                    <!-- Untuk Back End -->
                                    <input type="hidden" class="form-control" id="id" name="id" placeholder="Masukkan Kode Barang...." value="<?= $supply['id'] ?>">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Barang...." value="<?= $supply['name'] ?>">
                                  </div>
                                </div>
                                <fieldset class="row mb-3">
                                  <legend class="col-form-label col-sm-2 pt-0">Satuan</legend>
                                  <div class="col-sm-5">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="category" id="Makanan" value="Makanan" <?= $supply['category'] == 'Makanan' ? 'checked' : '' ?>>
                                      <label class="form-check-label" for="Makanan">
                                        Makanan
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="category" id="Minuman" value="Minuman" <?= $supply['category'] == 'Minuman' ? 'checked' : '' ?>>
                                      <label class="form-check-label" for="Minuman">
                                        Minuman
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="category" id="Obat" value="Obat" <?= $supply['category'] == 'Obat' ? 'checked' : '' ?>>
                                      <label class="form-check-label" for="Obat">
                                        Obat
                                      </label>
                                    </div>
                                  </div>
                                </fieldset>
                                <div class="row mb-3">
                                  <label for="stock" class="col-sm-2 col-form-label">Stok Barang</label>
                                  <div class="col-sm-10">
                                    <input type="number" class="form-control" name="stock" id="stock" placeholder="Masukkan Stok Barang..." value="<?= $supply['stock'] ?>">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Produksi & Pembaharuan</label>
                                  <div class="col-sm-5">
                                    <div class="input-group mb-3">
                                      <span class="input-group-text"><i class="bi bi-calendar-plus-fill"></i></span>
                                      <input type="datetime" name="created_at" id="created_at" class="form-control" value="<?= $supply['created_at'] ?>">
                                    </div>
                                  </div>
                                  <div class="col-sm-5">
                                    <div class="input-group mb-3">
                                      <span class="input-group-text"><i class="bi bi-calendar-x-fill"></i></span>
                                      <input type="datetime" name="updated_at" id="updated_at" class="form-control" value="<?= $supply['updated_at'] ?>" disabled>
                                    </div>
                                  </div>
                                </div>
                                <div class="text-center">
                                  <button type="submit" name="update" id="update" value="update" class="btn btn-primary">💾 Submit</button>
                                  <button type="reset" class="btn btn-secondary">🔄️ Reset</button>
                                  <a href="#" class="btn btn-danger" data-bs-dismiss="modal">❌ Tutup</a>
                                </div>
                              </form><!-- End Horizontal Form -->
                            </div>
                          </div>
                        </div>
                      </div><!-- End Vertically centered Modal-->

                      <button type="button" class="btn btn-danger"data-bs-toggle="modal" data-bs-target="#deleteSUP00<?= $supply['id'] ?>">🗑️</button>
                      <!-- Vertically centered Modal Delete -->
                      <div class="modal fade" id="deleteSUP00<?= $supply['id'] ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header bg-danger">
                              <h5 class="modal-title">Hapus</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                              <p style="font-size: 100px;">
                                <i class="bi bi-exclamation-triangle-fill text-danger"></i>
                              </p>
                              <h5>Apakah Anda Yakin?</h5>
                              <p>Data <b><?= $supply['name'] ?></b> yang akan dihapus, tidak dapat dikembalikan!</p>
                              <div class="modal-footer justify-content-center">
                                <form method="POST">
                                    <input type="hidden" name="id" id="id" value="<?= $supply['id'] ?>">
                                    <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">❌ Tutup</a>
                                    <button type="submit" name="delete" id="delete" value="Delete" class="btn btn-danger">🗑️ Ya, Hapus!</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Vertically centered Modal-->
                    </td>
                  </tr>
                  <?php 
                        
                    }
                  ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>

        </div> 
      </div>
    </section>
</main>

<?php
    include "footer.php";
?>