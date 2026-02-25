<?php
    include "header.php";
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Barang</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item"><a href="supplies-index.php">Data Barang</a></li>
            <li class="breadcrumb-item active">Form Tambah Barang</li>
        </ol>
        </nav>
    </div><!-- End Page Title --> 

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
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
                        <form method="POST" action="supplies-index.php">
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
                                <input class="form-check-input" type="radio" name="category" id="Makanan" value="Makanan" checked>
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
                            <a href="supplies-index.php" class="btn btn-warning">🔙 Kembali</a>
                            </div>
                        </form><!-- End Horizontal Form -->
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

</main>

<?php
    include "footer.php";
?>