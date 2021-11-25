@extends('layouts.master')
@section('content')
<div class="py-12">

        <h1>Enter Emoloyee Information</h1>
        <form action="{{route('add')}}" method = "POST">
            @csrf
            <label for="Name">Enter Name:</label>
            <input type="text" name="name" placeholder="Enter name"><br> <br>
            <label for="Email">Enter Email:</label>
            <input type="text" name="email" placeholder="Enter email"><br> <br>
            <label for="Employee">Enter Employee:</label>
            <input type="text" name="emp" placeholder="Enter employee"><br> <br>

            <label for="Designation">Choose a Designation:</label>
            <select name="designation" id="Designation">
                <optgroup label="Sales">
                    <option value="Manager">Manager</option>
                    <option value="Director">Director</option>
                </optgroup>
                <optgroup label="Hr">
                    <option value="HR">HR</option>
                    <option value="Intern">Intern</option>
                </optgroup>
                <optgroup label="Engineer">
                    <option value="Software Engineer">Software Engineer</option>
                    <option value="Junior Software Engineer">Junior Software Engineer</option>
                    <option value="Intern">Intern</option>
                </optgroup>
            </select>


            <div class="container">
                <div class="panel panel-default">
                    <br>
                    <br>
                    <br>
                    <div class="panel-heading">Select District:</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <select onchange="changediv(this.options[this.selectedIndex].value)"  name="divission" class="form-control dive" style="width:350px" >
                                <option value="" selected disabled>Select</option>
                                @foreach($divission as $item)
                                    <option value="{{$item->id}}"> {{$item->title}}</option>
                                @endforeach
                            </select>

                        </div>


                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="title">Select Thana:</label>

                        <select onchange="changeThana(this.options[this.selectedIndex].value)"  name="thana" class="form-control thana" id="th" style="width:350px" >
                            <option value="" selected disabled>Select</option>
{{--                                                    @foreach($thana as $item)--}}
{{--                                                        <option value="{{$item->id}}"> {{$item->title}}</option>--}}
{{--                                                    @endforeach--}}


                        </select>


                    </div>

                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="title">Select Upazila:</label>

                        <select  onchange="changeName(this.options[this.selectedIndex].value)" name="upazila" class="form-control upazila" id="upo" style="width:350px" >
                            <option value="" selected disabled>Select</option>

                        </select>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="title">Select Name:</label>

                        <select  name="name" class="form-control name" id="names" style="width:350px" >
                            <option value="" selected disabled>Select</option>

                        </select>
                    </div>
                </div>
            </div>


            <button type="submit">Add Member</button>




        </form>

        <div class = "row">
            <h1>Emoloyee List</h1>
            <table class="table">
                <table border="1">
                    <thead>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>Email</th>
                        <th>Employee</th>
                        <th>Designation</th>
                        <th>Divission</th>
                        <th>District</th>
                        <th>Thana</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $table_option = "";
                    foreach ($test as $key => $value) {
                        $table_option .= "<tr>";
                        $table_option .= "<td>$value->id</td>";
                        $table_option .= "<td>$value->name</td>";
                        $table_option .= "<td>$value->email</td>";
                        $table_option .= "<td>$value->emp</td>";
                        $table_option .= "<td>$value->designation</td>";
                        $table_option .= "<td>$value->divission_id</td>";
                        $table_option .= "<td>$value->thana_id</td>";
                        $table_option .= "<td>$value->upazila_id</td>";
//
                        $table_option .= "<td><a href='". route('edit', $value->id) ."'>Edit</a>
                     <a href='". route('delete', $value->id) ."'>Delete</a></td>";



                        $table_option .= "</tr>";
                    }

                    echo $table_option;

                    ?>


                    </tbody>

</table>
            </table>

        </div>

    </div>
</div>
<div class="container">
    <div class="vertical-center">

        {{--        <button onclick="bgChange()">Change color</button>--}}
        <script>
            function changediv(id){
                $.ajax({
                    url: "{{URL::TO('thana')}}"+"/"+id,
                    type: "get",
                    data: {},
                    success: function(results){
                        // alert(result);
                        //console.log(result);
                        results.forEach(function(result) {
                            document.getElementById("th").innerHTML += "<option value="+result.id+">" + result.title + "</option>"
                            /*
                                                $(".thana").html( <option value=result.id> result.title</option>);
                            */
                            console.log(result.title);
                        });
                        // $(".thana").html(result);
                    }
                });
            }
            ///////////////
            function changeThana(id){
                $.ajax({
                    url: "{{URL::TO('upazila')}}"+"/"+id,
                    type: "get",
                    data: {},
                    success: function(result1s){
                        // alert(result);
                        //console.log(result);
                        result1s.forEach(function(resulting) {
                            //alert(1);
                            document.getElementById("upo").innerHTML +="<option value="+resulting.id+">"  + resulting.upazila_name + "</option>"
                            /*
                                                $(".thana").html( <option value=result.id> result.title</option>);
                            */
                            console.log(resulting.upazila_name);
                        });
                        // $(".thana").html(result);
                    }
                });
            }
            function changeName(id){
                $.ajax({
                    url: "{{URL::TO('name')}}"+"/"+id,
                    type: "get",
                    data: {},
                    success: function(result12s){
                        // alert(result);
                        //console.log(result);
                        result12s.forEach(function(resultings) {
                            //alert(1);
                            document.getElementById("names").innerHTML += "<option value="+resultings.id+">"  + resultings.employee + "</option>"
                            /*
                                                $(".thana").html( <option value=result.id> result.title</option>);
                            */
                            console.log(resultings.employee);
                        });
                        // $(".thana").html(result);
                    }
                });
            }

            function random(number) {
                return Math.floor(Math.random()*number);
            }

            function bgChange() {
                const rndCol = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';
                document.body.style.backgroundColor = rndCol;


                $(function () {
                    var divission = $('select[name="divission"]'),
                        thana = $('select[name="thana"]');

                    divission.change(function () {
                        var id = $(this).val();


                    })
                })
            }



        </script>
    </div>
</div>
@endsection
</body>
</html>
