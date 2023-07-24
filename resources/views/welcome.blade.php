<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap5 css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--bootstrap5 js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--bootstrap5 Separate-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- sweetaert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

    <!-- font style-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="src/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- font thai-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

    <!-- vanta.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.topology.min.js"></script>
    <script src="p5.min.js"></script>
    <script src="vanta.topology.min.js"></script>

    <title>Employee Name</title>

    <style>
        body {
            font-family: 'Kanit', sans-serif;
            font-size: 1rem;
            margin: 0;
            display: block;
            overflow-x: hidden;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
        }

        table,
        td,
        th {
            border: 0.5px solid #DEDCE5;
        }

        table {
            border-collapse: collapse;
            width: 100;
        }

        th {
            height: 50;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #e9ffeb;
        }

        .threeDText {
            font-size: 3rem;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            transform: translateZ(0);
            animation: threeDAnimation 5s infinite linear;
        }

        @keyframes threeDAnimation {
            0% {
                transform: translateZ(0);
            }

            50% {
                transform: translateZ(120px);
            }

            100% {
                transform: translateZ(0);
            }
        }

        #img img {
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.4);
        }

        td {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        #phone {
            box-shadow: 0 3px 4px rgba(0, 0, 0, 0.5);
        }

        .glow-on-hover {
            width: 220px;
            height: 50px;
            border: none;
            outline: none;
            color: #ddff99;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
        }

        .glow-on-hover:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
        }

        .glow-on-hover:active {
            color: #000
        }

        .glow-on-hover:active:after {
            background: transparent;
        }

        .glow-on-hover:hover:before {
            opacity: 1;
        }

        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #000;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        @keyframes glowing {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }
    </style>
</head>

<body>
    <div>
        <!-- Existing HTML content -->
        <!-- <nav>
            <div class="container">
                <a class="navbar-brand" href="#">
                    <font color="#FCB040" size="5">Pce-th</font>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ข้อมูลอื่นๆ
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">ข้อมูลเพื่มเติม 1 </a></li>
                                <li><a class="dropdown-item" href="#">ข้อมูลเพื่มเติม 2 </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">ข้อมูลเพื่มเติม 3 </a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="views/about.blade.php">เกี่ยวกับ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->

        <div id="page-header" style=" max-width: 100%; height: 900px;">
            <div class="container"><br>
                <font color="#FCB040" size="5">Pce-th</font>
            </div>
            <div style="text-align: center;">

                <script>
                    VANTA.TOPOLOGY({
                        el: "#page-header",
                        mouseControls: true,
                        touchControls: true,
                        gyroControls: false,
                        minHeight: 200.00,
                        minWidth: 200.00,
                        scale: 1.00,
                        scaleMobile: 1.00,
                        color: 0x96954e,
                        backgroundColor: 0x0
                    })
                </script>

                <br>
                <br>
                <br>

                <center>
                    <img src="https://www.pce-th.com/_nuxt/image/d83943.png" alt="" style="width: 150px; height: 100px" />
                </center>
                <div class="container">
                    <div class="row">
                        <div class="col-md">

                        </div>
                        <div class="col-md">
                            <br>
                            <h6 class="fw-bold mb-1 text-muted mb-0">
                                <font color="#ffffae" size="4px">บริษัท เพชรศรีวิชัย เอ็นเตอร์ไพรส์ จำกัด</font>
                            </h6>
                            <hr>
                        </div>
                        <div class="col-md">

                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div style="text-align: center;">
                    <h1 class="threeDText">ระบบค้นหารายชื่อบุคลากร</h1>
                </div>
                <br>


                <body class="antialiased">
                    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
                        @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Data User</a>
                            @else
                            <div class="container">

                                <a href="{{ route('login') }}" class="btn glow-on-hover font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" type="button">ลงชื่อเข้าใช้</a>

                                @if (Route::has('register'))
                                <!-- <a href="{{ route('register') }}" class="btn glow-on-hover ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" type="button">ลงทะเบียน</a> -->
                            </div>
                            @endif
                            @endauth
                        </div>
                        @endif


                    </div>
            </div>
        </div>

        <footer class="bg-dark text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #212529;">
                <font color="#FCB040">© 2023 Copyright : </font>
                <a class="text-light" href="https://www.pce-th.com/">www.pce-th.com</a>
            </div>
            <!-- Copyright -->
        </footer>
</body>

</html>
