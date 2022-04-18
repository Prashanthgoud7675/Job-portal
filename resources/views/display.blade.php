@extends('layouts.app')

@section('content')

<div class="main_container" style=" width: (100% - 70px);
margin-left: %; ">


<div class="top">
    <div 
        style="  width: 0px; height: 5vh; display: flex; margin-left:0%;margin-right:0%;margin-top:5%">
        <div class="status" id="no_status">
            <div style="width: 13rem;">

                <h3 style="font-size:25px;"> {{$count}} Active Jobs</h3>
                
            </div>
        </div>     

        <div class="status">
            <div style="width: 13rem;">
                <select style="font-size:20px;">
                    <option>Creation Date <i class="fa fa-angle-down" style="font-size:30px;margin-bottom:-5%"></i>
                    </option>
                </select>
            </div>
        </div>
        <div class="status">
            <div style="width: 13rem;">
                <select style="font-size:20px;">
                    <option>
                        <h3 style="font-size:20px;margin-top:-2%"> Status <i class="fa fa-angle-down"
                                style="font-size:30px;margin-top:1%"></i></h3>
                    </option>
                </select>
            </div>
        </div>
        <div class="status">
            <div style="width: 13rem;">

                <h3 style="font-size:20px;margin-top:-4%"><button type="submit"
                        style="font-size:30px;margin-right:5%;"><a href="jobs"><i class="fa fa-plus"
                                style="background-color:#000080;padding:8px;border-radius:50%;color:#F7DC6F"></i>
                        </a></button>
                    Add Job </h3>

            </div>
        </div>
    </div>
</div>
    
   
    <br>
    <br>

    <div class="row">
        
        <div class="col-md-12">
   <div class="product" style="display: flex; flex-direction:row;">
      
       @foreach ($data as $i)
   
           

        <div class="card" style="width: 13rem;border-radius: 15px;margin:10px; ">
            <div class="card-header" style="background-color:#BC8F8F;height:25px">
                <h5 style="float:right;padding-top:-4%">{{ $i->job_id }}</h5>
            </div>

            <h2 style="margin-left:3%;padding-top:5%;font-size:17px;font-weight:700"> <a
                    href="{{url('applicant' )}}"><b>{{ $i->JobTitle }}</b> </a></h2>

            <h5 style="margin-left:3%;padding-bottom:30%">{{ $i->JobRole }}</h5>
            <div class="vl" style="border-left: 3px solid green;margin-bottom:-35%;margin-left:10%; height: 70px">
            </div>


            <h1 style="margin-left:15%;font-size:50px;boarder-left:2px;"> <b>{{ $i->Positions }}</b> </h1>
            <h2 style="margin-left:17%;"> Total</h2>

            <h1 style="margin-left:65%;font-size:50px;margin-top:-38%"> <b>{{ $i->Active }}</b></ </h1>
                <h2 style="margin-left:64%;padding-bottom:20%"> New</h2>
                <div class="vl" style="border-left: 3px solid green;margin-left:55%; margin-top:-58%; height: 70px">
                </div>

                <div style="padding-bottom:2%; display:flex">
                    <button type="submit" style="margin-top:10%;padding-left:5%"><i class="fa fa-plus"
                            style="background-color:#F7DC6F;padding:8px;border-radius:10px"></i> </button>
                    <h5 style="margin-top: 13%; margin-left:3%"> Add New</h5>

                    
                    <button style="margin-left:20%;margin-top:12%"><a href="{{route('jobs.show', $i->id)}}">
                            <h5> Details <h5>
                        </a></button>

                        

                </div>
              <br> 
            </div>
       @endforeach
       
      </div>
    </div>

      
   </div>
</div>

           
@endsection
