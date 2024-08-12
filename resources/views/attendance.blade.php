{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet"> --}}
    {{-- <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .navbar {
            margin-bottom: 30px;
        }
        .content-wrapper {
            max-width: 900px;
            margin: 0 auto;
            padding: 30px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        table {
            margin-top: 20px;
        }
        th, td {
            text-align: center;
            padding: 12px;
        }
        th {
            background-color: #343a40;
            color: #ffffff;
        }
        .form-control {
            margin-bottom: 20px;
        }
    </style> --}}
{{-- </head>
<body> --}}
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Attendance System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('attendance.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('attendance.create') }}">Mark Attendance</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content-wrapper">
        <h1 class="text-center mb-4">Attendance Records</h1>
        <form method="GET" action="{{ route('attendance.index') }}" class="mb-4">
            <div class="mb-3">
                <label for="attended_at" class="form-label">Date (leave blank for all records):</label>
                <input type="date" id="attended_at" name="attended_at" class="form-control" value="{{ $attendedAt }}">
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>

        <!-- Button to Download Excel File -->
        <form method="GET" action="{{ route('attendance.export') }}">
            <input type="hidden" name="attended_at" value="{{ $attendedAt }}">
            <button type="submit" id="exportButton" class="btn btn-primary d-block mx-auto mb-4">Download Attendance (Excel)</button>
        </form>

        <!-- Attendance Table -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $attendance->name }}</td>
                    <td>{{ $attendance->attended_at }}</td>
                    <td>Present</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('exportButton').addEventListener('click', function() {
            // Show SweetAlert
            Swal.fire({
                title: 'Success!',
                text: 'Your download will start shortly.',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        });
    </script> --}}

{{--
</body>
</html> --}}

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* General styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Cairo', sans-serif;
            direction: ltr;
            text-align: right !important
        }
        .rounded {
            background: #0F60A7 !important;
            color:white;
            border:none
        }
        .Home {
            width: 100%;
            background-color: white;
        }

        .Nav {
            padding-left: 0;
            padding-right: 0;
        }

        .Frame106 {
            background-color: white;
            text-align: center;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .Frame106 .Title {
            color: #02143A;
            font-size: 20px;
            font-weight: 700;
            line-height: 24px;
        }

        .Frame106 .Text {
            color: #02143A;
            font-size: 15px;
            font-weight: 400;
            line-height: 24px;
            max-width: 322px;
            margin: 10px auto;
        }
        .Frame61 {
            width: 100%;
            background: #112753 !important;
        }
        .Frame61 .Heading5 {
            color: white;
            font-size: 14px;
            font-weight: 700;
            line-height: 24px;
            border-bottom: 2px solid white;
            padding-bottom: 6px;
            margin-bottom: 15px;
        }

        .Frame61 .List .Item {
            color: white;
            font-size: 14px;
            font-weight: 400;
            line-height: 21px;
        }

        .Frame61 .Frame57 {
            color: white;
            font-size: 14px;
            font-weight: 500;
            line-height: 21px;
        }

        .Frame61 .Line2 {
            border-top: 2px solid white;
        }
        .NavList > .Item {
            margin: 0 10px
        }
        /* Responsive Design */
        @media (max-width: 992px) {
            .Nav, .Frame106, .Frame61 {
                padding-left: 5%;
                padding-right: 5%;
            }

            .Frame5, .Frame106 .Text {
                flex-direction: column;
                text-align: center;
            }

            .Frame44078, .NavList {
                flex-direction: column;
                align-items: center;
            }

            .Frame44078 img {
                margin-top: 20px;
            }

            .Frame57 {
                flex-direction: column;
                text-align: center;
            }
        }

        .Frame61 .List .Item a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            font-weight: 400;
            display: block;
            margin-bottom: 7px
        }

        .Frame61 .List .Item a:hover {
            text-decoration: underline;
        }

        .Navegat > div {
            width: 100%;
        }
        .Navegat .container > div:nth-child(1) {
            margin-bottom: 20px

        }

        .Navegat {
            width: 100%;
            height: auto;
            display: flex;
            padding: 20px 0;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 32px;
        }

        .Navegat .Button a {
            width: 120px;
            padding: 8px;
            background-color: #0F60A7;
            border-radius: 5px;
            color: white !important;
            text-align: center;
            font-size: 15px;
            font-weight: 400;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none
        }

        .Navegat .Translate .Vector, .ArrowDown .Vector {
            border: 1.5px solid #02143A;
        }

        .Navegat .En, .Link div, .NavItem div {
            color: #02143A;
            font-size: 14px;
            font-weight: 500;
            line-height: 21px;
            word-wrap: break-word;
        }

        .Navegat .NcmsLogoWithWordmark012 {
            width: 165px;
            height: auto;
        }


        .Link a , .NavItem a {
            color: #000;
            font-size: 15px;
            text-decoration: none
        }
        .NavItem a {
            font-size: 14px
        }
        .NavItem i {
            font-size: 12px
        }

        /* General Styles */
        .Navegat .NavItem a {
            color: #02143A;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        .Navegat .navbar-menu {
            display: none;
            flex-direction: column;
            align-items: flex-start;
            background-color: white;
            width: 100%;
        }
        .Navegat .navbar-menu a {
            padding: 10px 20px;
            text-align: left;
            width: 100%;
            border-bottom: 1px solid #ddd;
            text-align: right;
            transition: 0.4s;
            display: block
        }
        .Navegat .navbar-menu a:hover {
            padding-right: 10px !important
        }
        .navbar-toggle i {
            font-size: 20px;
            cursor: pointer;
        }
        .navbar-menu-sm a {
            font-size: 14px;
            color: #000;
            text-decoration: none;
            background: white
        }
        .navbar-menu-sm {
            margin: 10px 0 0 0;
            border:1px solid #ddd;
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.1)
        }
        /* Responsive Styles for Mobile */
        @media (max-width: 768px) {
            /* Hide unnecessary elements and show the toggle button */
            .Navegat .row > .col-md-8,
            .Navegat .row > .col-md-4,
            .Navegat .row.mt-4 {
                display: none;
            }

            /* Show a hamburger icon for the mobile view */
            .Navegat .navbar-toggle {
                display: flex;
                justify-content: space-between;
                width: 100%;
                align-items: center;
            }

            /* Dropdown menu for mobile */

            .Navegat .navbar-menu.active {
                display: flex;
            }


        }
        .search-box {
            display: flex;
            align-items: center;
            background-color: #eee;
            border-radius: 20px;
            width: 100%;
            max-width: 400px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        .Textfield {
            flex:1

        }
        .search-input {
            flex: 1;
            border: none;
            background-color: rgba(255, 255, 255, 0.20);
            padding: 4px 15px;
            font-size: 16px;
            outline: none;
        }

        .search-button {
            background-color: transparent;
            border: none;
            color: #555;
            cursor: pointer;
            padding: 5px 10px;
            font-size: 16px;
        }

        .search-button:hover {
            color: #333;
        }
        /* On larger screens, hide the toggle and show the regular navbar */
        @media (min-width: 769px) {
            .Frame61 .List .Item a {}
            .navbar-toggle {
                display: none;
            }
        }
        @media (max-width: 769px) {
            .Frame61 .List .Item a {
                font-size: 14px !important
            }
            .Frame61 .List .Item a {}
            .navbar-toggle {
                display: none;
            }
        }

    </style>
</head>
<body>
    <div class="Home">
        <!-- Navigation -->
        <div class="Navegat py-3">
            <div class="container">
                <!-- Navbar Toggle for Mobile -->
                <div class="navbar-toggle">
                    <div><img src="{{ asset('image/logo.png') }}" style="width: 100px; height: auto;" alt="Logo"></div>
                    <div><i class="fas fa-bars"></i></div>
                </div>

                <!-- Main Navbar Content (hidden on mobile by default) -->
                <div class="row align-items-center">
                    <div class="col-md-8 d-flex align-items-center gap-3">
                        <div class="Button">
                            <a href="#">انضم كشريك</a>
                        </div>
                        <div class="Frame44080 d-flex align-items-center gap-2">
                            <div class="Vector"><i class="fas fa-globe"></i></div>
                            <div class="Navigation d-flex flex-column align-items-end">
                                <div class="ListItem d-flex flex-column align-items-end">
                                    <div class="Link">
                                        <div class="En">En</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Textfield">
                            <div class="search-box">
                                <input type="text" placeholder="Search..." class="search-input">
                                <button class="search-button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  d-none d-sm-flex align-items-center justify-content-end">
                        <div class="NavList d-flex align-items-start">
                            <div class="Item d-flex flex-column align-items-end">
                                <div class="Link">
                                    <a href="#">الصفحة الرئيسية</a>
                                </div>
                            </div>
                            <div class="Item d-flex flex-column align-items-end">
                                <div class="Link">
                                    <a href="#">تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                        <img class="NcmsLogoWithWordmark012 ms-4" style="width: 165px; height: 66.87px" src="{{ asset('image/logo.png') }}" />
                    </div>
                </div>

                <!-- Mobile Dropdown Menu -->
                <div class="navbar-menu navbar-menu-sm">
                    <a href="#">انضم كشريك</a>
                    <a href="#">الصفحة الرئيسية</a>
                    <a href="#">تواصل معنا</a>
                    <a href="#">التوظيف</a>
                    <a href="#">المركز الاعلامي</a>
                    <a href="#">المصانع</a>
                    <a href="#">المنتجات</a>
                    <a href="#">الخدمات</a>
                    <a href="#">من نحن</a>
                </div>

                <!-- Sub Navigation Links -->
                <div class="row mt-4">
                    <div class="col d-flex justify-content-center gap-4">
                        <div class="NavItem">
                            <a href="#">التوظيف</a>
                        </div>
                        <div class="NavItem d-flex align-items-center gap-1">
                            <i class="fa-solid fa-chevron-down"></i>
                            <a href="#">المركز الاعلامي</a>
                        </div>
                        <div class="NavItem d-flex align-items-center gap-1">
                            <i class="fa-solid fa-chevron-down"></i>
                            <a href="#">المصانع</a>
                        </div>
                        <div class="NavItem d-flex align-items-center gap-1">
                            <i class="fa-solid fa-chevron-down"></i>
                            <a href="#">المنتجات</a>
                        </div>
                        <div class="NavItem d-flex align-items-center gap-1">
                            <i class="fa-solid fa-chevron-down"></i>
                            <a href="#">الخدمات</a>
                        </div>
                        <div class="NavItem">
                            <a href="#">من نحن</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main Content -->
        <div class="Frame106 container-fluid py-5 text-center">
            <div>
                <h2 class="Title">اكمال المهمة</h2>
                <p class="Text">لإكمال المهمة، اضغط على "استمرار"، وبعد ذلك يمكنك تصدير الملف </p>
                <form method="GET" action="{{ route('attendance.export') }}">
                    {{-- <input type="hidden" name="attended_at" value="{{ $attendedAt }}"> --}}
                    <button class="Button btn-primary px-4 py-2 rounded">استمرار</button>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <div class="Frame61 bg-dark text-white py-5">
            <div class="Frame59 container">
                <div class="row">
                    <!-- Important Links -->
                    <div class="col-md-2 d-flex flex-column align-items-end">
                        <h5 class="Heading5">روابط مهمة</h5>
                        <div class="List">
                            <div class="Item"><a href="#" class="text-white">الصفحة الرئيسية</a></div>
                            <div class="Item"><a href="#" class="text-white">تواصل معنا</a></div>
                            <div class="Item"><a href="#" class="text-white">التوظيف</a></div>
                        </div>
                    </div>
                    <!-- Media Center -->
                    <div class="col-md-2 d-flex flex-column align-items-end">
                        <h5 class="Heading5">المركز الإعلامي</h5>
                        <div class="List">
                            <div class="Item"><a href="#" class="text-white">الاخبار</a></div>
                            <div class="Item"><a href="#" class="text-white">مكتبة الصور</a></div>
                        </div>
                    </div>
                    <!-- Factories -->
                    <div class="col-md-2 d-flex flex-column align-items-end">
                        <h5 class="Heading5">المصانع</h5>
                        <div class="List">
                            <div class="Item"><a href="#" class="text-white">معمل التصنيع الدقيق</a></div>
                            <div class="Item"><a href="#" class="text-white">معمل التصنيع البصري</a></div>
                            <div class="Item"><a href="#" class="text-white">مصنع أنظمة الرؤية المتقدمة</a></div>
                            <div class="Item"><a href="#" class="text-white">مصنع أنظمة الرماية</a></div>
                            <div class="Item"><a href="#" class="text-white">مصنع تشكيل المعادن</a></div>
                        </div>
                    </div>
                    <!-- Products -->
                    <div class="col-md-2 d-flex flex-column align-items-end">
                        <h5 class="Heading5">المنتجات</h5>
                        <div class="List">
                            <div class="Item"><a href="#" class="text-white">أنظمة ومنصات الرماية</a></div>
                            <div class="Item"><a href="#" class="text-white">الإلكترونيات الكهروبصرية وأنظمة المراقبة</a></div>
                        </div>
                    </div>
                    <!-- Services -->
                    <div class="col-md-3 d-flex flex-column align-items-end">
                        <h5 class="Heading5">الخدمات</h5>
                        <div class="List">
                            <div class="Item"><a href="#" class="text-white">التجسير</a></div>
                            <div class="Item"><a href="#" class="text-white">التصنيع</a></div>
                            <div class="Item"><a href="#" class="text-white">الخدمات الهندسية</a></div>
                            <div class="Item"><a href="#" class="text-white">دعم المنتج المتكامل</a></div>
                            <div class="Item"><a href="#" class="text-white">المختبرات البيئية</a></div>
                            <div class="Item"><a href="#" class="text-white">المختبرات الهندسية</a></div>
                            <div class="Item"><a href="#" class="text-white">خدمات مابعد البيع والصيانة والعمرة</a></div>
                            <div class="Item"><a href="#" class="text-white">معالجة الأسطح</a></div>
                            <div class="Item"><a href="#" class="text-white">تكامل الأنظمة</a></div>
                            <div class="Item"><a href="#" class="text-white">التجارب الميدانية</a></div>
                        </div>
                    </div>
                    <!-- About Us -->
                    <div class="col-md-1 d-flex flex-column align-items-end">
                        <h5 class="Heading5">من نحن</h5>
                        <div class="List">
                            <div class="Item"><a href="#" class="text-white">عن الشركة</a></div>
                            <div class="Item"><a href="#" class="text-white">الرؤية</a></div>
                            <div class="Item"><a href="#" class="text-white">الرسالة</a></div>
                            <div class="Item"><a href="#" class="text-white">قيمنا</a></div>
                            <div class="Item"><a href="#" class="text-white">إدارة الشركة</a></div>
                            <div class="Item"><a href="#" class="text-white">شركاء النجاح</a></div>
                        </div>
                    </div>
                </div>
                <div class="Line2 border-top mt-5"></div>
                <div class="Frame57 d-flex justify-content-between mt-4">
                    <div>شارع العليا العام – حي الصحافة​ ص.ب 69049 – الرياض 11547</div>
                    <div>جميع الحقوق محفوظة للشركة الوطنية للأنظمة الميكانيكية @ 2024</div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggle = document.querySelector('.navbar-toggle .fa-bars');
            const menu = document.querySelector('.navbar-menu');

            toggle.addEventListener('click', function() {
                menu.classList.toggle('active');
            });
        });
    </script>
</body>
</html>

