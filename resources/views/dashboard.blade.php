@extends('layouts.app')


@section('content')
    <html>

    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <style></style>


    </head>

    <body style="background-color:  whitesmoke">
        <div class="main_container" style=" width: (100% - 70px);">
            <br>
            <br>
            <br>

            <div class="row">

                <div class="col-md-8">
                    <br>
                    <div class="card" style="width: 80rem;background-color:#d1e0e0; border-radius:10px;">
                        <div class="card-header" style="margin-bottom: 3%;">
                            <h1 style="margin-left: 2%;padding-top:2%; font-weight:600">Hiring Pipeline</h1>


                            <h5 style="float:right;margin-top:-2%;margin-right:2%; font-weight:600">ViewAllJobs</h5>
                        </div>
                        <div class="card-body" style="display:flex">
                            <h1 style="margin-left:5%; font-weight:600">Jobs</h1>
                            <h1 style="margin-left:14%; font-weight:600">New Applied</h1>
                            <h1 style="margin-left:13%; font-weight:600">Screening</h1>
                            <h1 style="margin-left:12%; font-weight:600">Interview</h1>
                            <h1 style="margin-left:13%; font-weight:600">Hired</h1>
                        </div>
                        <br>
                        <br>




                        @foreach ($dept as $i)
                            <div class="flex">

                                <div>



                                    <h1 style="margin-left:0%;font-weight:700">{{ $i->deptname }}</h1>


                                </div>



                                <div class="col-md-2" "  style=" margin-left:7%;margin-top:-2%;margin-bottom:2%">
                                    <br>
                                    <div class="card"
                                        style="width: 10rem; height:35px ;border:1px solid rgb(174, 150, 150)">
                                        <h1>{{ $NewApplied }}</h1>

                                    </div>
                                </div>



                                <div class="col-sm-2" style="margin-left:6%;margin-top:-2%">
                                    <br>
                                    <div class="card"
                                        style="width: 10rem; height:35px;border:1px solid rgb(174, 150, 150)">
                                        <h1>{{ $Screening }}</h1>


                                    </div>
                                </div>

                                <div class="col-sm-2" style="margin-left:4%;margin-top:-2%">
                                    <br>
                                    <div class="card"
                                        style="width: 10rem; height:35px;border:1px solid rgb(174, 150, 150)">
                                        <h1>{{ $Interview }}</h1>
                                    </div>
                                </div>
                                <div class="col-sm-2" style="margin-left:5%;margin-top:-2%;">


                                    <br>
                                    <div class="card"
                                        style="width: 10rem; height:35px;border:1px solid rgb(174, 150, 150)">
                                        <h1>{{ $Hired }}</h1>
                                    </div>
                                </div>

                            </div>
                        @endforeach



                    </div>
                </div>


                <br>



                <div class="col-md-4">
                    <div class="card" style=" border-radius:10px;background-color:#d1e0e0; height: 67vh ">

                        <div class="card header"> <b>
                                <h1 style="font-size: 20px; font-weight:600;padding:10px ">Job Summary </h1>
                            </b> </div>
                        <hr>
                        <br>


                        <canvas id="myChart" style="width: 60rem; height:60vh;">

                        </canvas>

                    </div>

                </div>




            </div>



            <br>
            <br>
            <br>

            <div class="row">


                <div class="col-md-8">
                    <div class="card"
                        style="display:flex;background-color:#d1e0e0;padding:2%;width:80rem; border-radius:10px">
                        <h3 style="font-size:17px">My Task</h3>
                        <h3 style="margin-left:80%; font-size:17px"> Add Task</h3>
                    </div>
                    <br>

                    @foreach ($data as $i)
                        <div class="card"
                            style="background-color: #c0c6c9; border-left:4px solid rgb(168, 168, 244);width:80rem; height:40px">
                            <div style="display:flex">

                                <h1 style="margin-right:0%;margin-top:2%; font-size:17px"> {{ $i->start }} ::
                                    {{ $i->end }} </h1>

                                <h1 style="margin-left:60%;margin-top:2%; font-size:17px">{{ $i->title }}</h1>


                            </div>
                        </div>
                        <br>
                    @endforeach
                </div>




                <div class="col-md-4">

                    <div class="card" style="background-color:#d1e0e0;width:40rem; border-radius:10px">

                        <div style="padding-top: 1%">
                            <b>
                                <p style="margin-left: 5%; font-size:20px">Employee</p>
                            </b>
                            <p style="float:right;margin-top:-6%;margin-right:5%;font-size:17px">View All</p>
                        </div>
                        <div style="padding:4%;">
                            <div style="border-radius:2%;background-color:#c0c6c9">




                                <div style="display: flex;background-color:#c0c6c9">
                                    <h3 style="margin-top:2%;margin-left:3%;margin-right:3%;font-size:17px"> <b> Development
                                            Team </b> </h3>

                                    @foreach ($emp as $i)
                                        <img src="{{ $i->Profile_url }}" alt="profile" height="35px" width="35px"
                                            style="border-radius: 50%;margin-top:1%">
                                    @endforeach

                                </div>

                                <h3 class="text-muted"
                                    style="margin-top:-4%;margin-left:3%;padding-bottom:2%; font-size:17px">
                                    Total Members: <b style="color: black"> {{ $count }} </b> </h3>
                            </div>
                        </div>

                    </div>


                </div>


            </div>
        </div>

        @include('sweetalert::alert')

    </body>


    </html>


    <script>
        var xValues = ["Published", "Internal", "Private", "On Hold", "Closed"];
        var yValues = [55, 49, 44, 24, 15];
        var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145"
        ];

        new Chart("myChart", {
            type: "doughnut",





            data: {

                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues,





                }]
            },
            options: {
                title: {
                    display: true,


                }
            }
        });
    </script>
@endsection
