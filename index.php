<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link rel="stylesheet" href="./styles/style.css">

    <!-- Axios CDN Import-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
    <!-- Vue 3 CDN Import-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>

    <div id="app">
        <header>
            <div class="container">
                <img src="./img/spotify-logo.png" alt="Spotify Logo">
            </div>
        </header>
        <main>
            <div class="container">
                <div class="card" v-for="(disk, index) in disks" :key="index">
                    <img :src="disk.poster" alt="Disk Poster Image">
                    <h2>{{ disk.title }}</h2>
                    <span>{{ disk.author }}</span>
                    <span>{{ disk.year }}</span>
                    <span>{{ disk.genre }}</span>
                </div>
            </div>
        </main>
    </div>

    <script src="./script/main.js"></script>
</body>
</html>