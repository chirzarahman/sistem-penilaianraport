<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Sistem Penilaian Raport SMK Arimbi</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet" />
    <link href="assets/css/fontawesome-all.css" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/swiper.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js">
    </script>
    <script src="assets/scripts.js" type="module"></script>

    <link rel="icon" href="assets/logo.png" />
</head>

<body data-target=".fixed-top">
    <nav class="navbar fixed-top">
        <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">
            <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline flex items-center gap-x-4"
                href="index.php">
                <img src="assets/logo.png" alt="alternative" class="h-12" />
                <span>SMK Arimbi</span>
            </a>

            <button
                class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400"
                type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center"
                id="navbarsExampleDefault">
                <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                    <li>
                        <a class="nav-link page-scroll active" href="#header">Home</a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="login/admin.php">Login Admin</a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="login/guru.php">Login Guru</a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="login/murid.php">Login Murid</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12">
                <h1 class="h1-large mb-5">Portal SMK Arimbi</h1>
                <p class="p-large mb-8">Sistem Penilaian Raport SMK Arimbi Berbasis Web</p>
                <a class="btn-solid-lg" href="login/guru.php">Mulai</a>
            </div>
            <div class="xl:text-right">
                <img class="w-10/12 hidden lg:block" src="assets/header.png" alt="alternative" />
            </div>
        </div>
    </header>

    <div class="pt-4 pb-14 text-center">
        <div class="container px-4 sm:px-8 xl:px-4">
            <div class="flex flex-col xl:flex-row items-center justify-center gap-y-4 gap-x-0 xl:gap-y-0 xl:gap-x-10">
                <img src="assets/km.png" alt="alternative" class="h-32" />
                <img src="assets/umk.png" alt="alternative" class="h-32" />
                <img src="assets/si.png" alt="alternative" class="h-32" />
                <img src="assets/logo-company.png" alt="alternative" class="h-32" />
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container px-4 sm:px-8">
            <h4 class="lg:max-w-3xl lg:mx-auto">Gunakanlah dengan bijak Sistem Penilaian Nilai Raport</h4>
            <span class="text-indigo-500 text-3xl font-bold mb-8">SMK Arimbi ❤️ </span>
        </div>
    </div>

    <div class="copyright">
        <div class="container flex items-center justify-between px-10">
            <p class="pb-2 statement text-lg lg:text-sm">Copyright © <script type="text/javascript">
                var year = new Date();
                document.write(year.getFullYear());
                </script>
                <a href="/" class="no-underline font-semibold">AGRAPANA Tech</a>
            </p>

            <p class="pb-2 statement text-lg lg:text-sm">Created with :<a href="https://themewagon.com/"
                    class="no-underline">❤️🌈</a></p>
        </div>
    </div>
</body>

</html>