@extends('layouts.app')


@section('content')
<br>


    <div class="row">
        <div class="col-md-2" >
        </div>
        <div class="col-md-10">

            <div style="display: flex;">
                <h1 style="font-size: 27px; font-weight:600">{{$count}}  Employees</h1> 

                <div>

               <a href=""> <i class="fa fa-bars" style="margin-top:5px; margin-left:900px; font-size:25px; "></i> </a>
                </div>
           </div>

           <br>


   <div class="product" style="display: flex; flex-direction:row;">

    
      
       @foreach ($data as $i)
   
           

        <div class="card" style="width: 17rem; margin:10px; background-color:whitesmoke; border:none; ">

            <div style="display: flex; margin-left:65%; margin-top:3%">
                <h3 >{{$i->Status}} </h3> 

              <a href=""> <i class="fa fa-ellipsis-h" style="font-size: 25px;  margin-left:10px"></i> </a>  
            </div>

          <br>
          
              <img src="{{$i->Profile_url}}" alt="img1" style="height: 100px; width:100px; border-radius:50%; margin-left:32%; margin-bottom:5%">
          

           <b> <a href="{{route('employe.show' , $i->id)}}"> <h3 class="text-center"> {{$i->Employee_Name}} </h3> </a> </b>
           <h3 class="text-muted text-center">{{$i->Position}}</h3>

           <br>

           <div style="background-color: #E0F2F7; margin:3%">

           <div style="display: flex;margin:5%">
               <h3> Department <br> {{$i->Team}}</h3>
               <h3 style="margin-left: 25%; margin-bottom:3%">Date Hired <br> {{$i->Date}}</h3>
           </div>
           

           <hr>
           
           

           <h3 style="margin-top: 5%; margin-left:7%; margin-bottom:5%"><i class="	fa fa-envelope">  {{ $i->Email }}</i> <br> <i class="fa fa-phone">  {{$i->Mobile_Num}}</i></h3>

           </div>
           
              
            </div>
       @endforeach
       
      </div>
    </div>

      
   </div>

           
@endsection