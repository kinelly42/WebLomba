<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .image-card {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .image-card img {
            width: 100%;
            height: auto;
            max-width: 375px;
            max-height: 375px;
            border-radius: 5%;
            object-fit: cover;
        }

        .image-card:hover {
            transform: scale(1.05);
            background-color: #394867;
            border-radius: 20px;
        }

        .image-card .project-description {
            display: none;
        }

        .image-card:hover .project-description {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center text-white">Our Projects</h2>
        <div class="row">
            <!-- daftar gambar card project -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4" data-aos="fade-down-right">
                <div class="image-card" style="background-color:#394867;border-radius:10px;">
                    <img src="./asset/music5.jpg" alt="Image 1">
                    <h5 class="mt-3">Project 1</h5>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down-right">
                <div class="image-card" style="background-color:#394867;border-radius:10px;">
                    <img src="./asset/music5.jpg" alt="Image 2">
                    <h5 class="mt-3">Project 2</h5>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down-right">
                <div class="image-card" style="background-color:#394867;border-radius:10px;">
                    <img src="./asset/music5.jpg" alt="Image 3">
                    <h5 class="mt-3">Project 3</h5>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-md-4" data-aos="fade-down-left">
                <div class="image-card" style="background-color:#394867;border-radius:10px;">
                    <img src="./asset/music5.jpg" alt="Image 1">
                    <h5 class="mt-3">Project 1</h5>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down-left">
                <div class="image-card" style="background-color:#394867;border-radius:10px;">
                    <img src="./asset/music5.jpg" alt="Image 2">
                    <h5 class="mt-3">Project 2</h5>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down-left">
                <div class="image-card" style="background-color:#394867;border-radius:10px;">
                    <img src="./asset/music5.jpg" alt="Image 3">
                    <h5 class="mt-3">Project 3</h5>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>