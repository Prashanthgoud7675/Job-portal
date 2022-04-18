@extends('layouts.app')





@section('content')


    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>jQuery UI Draggable - Default functionality-codecheef.org</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <style>
            .list-group {
                width: 225px;
                height: 150px;
                padding: 0.5em;
            }

        </style>
    </head>

    <body>
        <div class="main_container" style=" width: (100% - 70px);
    margin-left: %; ">
            <br>


            <div class="top">
                <div class="container"
                    style="  width: 0px; height: 5vh; display: flex; margin-left:0%;margin-right:15%;margin-top:2%">
                    <div class="status" id="no_status">
                        <div style="width: 13rem;">

                            <h3 style="font-size:20px;">Candidates</h3>

                        </div>

                    </div>

                    <div class="status">
                        <div style="width: 13rem;">

                            <h3 style="font-size:20px;">Job Details</h3>


                        </div>
                    </div>
                    <div class="status">
                        <div style="width: 13rem;">
                            <h3 style="font-size:20px;">Time Line & Notes</h3>

                        </div>
                    </div>
                    <div class="status">
                        <div style="width: 13rem;">

                            <h3 style="font-size:20px;">
                                Hiring Team </h3>

                        </div>
                    </div>
                </div>
            </div>

        
        <div class="container"
            style="  width: 0px; height: 1vh; display: flex; margin-left:0%;margin-right:15%;margin-top:3%">
            <div class="status" id="no_status">

                <div style="width: 13rem;">

                    <h3 style="font-size:20px;margin-top:-4%">
                        Total Candidates: <sapn style="background-color: #b34d4d; padding-left:7%;padding-right:7%">
                          {{$count}}  </span> </h3>
                </div>
            </div>
        </div>

        <br>

        



        <div style="  width: 1000px; height: 90vh; display: flex; margin-left:0%;margin-top:5%">
            <div class="status" id="no_status">
                <div class="card" style="width: 14rem; border-top: 8px solid #0080ff">

                    <div style="display: flex">
                        <h5 style="margin-left:5%"> New Applied</h5>

                    </div>
                </div>
                <div>

                    <ul class="list-group connectedSortable" id="padding-item-drop">
                        @if (!empty($panddingItem) && $panddingItem->count())
                            @foreach ($panddingItem as $key => $value)
                                <li class="list-group-item " item-id="{{ $value->id }}">
                                    <div>
                                        <div style="display:flex">
                                            <img src="{{ $value->Profile_url }}"
                                                style="margin-top: %;margin-left:%; border-radius:50%;height:50px; width:50px">

                                            <p style="margin-left:10%;margin-bottom:%:;font-size:16px">
                                                {{ $value->First_Name }} {{ $value->Last_Name }}</p>
                                        </div>

                                        <div style="display:flex;margin-top:15%">


                                            <div class="overlay"
                                                style="position: relative; margin-left:-5%; color:#F4D03F;font-size:13px">

                                                @while ($value->Rating > 0)
                                                    @if ($value->Rating > 0.5)
                                                        <i class="fas fa-star"></i>
                                                    @else
                                                        <i class="fas fa-star-half"></i>
                                                    @endif
                                                    @php $value->Rating--; @endphp
                                                @endwhile

                                            </div>
                                            <h4 style="margin-left:12%;margin-top:2%;font-size:13px">5 years Exp</h4>
                                        </div>
                                    </div>
                                </li>
                                <br>
                            @endforeach
                        @endif
                    </ul>

                </div>
            </div>
            <div class="status" style="margin-left:3%">
                <div class="card" style="width: 14rem;border-top: 8px solid #008B8B">

                    <div style="display: flex">
                        <h5 style="margin-left:5%"> Screening</h5>

                    </div>
                </div>
                <div>

                    <ul class="list-group  connectedSortable" id="complete-item-drop">
                        @if (!empty($completeItem) && $completeItem->count())
                            @foreach ($completeItem as $key => $value)
                                <li class="list-group-item " item-id="{{ $value->id }}">
                                    <div>
                                        <div style="display:flex">
                                            <img src="{{ $value->Profile_url }}"
                                                style=" border-radius:50%;height:50px; width:50px">

                                            <p style="margin-left:10%;margin-bottom:%:;font-size:16px">
                                                {{ $value->First_Name }} {{ $value->Last_Name }}</p>
                                        </div>

                                        <div style="display:flex;margin-top:15%">


                                            <div class="overlay"
                                                style="position: relative; margin-left:-5%; color:#F4D03F;font-size:13px">

                                                @while ($value->Rating > 0)
                                                    @if ($value->Rating > 0.5)
                                                        <i class="fas fa-star"></i>
                                                    @else
                                                        <i class="fas fa-star-half"></i>
                                                    @endif
                                                    @php $value->Rating--; @endphp
                                                @endwhile

                                            </div>
                                            <h4 style="margin-left:12%;margin-top:2%;font-size:13px">5 years Exp</h4>
                                        </div>
                                    </div>
                                </li>
                                <br>
                            @endforeach
                        @endif
                    </ul>

                </div>
            </div>

            <div class="status" style="margin-left:3%">
                <div class="card" style="width: 14rem;border-top: 8px solid #b34d4d">

                    <div style="display: flex">
                        <h5 style="margin-left:5%"> Interview </h5>

                    </div>
                </div>

                <div>

                    <ul class="list-group  connectedSortable" id="good-item-drop">
                        @if (!empty($goodItem) && $goodItem->count())
                            @foreach ($goodItem as $key => $value)
                                <li class="list-group-item " item-id="{{ $value->id }}">
                                    <div>
                                        <div style="display:flex">
                                            <img src="{{ $value->Profile_url }}"
                                                style="margin-top: %;margin-left:%; border-radius:50%;height:50px; width:50px">

                                            <p style="margin-left:10%;margin-bottom:-35%:;font-size:16px">
                                                {{ $value->First_Name }} {{ $value->Last_Name }}</p>
                                        </div>

                                        <div style="display:flex;margin-top:15%">


                                            <div class="overlay"
                                                style="position: relative; margin-left:-5%; color:#F4D03F;font-size:13px">

                                                @while ($value->Rating > 0)
                                                    @if ($value->Rating > 0.5)
                                                        <i class="fas fa-star"></i>
                                                    @else
                                                        <i class="fas fa-star-half"></i>
                                                    @endif
                                                    @php $value->Rating--; @endphp
                                                @endwhile

                                            </div>
                                            <h4 style="margin-left:12%;margin-top:2%;font-size:13px">5 years Exp</h4>
                                        </div>
                                    </div>
                                </li>
                                <br>
                            @endforeach
                        @endif
                    </ul>

                </div>
            </div>



            <div class="status" style="margin-left:3%">
                <div class="card" style="width: 14rem;border-top: 8px solid #00ffff">

                    <div style="display: flex">
                        <h5 style="margin-left:5%"> Hired </h5>

                    </div>
                </div>

                <div>

                    <ul class="list-group  connectedSortable" id="candidate-item-drop">
                        @if (!empty($candidate) && $candidate->count())
                            @foreach ($candidate as $key => $value)
                                <li class="list-group-item " item-id="{{ $value->id }}">
                                    <div>
                                        <div style="display:flex">
                                            <img src="{{ $value->Profile_url }}"
                                                style="margin-top: %;margin-left:%; border-radius:50%;height:50px; width:50px">

                                            <p style="margin-left:10%;margin-bottom:-35%:;font-size:16px">
                                                {{ $value->First_Name }} {{ $value->Last_Name }}</p>
                                        </div>


                                        <div style="display:flex;margin-top:15%">


                                            <div class="overlay"
                                                style="position: relative; margin-left:-5%; color:#F4D03F;font-size:13px">

                                                @while ($value->Rating > 0)
                                                    @if ($value->Rating > 0.5)
                                                        <i class="fas fa-star"></i>
                                                    @else
                                                        <i class="fas fa-star-half"></i>
                                                    @endif
                                                    @php $value->Rating--; @endphp
                                                @endwhile

                                            </div>
                                            <h4 style="margin-left:12%;margin-top:2%;font-size:13px">5 years Exp</h4>
                                        </div>
                                    </div>
                                </li>
                                <br>
                            @endforeach
                        @endif
                    </ul>

                </div>


            </div>
        </div>

        <div id="overlay"></div>

        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
                $("#padding-item-drop, #complete-item-drop, #good-item-drop,#candidate-item-drop").sortable({
                    connectWith: ".connectedSortable",
                    opacity: 0.5,
                });
                $(".connectedSortable").on("sortupdate", function(event, ui) {
                    var NewApplied = [];
                    var Screening = [];
                    var Interview = [];
                    var Hired = [];
                    $("#padding-item-drop li").each(function(index) {
                        if ($(this).attr('item-id')) {
                            NewApplied[index] = $(this).attr('item-id');
                        }
                    });
                    $("#complete-item-drop li").each(function(index) {
                        Screening[index] = $(this).attr('item-id');
                    });
                    $("#good-item-drop li").each(function(index) {
                        Interview[index] = $(this).attr('item-id');
                    });
                    $("#candidate-item-drop li").each(function(index) {
                        Hired[index] = $(this).attr('item-id');
                    });
                    $.ajax({
                        url: "{{ route('update.items') }}",
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            NewApplied: NewApplied,
                            Screening: Screening,
                            Interview: Interview,
                            Hired: Hired
                        },
                        success: function(data) {
                            console.log('success');
                        }
                    });

                });
            });
        </script>

    </body>

    </html>

@endsection
