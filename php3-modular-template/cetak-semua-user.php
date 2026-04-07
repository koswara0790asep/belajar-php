<?php
  include "config/db.php";

  $users = $conn->query("SELECT users.id as user_id, users.name, users.email, roles.id as role_id, roles.role_name, roles.color_pill FROM users JOIN roles ON users.role_id = roles.id");
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BELAJAR PHP 🔥</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <center>
        <table style="margin-left: -100px;">
            <tr>
                <td>
                    <!-- Bisa disisipkan gambar max 100px -->
                    <h1 class="text text-center">
                        PT. DUMMY<br>LOGO
                    </h1>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2">
                    <center>
                        <h1 style="color: rgb(25, 0, 255)">LOREM IPSUM DOLOR</h1>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni ab expedita neque in velit!<br>
                        Email : dummy@dummy.com Website : http://www.dummy.com
                    </center>
                </td>
                <td></td>
            </tr>
        </table>
    </center> 
    
    <hr>
    <hr>
    
    <center>
        <h1>INFORMASI DATA USER</h1>
    </center>

    <div class="container-fluid">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut assumenda numquam quos provident rem eaque inventore. Qui quaerat, accusantium est rerum repudiandae minima tempore, quos fugit quo mollitia aperiam dolor nobis molestiae, ipsam facilis sint pariatur et cumque sapiente eos! Fuga ducimus tempora nostrum. Architecto incidunt nisi, qui minima voluptas atque voluptatum eius, vitae optio, magnam corporis aliquid sunt. Doloribus magnam qui tempore odio, maxime quod a placeat molestiae iusto.</p>
        <p>Data User tersebut dibawah ini : </p>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
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
                        </tr>
                        <?php
                        $no++;
                    }
                ?>
            </tbody>
        </table>

        <br>
        
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, dolore! Totam praesentium harum, porro eveniet eum hic excepturi nihil eos. Ut exercitationem, optio repellat asperiores eligendi distinctio, libero eos qui ad recusandae aut tenetur perspiciatis in quidem est illo iusto sint quo, veniam doloribus! Architecto, saepe fuga est voluptatibus laborum animi expedita, natus quos harum iusto deserunt officiis, quod repudiandae! Deleniti officiis voluptate quos harum iste provident, eveniet aliquid expedita error sequi. Placeat, delectus accusantium itaque doloremque, labore porro aperiam iure dolorum culpa voluptate eaque quo atque dicta velit amet voluptatem recusandae, dolorem unde. Facilis omnis minus ex expedita, enim optio molestias fuga modi molestiae delectus est libero eum assumenda ad provident, porro laboriosam rem minima dolores! Blanditiis soluta eum perferendis! Repudiandae delectus itaque, culpa alias perspiciatis ea quod minus perferendis placeat nisi quos animi necessitatibus ad sequi aliquam dolorum dicta ab? Vel ipsam maiores, ipsum consectetur tenetur delectus magni.</p>

        <center>
            <p>......, ....................</p>
            <p>Mengetahui, Komite Tertinggi</p>
            <table>
                <tr>
                    <td>
                        <!-- Bisa disisipkan gambar max 100px -->
                        <h1 class="text text-center">
                            TANDA TANGAN
                        </h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <p>Jhon Doe The Chief Of Operation</p>
                        </center>
                    </td>
                </tr>
            </table>
        </center>
    </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>