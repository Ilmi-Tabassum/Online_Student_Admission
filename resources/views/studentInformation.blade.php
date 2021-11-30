<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <title>Welcome</title>


</head>
<body class="antialiased">



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">


    <a class="navbar-brand" href="{{ url('/welcomeUsers') }}">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            {{--                <li class="nav-item active">--}}
            {{--                    <a class="nav-link" href="{{url('/student')}}">Students <span class="sr-only">(current)</span></a>--}}
            {{--                </li>--}}

            <li class="nav-item">
                <a class="nav-link" href="{{url('/product')}}">Products Purchase<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/payment')}}">Payment <span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Options
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/categories')}}">Categories</a>
{{--                    <a class="dropdown-item" href="{{route('dashboard')}}">Contact</a>--}}
                    <div class="dropdown-divider"></div>
                    {{--                        <a class="dropdown-item" href="#">Something else here</a>--}}
                </div>

            <li class="nav-item">

                <a href ="#"class="btn btn-success" data-toggle="modal" data-target="#studentModal">Add new Student</a>


        </ul>
        <form class="form-inline my-2 my-lg-0">
            {{--                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
            {{--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
            <button class="text-white bg-dark"><a href="{{url('/')}}">Home  | </a></button>
            <button class="text-white bg-dark"><a href="{{url('/student')}}">My Students</a></button>

        </form>
    </div>
</nav>

<style>
    h1 {text-align: center;}
    p {text-align: center;}

</style>

<h1 style="font-size: 30px;font-weight: bolder;margin-left: -8px" class="p-3  bg-secondary text-white">My Students</h1>
<body>
<form action="{{url('/')}}/studentInformation" method ="post">

@csrf

<div class="modal fade" id="studentModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <p class="p-3 mb-2 bg-success text-white">Enter Personal Information</p>

            </div>


            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="student_id">Student ID * </label>
                            <input type="text" class="form-control" id="student_id" name="student_id" placeholder="Enter Student ID" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name"> Name *</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Student Name" required="">
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email_address">Email Address </label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <input type="text" class="form-control datepicker"  name="dateofbirth" placeholder="Enter Date of Birth"    id="datepicker" width="150" readonly='true'>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">

                            <label for="blood_group"> Blood Group </label>
                            <select class="form-control select2" name="blood_groups" id="blood_groups">
                                <option value="">Select Blood Group</option>
              <?php
                                                                                foreach ($blood_groups as $key => $value) {
                                                                                    echo "<option value='$value'>$value</option>";
                                                                                }
                                                                                ?>
                            </select>
                        </div>
                    </div>

                                <div class="form-group">
                                    <label for="">  Gender</label>
                                    <select class="form-control" name="gender" id="gender" required="">
                                        <option value=" ">Select Gender</option>

                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                        <option value="Others">Others</option>

                                        </select>
                                </div>
                            </div>



                <p class="p-3 mb-2 bg-info text-white">Contact Information</p>
                <div class="row">
                <div class="col-sm-4">
                <div class="form-group">
                    <label for=""> District: </label>
                <select onchange="changediv(this.options[this.selectedIndex].value)"  name="divission" class="form-control dive"  >
                                    <option value="" selected disabled>Select</option>
                                    @foreach($divission as $item)
                                        <option value="{{$item->id}}"> {{$item->title}}</option>
                                    @endforeach
                                </select>
                </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">

                        <label for="title">Select Thana:</label>

                        <select onchange="changeThana(this.options[this.selectedIndex].value)"  name="thana" class="form-control thana" id="th"  >
                            <option value="" selected disabled>Select</option>
                        </select>


                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="title">Select Upazila:</label>

                        <select  onchange="changeName(this.options[this.selectedIndex].value)" name="upazila" class="form-control upazila" id="upo">
                            <option value="" selected disabled>Select</option>

                        </select>
                    </div>
                </div>
                    <div class="col-sm-4">
                    <div class="form-group">
                        <label for="address">Address </label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                    </div>
                </div>

                </div>
            </div>
            <p class="p-3 mb-2 bg-danger text-white">Choose Subjects</p>
            <div class="row">
                <div class="col-sm-4">

                    <form>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th>Subjects</th>
                                <th>Marks</th>

                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>
                                    <input type="checkbox" name="prodid[]" class="prod-id" value="Mobile">
                                </td>
                                <td>
                                    Science:
                                    <input type="hidden" name="prodname[]" class="prod-name" value="Mobile">
                                </td>
                                <td>
                                    <input type="number" name="prod_price[]" class="prod-price">
                                </td>
                                <td>
                                    <input type="number" name="prod_qty[]" class="prod-qty">
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <input type="checkbox" name="prodid[]" class="prod-id" value="LCD">
                                </td>
                                <td>

                                    Math:
                                    <input type="hidden" name="prodname[]" class="prod-name" value="LCD">
                                </td>
                                <td>
                                    <input type="number" name="prod_price[]" class="prod-price">
                                </td>
                                <td>
                                    <input type="number" name="prod_qty[]" class="prod-qty">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="prodid[]" class="prod-id" value="Games">
                                </td>
                                <td>
                                    Laptops:
                                    <input type="hidden" name="prodname[]" class="prod-name" value="Games">
                                </td>
                                <td>
                                    <input type="number" name="prod_price[]" class="prod-price">
                                </td>
                                <td>
                                    <input type="number" name="prod_qty[]" class="prod-qty">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="card-footer">
                            <div class="center">
                            <input type = "submit" value="submit" class="btn save_btn">
                        </div>
                        </div>
                    </form>

            </div>


                    </div>
                    </div>
                </div>

                </form>

            </div>

        </div>
    </div>

</div>

</div>


<script>
    $('#datepicker').datepicker
    ({format: 'yy-mm-dd'});




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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function (){
        $('.save_btn').on('click',function (e)

        {
            e.preventDefault();
            const prodid= [];
            const prodname=[];
            const prod_price=[];
            const prod_qty=[];

            $('.prod-id').each(function (){
                if($(this).is(":checked")){
                    prodid.push($(this).val());
                }
            });

            $('input[name^="prodname"]').each(function (){
                prodname.push($(this).val());
            });
            $('input[name^="prod_price"]').each(function (){
                prod_price.push($(this).val());
            });
            $('input[name^="prod_qty"]').each(function (){
                prod_qty.push($(this).val());
            });

            $.ajax({
                url: '{{route('save_data')}}',
                type:'POST',
                data:{
                    "_token": "{{csrf_token()}}",
                    prodid:prodid,
                    prodname:prodname,
                    prod_price:prod_price,
                    prod_qty:prod_qty
                },
                success:function (response){
                    if (response.success){
                        $('input[type="checkbox"]').prop('checked',false);
                        $('[name="prod_price[]"]').val('');
                        $('[name="prod_qty[]"]').val('');
                    } else {
                        console.log('error');
                    }
                },
                error:function (reponse){
                    console.log('error');
                }
            });
        });



</script>


</script>

</body>

</body>
</html>

</html>
