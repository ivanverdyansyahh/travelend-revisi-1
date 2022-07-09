<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

    {{-- Datatables --}}
    <link rel="stylesheet" href="{{ asset('vendor/datatables/datatables.min.css') }}">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{ $title }} - Travelend</title>

    <style>
        .switch input {
            display: none;
        }

        .switch {
            display: inline-block;
            width: 50px;
            height: 14px;
            margin: 5px;
            margin-left: 25px;
            -webkit-transform: translateY(50%);
            transform: translateY(50%);
            position: relative;
        }

        .slider {
            position: absolute;
            top: 0px;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 20px;
            background: #B7B7B7;
            cursor: pointer;
            border: 4px solid transparent;
            overflow: visible;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            width: 22px;
            height: 22px;
            background: #706F6F;
            border-radius: 100px;
            top: -8px;
            -webkit-transform: translateX(-0px);
            transform: translateX(-0px);
            -webkit-transition: .4s;
            transition: .4s;
            -webkit-box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.23);
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.23);
        }

        .switch input:checked+.slider:before {
            -webkit-transform: translateX(20px);
            transform: translateX(20px);
            background: #43AD50;
        }

        .off {
            position: absolute;
            left: -25px;
            top: -5px;
            color: #706F6F;
            -webkit-transition: all ease .4s;
            transition: all ease .4s;
        }

        .on {
            position: absolute;
            right: -20px;
            top: -5px;
            color: #d3d3d3;
            font-family: 'roboto_light', sans-serif;
            -webkit-transition: all ease .4s;
            transition: all ease .4s;
        }

        .switch input:checked~.off {
            color: #d3d3d3;

            top: -5px;
        }

        .switch input:checked~.on {
            color: #43AD50;

        }
    </style>
</head>

<body>

    <div class="screen-cover d-none d-xl-none"></div>

    <div class="row">
        <div class="col-12 col-lg-3 col-navbar d-block">

            <aside class="sidebar">
                <div class="d-flex flex-column justify-content-center align-items-center">

                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="/assets/img/global/navbar-times.svg" class="" alt="">
                    </button>

                    <div class="profile-img">
                        <img src="/assets/img/global/sidebar/profile.png" alt="">
                    </div>

                    <h4 class="profile-name">{{ auth()->user()->username }}</h4>
                    <p class="profile-email">{{ auth()->user()->email }}</p>
                </div>


                <div class="sidebar-item-container">

                    <a href="/admin/dashboard"
                        class="sidebar-item {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 14H14V21H21V14Z" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 14H3V21H10V14Z" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M21 3H14V10H21V3Z" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 3H3V10H10V3Z" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <span>Analytics</span>
                    </a>

                    <a href="/admin/destinations"
                        class="sidebar-item {{ Request::is('admin/destinations*') ? 'active' : '' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3 6H21" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <span>Destinations</span>
                    </a>

                    <a href="/admin/categories"
                        class="sidebar-item {{ Request::is('admin/categories*') ? 'active' : '' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 11.5C21.0034 12.8199 20.6951 14.1219 20.1 15.3C19.3944 16.7117 18.3098 17.8992 16.9674 18.7293C15.6251 19.5594 14.0782 19.9994 12.5 20C11.1801 20.0034 9.87812 19.6951 8.7 19.1L3 21L4.9 15.3C4.30493 14.1219 3.99656 12.8199 4 11.5C4.00061 9.92176 4.44061 8.37485 5.27072 7.03255C6.10083 5.69025 7.28825 4.60557 8.7 3.9C9.87812 3.30493 11.1801 2.99656 12.5 3H13C15.0843 3.11499 17.053 3.99476 18.5291 5.47086C20.0052 6.94696 20.885 8.91565 21 11V11.5Z"
                                stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span>Categories</span>
                    </a>

                    <a href="/admin/orders" class="sidebar-item {{ Request::is('admin/orders*') ? 'active' : '' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 4H3C1.89543 4 1 4.89543 1 6V18C1 19.1046 1.89543 20 3 20H21C22.1046 20 23 19.1046 23 18V6C23 4.89543 22.1046 4 21 4Z"
                                stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 10H23" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <span>Orders</span>
                    </a>

                    <a href="/logout" class="sidebar-item">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.36 6.64C19.6184 7.89879 20.4753 9.50244 20.8223 11.2482C21.1693 12.9939 20.9909 14.8034 20.3096 16.4478C19.6284 18.0921 18.4748 19.4976 16.9948 20.4864C15.5148 21.4752 13.7749 22.0029 11.995 22.0029C10.2151 22.0029 8.47515 21.4752 6.99517 20.4864C5.51519 19.4976 4.36164 18.0921 3.68036 16.4478C2.99909 14.8034 2.82069 12.9939 3.16772 11.2482C3.51475 9.50244 4.37162 7.89879 5.63 6.64"
                                stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 2V12" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <span>Log Out</span>
                    </a>
                </div>
            </aside>

        </div>

        {{-- @yield('content') --}}
        <div class="col-12 col-xl-9">
            <div class="nav">
                <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <h2 class="nav-title">{{ $title }}</h2>
                        <button id="toggle-navbar" onclick="toggleNavbar()">
                            <img src="/assets/img/global/sidebar/profile.png" alt="">
                        </button>
                    </div>
                </div>

            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>




    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="{{ asset('vendor/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/vfs_fonts.js') }}"></script>

    <script src="{{ asset('js/custom-datatables.js') }}"></script>
    <script src="{{ asset('js/custom-validation.js') }}"></script>
    <script src="{{ asset('js/travel-admin.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('scripts')

    <script>
        const navbar = document.querySelector('.col-navbar')
        const cover = document.querySelector('.screen-cover')

        function toggleNavbar() {
            navbar.classList.toggle('appear')
            cover.classList.toggle('d-none')
        }

        @if (session('success'))
            Swal.fire(
                'Success',
                "{{ session('success') }}",
                'success'
            )
        @endif

        @if (session('failed'))
            Swal.fire(
                'Oops',
                "{{ session('failed') }}",
                'error'
            )
        @endif
    </script>
</body>

</html>
