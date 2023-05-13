<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <style>
        .carousel-item {
            position: relative;
        }

        .carousel-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            color: #fff;
        }

        .judul {
            top: 50%;
            left: 50%;
            margin-left: 300px;

        }
    </style>

</head>

<body>
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./asset/music.jpg" class="d-block w-100" alt="Gambar 1">
                <div class="carousel-caption align-items-center justify-content-center">
                    <h1 class="judul">Judul Gambar 1</h1>
                    <p class="judul">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, omnis nesciunt. Nulla ipsum ab nemo.</p>


                </div>
            </div>
            <div class="carousel-item">
                <img src="./asset/music4.jpg" class="d-block w-100" alt="Gambar 2">
                <div class="carousel-caption  align-items-center justify-content-center">
                    <h1 class="judul">Judul Gambar 2</h1>
                    <p class="judul">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, omnis nesciunt. Nulla ipsum ab nemo.</p>


                </div>
            </div>
            <div class="carousel-item">
                <img src="./asset/music5.jpg" class="d-block w-100" alt="Gambar 3">
                <div class="carousel-caption  align-items-center justify-content-center">
                    <h1 class="judul">Judul Gambar 3</h1>
                    <p class="judul">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, omnis nesciunt. Nulla ipsum ab nemo.</p>


                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <!-- CarouselEnd -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>