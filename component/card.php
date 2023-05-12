<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        .container {
            padding-left: 30px;
            margin-right: 150px;
        }

        .custom-border {
            border: 1px solid #ccc;
            padding: 30px;
            margin-bottom: 20px;
            margin-top: 20px;
            border-radius: 10px;
            padding-left: 50px;

        }

        .rounded-img {
            border-radius: 10px;
        }
    </style>

</head>

<body>
    <!-- Card -->
    <div class="container">
        <div class="row custom-border">
            <div class="col-md-6">
                <img src="./asset/music5.jpg" alt="Gambar" class="img-fluid rounded-img">
            </div>
            <div class="col-md-6">
                <h2>Judul Artikel</h2>
                <p>Ini adalah contoh teks dalam artikel menggunakan Bootstrap. Teks ini akan berada di sebelah gambar.</p>
            </div>
        </div>

        <div class="row custom-border">
            <div class="col-md-6">
                <img src="./asset/music4.jpg" alt="Gambar Lain" class="img-fluid rounded-img">
            </div>
            <div class="col-md-6">
                <h2>Judul Artikel Lain</h2>
                <p>Ini adalah contoh teks dalam artikel lain menggunakan Bootstrap. Teks ini akan berada di sebelah gambar lain.</p>
            </div>
        </div>
    </div>

    <!-- CardEnd -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>