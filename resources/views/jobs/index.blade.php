@extends('layouts.app')


@section('content')
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-9">
                <div class="flex" >
                    <h1 style=" padding:1%; border-radius:50%"> <a href="{{ url('display') }}"> <i
                                class="fa fa-angle-left" aria-hidden="true" style="font-size:30px;   "></i> </a> </h1>
                </div>

                <br>



                <div class="card">
                    <div class="card-header">Jobs</div>
                    <div class="card-body">


                        <a class="btn btn-success" href="{{ url('demo') }}"> Create new Job</a>

                        <br>
                        <br>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" style="width: 700px; margin-left:350px ">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="table-responsive">

                            <table class="table table-bordered">
                                <tr>
                                    <th>id</th>
                                    <th>JobId</th>
                                    <th>JobTitle</th>
                                    <th>JobRole</th>
                                    <th>Description</th>
                                    <th>Positions</th>
                                    <th>Location</th>
                                    <th>AnnualSalary</th>
                                    <th>Dept_id</th>   
                                    <th>Active</th>
                                    <th>CreatedDate</th>
                                    <th>CreatedBy</th>
                                    <th>Apply_Link</th>
                                    <th>CloseDate</th>
                                    <th width="250px">Action</th>
                                </tr>
                                @foreach ($data as $i)
                                    <tr>

                                        <td>{{ $i->id }}</td>
                                        <td>{{ $i->job_id }}</td>
                                        <td>{{ $i->JobTitle }}</td>
                                        <td>{{ $i->JobRole }}</td>
                                        <td>{{ $i->Description }}</td>
                                        <td>{{ $i->Positions }}</td>
                                        <td>{{ $i->Location }}</td>
                                        <td>{{ $i->AnnualSalary }}</td>
                                        <td>{{ $i->Dept_id }}</td> 
                                        <td>{{ $i->Active }}</td>
                                        <td>{{ $i->CreatedDate }}</td>
                                        <td>{{ $i->CreatedBy }}</td>
                                        <td><a href="https://xsilica.com">{{$i->ApplyLink}} </a></td>
                                        <td>{{ $i->CloseDate }}</td>
                                        <td>
                                            <form action="{{ route('jobs.destroy', $i->id) }}" method="POST">

                                               
  


                                                <a class="btn btn-primary"
                                                    href="{{ route('jobs.edit', $i->id) }}">Edit</a>

                                                    
                                                    

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger active">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
