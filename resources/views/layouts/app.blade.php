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

    <script src="https://cdn.tailwindcss.com"></script>


    <title>Demo</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        .sidebar {

            background: #191919;
            position: fixed;
            top: 0;
            left: 0;
            width: 225px;
            height: 100%;
            padding: 20px 0;
            transition: all 0.5s ease;

        }

        .wrapper .sidebar .profile {
            margin-bottom: 30px;
            text-align: center;
        }

        .wrapper .sidebar .profile img {
            display: block;
            width: 310px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto;
        }

        .wrapper .sidebar .profile h3 {
            color: #ffffff;
            margin: 10px 0 5px;
        }

        .wrapper .sidebar .profile p {
            color: rgb(206, 240, 253);
            font-size: 14px;
        }

        .wrapper .sidebar ul li a:hover,
        .wrapper .sidebar ul li a.active {
            color: black;

            background: #fed758;
            border-right: 2px solid rgb(5, 68, 104);
            border-radius: 15px;
        }

        .wrapper .sidebar ul li a:hover .icon,
        .wrapper .sidebar ul li a.active .icon {
            color: black;
        }

        .wrapper .sidebar ul li a:hover:before,
        .wrapper .sidebar ul li a.active:before {
            display: block;
        }

        .wrapper .sidebar ul li a {
            display: block;
            padding: 13px 30px;

            color: rgb(241, 237, 237);
            font-size: 16px;
            position: relative;
        }

        .wrapper .sidebar ul li a .icon {
            color: #dee4ec;
            width: 30px;
            display: inline-block;
        }

        .wrapper .section {
            width: 100%;
            height: 80px;
            
            background-color:#C0C0C0;


        }



        .wrapper .section .top_navbar .hamburger a {
            font-size: 28px;
            
            color: #f4fbff;

        }

        .wrapper .section .top_navbar .hamburger a:hover {
            color: #a2ecff;

        }

        .right-sidebar {
            width: 105px;
            float: right;
            position: fixed;
            background-color: white;
            border-left: 1px solid black;
            height: 110%;
            margin-left: 93%;
            margin-top: -7%;
        }

        .right-sidebar.icon {
            margin-top: 50px
        }

    </style>
</head>

<body >

    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-4" style="padding-top:2%">
                            <div class="search-container">
                                <form action="{{ url('display') }}" method="GET" role="search">

                                    <div class="input-group">
                                       
                                        <input type="text" class="form-control mr-2" name="term" placeholder="Search Jobs" id="term" >

                                        <span >
                                            <button class="btn btn-info active" type="submit" title="Search Jobs" >
                                                <span class="fas fa-search" ></span>
                                            </button>
                                        </span>
                                       
                                    </div>
                                </form>
               


                            </div>
                        </div>
                        <div class="col-md-2" style="padding-top:1%">
                            <button type="submit" style="font-size:30px;margin-right:15%;">
                                <i class="fa fa-plus"
                                    style="background-color:#F7DC6F;padding:8px;border-radius:50%"></i></button>
                            <button type="submit" style="font-size:30px"><i class="fa fa-bell"
                                    style="background-color:#F7DC6F;padding:8px;border-radius:50%"></i></button>

                        </div>
                        <div class="col-md-3" style="padding-top:2%">
                            <div class="top_navbar justify-content-end">

                                @auth

                                <a href="" class="p-3" style="font-size: 20px; color:#191919; ">{{auth()->user()->name}}</a>





                             <form action="{{route('logout')}}" method="post" class="p-3 inline">

                                 @csrf

                                 <button type="submit" style="font-size: 18px" >Logout</button>

                             </form>



                         @endauth


                         @guest




                             <a href="{{route('login')}}" style="font-size: 20px; color:#191919; " >Login /</a>


                             <a href="{{route('register')}}" style="font-size: 20px; color:#191919;  ">Register</a>



                         @endguest



                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="sidebar">

                    <ul>
                        <br><br>
                        <li>


                            <h1 style="font-size:25px; color: white; padding-left:5%"> XSILICA HRMS</h1>

                        </li>
                        <br>
                        <hr style="color:#fed758;height:2px">
                        <br>
                        <li>
                            <a href="/">
                                <span class="icon"><i class="fa fa-dashboard"></i></span>
                                <span class="item">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="calender">
                                <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                                <span class="item">Calender</span>
                            </a>
                        </li>
                        <br>
                        <h5 style="color:#f9f9f9;padding:5%"> RECRUITMENT</h5>
                        <br>
                        <li>
                            <a href="display">
                                <span class="icon"><i class="fas fa-briefcase"></i></span>
                                <span class="item">Jobs</span>
                            </a>
                        </li>
                        <li>
                            <a href="candidates">
                                <span class="icon"><i class="fas fa-user-friends"></i></span>
                                <span class="item">Candidates</span>
                            </a>
                        </li>
                        <li>
                            <a href="referrals">
                                <span class="icon"><i class="fas fa-clone"></i></span>
                                <span class="item">My Referrals</span>
                            </a>
                        </li>
                        <br>
                        <h5 style="color:#f9f9f9;padding:5%"> ORGANIZATION</h5>
                        <br>
                        <li>
                            <a href="{{route('employe.index')}}">
                                <span class="icon"><i class="fas fa-user"></i></span>
                                <span class="item">Employee</span>
                            </a>
                        </li>
                        <li>
                            <a href="structure">
                                <span class="icon"><i class="fas fa-sitemap"></i></span>
                                <span class="item">Structure</span>
                            </a>
                        </li>
                        <li>
                            <a href="settings">
                                <span class="icon"><i class="fas fa-cog"></i></span>
                                <span class="item">Settings</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    </div>


    <div class="right-sidebar" style="padding-left:2%;">
        <div class="icon" style="padding-top:60px">
            <i class="fa fa-tasks"
                style="font-size:30px;margin-top:45px;color:#F7DC6F;background-color:#000080;padding:12px;border-radius:50%"></i>
            <h3> Tasks</h3>
        </div>
        <div class="icon one">
            <i class="fa fa-file-text"
                style="font-size:30px;margin-top:45px;color:#F7DC6F;background-color:#000080;padding:12px;border-radius:50%;"></i>
            <h3>Notes</h3>
        </div>
        <div class="icon two" style="padding-top:320px;"><i class="fa fa-question-circle"
                style="font-size:30px;color:#F7DC6F;background-color:#000080;padding:12px;border-radius:50%;"></i>
            <h4 style="padding-top: -100px;">Need Help?</h4>
        </div>
    </div>








    @yield('content')




</body>

</html>
