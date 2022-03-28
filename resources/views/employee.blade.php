@extends('layouts.app')


@section('content')
<br>
    <div class="container">

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-9">
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
                                        <td> <a href="{{url('empdata', $i->id)}}">{{ $i->Employee_Name }} </a> <br> {{$i->Position}}</td>
                                        <td>{{ $i->Email }} <br> {{$i->Mobile_Num}}</</td>
                                        <td>{{ $i->Team }}</td>
                                        <td>{{ $i->Date }}</td>
                                        <td>{{ $i->Status }}</td>

                                    </tr>
                                @endforeach
                            </table>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
