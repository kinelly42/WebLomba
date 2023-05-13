<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>


    <!-- NavbarAdmin -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../logout.php">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    </nav>
    <!-- NavbarAdminEnd -->

    <!-- Memunculkan Kritik Dan Saran -->
    <?php
    // Menghubungkan ke database
    $servername = "localhost"; // Nama server database
    $username = "root"; // Username database
    $password = ""; // Password database
    $dbname = "lombaweb"; // Nama database

    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }


    // Memeriksa apakah ada data yang dikirim melalui metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Memeriksa apakah data email, password, dan message tersedia
        if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["message"])) {
            // Mengambil data dari form
            $email = $_POST["email"];
            $password = $_POST["password"];
            $message = $_POST["message"];

            // Menyimpan data ke dalam tabel yang diinginkan
            $sql = "INSERT INTO kritik (email, password, message) VALUES ('$email', '$password', '$message')";

            if ($conn->query($sql) === TRUE) {
                echo "";
            } else {
                echo "Terjadi kesalahan: " . $conn->error;
            }
        }
    }

    // ...

    // Memeriksa apakah ada data yang dikirim melalui metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Memeriksa apakah ada data hapus yang dikirim
        if (isset($_POST['hapus'])) {
            $id = $_POST['hapus'];
            $deleteSql = "DELETE FROM kritik WHERE id='$id'";

            if ($conn->query($deleteSql) === TRUE) {
                echo "Data berhasil dihapus.";

                // Mengatur ulang nilai awal AUTO_INCREMENT
                $resetAutoIncrementSql = "ALTER TABLE kritik AUTO_INCREMENT = 1";
                $conn->query($resetAutoIncrementSql);
            } else {
                echo "Terjadi kesalahan: " . $conn->error;
            }
        }
    }



    // Menghapus data kritik dan saran
    if (isset($_POST['hapus'])) {
        $id = $_POST['hapus'];
        $deleteQuery = "DELETE FROM kritik WHERE id = $id";
        if ($conn->query($deleteQuery) === TRUE) {
            echo "Data berhasil dihapus.";
        } else {
            echo "Terjadi kesalahan: " . $conn->error;
        }
    }

    // Mengambil data kritik dan saran dari tabel 'kritik'
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari form
        $email = $_POST["email"];
        $password = $_POST["password"];
        $message = $_POST["message"];

        // Menyimpan data ke dalam tabel 'kritik'
        $sql = "INSERT INTO kritik (email, password, message) VALUES ('$email', '$password', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil disimpan.";
        } else {
            echo "Terjadi kesalahan: " . $conn->error;
        }
    }

    // Menghapus data berdasarkan id
    if (isset($_POST['hapus'])) {
        $id = $_POST['hapus'];
        $deleteSql = "DELETE FROM kritik WHERE id='$id'";

        if ($conn->query($deleteSql) === TRUE) {
            echo "Data berhasil dihapus.";
        } else {
            echo "Terjadi kesalahan: " . $conn->error;
        }
    }
    // Menampilkan data kritik dan saran dari tabel 'kritik'
    $sql = "SELECT * FROM kritik";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Kritik dan Saran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            echo '<td>
                    <form action="" method="POST" style="display: inline;">
                        <input type="hidden" name="hapus" value="' . $row["id"] . '">
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>';
            echo "</tr>";
        }

        echo '</tbody>
        </table>';
    } else {
        echo "Belum ada kritik dan saran.";
    }

    // ...
    ?>

    <!-- Memunculkan Kritik Dan SaranEnd -->




    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>