<?php ?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>PHP - Dischi</title>
    <script src="https://kit.fontawesome.com/3a46370e2f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href='./style.css' rel='stylesheet'>
</head>

<body>
    <div id='app'>
        <!--Navbar-->
        <header class="mb-3">
            <nav class="navbar bg-success">
                <div class="container-fluid justify-content-center">
                    <a class="navbar-brand fw-bold" href="">
                        Boolify <i class="fa-brands fa-spotify"></i>
                    </a>
                </div>
            </nav>
        </header>
        <!--Creo struttura da stampare in pagina-->
        <div class="container">
            <div class="row">
                <div class="col" v-for="disk in disks">
                    <div class="card h-100">
                        <img :src="disk.poster" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{disk.title}}</h5>
                            <p class="card-text">Author: {{disk.author}}</p>
                            <p class="card-text">Year: {{disk.year}}</p>
                            <p class="card-text">Genre: {{disk.genre}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Vue -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js"
        integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- My js -->
    <script src='./app.js'></script>
</body>

</html>