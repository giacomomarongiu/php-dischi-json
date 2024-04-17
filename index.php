<?php ?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>PHP - Dischi</title>
    <link href='./style.css' rel='stylesheet'>
</head>

<body>
    <div id='app'>
        <!-- Verifico il corretto collegamento-->
        <ul>
            <li v-for="disk in disks">
                {{disk.title}}
            </li>
        </ul>
    </div>





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