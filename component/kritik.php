<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>


<body>

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
        // Mengambil data dari form
        $email = $_POST["email"];
        $password = $_POST["password"];
        $message = $_POST["message"];

        // Menyimpan data ke dalam tabel yang diinginkan
        $sql = "INSERT INTO kritik (email, password, message) VALUES ('$email', '$password', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo ".";
        } else {
            echo "Terjadi kesalahan: " . $conn->error;
        }
    }

    // Menutup koneksi ke database
    $conn->close();
    ?>



    <div class="container my-5">
        <h1 class="text-white" data-aos="fade-down">Halaman Kritik dan Saran</h1>
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="email" data-aos="fade-down" class="form-label text-white">Email</label>
                <input type="email" data-aos="fade-down" class="form-control bg-dark text-white" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" data-aos="fade-down" class="form-label text-white">Password</label>
                <input type="password" data-aos="fade-down" class="form-control bg-dark text-white" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="message" data-aos="fade-down" class="form-label text-white">Kritik dan Saran</label>
                <textarea data-aos="fade-down" class="form-control bg-dark text-white" id="message" name="message" rows="5" required></textarea>
            </div>
            <button data-aos="fade-down" type="submit" class="btn btn-dark">Kirim</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        function changeTextColor(element) {
            element.style.color = "white";
        }
    </script>
</body>

</html>