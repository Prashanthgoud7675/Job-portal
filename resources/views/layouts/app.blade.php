<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

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


    <title>Demo</title>

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





        .wrapper .sidebar {
            position: fixed;
            top: 70px;
            left: 10px;
            background: #191919;
            ;
            width: 200px;
            height: calc(100% - 80px);
            border-bottom-left-radius: 20px;
            transition: all 0.3s ease;
        }

        .wrapper .sidebar ul li a {
            display: block;
            padding: 20px;
            color: #fff;
            position: relative;
            margin-bottom: 1px;
            color: white;
            white-space: nowrap;
        }

        .wrapper .sidebar ul li a:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            background: #92a6e2;
            display: none;
        }

        .wrapper .sidebar ul li a span.icon {
            margin-right: 10px;
            display: inline-block;
        }

        .wrapper .sidebar ul li a span.title {
            display: inline-block;
        }

        .wrapper .sidebar ul li a:hover,
        .wrapper .sidebar ul li a.active {
            background: #4360b5;
            color: #fff;
        }

        .wrapper .sidebar ul li a:hover:before,
        .wrapper .sidebar ul li a.active:before {
            display: block;
        }

        .wrapper .main_container {
            width: (100% - 200px);
            margin-top: 70px;
            margin-left: 200px;
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

        .wrapper.collapse .sidebar {
            width: 70px;
        }

        .wrapper.collapse .sidebar ul li a {
            text-align: center;
        }

        .wrapper.collapse .sidebar ul li a span.icon {
            margin: 0;
        }

        .wrapper.collapse .sidebar ul li a span.title {
            display: none;
        }

        .wrapper.collapse .main_container {
            width: (100% - 70px);
            margin-left: 70px;
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

                <div class="search-container" >
                    <form action="{{ url('display') }}" method="GET" role="search">

                        <div class="input-group" style="margin-left: 0%">

                            <input type="text" class="form-control mr-2" name="term" placeholder="Search Jobs" id="term" >

                            <span>
                                <button class="btn btn-info active" type="submit" title="Search Jobs">
                                    <span class="fas fa-search"></span>
                                </button>
                            </span>

                        </div>
                    </form>



                </div>

              

                <div>

                    @auth

                        <a href="" class="p-3"
                            style="font-size: 20px; color:#191919; ">{{ auth()->user()->name }}</a>





                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">

                            @csrf

                            <button type="submit" style="font-size: 18px">Logout</button>

                        </form>



                    @endauth


                    @guest




                        <a href="{{ route('login') }}" style="font-size: 20px; color:#191919; ">Login /</a>


                        <a href="{{ route('register') }}" style="font-size: 20px; color:#191919;  ">Register</a>



                    @endguest



                </div>

            </div>
        </div>

        <div class="sidebar">
            <ul>
                <br>
                <li>


                    <h1 style="font-size:25px; color: white; padding-left:5%"> XSILICA HRMS</h1>

                </li>


                <hr style="color:#fed758;height:2px">


                <li>
                    <a href="/" style="text-decoration: none">
                        <span class="icon"><i class="fa fa-dashboard "></i></span>
                        <span class="item" style="font-size: 15px">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="calender" style="text-decoration: none">
                        <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                        <span class="item" style="font-size: 15px">Calender</span>
                    </a>
                </li>


                <h5 style="color:#f9f9f9;padding:5%"> RECRUITMENT</h5>

                <li>
                    <a href="display" style="text-decoration: none">
                        <span class="icon"><i class="fas fa-briefcase"></i></span>
                        <span class="item" style="font-size: 15px">Jobs</span>
                    </a>
                </li>
                <li>
                    <a href="candidates" style="text-decoration: none">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item" style="font-size: 15px">Candidates</span>
                    </a>
                </li>
                <li>
                    <a href="referrals" style="text-decoration: none">
                        <span class="icon"><i class="fas fa-clone"></i></span>
                        <span class="item" style="font-size: 15px">My Referrals</span>
                    </a>
                </li>


                <h5 style="color:#f9f9f9;padding:5%"> ORGANIZATION</h5>

                <li>
                    <a href="{{ route('employe.index') }}" style="text-decoration: none">
                        <span class="icon"><i class="fas fa-user"></i></span>
                        <span class="item" style="font-size: 15px">Employee</span>
                    </a>
                </li>
                <li>
                    <a href="structure" style="text-decoration: none">
                        <span class="icon"><i class="fas fa-sitemap"></i></span>
                        <span class="item" style="font-size: 15px">Structure</span>
                    </a>
                </li>
                <li>
                    <a href="settings" style="text-decoration: none">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item" style="font-size: 15px">Settings</span>
                    </a>
                </li>
            </ul>



        </div>

        

        @yield('content')


</body>

</html>
