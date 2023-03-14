<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITLE -->
    <title>PHP Dischi JSON</title>
    <!-- LINK -->
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js"></script>
    <!-- Axios -->
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <!-- MyJs -->
    <script src="./js/main.js" defer></script>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="bg-[#1c2d3b]">
    <div id="app">
        <div class="w-full">
            <header class="bg-[#101f30] w-full p-2 mb-5 px-5">
                <div class="flex items-center p-3">
                    <img src="./img/spotify.png" alt="logo spotify" class="w-16">
                </div>
            </header>

            <main>
                <div class="flex flex-wrap w-2/3 mx-auto gap-4 justify-center">
                    <div class="bg-[#101f30] text-white m-3 w-56 rounded" v-for="disk in diskList">
                        <div class="flex flex-col items-center justify-center text-center">
                            <img :src="disk.poster" alt="Disk poster" class="w-40 pt-3">
                            <div class="pt-3">
                                <h3 class="text-sm px-3 h-10">{{disk.title}}</h3>
                                <span class="text-sm font-extralight">{{disk.author }}</span>
                                <h4 class="text-sm pb-4 pt-2">{{disk.year}}</h4>
                            </div>
                        </div>
                    </div>
                </div>

        </div>

        </main>

        <!-- 
        <h1 class="text-white">PROVA {{diskList}} </h1> -->
    </div>

    </div>


</body>

</html>