@extends('layouts.app')


@section('content')
    <div class="main_container" style=" width: (100% - 70px);">
        <div class="row">
            <div class="col-md-8">
                <div style="background-color: whitesmoke;">




                    <div style="display:flex">

                        <h1 style="margin-top:2%">Hiring Pipeline</h1>


                        <h5 style="margin-left:50%;margin-top:2%">ViewAllJobs</h5>
                    </div>

                    <hr>

                    <div style="display:flex">
                        <div class="status" id="no_status" style="margin-top:2%;margin-left:5%">
                            <div style="width: 6rem;">

                                <h3>Jobs</h3>
                            </div>


                        </div>

                        <div class="status" style="width: 6rem; margin-left:6%;margin-top:2%">

                            <h3>New Applied</h3>



                        </div>
                        <div class="status" style="width: 6rem; margin-left:11%;margin-top:2%">

                            <h3>Screening</h3>


                        </div>
                        <div class="status" style="width: 6rem; margin-left:10%;margin-top:2%">


                            <h3>
                                Interview </h3>


                        </div>

                        <div class="status" style="width: 6rem; margin-left:9%;margin-top:2%;color:ash">


                            <h3>
                                Hired </h3>


                        </div>
                    </div>


                    @foreach ($dept as $i)
                        <div style="display:flex">
                            <div class="col-sm-2" style="margin-left:1%;margin-top:3%">



                                <h1 style="margin-left:2%;font-weight:700">{{ $i->deptname }}</h1>
                                <br>

                            </div>

                            <div class="col-sm-2" style="margin-left:5%">
                                <br>
                                <div class="card" style="width: 6rem; height:35px ;">


                                </div>
                            </div>
                            <div class="col-sm-2" style="margin-left:5%">
                                <br>
                                <div class="card" style="width: 6rem; height:35px;">

                                </div>
                            </div>

                            <div class="col-sm-2" style="margin-left:5%">
                                <br>
                                <div class="card" style="width: 6rem; height:35px;">

                                </div>
                            </div>
                            <div class="col-sm-2" style="margin-left:4%">


                                <br>
                                <div class="card" style="width: 6rem; height:35px;">

                                </div>
                            </div>



                        </div>
                        
                    @endforeach
                    
                


                </div>

                <br>

            </div>


            <div class="col-md-4" >
                <div style="background-color: whitesmoke">
                    
                    <div class="flex">
                       <b> <p>Employee</p> </b>
                       <p style="margin-left: 10px">View All</p>
                    </div>
                </div>
            </div>
        </div>



        <br>

        <div class="row">
            <div class="col-md-8">
                <div style="display:flex;margin-top:0%;margin-left:0%;background-color:whitesmoke;padding:2%">
                    <h3>My Task</h3>
                    <h3 style="margin-left:80%"> Add Task</h3>
                </div>
                <br>

                @foreach ($data as $i)
                    <div style="background-color:whitesmoke">
                        <div style="display:flex">
                            <hr style="height:43px;width:5px;color:blue">
                            <h1 style="margin-left:3%;margin-top:1%"> {{ $i->start }} :: {{ $i->end }} </h1>

                            <h1 style="margin-left:43%;margin-top:2%">{{ $i->title }}</h1>


                        </div>
                    </div>
                    <br>
                @endforeach
            </div>

            <div class="col-md-4">
                <div style="background-color: whitesmoke">
                    
                    <div class="flex">
                        <b> <p>Employee</p> </b>
                        <p style="margin-left: 100px">View All</p>
                     </div>

                </div>
            </div>


        </div>





    </div>
@endsection
