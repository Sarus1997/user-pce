<x-app-layout>

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
                background-color: #ffffff;
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
            <div id="page-header" style=" max-width: 100%; height: 450px;">
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
                        <img src="https://www.pce-th.com/_nuxt/image/d83943.png" alt="" style="width: 120px; height: 85px" />
                    </center>
                    <div class="container">
                        <div class="row">
                            <div class="col-md">

                            </div>
                            <div class="col-md">
                                <br>
                                <h6 class="fw-bold mb-1 text-muted mb-0">
                                    <font color="#ffffae">บริษัท เพชรศรีวิชัย เอ็นเตอร์ไพรส์ จำกัด</font>
                                </h6>
                                <hr>
                            </div>
                            <div class="col-md">

                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div style="text-align: center;">
                        <h1 class="threeDText">รายชื่อบุคลากร</h1>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-light" style="background-color: #a1c3aa ;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md me-2">
                        <label for="myInput3" type="button"><b>ค้นหา: </b><i class="fa fa-search"></i></label>
                        <input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="ค้นหาจากชื่อเล่น" title="Type in a nickname">
                    </div>
                </div>
                <div class="col-md me-2">
                    <label for="myInput2" type="button"><b>ค้นหา: </b><i class="fa fa-search"></i></label>
                    <input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="ค้นหาจากชื่อ-สกุล" title="Type in a name">
                </div>
                <div class="col-md me-2">
                    <!-- <label for="myInput" type="button"><b>ค้นหาจากรหัส: </b><i class="fa fa-search"></i> </label>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="ค้นหา..." title="Type in a code"> -->
                </div>
            </div>
        </nav>

        <!-- <nav class="navbar navbar-light" style="background-color: #FFC56E ;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md me-2">
                </div>
            </div>
            <div class="col-md me-2">
                <button type="button" onclick="location.reload();" class="btn btn-rounded btn-sm fw-bold btn-outline-danger" data-mdb-ripple-color="dark">
                    Refresh
                </button>
                <button type="button" onclick="showPage(1)" class="btn btn-rounded btn-sm fw-bold btn-outline-primary"" data-mdb-ripple-color="dark">
                    Page 1
                </button>
                <button type="button" onclick="showPage(2)" class="btn btn-rounded btn-sm fw-bold btn-outline-primary"" data-mdb-ripple-color="dark">
                    Page 2
                </button>
                <button type="button" onclick="showPage(3)" class="btn btn-rounded btn-sm fw-bold btn-outline-primary"" data-mdb-ripple-color="dark">
                    Page 3
                </button>
                <button type="button" onclick="showPage(4)" class="btn btn-rounded btn-sm fw-bold btn-outline-primary"" data-mdb-ripple-color="dark">
                    Page 4
                </button>
            </div>
            <div class="col-md me-2">
            </div>
        </div>
    </nav> -->

        <div class="table-responsive">
            <table id="myTable">
                <!-- <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"></a>
                            <button class="btn btn-outline-primary" onclick="getNewUser()" type="submit">New User</button>
                        </div>
                    </nav> -->

                <thead class="bg-light">
                    <tr class="header">
                        <th style="text-align: center; background-color: #a6bea8;">ลำดับ</th>
                        <!-- <th style="text-align: center; background-color: #a6bea8;">รหัส</th> -->
                        <th style="text-align: center; background-color: #a6bea8;">รูปภาพ</th>
                        <th style="text-align: center; background-color: #a6bea8;">ชื่อเล่น</th>
                        <th style="text-align: center; background-color: #a6bea8;">เบอร์โทรติดต่อ</th>
                        <th style="text-align: center; background-color: #a6bea8;">ชื่อ - สกุล</th>
                        <th style="text-align: center; background-color: #a6bea8;">ตำแหน่ง</th>
                        <th style="text-align: center; background-color: #a6bea8;">แผนก</th>
                        <!-- <th style="text-align: center; background-color: #a6bea8;">สำนักงานสาขา</th> -->
                        <!-- <th style="text-align: center; background-color: #a6bea8;">Actions</th> -->
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">1</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">878001</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/1MD.png') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/MD</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0898717979" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายประกิต ประสิทธิ์ศุภผล</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ประธานเจ้าหน้าที่บริหาร/กรรมการผู้จัดการใหญ่</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บริหาร</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">2</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">817043</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/2Kname.png') }}" class="rounded-circle" onclick="showFullSize(this)" type="button" alt="" style="width: 120px; height: 120px" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/เนม</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0856786822" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายกิตติภณ ประสิทธิ์ศุภผล</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ประธานเจ้าหน้าที่บริหารสายงานกลยุทธ์และพัฒนาองค์กร</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บริหาร</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">3</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">820061</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/3Knut.png') }}" class="rounded-circle" onclick="showFullSize(this)" type="button" alt="" style="width: 120px; height: 120px" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/นัท</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0995546554" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายพรพิพัฒน์ ประสิทธิ์ศุภผล</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ประธานเจ้าหน้าที่บริหาร สายงานบัญชีและการเงิน</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บริหาร</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">4</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">807011</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/4Knew.png') }}" class="rounded-circle" onclick="showFullSize(this)" type="button" alt="" style="width: 120px; height: 120px" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/นิว</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0819561718" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวกัญกร ประสิทธิ์ศุภผล</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">รองประธานเจ้าหน้าที่บริหาร</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บริหาร</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">5</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822092</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/5wut.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>

                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/วุฒิ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0824808052" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายวรวุฒิ บัวจิตต์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้ช่วยเลขานุการบริษัท/นักลงทุนสัมพันธ์</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บริหาร</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">6</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">820027</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/6on.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/อร</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0856786835" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวอรพรรณ ไสยรินทร์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกเลขานุการบริหาร</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">เลขานุการบริหาร</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">7</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">821071</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/7plam.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ปาล์ม</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0856786827" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวดารินทร์ ชินานุวัฒน์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">เลขานุการบริหาร</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">เลขานุการบริหาร</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">8</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822156</div>
                        </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/8nuch.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/นุช</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0993576556" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวนุชจรีย์ สุขสวัสดิ์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">เลขานุการบริหาร</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">เลขานุการบริหาร</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">9</div>
                        </td>
                        <!-- <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822164</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="https://static.vecteezy.com/system/resources/previews/007/409/979/original/people-icon-design-avatar-icon-person-icons-people-icons-are-set-in-trendy-flat-style-user-icon-set-vector.jpg" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/นัท</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0825542661" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางนัทธมน บุญสิงห์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">เลขานุการบริหาร</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">เลขานุการบริหาร</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">10</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822164</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/10benz.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/เบนซ์</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0826254945" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายสรศักดิ์ เดือนเพ็ง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">เลขานุการบริษัท/นักลงทุนสัมพันธ์</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บริหาร</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">11</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">810019</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/11Bear.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/เบียร์</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0835908980" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายสิทธิศักดิ์ นิลกำแหง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายจัดซื้อจัดจ้าง</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">จัดซื้อจัดจ้าง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">12</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">896005</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/12wan.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/วรรณ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0810862486" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางผกาวรรณ ชิตร</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายจัดซื้อจัดจ้าง</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">จัดซื้อจัดจ้าง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">13</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">818060</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/13joke.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/โจ๊ก</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0935652659" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายณัฐชาต ศักดา</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้อำนวยการสายงานบริหารธุรกิจท่าเรือ / คลังเช่า และขนส่งทางบก</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">สายงานบริหารธุรกิจ ท่าเรือ คลังเช่า และขนส่งทางบก</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">14</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822175</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="https://static.vecteezy.com/system/resources/previews/007/409/979/original/people-icon-design-avatar-icon-person-icons-people-icons-are-set-in-trendy-flat-style-user-icon-set-vector.jpg" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/จ๋า</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0819139915" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวนนลณีย์ วุฒิอนันต์มาศ</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายพัฒนาธุรกิจ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">พัฒนาธุรกิจ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">15</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">812026</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/15jeab.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/เจี๊ยบ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0846278579" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวอรอนงค์ นุ่นทอง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายคลังพัสดุทั่วไป</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">คลังพัสดุทั่วไป</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">16</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">808016</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/16tom.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ต้อม</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0816918999" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวกนกพร รัตนโสภาคย์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายการเงิน</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">การเงิน</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">17</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">810021</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/17fon.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ฝน</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0887687262" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางยุพาวดี อาชาวงศ์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้ช่วยผู้จัดการฝ่ายบัญชีรับ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">18</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">811022</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/18pim.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/พิม</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0623644549" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวพิมวิภา ประเสริฐสังข์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้ช่วยผู้จัดการฝ่ายบัญชี NBD</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">19</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">811024</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/19nung.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/หนึ่ง</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0819707773" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวนัดดาวรรณ บุญชุม</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายบัญชี</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">20</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">813028</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/20kwan.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ขวัญ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0816772190" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวศศินันท์ พัฒนประดิษฐ์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้ช่วยผู้จัดการฝ่ายบัญชีทรัพย์สิน</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">21</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">813030</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/21tus.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ทัศ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0814878161" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวทัศนีย์ แซ่ตั้ง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายบัญชี</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">22</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">814068</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/22baitong.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ใบตอง</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0617955494" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวอาทิตา จิ้วไม้แดง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้ช่วยผู้อำนวยการสายงานบัญชี และการเงิน</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">23</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">819058</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/23moi.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ม้อย</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0629645165" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวอรชร คงวิจิตร</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายบัญชี</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">24</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822104</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/24aef.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/เอฟ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0841699128" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายกนกศักดิ์ บุญมานันท์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้ช่วยผู้อำนวยการสายงานบัญชี และการเงิน</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">25</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822109</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/25first.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/เฟิร์ส</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0867772533" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายกีรติ ไชยะกุล</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้ผู้อำนวยการสายงานบัญชี และการเงิน</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">26</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822111</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/26hong.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/หงส์</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0874766170" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวอลิสา บุญดี</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้ช่วยผู้อำนวยการสายงานบัญชี และการเงิน</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">27</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822117</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/27mew.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/หมิว</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0874734684" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวสุภาวดี บัวลังกา</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้ช่วยผู้อำนวยการสายงานบัญชี และการเงิน</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">28</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822135</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/28namnung.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/น้ำหนึ่ง</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0816285565" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวศรีสุดา เสนาณรงค์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้ช่วยผู้จัดการฝ่ายบัญชีจ่าย</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">29</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822162</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/29toon.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ตูน</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0840002070" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวปทิตตา อังกุลดี</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายงบประมาณ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">30</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822178</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="https://static.vecteezy.com/system/resources/previews/007/409/979/original/people-icon-design-avatar-icon-person-icons-people-icons-are-set-in-trendy-flat-style-user-icon-set-vector.jpg" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/แม็กซ์</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0897155559" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายอธิษฐ์พัชร์ เพ็ชรไทยดี</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายบัญชี</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">31</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">895006</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/31noi.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/น้อย</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0812716173" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวหทัยรัตน์ วงศ์วิทยาศักดิ์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายบัญชี</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">32</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">821454</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/32joe.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/โจ้</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0639463996" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายธีรวุฒิ ศรีมังกร</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายทรัพยากรบุคคลและงานธุรการ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">ทรัพยากรบุคคลและงานธุรการ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">33</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822095</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/33sand.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/แซนด์</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0659853741" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายชิตพล ไวทยานนท์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายเทคโนโลยีสารสนเทศ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">เทคโนโลยีสารสนเทศ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">34</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">818055</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/34pit.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/พิศ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0994795351" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายพิศ บูรณะวิทย์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้อำนวยการสายงานบริหารธุรกิจคลังน้ำมัน และขนส่งทางน้ำ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">สายงานบริหารธุรกิจ ธุรกิจ คลังน้ำมัน และขนส่งทางน้ำ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">35</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822122</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/35dear.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/เดียร์</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0910436601" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายพสันต์ เฝือไชยศรี </p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายวิศวกรรมอาคาร</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">วิศวกรรมอาคาร</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">36</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">314008</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/36koi.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PACO/ก้อย</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0855424646" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวฐานิดา วงศ์สุวัฒน์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนก บริหารธุรกิจเทรดดิ้ง</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บริหารธุรกิจเทรดดิ้ง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท ปาโก้เทรดดิ้ง จำกัด</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">37</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">316012</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/37oil.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PACO/ออย</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0819707774" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวอ้อยจันทร์ พูนพนัง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนก รับส่งสินค้า และคลัง</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">รับส่งสินค้า และคลัง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท ปาโก้เทรดดิ้ง จำกัด</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">38</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">522159</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/38tum.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PCM/ตั้ม</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0972659451" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายอรรถพล ด่านตระกูล</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกความปลอดภัยพาณิชย์นาวี ISM</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">หน่วยงานความปลอดภัยและอาชีวอนามัยในการทำงาน</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.ซี.มารีน (1992) จำกัด</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">39</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">506143</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/39jay.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PCM/เจ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0878126304" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายอัครพงศ์ สงค์อุปการ</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกความปลอดภัยพาณิชย์นาวี ISM</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกซ่อมบำรุง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.ซี.มารีน (1992) จำกัด</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">40</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">511028</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/40bright.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PCM/ไบรท์</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0819707711" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายปรัชญา เชี่ยวชาญ</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกการเดินเรือ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกการเดินเรือ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.ซี.มารีน (1992) จำกัด</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">41</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">208017</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/41ae.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/เอ๋</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0828529696" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวจรรยา พรมเกิด</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกคลังสินค้า</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังสินค้า</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>


                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">42</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">209020</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/42nong.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/หน่อง</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0872656409" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายฉัตรชัย รัชชะ</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานคลังสินค้า (จัดส่ง)</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังสินค้า</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">43</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">208012</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/43pab.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/ภาพ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0862896511" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวสุภาพ ยอดเกลี้ยง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกควบคุมคุณภาพ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกควบคุมคุณภาพ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">44</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">209026</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/44ann.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/แอน</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0993632244" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวศิยา นาคสวาทง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกงานระบบและมาตรฐานต่างๆ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกงานระบบและมาตราฐานต่างๆ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">45</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">102017</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/45lek.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/เล็ก</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0858873902" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายนิสิต เพชรน้อย</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกซ่อมบำรุง</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกซ่อมบำรุง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">46</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">208014</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/46yai.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/ใหญ่</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0897230507" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายบรรจง นาคเกตุง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกซ่อมบำรุง</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกซ่อมบำรุง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">47</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">101005</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/47kom.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/คม</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0892898902" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายนิคม บุญมา</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานสกัดน้ำมันปาล์ม</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกผลิต 1</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">48</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">102010</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/48ti.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/ติ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0612165109" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายธีระศักดิ์ ด้วงเรือง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานสกัดน้ำมันปาล์ม</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกผลิต 1</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">49</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">105021</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/49pond.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/ปอนด์</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0812707546" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายทรงพล ไตรเดชาง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกผลิต1</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกผลิต 1</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">50</div>
                        </td>
                        <!-- <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">117088</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/50pok.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/ป็อก</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0866908744" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายสุทธิชัย ทองปลอด</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานสกัดน้ำมันปาล์ม</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกผลิต 1</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">51</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">122269</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/51aek.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/เอก</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0818677023" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายเอกพงษ์ ทองหนัน</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกผลิต1</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกผลิต 1</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">52</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">106030</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/52aek.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/เอก</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0865104818" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายสมชัย ลอยเกตุ</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกผลิต2</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกผลิต 2</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">53</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">117091</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/53nung.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/หนึ่ง</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0806522378" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายอนุวัฒน์ แพรกทอง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานผลิตไฟฟ้าจากก๊าซชีวภาพ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกผลิต 2</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">54</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">208019</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/54pong.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/ป๋อง</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0630593784" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายวัชรพงษ์ ชูเพ็ญ</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกผลิต3</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกผลิต 3</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">55</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">209025</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/55palm.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/ปาล์ม</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0954201771" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายสัญชัย ไพรวัลย์ทิพย์กุล</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกผลิต3</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกผลิต 3</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">56</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">209027</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/56game.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/เกมส์</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0899973695" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายอรรถพล ทองเอียด</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกผลิต3</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกผลิต 3</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">57</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">213058</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/57ole.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/โอเล่</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0886482029" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายศักรินทร์ เจตบุตร</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกผลิต3</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกผลิต 3</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">58</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">218114</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/58ruen.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/เริญ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0822677781" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายจำเริญ สุวรรณวัฒน์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกผลิต3</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกผลิต 3</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">59</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">207004</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/59por.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/ปอ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0862731473" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายคธา บัวทอง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกผลิต4</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกผลิต 4</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">60</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">211036</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/60aom.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/อ้อม</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0937526623" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวรวิวรรณ ศุกลสกุล</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยธุรการฝ่ายผลิต</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกธุรการฝ่ายผลิต</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">61</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">100002</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/61bunrat.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/บุญรัตน์</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0818953386" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายบุญรัตน์ คงปาน</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานจัดซื้อผลปาล์มสด</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">ฝ่ายจัดซื้อผลปาล์มสด</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท นิว ไบโอดีเซล จำกัด (สายปฏิบัติการ)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">62</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">415050</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/62chai.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/ชาย</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0621941951" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายภูวนัย รัตนสุทธิ์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานธุรการ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังน้ำมัน สาขาสุราษฎร์</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายปฏิบัติการคลังน้ำมัน)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">63</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">417062</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/63aek.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/เอก</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0650499052" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายเอกลักษณ์ สมรักษ์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกคลังน้ำมัน สาขาสุราษฎร์</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังน้ำมัน สาขาสุราษฎร์</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายปฏิบัติการคลังน้ำมัน)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">64</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">404013</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/64hoa.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/เก้า</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0868478415" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายสะเวก ปัญญาดี</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานรับจ่ายสินค้า</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังน้ำมัน สาขาบางปะกง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายปฏิบัติการคลังน้ำมัน)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">65</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">419093</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/65sand.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/แซน</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0827813532" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวอัณณ์ชญา ชื่นบาน</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานตรวจสอบคุณภาพ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังน้ำมัน สาขาบางปะกง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายปฏิบัติการคลังน้ำมัน)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">66</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">421112</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/66note.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/โน๊ต</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0834380429" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายรัฐนันท์ ศรีชุมพร</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกคลังน้ำมัน สาขาบางปะกง</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังน้ำมัน สาขาบางปะกง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายปฏิบัติการคลังน้ำมัน)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">67</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">450138</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/67kob.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/ก๊อบ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0826226659" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวชัญญานุช โตอินทร์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานธุรการ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังน้ำมัน สาขาบางปะกง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายปฏิบัติการคลังน้ำมัน)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">68</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">496009</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="https://static.vecteezy.com/system/resources/previews/007/409/979/original/people-icon-design-avatar-icon-person-icons-people-icons-are-set-in-trendy-flat-style-user-icon-set-vector.jpg" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/สุ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0871490747" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสุขุมาลย์ ศิลปกุล</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานห้องชั่ง</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังน้ำมัน สาขาบางปะกง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายปฏิบัติการคลังน้ำมัน)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">69</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">496007</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/69too.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/ตู่</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0858816897" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายสุชาติ ศรีรักษา</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายปฏิบัติการคลังน้ำมัน</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">ฝ่ายปฏิบัติการคลังน้ำมัน</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายปฏิบัติการคลังน้ำมัน)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">70</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">411029</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/70mew.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/มิว</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0935761583" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวกรกมล แก้วกาญจน์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกสนับสนุนคลังน้ำมันสุราษฎร์</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกสนับสนุนคลังน้ำมันสุราษฎร์</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายปฏิบัติการคลังน้ำมัน)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">71</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">496010</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/71rat.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/รัตน์</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0890932051" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวศิริรัตน์ นพวรรณ์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกสนับสนุนคลังน้ำมันบางปะกง</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกสนับสนุนคลังน้ำมันบางปะกง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายปฏิบัติการคลังน้ำมัน)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">72</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">496008</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/72kob.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/กบ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0892872943" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสุกัลยา ประศาสน์กุล</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายสนับสนุนคลังน้ำมัน</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">ฝ่ายสนับสนุนคลังน้ำมัน</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายปฏิบัติการคลังน้ำมัน)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">73</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">420098</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/73bas.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/บาส</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0888171170" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายณัชพล พุทธเสน</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกท่าเรือ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกท่าเรือ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายบริหารท่าเรือ/คลังเช่า)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">74</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">422128</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="https://static.vecteezy.com/system/resources/previews/007/409/979/original/people-icon-design-avatar-icon-person-icons-people-icons-are-set-in-trendy-flat-style-user-icon-set-vector.jpg" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/นัฐ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0864035063" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายธณัฐเทพ ทองหมื่น</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานรับเรือ-เครื่องจักร สาขาสุราษฎร์/สาขาบางปะกง</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกท่าเรือ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายบริหารท่าเรือ/คลังเช่า)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">75</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">410025</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/75ju.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/จุ๊</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0841841371" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวจุลาพร ชูเพชร</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานสินค้าอุปโภค</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังเช่าทั่วไป</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายบริหารท่าเรือ/คลังเช่า)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">76</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">411031</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/76pae.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/แป๊ะ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0656915391" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายสราวุธ อินทเจียด</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานสินค้าอุปโภค</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังเช่าทั่วไป</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายบริหารท่าเรือ/คลังเช่า)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">77</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">411033</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/77pom.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/ป้อม</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0899936192" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายปิยภรณ์ รักกะเปา</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานสินค้าอุปโภค</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังเช่าทั่วไป</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายบริหารท่าเรือ/คลังเช่า)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">78</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">415051</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/78palm.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/ปาล์ม</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0620928024" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายจักรรินทร์ วัฒนสุนทร</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานสินค้าอุปโภค</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังเช่าทั่วไป</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายบริหารท่าเรือ/คลังเช่า)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">79</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">415053</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/79too.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/ทู</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0994896900" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายชัยนันท์ คงสุทธิ์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกคลังเช่าทั่วไป</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกคลังเช่าทั่วไป</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายบริหารท่าเรือ/คลังเช่า)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">80</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">422119</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/80rin.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/ริน</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0993169565" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายธนพล เพชรพงศ์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานสาธารณูปโภค (สุราษฎร์)</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกซ่อมบำรุง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายบริหารท่าเรือ/คลังเช่า)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">81</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">488002</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/81search.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/เสริฐ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0878927649" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายประเสริฐศักดิ์ แซ่ว่อง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานซ่อมบำรุงเครื่องจักร</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกซ่อมบำรุง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายบริหารท่าเรือ/คลังเช่า)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">82</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">411028</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/82tan.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/ตาล</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0868825882" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายนิวัตน์ พูลสวัสดิ์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกขนถ่ายสินค้า</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกขนถ่ายสินค้า</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายบริหารท่าเรือ/คลังเช่า)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">83</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">421109</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/83nan.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/PKM/แนน</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0993198257" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางภัทราวดี จริตงาม</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าหน่วยงานธุรการ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">หน่วยงานธุรการ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท พี.เค.มารีน เทรดดิ้ง จำกัด (ฝ่ายบริหารท่าเรือ/คลังเช่า)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">84</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">8150409</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/84mai.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ใหม่</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0856786834" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวกมลรัตน์ แซ่โค้ว</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกจัดซื้อสินค้า และวัตถุดิบ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">จัดซื้อจัดจ้าง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">85</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822096</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/85mint.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/มิ้น</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0611825697" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวปรางค์วลัย อุตมะมุณี</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกจัดซื้อจัดจ้าง</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">จัดซื้อจัดจ้าง</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">86</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">821077</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/86tan.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ตาล</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0848383559" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวลดารัตน์ เนินพรหม</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกพัฒนาธุรกิจ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">พัฒนาธุรกิจ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">87</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822140</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="https://static.vecteezy.com/system/resources/previews/007/409/979/original/people-icon-design-avatar-icon-person-icons-people-icons-are-set-in-trendy-flat-style-user-icon-set-vector.jpg" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ดาว</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0864141785" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวปภารัช ทองเนื้อสุก</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกคลังพัสดุทั่วไป</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">คลังพัสดุทั่วไป</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">88</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">807012</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/88jod.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/จ๊อด</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0849991749" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวปภารัช ทองเนื้อสุก</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกขาย/งานจ้างบริการทั่วไป</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">ขาย</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">89</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">808015</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/89kik.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/กิ๊ก</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0874732707" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวสุรญา พัฒธร</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกขายในประเทศ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">ขาย</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">90</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">815038</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/90tah.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ต๊ะ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0615458922" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายปิติภัทร ลี</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกขายระหว่างประเทศ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">ขาย</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">91</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">812034</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/91fai.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ฝ้าย</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0814153621" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวอรวรรณ อ่วมทองดี</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกการเงินจ่าย</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">การเงิน</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">92</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">817050</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/92pui.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ปุ้ย</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0856684462" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวชลิตา นาคมูสิก</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกการเงินรับ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">การเงิน</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">93</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">821018</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/93kik.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/กิ๊ก</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0878899506" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวกรรณิการ์ พวงจันทร์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกสินเชื่อและงานธนาคาร</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">การเงิน</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">94</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">808013</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/94poo.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ปู</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0819707771" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวกนกวรรณ จิตเส้ง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกบัญชีต้นทุนและBOI</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">95</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">813029</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/95namfon.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/น้ำฝน</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0937313991" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวเสาวณีย์ ขุนรินพรหม</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกบัญชีต้นทุนและBOI</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">96</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">813032</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/96aof.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/อ๊อฟ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0911566255" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวกัลยา ถิ่นบ้านใหม่</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกบัญชีจ่าย</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">97</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">813033</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/97on.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/อร</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0873879852" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวอรพินท์ มีศรี</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกบัญชีต้นทุนและBOI</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">98</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">814068</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/98dow.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ดาว</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0848503650" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวปิยะดา กรดเสน</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกบัญชีรับ</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">99</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">821084</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/99fai.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ฝ้าย</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0991975544" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวจันทนีย์ จันทนานนท์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกระบบสารสนเทศสายงานบัญชี</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บัญชี</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">100</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">805009</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/100pla.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ปลา</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0824150254" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวปาริชาติ วงค์แสน</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกบริหารค่าตอบแทน และสวัสดิการ​</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">ทรัพยากรบุคคลและงานธุรการ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">101</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">814036</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/101puch.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/พัช</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0950341115" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวสุพัตรา กามูณี</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกบริหารค่าตอบแทน และสวัสดิการ​</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">ทรัพยากรบุคคลและงานธุรการ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">102</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822099</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/102fhan.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ฝัน</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0821653491" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวปิยะมาศ เนียมกุล</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกสรรหา และว่าจ้าง​</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">ทรัพยากรบุคคลและงานธุรการ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">103</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822148</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/103max.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/แม็ค</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0924316997" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายเอกพงศ์ ไทยเกิด</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกฝึกอบรม และพัฒนาบุคลากร​</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">ทรัพยากรบุคคลและงานธุรการ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">104</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822172</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/104koh.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/โก๋</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0865053390" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายสิทธิพร เศวตเวช</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกแรงงานสัมพันธ์และงานธุรการ​</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">ทรัพยากรบุคคลและงานธุรการ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">105</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">821078</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/105vi.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/วิ</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0866946025" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายวิราชัณย์ เพชรประดิษฐกุล</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนก IT Infrastructure</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">เทคโนโลยีสารสนเทศ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">106</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">822092</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/106oat.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/โอ๊ต</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0800058924" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายณรงค์ศักดิ์ แซ่กั๋ง</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกพัฒนาแอพพลิเคชั่น</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">เทคโนโลยีสารสนเทศ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">107</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">809017</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/107jin.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/จิน</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0814775495" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวสลักจินต์ เจริญสุข</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกสนับสนุนตรวจสอบภายใน</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บริหารกลยุทธ์และพัฒนาระบบ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">108</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">811025</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/108nuch.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/นุช</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0949892897" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางสาวอาภรณ์ ดำสัย</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกบริหารกลยุทธ์</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บริหารกลยุทธ์และพัฒนาระบบ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                                <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                                </button>
                            </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">109</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">821069</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/109phung.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/ผึ้ง</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0649414783" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นางอรสา เศวตเวช</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">หัวหน้าแผนกระบบคุณภาพ (ส่วนกลาง)</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">บริหารกลยุทธ์และพัฒนาระบบ</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                            <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                        </button>
                    </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">110</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">821069</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/110prawit.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/ประวิทย์</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0872719090" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายประวิทย์ ทยาวิวัฒน์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้อำนวยการสายงานบริหารธุรกิจโรงงาน</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกบริหารธุรกิจโรงงาน</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                            <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                        </button>
                    </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">111</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">821069</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/111kong.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/ก้อง</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0817879874" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายวรยุทธ ทยาวิวัฒน์</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายผลิต</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">แผนกบริหารธุรกิจโรงงาน</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                            <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                        </button>
                    </td> -->
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">112</div>
                        </td>
                        <!-- <td>
                                <div class="fw-bold mb-1 text-muted mb-0" style="text-align: center;">821069</div>
                            </td> -->
                        <td>
                            <div class="d-flex align-items-center" id="img">
                                <img src="{{ asset('storage/asset/pce/112ee.jpg') }}" alt="" style="width: 120px; height: 120px" class="rounded-circle" onclick="showFullSize(this)" type="button" />
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">PCE/NBD/ซี</p>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <div class="filterDiv phone">
                                <a href="tel:0935782389" onclick="handlePhoneClick(event)" type="button" class="btn btn-outline-primary" id="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </td>
                        <td>
                            <div class="filterDiv name">
                                <p class="fw-bold mb-1 text-muted mb-0">นายสรรเสริญ ลี</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1 text-muted mb-0" id="department">ผู้จัดการฝ่ายจัดซื้อผลปาล์มสด</p>
                        </td>
                        <td>
                            <div id="position" class="fw-bold mb-1 text-muted mb-0">ฝ่ายจัดซื้อผลปาล์มสด</div>
                        </td>
                        <!-- <td>
                                <div id="position" class="fw-bold mb-1 text-muted mb-0">บริษัท เพชรศรีวิชัยเอ็นเตอร์ไพรส์ จำกัด (สำนักงานใหญ่)</div>
                            </td> -->
                        <!-- <td>
                            <button type="button" onclick="addEdit()" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    แก้ไข
                        </button>
                    </td> -->
                    </tr>
                </tbody>

            </table>
        </div>

        <footer class="bg-dark text-center text-white">
            <div class="text-center py-4" style="background-color: #212529;">
                © 2023 Copyright: <a class="text-reset fw-bold" href="https://www.pce-th.com/">
                    <font color="#FCB040">Pce-th.com</font>
                </a>
            </div>
        </footer>
    </body>

    </html>

    <script>
        // function getNewUser() {
        //     Swal.fire({
        //         title: 'เพิ่มข้อมูล',
        //         html: '<input id="id_number"  class="swal2-input" placeholder="รหัสพนักงาน">' +
        //             '<input type="file" id="img" class="swal2-file" accept="image/*">' +
        //             '<input id="nickname" class="swal2-input" placeholder="ชื่อเล่น">' +
        //             '<input id="phone" class="swal2-input" placeholder="เบอร์โทรติดต่อ">' +
        //             '<input id="name" class="swal2-input" placeholder="ชื่อ-สกุล">' +
        //             '<input id="position" class="swal2-input" placeholder="ตำแหน่ง">' +
        //             '<input id="department" class="swal2-input" placeholder="แผนก">' +
        //             '<input id="company" class="swal2-input" placeholder="สำนักงานสาขา">',

        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         preConfirm: () => {
        //             const id_number = document.getElementById('id_number').value;
        //             const name = document.getElementById('name').value;
        //             const nickname = document.getElementById('nickname').value;
        //             const img = document.getElementById('img').files[0];
        //             const phone = document.getElementById('phone').value;
        //             const department = document.getElementById('department').value;
        //             const position = document.getElementById('position').value;
        //             const company = document.getElementById('company').value;

        //             // Create a FormData object to send the data to the server
        //             const formData = new FormData();
        //             formData.append('id_number', id_number);
        //             formData.append('name', name);
        //             formData.append('nickname', nickname);
        //             formData.append('img', img);
        //             formData.append('phone', phone);
        //             formData.append('department', department);
        //             formData.append('position', position);
        //             formData.append('company', company);

        //             // Send the form data to the server using fetch or XMLHttpRequest
        //             return fetch('/save_user.php', {
        //                     method: 'POST',
        //                     body: formData,
        //                 })
        //                 .then(response => response.json())
        //                 .then(data => {
        //                     if (data.success) {
        //                         Swal.fire('เพิ่มข้อมูล', 'success', 'success');
        //                     } else {
        //                         Swal.fire('Error', 'Failed to save user data', 'error');
        //                     }
        //                 })
        //                 .catch(error => {
        //                     Swal.fire('Error', 'An error occurred', 'error');
        //                 });
        //         },
        //     });
        // }

        // function myFunction() {
        //     var input, filter, table, tr, td, i, txtValue;
        //     input = document.getElementById("myInput");
        //     filter = input.value.toUpperCase();
        //     table = document.getElementById("myTable");
        //     tr = table.getElementsByTagName("tr");
        //     var regex = new RegExp(filter, 'i'); // Case-insensitive regular expression

        //     for (i = 0; i < tr.length; i++) {
        //         td = tr[i].getElementsByTagName("td")[1];
        //         if (td) {
        //             txtValue = td.textContent || td.innerText;
        //             if (regex.test(txtValue)) {
        //                 tr[i].style.display = "";
        //             } else {
        //                 tr[i].style.display = "none";
        //             }
        //         }
        //     }
        // }

        function myFunction2() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput2");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[4]; // Assuming the name is in the second column (index 1)
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function myFunction3() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput3");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2]; // Assuming the name is in the second column (index 1)
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function handlePhoneClick(event) {
            event.preventDefault();
            var phoneNumber = event.target.href.split(':')[1];

            // Display a confirmation dialog using SweetAlert2
            Swal.fire({
                title: 'Confirmation',
                text: 'ต้องการโทรเบอร์นี้หรือไม่ ' + phoneNumber + ' ?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then((result) => {
                if (result.isConfirmed) {
                    // User confirmed, initiate the phone call
                    window.location.href = 'tel:' + phoneNumber;
                }
            });
        }

        // function addEdit() {
        //     // Display a SweetAlert2 dialog
        //     Swal.fire({
        //         title: 'แก้ไขข้อมูล',
        //         html: '<input id="number"  class="fw-bold mb-1 text-muted mb-0" class="swal2-input" placeholder="รหัสพนักงาน">' +
        //             '<input type="file" id="img" class="swal2-file" accept="image/*">' +
        //             '<input id="name" class="swal2-input" placeholder="ชื่อ-สกุล">' +
        //             '<input id="nickname" class="swal2-input" placeholder="ชื่อเล่น">' +
        //             '<input id="phone" class="swal2-input" placeholder="เบอร์โทรติดต่อ">' +
        //             '<input id="department" class="swal2-input" placeholder="แผนก">' +
        //             '<input id="position" class="fw-bold mb-1 text-muted mb-0" class="swal2-input" placeholder="ตำแหน่ง">' +
        //             '<input id="company" class="fw-bold mb-1 text-muted mb-0" class="swal2-input" placeholder="บริษัท">',
        //         showCancelButton: true,
        //         confirmButtonText: 'Save',
        //         cancelButtonText: 'Cancel',
        //         showLoaderOnConfirm: true,
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             // User confirmed, retrieve the entered values
        //             const idNumber = document.getElementById('id_number').value;
        //             const imgFile = document.getElementById('img').files[0];
        //             const name = document.getElementById('name').value;
        //             const nickname = document.getElementById('nickname').value;
        //             const phone = document.getElementById('phone').value;
        //             const department = document.getElementById('department').value;
        //             const position = document.getElementById('position').value;
        //             const company = document.getElementById('company').value;

        //             // Perform the save action
        //             // Add your custom script here to handle the save action
        //         } else if (result.dismiss === Swal.DismissReason.cancel) {
        //             Swal.fire(
        //                 'Cancelled',
        //                 'You have cancelled the operation',
        //                 'info'
        //             );
        //         }
        //     });
        // }

        function showPage(pageNumber) {
            var rowsPerPage = 30;
            var table = document.getElementById('myTable');
            var rows = table.getElementsByTagName('tr');

            var startIndex = (pageNumber - 1) * rowsPerPage;
            var endIndex = startIndex + rowsPerPage;

            // Loop through all rows and show/hide based on the page number
            for (var i = 0; i < rows.length; i++) {
                if (i >= startIndex && i < endIndex) {
                    rows[i].style.display = 'table-row';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }

        function showFullSize(image) {
            // Get the image source URL
            var imageUrl = image.src;

            // Use SweetAlert2 to display the full-size image
            Swal.fire({
                imageUrl: imageUrl,
                imageAlt: 'Full-size Image',
                showCloseButton: true,
                showConfirmButton: false
            });
        }
    </script>

</x-app-layout>
