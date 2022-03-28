@extends('layouts.app')


@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Applicants</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">

                                <tr>
                                    <th>First_Name</th>
                                    <th>Last_Name</th>
                                    <th>City</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>DOB</th>

                                </tr>


                                @foreach ($data as $i)
                                    <tr>
                                        <td>{{ $i->First_Name }}</td>
                                        <td>{{ $i->Last_Name }}</td>
                                        <td>{{ $i->City }}</td>
                                        <td>{{ $i->Email }}</td>
                                        <td>{{ $i->Mobile }}</td>
                                        <td>{{ $i->DOB }}</td>

                                    </tr>
                                @endforeach
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
