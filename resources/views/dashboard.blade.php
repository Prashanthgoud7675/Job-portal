
@extends('layouts.app')


@section('content')


      <div class="flex justify-center">
          <div class="w-4/12 bg-white p-6 m-5 rounded-lg">
            

              @foreach ($data as $i)

              <h1> {{$i->start}}-{{$i->end}}</h1>

            

              <h1> {{$i->title}} </h1>

                
              @endforeach


      </div>
        </div>


@endsection
