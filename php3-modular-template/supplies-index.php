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
                    <td><?= $supply['created_at'] ?></td>
                    <td><?= $supply['updated_at'] ?></td>
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
                              <form>
                                <div class="row mb-3">
                                  <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kode_barang" placeholder="Masukkan Kode Barang...." value="<?= $supply['id'] ?>" disabled>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Barang...." value="<?= $supply['name'] ?>">
                                  </div>
                                </div>
                                <fieldset class="row mb-3">
                                  <legend class="col-form-label col-sm-2 pt-0">Satuan</legend>
                                  <div class="col-sm-5">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="satuan" id="Makanan" value="Makanan" <?= $supply['category'] == 'Makanan' ? 'checked' : '' ?>>
                                      <label class="form-check-label" for="Makanan">
                                        Makanan
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="satuan" id="Minuman" value="Minuman" <?= $supply['category'] == 'Minuman' ? 'checked' : '' ?>>
                                      <label class="form-check-label" for="Minuman">
                                        Minuman
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="satuan" id="Obat" value="Obat" <?= $supply['category'] == 'Obat' ? 'checked' : '' ?>>
                                      <label class="form-check-label" for="Obat">
                                        Obat
                                      </label>
                                    </div>
                                  </div>
                                </fieldset>
                                <div class="row mb-3">
                                  <label for="stok" class="col-sm-2 col-form-label">Stok Barang</label>
                                  <div class="col-sm-10">
                                    <input type="number" class="form-control" id="stok" placeholder="Masukkan Stok Barang..." value="<?= $supply['stock'] ?>">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Produksi & Pembaharuan</label>
                                  <div class="col-sm-5">
                                    <div class="input-group mb-3">
                                      <span class="input-group-text"><i class="bi bi-calendar-plus-fill"></i></span>
                                      <input type="datetime" name="tanggal_produksi" id="tanggal_produksi" class="form-control" value="<?= $supply['created_at'] ?>">
                                    </div>
                                  </div>
                                  <div class="col-sm-5">
                                    <div class="input-group mb-3">
                                      <span class="input-group-text"><i class="bi bi-calendar-x-fill"></i></span>
                                      <input type="datetime" name="tanggal_pembaharuan" id="tanggal_pembaharuan" class="form-control" value="<?= $supply['updated_at'] ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="text-center">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                  <button type="reset" class="btn btn-secondary">Reset</button>
                                  <a href="supplies-index.php" class="btn btn-danger">Tutup</a>
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
                              <a href="#" class="btn btn-danger">🗑️ Ya, Hapus!</a>
                              <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">❌ Tutup</a>
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