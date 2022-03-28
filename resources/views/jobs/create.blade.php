@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-10 ">
        <div >
            <h2>Create New Job</h2>
        </div>
        <div >
            <a class="btn btn-primary" href="{{ route('jobs.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="flex justify-center">
   
<form action="{{ route('jobs.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            
        
        
            <div class="mt-4">
                <x-label for="JobTitle" :value="__('JobTitle')" />
        
                <x-input id="JobTitle" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobTitle" :value="old('JobTitle')" required />
            </div>

            <div class="mt-4">
                <x-label for="JobRole" :value="__('JobRole')" />
        
                <x-input id="JobRole" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobRole" :value="old('JobRole')" required />
            </div>

            <div>
                <x-label for="Description" :value="__('Description')" />
        
                <x-input id="Description" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Description" :value="old('Description')" required autofocus />
            </div>
        
        
            <div class="mt-4">
                <x-label for="Positions" :value="__('Positions')" />
        
                <x-input id="Positions" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="Positions" :value="old('Positions')" required />
            </div>
            <div>
                <x-label for="Location" :value="__('Location')" />
        
                <x-input id="Location" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Location" :value="old('Location')" required autofocus />
            </div>
        
        
            <div class="mt-4">
                <x-label for="AnnualSalary" :value="__('AnnualSalary')" />
        
                <x-input id="AnnualSalary" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="AnnualSalary" :value="old('AnnualSalary')" required />
            </div>
            <div>
                <x-label for="Dept_id" :value="__('Dept_id')" />
        
                <x-input id="Dept_id" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="Dept_id" :value="old('Dept_id')" required autofocus />
            </div>
        
        
         
            <div>
                <x-label for="Active" :value="__('Active')" />
        
                <x-input id="Active" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="Active" :value="old('Active')" required autofocus />
            </div>
        
        
            <div class="mt-4">
                <x-label for="CreatedDate" :value="__('CreatedDate')" />
        
                <x-input id="CreatedDate" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="date" name="CreatedDate" :value="old('CreatedDate')" required />
            </div>
            <div>
                <x-label for="CreatedBy" :value="__('CreatedBy')" />
        
                <x-input id="CreatedBy" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="CreatedBy" :value="old('CreatedBy')" required autofocus />
            </div>
        
            <div>
                <x-label for="Apply_Link" :value="__('ApplyLink')" />
        
                <x-input id="ApplyLink" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="ApplyLink" :value="old('ApplyLink')" required autofocus />
            </div>
            
        
        
            <div class="mt-4">
                <x-label for="CloseDate" :value="__('CloseDate')" />
        
                <x-input id="CloseDate" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="date" name="CloseDate" :value="old('CloseDate')" required />
            </div>
        
        
        
            <div class="flex items-center justify-end mt-4">
               
        
               
              <input type="submit" value="Save" class="btn btn-success active" style="width: 500px; "></br>
        </div>
    </div>
   
</form>
</div>

</div>
</div>

@endsection