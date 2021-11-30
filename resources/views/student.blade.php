<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bank Transition</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    {{--    <nav class="navbar navbar-dark bg-dark">--}}
    {{--        <nav class="navbar navbar-expand-lg navbar-light bg-light">--}}

    <a class="navbar-brand" href="{{ url('/welcomeUsers') }}">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/student')}}">Student <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/payment')}}">Payment <span class="sr-only">(current)</span></a>


            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Options
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/categories')}}">Categories</a>

                    <div class="dropdown-divider"></div>
                    {{--                        <a class="dropdown-item" href="#">Something else here</a>--}}
                </div>
            <li class="nav-item">
                <a class="dropdown-item" href="{{url('/product')}}">Products Purchase</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            {{--                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
            {{--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
            <button class="text-white bg-dark"><a href="{{url('/studentInformation')}}">Home  | </a></button>
            <button class="text-white bg-dark"><a href="{{url('/student')}}">My Students</a></button>






        </form>
    </div>
</nav>
<section style = "padding-top: 60px;">
    <div class ="container">
        <div class="row"></div>
        <div class = "col-md-12">

            <div class="card">
                <div class = "card-header">

                    <img src="https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/50/000000/external-student-female-profession-vitaliy-gorbachev-flat-vitaly-gorbachev.png"/>
                    <a href ="#" class="btn btn-success add_employee">Add Student</a>

                    <form action="" class = "col-6">
                        <div class = "form-group">

                            <input type="text" name = "" id = "" class="form-control" placeholder="Search by Name Or Email" >
                            <button class="btn btn-danger"> Search</button>

                        </div>

                    </form>
                </div>
                <div class="card-body">
                    <table id = "studentTable" class="table">
                        <thread>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Transfer Amount</th>
                                <th>Created Account</th>
                                <th>Actions</th>
                            </tr>
                        </thread>
                        <tbody>
                        @foreach($students as $student)
                            <tr id="sid{{$student->id}}">
                                <td>{{$student->firstname}}</td>
                                <td>{{$student->lastname}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->Transitionamount}}</td>
                                <td>{{$student->created_at}}</td>

                                <td>
                                    {{--                                        <a href ="#"class="btn btn-info" data-toggle="modal" data-target="#studentEditModal">Edit</a>--}}
                                    <a href ="#" onclick="editStudent({{$student->id}})" class="btn"><i class="fa fa-edit" style="font-size:30px;color:blue;"></i></a>
                                    <a onclick="deleteStudent({{$student->id}})" class="btn"><i class="fa fa-trash" style="font-size:30px;color:red;"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>

<!--Add Modal -->
<div class="modal fade" id="studentModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Records</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id = "studentForm" method="POST" action="{{route('student.add')}}" >
                    @csrf
                    <div class="form-group firstname">
                        <label for="firstname">First Name</label>
                        <input type="hidden" id="eid" name="id" value="">
                        <input type="text" class="form-control" id="firstname" name="firstname" value="" />
                    </div>
                    <div class="form-group lastname">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="" />
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone"  name="phone" value="" />
                    </div>
                    <div class="form-group">
                        <label for="Transitionamount">Transition Amount</label>
                        <input type="text" class="form-control" id="Transitionamount"  name="Transitionamount" />
                    </div>


                    <button type ="submit" class="btn btn-primary submit_btn" id="submit">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
<!--Edit Modal -->



<script type="text/javascript">
    $('.add_employee').on('click',function(){
        $('.modal-title').text('Add employee');
        $('.submit_btn').text('Save');
        $(".firstname").css("display", "block");
        $(".lastname").css("display", "block");
        $("#eid").val('');
        $("#firstname").val('');
        $("#lastname").val('');
        $("#email").val('');
        $("#phone").val('');
        $("#Transitionamount").val('');
        $("#studentModal").modal('show');
    })
    function editStudent(id) {
        $('.modal-title').text('Update employee');
        $('.submit_btn').text('Update');
        $(".firstname").css("display", "none");
        $(".lastname").css("display", "none");
        $.get('/student/' + id, function (student) {
            $("#eid").val(student.id);
            $("#firstname").val(student.firstname);
            $("#lastname").val(student.lastname);
            $("#email").val(student.email);
            $("#phone").val(student.phone);
            $("#Transitionamount").val(student.Transitionamount);
            $("#studentModal").modal('show');
        });
    }
    {{--$("#studentEditForm").submit(function (e){--}}
    {{--    e.preventDefault();--}}
    {{--    let id = $("#id").val();--}}
    {{--    let firstname = $("#firstname2").val();--}}
    {{--        let lastname = $("#lastname2").val();--}}
    {{--        let email = $("#email2").val();--}}
    {{--        let phone = $("#phone2").val();--}}
    {{--        $.ajax({--}}
    {{--            url:"{{route('student.update')}}",--}}
    {{--            type:"PUT",--}}
    {{--            data:{--}}
    {{--                id:id,--}}
    {{--                lastname: lastname,--}}
    {{--                    phone: phone,--}}
    {{--                    firstname: firstname,--}}
    {{--                    email: email,--}}
    {{--                Transitionamount:Transitionamount--}}
    {{--            },--}}
    {{--            success:function(response){--}}
    {{--           alert(student.id);--}}
    {{--                $('#sid'+response.id+'td:nth-child(1)').text(response.firstname);--}}
    {{--                $('#sid'+response.id+'td:nth-child(2)').text(response.lastname);--}}
    {{--                $('#sid'+response.id+'td:nth-child(3)').text(response.email);--}}
    {{--                $('#sid'+response.id+'td:nth-child(4)').text(response.phone);--}}
    {{--                $("#studentEditModal").modal('show');--}}
    {{--                $("#studentEditModal")[0].reset();--}}
    {{--            }--}}
    {{--        });--}}
    {{--});--}}
</script>


{{--<script>--}}

{{--    $("#submit").click(function(){--}}

{{--        let firstname = $("#firstname").val();--}}
{{--        let lastname = $("#lastname").val();--}}
{{--        let email = $("#email").val();--}}
{{--        let phone = $("#phone").val();--}}
{{--// alert(firstname);--}}

{{--        $.ajax({--}}
{{--            url: "{{route('student.add')}}",--}}
{{--            type:"POST",--}}
{{--            data:{--}}

{{--                lastname: lastname,--}}
{{--                phone: phone,--}}
{{--                firstname: firstname,--}}
{{--                email: email,--}}
{{--            },--}}

{{--            success: function(response){--}}

{{--                if(response){--}}
{{--                    $("#studentTable tbody").prepend('<tr><td>'+response.firstname +'</td><td>'+response.lastname +'</td><td>'+response.email +'</td><td>'+response.phone +'</td></tr>');--}}
{{--                    $("#studentForm")[0].reset();--}}
{{--                    $("studentModal").modal('hide');--}}
{{--                }--}}
{{--            }--}}


{{--        });--}}

{{--    });--}}



</script>

<script>
    function deleteStudent(id){
        if(confirm('Do you want to delete?')){
            $.ajax({
                url: '/student-delete/'+id,
                type:'DELETE',
                data:{id: id},
                headers: {
                    'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')
                },
                success:function (response){
                    $("#sid"+id).remove();
                }
            });
        }
    }
</script>
</body>
</html>
