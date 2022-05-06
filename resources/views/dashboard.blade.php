@extends('layouts.app')


@section('content')
    <html>

    <head></head>

    <body style="background-color:whitesmoke"> 
        <div class="main_container" style=" width: (100% - 70px);background-color:white">
            <br>
            <br>
            <div class="row">
        
                <div class="col-md-8">
                    <div class="card" style="width: 80rem;background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);">
                        <div class="card-header">
                            <h1>Hiring Pipeline</h1>
        
        
                            <h5 style="float:right;margin-top:-2%">ViewAllJobs</h5>
                        </div>
                        <div class="card-body" style="display:flex">
                            <h1 style="margin-left:5%">Jobs</h1>
                            <h1 style="margin-left:10%">New Applied</h1>
                            <h1 style="margin-left:10%">Screening</h1>
                            <h1 style="margin-left:10%">Interview</h1>
                            <h1 style="margin-left:10%">Hired</h1>
                        </div>
                        <div class="card-body" style="display:flex">
                            <div style="display:flex">
                                <div class="status" id="no_status" style="margin-top:2%;margin-left:2%">
                                </div>
        
        
                                @foreach ($dept as $i)
        
                                <div class="col-sm-2" style="margin-top:3%">
        
        
        
                                    <h1 style="margin-left:0%;font-weight:700">{{ $i->deptname }}</h1>
                                    <br>
        
                                </div>
        
                                <div class="col-sm-2" style="margin-left:2%">
                                    <br>
                                    <div class="card" style="width: 7rem; height:35px ;">
        
        
                                    </div>
                                </div>
                                <div class="col-sm-2" style="margin-left:6%">
                                    <br>
                                    <div class="card" style="width: 7rem; height:35px;">
        
                                    </div>
                                </div>
        
                                <div class="col-sm-2" style="margin-left:4%">
                                    <br>
                                    <div class="card" style="width: 7rem; height:35px;">
        
                                    </div>
                                </div>
                                <div class="col-sm-2" style="margin-left:3%">
        
        
                                    <br>
                                    <div class="card" style="width: 7rem; height:35px;">
        
                                    </div>
                                </div>
        
        
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
           
        
        <br><br>
        
        
        
        <div class="col-md-4">
        
        
            <div class="card" style="padding-top:2%;width:40rem;background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);">
                <div class="card-header">
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
                    <div class="card"style="display:flex;margin-top:0%;margin-left:0%;background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);padding:2%;width:80rem">
                        <h3 style="font-size:17px">My Task</h3>
                        <h3 style="margin-left:80%; font-size:17px;margin-top:-2%"> Add Task</h3>
                    </div>
                    <br>
        
                    @foreach ($data as $i)
                        <div class="card"style="background-color:whitesmoke; border-left:4px solid rgb(168, 168, 244);width:65rem">
                            <div style="display:flex">
        
                                <h1 style="margin-left:3%;margin-top:1%; font-size:17px"> {{ $i->start }} ::
                                    {{ $i->end }} </h1>
        
                                <h1 style="margin-left:35%;margin-top:2%; font-size:17px">{{ $i->title }}</h1>
        
        
                            </div>
                        </div>
                        <br>
                    @endforeach
                </div>
        
                <br>
        
        
                <div class="col-md-4">
                    <div class="card" style="background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);width:40rem">
        
                        <div style="padding-top: 1%">
                            <b>
                                <p style="margin-left: 5%; font-size:20px">Employee</p>
                            </b>
                            <p style="float:right;margin-top:-6%;margin-right:5%;font-size:17px">View All</p>
                        </div>
                        <div style="padding:4%;">
                            <div style="background-color: rgb(206, 200, 200);border-radius:2%;">
        
        
        
        
                                <div style="display: flex">
                                    <h3 style="margin-top:0%;margin-left:3%;margin-right:3%;font-size:17px"> <b> Development
                                            Team </b> </h3>
        
                                    @foreach ($emp as $i)
                                        <img src="{{ $i->Profile_url }}" alt="profile" height="35px" width="35px"
                                            style="border-radius: 50%;margin-top:1%">
                                    @endforeach
        
                                </div>
        
                                <h3 class="text-muted" style="margin-top:-3%;margin-left:3%;padding-bottom:2%; font-size:17px">
                                    Total Members: <b style="color: black"> {{ $count }} </b> </h3>
                            </div>
                        </div>
        
                    </div>
        
        
                </div>
        
        
            </div>
        </div>
        
        </body>

   
    </html>
@endsection
