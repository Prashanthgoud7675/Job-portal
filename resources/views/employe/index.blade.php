@extends('layouts.app')


@section('content')
<br>
    <div class="container">

        

        <div class="row">
            <div class="col-md-2">
            </div>

            
            <div class="col-md-9">

                <div style="display: flex">
                    <h1 style="font-size: 27px; font-weight:600">{{$count}}  Employees</h1> 

                    <div class="text-left">

                   <a href="{{url('empdata')}}"> <i class="fa fa-bars" style="margin-top:1%; margin-left:900px; font-size:25px;"></i> </a>
                    </div>
               </div>

               
                <br>

            
            
                <div class="card">
    
                    <div class="card-body">
                        
                            <table class="table">

                                <tr>
                                    <th>Employee_Name</th>
                                    <th>Contact</th>
                                    <th>Team</th>
                                    <th>Date</th>
                                    <th>Status</th>

                                </tr>

                                @foreach ($data as $i)
                                    <tr>
                                        <td>  <b> {{ $i->Employee_Name }} </b> <br><div class="text-muted"> {{$i->Position}} </div></td>
                                        <td> <i class="	fa fa-envelope"> </i>  {{ $i->Email }} <br> <i class="fa fa-phone">  </i> {{$i->Mobile_Num}} </td>
                                        <td>{{ $i->Team }}</td>
                                        <td>{{ $i->Date }}</td>
                                        <td ><h3 class="text-center" style="border:solid #01DFA5; margin-right:15%; padding-top:4%; padding-bottom:4%; color:#01DFA5; border-radius:2px; font-size:15px"> <b>{{ $i->Status }} </b> </h3></td>
                                        <td> <button> <i class="fa fa-ellipsis-h" style="font-size: 22px;  margin-top:3px"></i> </button> </td>

                                    </tr>
                                @endforeach
                            </table>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection