@extends('layouts.app')





@section('content')
    <div class="top">
        <div class="container"
            style="  width: 0px; height: 5vh; display: flex; margin-left:20%;margin-right:15%;margin-top:2%">
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

    </div>
    <div class="container"
        style="  width: 0px; height: 1vh; display: flex; margin-left:20%;margin-right:15%;margin-top:3%">
        <div class="status" id="no_status">

            <div style="width: 13rem;">

                <h3 style="font-size:20px;margin-top:-4%">
                    Total Candidates: <sapn style="background-color: #b34d4d; padding-left:7%;padding-right:7%">
                        {{ $count }} </span> </h3>
            </div>
        </div>
    </div>


    <div class="modal" id="todo_form">
        <div class="header">
            <div class="title">Add Todo</div>
            <button class="btn close-modal">&times;</button>
        </div>
        <div class="body">
            <input type="text" id="todo_input" />
            <input type="submit" value="Add Todo" id="todo_submit" />
        </div>
    </div>

    <div class="todo-container" style="  width: 1000px; height: 90vh; display: flex; margin-left:20%;margin-top:5%">
        <div class="status" id="no_status">
            <div class="card" style="width: 15rem;">
                <hr style="height:7px;background-color:#0080ff">
                <h3 style="margin-left:5%;margin-top:3%;margin-bottom:3%"> New Applied</h3>
                <h3 style="margin-left:80%;margin-top:-9%;margin-bottom:3%">{{ $count }}</h3>
            </div>
            <div class="todo" draggable="true"><br>
                @foreach ($data as $i)
                    <div class="card" style="height:140px;">

                        <img src={{ $i->Profile_url }} style="margin-top: 7%;margin-left:5%" class="rounded-circle"
                            height="40px" width="40px">

                        <h1 style="margin-left:35%;margin-top:-18%;">{{ $i->First_Name }} {{ $i->Last_Name }}</h1>
                        <h4 style="margin-left:5%;margin-top:15%">5 years Exp</h4>
                        <p style="padding-bottom:-7%">


                        <div class="overlay" style="position: relative; margin-left:5%; color:#F4D03F;">

                            @while ($i->Rating > 0)
                                @if ($i->Rating > 0.5)
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="fas fa-star-half"></i>
                                @endif
                                @php $i->Rating--; @endphp
                            @endwhile

                        </div>
                        </p>

                        <span class="close">&times;</span>






                    </div>
                    <br>
                @endforeach


            </div>
        </div>
        <div class="status" style="margin-left:3%">
            <div class="card" style="width: 15rem;">
                <hr style="height:7px;background-color:#008B8B">
                <h3 style="margin-left:5%;margin-top:3%;margin-bottom:3%"> Screening</h3>
                <h3 style="margin-left:80%;margin-top:-9%;margin-bottom:3%"> 0</h3>


            </div>




        </div>
        <div class="status" style="margin-left:3%">
            <div class="card" style="width: 15rem;">
                <hr style="height:7px;background-color:#b34d4d">
                <h3 style="margin-left:5%;margin-top:3%;margin-bottom:3%"> Interviews</h3>
                <h3 style="margin-left:80%;margin-top:-9%;margin-bottom:3%"> 0</h3>
            </div>
        </div>
        <div class="status" style="margin-left:3%">
            <div class="card" style="width: 15rem;">
                <hr style="height:7px;background-color:#00ffff">
                <h3 style="margin-left:5%;margin-top:3%;margin-bottom:3%"> Hired</h3>
                <h3 style="margin-left:80%;margin-top:-9%;margin-bottom:3%"> 0</h3>
            </div>
        </div>
    </div>

    <div id="overlay"></div>



    <script>
        const todos = document.querySelectorAll(".todo");
        const all_status = document.querySelectorAll(".status");
        let draggableTodo = null;

        todos.forEach((todo) => {
            todo.addEventListener("dragstart", dragStart);
            todo.addEventListener("dragend", dragEnd);
        });

        function dragStart() {
            draggableTodo = this;
            setTimeout(() => {
                this.style.display = "none";
            }, 0);
            console.log("dragStart");
        }

        function dragEnd() {
            draggableTodo = null;
            setTimeout(() => {
                this.style.display = "block";
            }, 0);
            console.log("dragEnd");
        }

        all_status.forEach((status) => {
            status.addEventListener("dragover", dragOver);
            status.addEventListener("dragenter", dragEnter);
            status.addEventListener("dragleave", dragLeave);
            status.addEventListener("drop", dragDrop);
        });

        function dragOver(e) {
            e.preventDefault();
            console.log("dragOver");
        }

        function dragEnter() {
            this.style.border = "1px dashed #ccc";
            console.log("dragEnter");
        }

        function dragLeave() {
            this.style.border = "none";
            console.log("dragLeave");
        }

        function dragDrop() {
            this.style.border = "none";
            this.appendChild(draggableTodo);
            console.log("dropped");
        }
    </script>
@endsection
