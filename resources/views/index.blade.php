@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Jobs</div>
                <div class="card-body">
                    <a href="{{ route('addjob') }}" class="btn btn-success btn-sm" title="Add New Job">
                        <i class="fa fa-plus" aria-hidden="true"></i> ADD JOB
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>JobId</th>
                                    <th>JobTitle</th>
                                    <th>Description</th>
                                    <th>Positions</th>
                                    <th>Location</th>
                                    <th>AnnualSalary</th>
                                    <th>DeptId</th>
                                    <th>EmpID</th>
                                    <th>Active</th>
                                    <th>CreatedDate</th>
                                    <th>Created_By</th>
                                    <th>Remarks</th>
                                    <th>JobsId</th>
                                    <th>CloseDate</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i)
                                    <tr>
                                        <td>{{ $i->iteration }}</td>
                                        <td>{{ $i->JobId }}</td>
                                        <td>{{ $i->JobTitle }}</td>
                                        <td>{{ $i->Description }}</td>
                                        <td>{{ $i->Positions }}</td>
                                        <td>{{ $i->Location }}</td>
                                        <td>{{ $i->AnnualSalary }}</td>
                                        <td>{{ $i->DeptId }}</td>
                                        <td>{{ $i->EmpId }}</td>
                                        <td>{{ $i->Active }}</td>
                                        <td>{{ $i->CreatedDate }}</td>
                                        <td>{{ $i->Created_By }}</td>
                                        <td>{{ $i->Remarks }}</td>
                                        <td>{{ $i->JobsId }}</td>
                                        <td>{{ $i->CloseDate }}</td>
                                        <td>
                                           
                                            <form action="{{route('addjob' , $i->id)}}" method="post">
                                                <a class="btn btn-primary" href="edit">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Delete</button>


                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
