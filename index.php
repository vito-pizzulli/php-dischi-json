<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <!-- Axios CDN Import-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
    <!-- Vue 3 CDN Import-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>

    <div id="app">
        <ul>
            <li v-for="(disk, index) in disks" :key="index"> {{ disk.title }}</li>
        </ul>
    </div>

    <script src="./script/main.js"></script>
</body>
</html>