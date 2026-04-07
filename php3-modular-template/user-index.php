<?php
    include 'header.php';
?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data User</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Data User</li>
        </ol>
        </nav>
    </div><!-- End Page Title --> 

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

            <?php 
                if (isset($_POST['simpan'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $role_id = $_POST['role'];
                    $password = $_POST['password'];
                    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

                    if ($name == NULL || $email == NULL || $role_id == NULL || $password == NULL) {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                Data User Tidak Boleh Kosong!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                    } else {
                        $conn->query("INSERT INTO users (name, email, role_id, password) VALUES ('$name', '$email', '$role_id', '$encrypted_password')");

                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Data User Berhasil Disimpan!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                    }
                }
            ?>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form User</h5>
                        <form action="" method="post">
                            <div class="row mb-2">
                                <div class="col-5">
                                    <label for="name">Nama</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Pengguna...">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-5">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email Pengguna...">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-5">
                                    <label for="role">role</label>
                                </div>
                                <div class="col-7">
                                    <select name="role" id="role" class="form-control">
                                        <option value="">Pilih Role Pengguna...</option>
                                        <?php 
                                            $roles = $conn->query("SELECT id, role_name FROM roles");

                                            foreach ($roles as $role) {
                                                echo "<option value='$role[id]'>$role[role_name]</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-5">
                                    <label for="password">Password</label>
                                </div>
                                <div class="col-7">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="********">
                                </div>
                            </div>
                            <button type="submit" name="simpan" id="simpan" value="simpan" class="btn btn-primary">💾 Simpan</button>
                            <button type="reset" class="btn btn-secondary">🔄️ Reset</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Filter Data User</h5>
                    <form action="" method="get">
                        <label for="created_at">Tanggal Dibuat</label>
                        <input type="datetime-local" name="created_at" id="created_at" class="form-control">
                        <button type="submit" name="filter" id="filter" value="filter" class="btn btn-primary mt-2">🔍 Filter</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tabel User</h5>
                        <a href="cetak-semua-user.php" class="btn btn-info btn-sm">🖨️ Cetak Semua</a>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $users = $conn->query("SELECT users.id as user_id, users.name, users.email, roles.id as role_id, roles.role_name, roles.color_pill FROM users JOIN roles ON users.role_id = roles.id");

                                    $no = 1;
                                    foreach ($users as $user) {
                                        ?>
                                        <tr>
                                            <th scope='row'><?= $no ?></th>
                                            <td><?= $user['name'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><p class='badge bg-<?= $user['color_pill'] ?>'><?= $user['role_name'] ?></p></td>
                                            <td>
                                                <a href="cetak-user.php?id=<?= $user['user_id'] ?>" class="btn btn-warning btn-sm">🖨️ Cetak</a>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

<?php
    include 'footer.php';
?>