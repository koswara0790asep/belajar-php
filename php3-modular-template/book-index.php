<?php
    include "header.php";
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Buku</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Data Buku</li>
        </ol>
        </nav>
    </div><!-- End Page Title --> 

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

        <?php 
          
          // Untuk Insert Data
          if (isset($_POST['create'])) {
            $judul_buku = $_POST['judul_buku'] ?? null;
            $penulis = $_POST['penulis'] ?? null;
            $tahun_terbit = $_POST['tahun_terbit'] ?? null;
            $penerbit = $_POST['penerbit'] ?? null;

            // echo "$id, $judul_buku, $penulis, $tahun_terbit, $updated_at";

            if ($judul_buku != null && $penulis != null && $tahun_terbit != null && $penerbit != null) {
              $sql = "INSERT INTO books VALUES (NULL, '$judul_buku',  '$penulis',  '$tahun_terbit',  '$penerbit')";
              $hasilCreate = $conn->query($sql);

              if ($hasilCreate) {
                  ?>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          Data Buku Berhasil Dirubah! ✅
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  <?php
              } else {
                  ?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          Data Buku Tidak Berhasil Dirubah! ❌
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  <?php
              }
            } else {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Data Buku Tidak Boleh Kosong!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
            }
          }

          // Untuk Update Data
          if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $judul_buku = $_POST['judul_buku'];
            $penulis = $_POST['penulis'];
            $tahun_terbit = $_POST['tahun_terbit'];
            $penerbit = $_POST['penerbit'];

            // echo "$id, $name, $category, $stock, $updated_at";

            if ($id != null && $judul_buku != null && $penulis != null && $tahun_terbit != null && $penerbit != null) {
              $sql = "UPDATE books SET judul_buku = '$judul_buku', penulis = '$penulis', tahun_terbit = '$tahun_terbit', penerbit = '$penerbit' WHERE id = $id";
              $hasilUpdate = $conn->query($sql);

              if ($hasilUpdate) {
                  ?>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          Data Buku Berhasil Dirubah! ✅
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  <?php
              } else {
                  ?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          Data Buku Tidak Berhasil Dirubah! ❌
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  <?php
              }
            } else {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Data Buku Tidak Boleh Kosong!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
            }
          }

          // Untuk Hapus Data
          if (isset($_POST['delete'])) {
            $id = $_POST['id'];
           
            if ($id != null) {
              $sql = "DELETE FROM books WHERE id = $id";
              $hasilDelete = $conn->query($sql);

              if ($hasilDelete) {
                  ?>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          Data Buku Berhasil Dihapus! ✅
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  <?php
              } else {
                  ?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          Data Buku Tidak Berhasil Dihapus! ❌
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  <?php
              }
            } else {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Data ID Buku Tidak Boleh Kosong!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
            }
          }
        ?>
          <div class="card">
            <div class="card-body">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Form Tambah Data
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <form method="POST" action="">
                        
                        <div class="row mb-3">
                          <label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku....">
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label for="penulis" class="col-sm-2 col-form-label">Nama Penulis / Author</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Masukkan Nama Penulis / Author...">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="tahun_terbit" class="col-sm-2 col-form-label">Identitas Penerbit</label>
                          <div class="col-sm-5">
                            <div class="input-group mb-3">
                              <span class="input-group-text"><i class="bi bi-calendar-plus-fill"></i></span>
                              <input type="year" name="tahun_terbit" id="tahun_terbit" class="form-control">
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="input-group mb-3">
                              <span class="input-group-text"><i class="bi bi-house"></i></span>
                              <input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="Masukkan Nama Penerbit...">
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
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar / List Buku</h5>
              <!-- <a href="supplies-create.php" class="btn btn-primary">➕ Tambah Data</a> -->
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th><b>#</b></th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Penerbit</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody> 
                <?php
                    $books = $conn->query("SELECT * FROM books");

                    foreach ($books as $book) {
                    
                ?>
                  <tr>
                    <td><?= $book['id'] ?></td>
                    <td><?= $book['judul_buku'] ?></td>
                    <td><?= $book['penulis'] ?></td>
                    <td><?= $book['tahun_terbit'] ?></td>
                    <td><?= $book['penerbit'] ?></td>
                    <td>
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_<?= $book['id'] ?>">✏️</button>
                      <!-- Vertically centered Modal Edit -->
                      <div class="modal fade" id="edit_<?= $book['id'] ?>" tabindex="-1">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header bg-warning">
                              <h5 class="modal-title">Edit Form</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <!-- Horizontal Form -->
                              <form method="POST" action="">

                              <input type="hidden" name="id" id="id" value="<?= $book['id'] ?>">
                                
                                <div class="row mb-3">
                                    <label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $book['judul_buku'] ?>" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku....">
                                    </div>
                                </div>
                                    
                                <div class="row mb-3">
                                    <label for="penulis" class="col-sm-2 col-form-label">Nama Penulis / Author</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $book['penulis'] ?>" name="penulis" id="penulis" placeholder="Masukkan Nama Penulis / Author...">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="tahun_terbit" class="col-sm-2 col-form-label">Identitas Penerbit</label>
                                    <div class="col-sm-5">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-calendar-plus-fill"></i></span>
                                            <input type="year" name="tahun_terbit" id="tahun_terbit" class="form-control" value="<?= $book['tahun_terbit'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-calendar-x-fill"></i></span>
                                            <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= $book['penerbit'] ?>" placeholder="Masukkan Nama Penerbit...">
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

                      <button type="button" class="btn btn-danger"data-bs-toggle="modal" data-bs-target="#delete_<?= $book['id'] ?>">🗑️</button>
                      <!-- Vertically centered Modal Delete -->
                      <div class="modal fade" id="delete_<?= $book['id'] ?>" tabindex="-1">
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
                          <p>Data <b><?= $book['judul_buku'] ?></b> yang akan dihapus, tidak dapat dikembalikan!</p>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <form method="POST" action="">
                                    <input type="hidden" name="id" id="id" value="<?= $book['id'] ?>">
                                    <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">❌ Tutup</a>
                                    <button type="submit" name="delete" id="delete" value="Delete" class="btn btn-danger">🗑️ Ya, Hapus!</button>
                                </form>
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