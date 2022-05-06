@extends('layouts.app')


@section('content')

<html>
    <head></head>
    <body style="background: #C9CCD3;
    background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
    background-blend-mode: lighten;">

        <br>

        <div class="main_container" style="margin-top:6%">
    
            <div class="row" style="width: 500px">
                <div class="col-md-12" style="display: flex;margin-left:5%">
    
                    <h1 style="font-size: 27px;font-weight:600;margin-right:1%"> <b> {{ $count }} </b> </h1>
                    <h1 style="font-size: 27px; font-weight:600"> Employees</h1>
    
                   
    
                </div>
            </div>
            <br>
    
    
            <div class='container'>
                <div class='row' style="">
                    @foreach ($data as $i)
                        <div class='col-md-4 col-lg-4' >
    
                            <div class="card"
                                style="width: 25rem;height:350px; margin:10px; background-color:whitesmoke; border:none; ">
    
                                <br>
    
                                <img src="{{ $i->Profile_url }}" alt="img1"
                                    style="height: 100px; width:100px; border-radius:50%; margin-left:32%; margin-bottom:5%">
    
    
                                <b> <a href="{{ route('employe.show', $i->id) }}">
                                        <h3 class="text-center"> {{ $i->Employee_Name }} </h3>
                                    </a> </b>
                                <h3 class="text-muted text-center" style="font-size:17px">{{ $i->Position }}</h3>
    
                                <br>
    
                                <div style="background-color: #E0F2F7; margin:3%; padding-top:3%; padding-bottom:3%">
    
                                    <div style="display: flex;margin:5%">
                                        <h3 style="font-size:15px"> Department <br> {{ $i->Team }}</h3>
                                        <h3 style="margin-left: 20%; margin-bottom:3%;font-size:15px">Date Hired <br>
                                            {{ $i->Date }}</h3>
                                    </div>
    
                                    <hr>
    
                                    <h3 style="margin-top: 5%; margin-left:7%; margin-bottom:5%;font-size:17px"><i
                                            class="	fa fa-envelope"> </i> {{ $i->Email }} <br> <i class="fa fa-phone"> </i>
                                        {{ $i->Mobile_Num }} </h3>
    
                                </div>
                            </div>
    
                        </div>
                    @endforeach
                </div>
            </div>
    
        </div>
        
    </body>
</html>
   
@endsection
