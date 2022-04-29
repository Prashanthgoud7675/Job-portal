@extends('layouts.app')


@section('content')

    <div class="main_container" style=" width: (100% - 70px);">
        <br>
        <br>
        <div class="row">
            <div class="col-md-8">
                <div style="background-color: whitesmoke;">




                    <div style="display:flex">

                        <h1 style="margin-top:2%; font-size:17px; margin-left:5%">Hiring Pipeline</h1>


                        <h5 style="margin-left:65%;margin-top:2%; font-size:17px; ">ViewAllJobs</h5>
                    </div>

                    <hr>

                    <div style="display:flex">
                        <div class="status" id="no_status" style="margin-top:2%;margin-left:5%">
                            <div style="width: 6rem;">

                                <h3 style="font-size:17px">Jobs</h3>
                            </div>


                        </div>

                        <div class="status" style="width: 6rem; margin-left:6%;margin-top:2%">

                            <h3 style="font-size:17px">New Applied</h3>



                        </div>
                        <div class="status" style="width: 6rem; margin-left:11%;margin-top:2%">

                            <h3 style="font-size:17px">Screening</h3>


                        </div>
                        <div class="status" style="width: 6rem; margin-left:10%;margin-top:2%">


                            <h3 style="font-size:17px"> Interview </h3>


                        </div>

                        <div class="status" style="width: 6rem; margin-left:9%;margin-top:2%;color:ash">


                            <h3 style="font-size:17px"> Hired </h3>


                        </div>
                    </div>


                    @foreach ($dept as $i)
                        <div style="display:flex">
                            <div class="col-sm-2" style="margin-left:0%;margin-top:3%">



                                <h1 style="margin-left:0%;font-weight:700">{{ $i->deptname }}</h1>
                                <br>

                            </div>

                            <div class="col-sm-2" style="margin-left:4%">
                                <br>
                                <div class="card" style="width: 7rem; height:35px ;">


                                </div>
                            </div>
                            <div class="col-sm-2" style="margin-left:3%">
                                <br>
                                <div class="card" style="width: 7rem; height:35px;">

                                </div>
                            </div>

                            <div class="col-sm-2" style="margin-left:3%">
                                <br>
                                <div class="card" style="width: 7rem; height:35px;">

                                </div>
                            </div>
                            <div class="col-sm-2" style="margin-left:3%">


                                <br>
                                <div class="card" style="width: 7rem; height:35px;">

                                </div>
                            </div>



                        </div>
                    @endforeach




                </div>

                <br>

            </div>


            <div class="col-md-4">
                <div  style="background-color: whitesmoke">

                    <div  style="padding-top:2%">
                        <b>
                            <h1 style="margin-left: 5%; font-size:20px">Employee</h1>
                        </b>
                        <h3 style="float: right;margin-top:-6%;margin-right:5%; font-size:17px">View All</h3>
                    </div>
                </div>
            </div>
        </div>



        <br>

        <div class="row">
            <div class="col-md-8">
                <div style="display:flex;margin-top:0%;margin-left:0%;background-color:whitesmoke;padding:2%">
                    <h3 style="font-size:17px">My Task</h3>
                    <h3 style="margin-left:80%; font-size:17px"> Add Task</h3>
                </div>
                <br>

                @foreach ($data as $i)
                    <div style="background-color:whitesmoke; border-left:4px solid rgb(168, 168, 244)">
                        <div style="display:flex">
                            
                            <h1 style="margin-left:3%;margin-top:1%; font-size:17px"> {{ $i->start }} :: {{ $i->end }} </h1>

                            <h1 style="margin-left:43%;margin-top:2%; font-size:17px">{{ $i->title }}</h1>


                        </div>
                    </div>
                    <br>
                @endforeach
            </div>

            <div class="col-md-4">
                <div style="background-color: whitesmoke">

                    <div style="padding-top: 1%">
                        <b>
                            <p style="margin-left: 5%; font-size:20px">Employee</p>
                        </b>
                        <p style="float:right;margin-top:-6%;margin-right:5%;font-size:17px">View All</p>
                    </div>
                    <div style="padding:4%;">
                        <div style="background-color: rgb(206, 200, 200);border-radius:2%;">




                            <div class="flex">
                                <h3 style="padding-top:3%;margin-left:3%;font-size:17px"> <b> Development Team </b> </h3>
                                
                                    @foreach ($emp as $i)
                                        <img src="{{ $i->Profile_url }}" alt="profile" height="35px" width="35px"
                                            style="border-radius: 50%;margin-top:1%">
                                    @endforeach
                                
                            </div>

                            <h3 class="text-muted" style="margin-top:-3%;margin-left:3%;padding-bottom:2%; font-size:17px">Total Members: <b
                                    style="color: black"> {{ $count }} </b> </h3>
                        </div>
                    </div>

                </div>


            </div>


        </div>





    </div>
@endsection
