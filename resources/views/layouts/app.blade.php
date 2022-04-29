<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Montserrat:wght@500&family=Open+Sans+Condensed:wght@300&family=Quintessential&family=Ubuntu+Mono&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> XSILICA HRMS </title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".hamburger").click(function() {
                $(".wrapper").toggleClass("collapse");
            });
        });
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background: #e1ecf2;
        }

        .wrapper {
            margin: 10px;
        }

        .wrapper .top_navbar {
            width: calc(100% - 20px);
            height: 60px;
            display: flex;
            position: fixed;
            top: 10px;
        }

        .wrapper .top_navbar .hamburger {
            width: 220px;
            height: 100%;
            background: #fff;
            padding: 15px 17px;
            border-top-left-radius: 10px;
            cursor: pointer;
        }



        .wrapper .top_navbar .top_menu {
            width: calc(100% - 70px);
            height: 100%;
            background: #fff;
            border-top-right-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }



        .wrapper .main_container {
            width: (100% - 200px);
            margin-top: 70px;
            margin-left: 175px;
            padding: 15px;
            transition: all 0.3s ease;
        }

        .wrapper .main_container .item {
            background: #fff;
            margin-bottom: 10px;
            padding: 15px;
            font-size: 14px;
            line-height: 22px;
        }



        .wrapper.collapse .main_container {
            width: (100% - 70px);
            margin-left: 70px;
        }


        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {

            --body-color: #E4E9F7;
            --sidebar-color: white;
            --primary-color: #F1C40F;
            --primary-color-light: blue;
            --toggle-color: #DDD;
            --text-color: #707070;


            --tran-03: all 0.2s ease;
            --tran-03: all 0.3s ease;
            --tran-04: all 0.3s ease;
            --tran-05: all 0.3s ease;
        }

        body {
            min-height: 100vh;
            background-color: var(--body-color);
            transition: var(--tran-05);
        }

        ::selection {
            background-color: var(--primary-color);
            color: #fff;
        }

        body.dark {
            --body-color: #18191a;
            --sidebar-color: #242526;
            --primary-color: #3a3b3c;
            --primary-color-light: #3a3b3c;
            --toggle-color: #18191a;
            --text-color: #ccc;
        }


        .sidebar {
            position: fixed;
            top: 70px;
            left: 10px;
            height: 100%;
            width: 180px;
            padding: 10px 14px;
            background: #191919;

            z-index: 100;
        }

        .sidebar.close {
            width: 88px;
        }


        .sidebar li {
            height: 50px;
            list-style: none;
            display: flex;
            align-items: center;
            padding: 0%;
            margin-top: 10px;
        }

        .sidebar header .image,
        .sidebar .icon {
            min-width: 60px;
            border-radius: 6px;
        }

        .sidebar .icon {
            min-width: 60px;
            border-radius: 6px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .sidebar .text,
        .sidebar .icon {
            color: var(--text-color);
            transition: var(--tran-03);
        }

        .sidebar .text {
            font-size: 17px;
            font-weight: 500;
            white-space: nowrap;
            opacity: 1;
        }

        .sidebar.close .text {
            opacity: 0;
        }


        .sidebar header {
            position: relative;
        }






        .sidebar header .toggle {
            position: absolute;
            top: 50%;
            right: -25px;
            transform: translateY(-50%) rotate(180deg);
            height: 25px;
            width: 25px;
            background-color: var(--primary-color);
            color: var(--sidebar-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            cursor: pointer;
            transition: var(--tran-05);
        }

        body.dark .sidebar header .toggle {
            color: var(--text-color);
        }

        .sidebar.close .toggle {
            transform: translateY(-50%) rotate(0deg);
        }

        .sidebar .menu {
            margin-top: 40px;
        }




        .sidebar li a {
            list-style: none;
            height: 100%;
            background-color: transparent;
            display: flex;
            align-items: center;
            height: 100%;
            width: 100%;
            border-radius: 6px;
            text-decoration: none;
            transition: var(--tran-03);
        }

        .sidebar li a:hover {
            background-color: #F1C40F;
            padding-right: 15%;
            width: 100%;
        }

        .sidebar li a:hover .icon,
        .sidebar li a:hover .text {
            color: var(--sidebar-color);
        }

        body.dark .sidebar li a:hover .icon,
        body.dark .sidebar li a:hover .text {
            color: var(--text-color);
        }

        .sidebar .menu-bar {
            height: calc(100% - 55px);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow-y: scroll;
        }

        .menu-bar::-webkit-scrollbar {
            display: none;
        }

    </style>
</head>

<body>




    <div class="wrapper">

        <div class="top_navbar">
            <div class="hamburger" style="margin-left: 0%">

                <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="">


            </div>
            <div class="top_menu">

                <div class="search-container">
                    <form action=" {{ url('display') }}" method="GET" role="search">

                        <div class="input-group">
                            <input type="text" placeholder="Search Jobs" name="term" placeholder="Search Jobs" id="term"
                                style="height:32px;width:300px">
                            <button type="submit" class="btn btn-info active"><i class="fa fa-search"
                                    style="padding-left:7px"></i></button>

                        </div>
                    </form>



                </div>
                <div class="dropdown" style="display:flex">
                    @auth
                        <img src="{{ auth()->user()->profile_url }}"
                            style="width:40px;height:40px;border-radius:50%;margin-top:2%;margin-right:2%">
                        <button class=" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="font-weight:700">
                            {{ auth()->user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <form action="{{ route('logout') }}" method="post" class="dropdown-item" href="">

                                    @csrf

                                    <button type="submit" style="font-size: 18px">Logout</button>

                                </form>
                            </a>

                        </div>
                    @endauth

                </div>



            </div>
        </div>


        <nav class="sidebar close">
            <header>

                <i class='bx bx-chevron-right toggle'></i>
            </header>



            <div class="menu-bar">
                <div class="menu">

                    <h1 class="text-center" style="color: white;font-size:23px">XSILICA HRMS</h1>
                    <hr style="color:#fed758;height:2px;widht:100%">

                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="/">
                                <i class="fa fa-dashboard " style="color: white;"></i>
                                <span class="text nav-text" style="margin-left: 5%; color:white">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="calender">
                                <i class="fas fa-calendar-alt" style="color: white;"></i>
                                <span class="text nav-text" style="margin-left: 5%; color:white">Calendar</span>
                            </a>
                        </li>
                        <h5 style="color:#f9f9f9;padding:7%; font-size:17px"> RECRUITMENT</h5>
                        <li class="nav-link">
                            <a href="display">
                                <i class="fas fa-briefcase" style="color: white;"></i>
                                <span class="text nav-text" style="margin-left: 5%; color:white">Jobs</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="candidates">
                                <i class="fas fa-user-friends" style="color: white;"></i>
                                <span class="text nav-text" style="margin-left: 5%; color:white">Candidates</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="referrals">
                                <i class="fas fa-clone" style="color: white;"></i>
                                <span class="text nav-text" style="margin-left: 5%; color:white">My Referrals</span>
                            </a>
                        </li>
                        <h1 style="color:#f9f9f9;padding:5%; font-size:17px"> ORGANIZATION</h1>

                        <li class="nav-link">
                            <a href=" {{ route('employe.index') }}">
                                <i class="fas fa-user" style="color: white;"></i>
                                <span class="text nav-text" style="margin-left: 5%; color:white">Employee</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="structure" style="color: white;">
                                <i class="fas fa-sitemap"></i>
                                <span class="text nav-text" style="margin-left: 5%; color:white">Structure</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="settings" style="color: white;">
                                <i class="fas fa-cog"></i>
                                <span class="text nav-text" style="margin-left: 5%; color:white">Settings</span>
                            </a>
                        </li>

                    </ul>
                </div>


            </div>

        </nav>


        <script>
            const body = document.querySelector('body'),
                sidebar = body.querySelector('nav'),
                toggle = body.querySelector(".toggle"),
                searchBtn = body.querySelector(".search-box"),
                modeSwitch = body.querySelector(".toggle-switch"),
                modeText = body.querySelector(".mode-text");


            toggle.addEventListener("click", () => {
                sidebar.classList.toggle("close");
            })

            searchBtn.addEventListener("click", () => {
                sidebar.classList.remove("close");
            })

            modeSwitch.addEventListener("click", () => {
                body.classList.toggle("dark");

                if (body.classList.contains("dark")) {
                    modeText.innerText = "Light mode";
                } else {
                    modeText.innerText = "Dark mode";

                }
            });
        </script>


        @yield('content')


</body>

</html>
