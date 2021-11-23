<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Bank Transition</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <title>Welcome</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">


@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
{{--            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif


{{--<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">--}}
{{--    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">--}}

{{--    </div>--}}
{{--    <h1>Welcome Page</h1>--}}
{{--    <a href="{{url('/student')}}">Employees</a> |--}}
{{--    <a href="{{url('/payment')}}">Payment</a>|--}}
{{--    <a href="{{url('/helper')}}">Categories</a> |--}}
{{--    <a href="{{route('dashboard')}}">Contact</a>--}}

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
{{--    <nav class="navbar navbar-dark bg-dark">--}}
{{--        <nav class="navbar navbar-expand-lg navbar-light bg-light">--}}

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
                    <a class="nav-link" href="{{url('/payment')}}">Payment <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Options
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/categories')}}">Categories</a>
                        <a class="dropdown-item" href="{{route('dashboard')}}">Contact</a>
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
    /*div {text-align: center;}*/
</style>


{{--    <div id="page-content" style="margin-top: 20px;margin-left: 20px">--}}
{{--        <section class="content-header" style="margin-right: 1%;height: 50px">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row mb-2">--}}
{{--                    <div class="col-sm-6">--}}
                        <h1 style="font-size: 30px;font-weight: bolder;margin-left: -8px" class="p-3  bg-secondary text-white">My Students</h1>
<body>



{{--                    </div>--}}
{{--                    <div class="col-sm-6">--}}


{{--                    </div>--}}

{{--        </section>--}}



                    @csrf
                    <!-- general form elements -->
<div class="modal fade" id="studentModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
        <p class="p-3 mb-2 bg-success text-white">Enter Personal Information</p>
{{--                        <div class="card card-danger mb-0">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title">Enter Personal Information</h3>--}}
                            </div>
                            <!-- /.card-header -->
{{--                             form start--}}

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

{{--                                    <div class="col-sm-4">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="name_bn">Bangla Name</label>--}}
{{--                                            <input type="text" class="form-control" id="name_bn" name="name_bn" placeholder="Enter Student Bangla Name">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="mobile_number">Mobile Number *</label>
                                            <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter Mobile Number" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="email_address">Email Address </label>
                                            <input type="text" class="form-control" id="email_address" name="email_address" placeholder="Enter Email Address">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="date_of_birth">Date of Birth</label>
                                            <input type="text" class="form-control datepicker"  name="date_of_birth" placeholder="Enter Date of Birth"    id="datepicker" width="150" readonly='true'>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">

                                            <label for="blood_group"> Blood Group </label>
                                            <select class="form-control select2" name="blood_group" id="blood_group">
                                                <option value="">Select Blood Group</option>
{{--<!--                                                --><?php--}}
{{--//                                                foreach ($blood_groups as $key => $value) {--}}
{{--//                                                    echo "<option value='$value'>$value</option>";--}}
{{--//                                                }--}}
{{--                                                ?>--}}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="gender"> Gender *</label>
                                            <select class="form-control select2" name="gender" id="gender" required="">
                                                <option value="">Select Gender</option>
{{--<!--                            --}}
{{--//                                                foreach ($gender as $key => $value) {--}}
{{--//                                                    echo "<option value='$value'>$value</option>";--}}
{{--//                                                }--}}
{{--//                                                ?>--}}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="father_name">Father Name *</label>
                                            <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Enter Father Name" required="">
                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="mother_name">Mother Name *</label>
                                            <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Enter Mother Name" required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="father_nid">Father NID</label>
                                            <input type="text" class="form-control" id="father_nid" name="father_nid" placeholder="Enter Father NID">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="mother_nid">Mother NID</label>
                                            <input type="text" class="form-control" id="mother_nid" name="mother_nid" placeholder="Enter Mother NID">
                                        </div>
                                    </div>

{{--                                    <div class="col-sm-4">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="guardian_name">Guardian Name</label>--}}
{{--                                            <input type="text" class="form-control" id="guardian_name" name="guardian_name" placeholder="Enter Guardian Name">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-sm-4">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="guardian_contact_no">Guardian Contact No</label>--}}
{{--                                            <input type="text" class="form-control" id="guardian_contact_no" name="guardian_contact_no" placeholder="Enter Guardian Contact No">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-sm-4">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="relation_with_student">Relation with Student</label>--}}
{{--                                            <input type="text" class="form-control" id="relation_with_student" name="relation_with_student" placeholder="Enter relation with student">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                </div>





 <p class="p-3 mb-2 bg-info text-white">Contact Information</p>
{{--                        <div class="card card-danger mb-0">--}}
{{--                            <div class="card-header">--}}
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="present_division_id"> Present Division *</label>
                                            <select class="form-control select2" name="present_division_id" id="present_division_id" required="">
                                                <option value="0">Select Division</option>
<!--                                                --><?php
//                                                foreach ($divisions as $key => $value) {
//                                                    echo "<option value='$value[id]'>$value[division_name]</option>";
//                                                }
//                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="present_district_id"> Present District *</label>
                                            <select class="form-control select2" name="present_district_id" id="present_district_id" required="">
                                                <option value="0">Select District</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="present_post_id"> Present Post *</label>
                                            <select class="form-control select2" name="present_post_id" id="present_post_id" required="">
                                                <option value="0">Select Post</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="present_address"> Present Address</label>
                                            <input type="text" class="form-control" id="present_address" name="present_address" placeholder="Enter present address">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="permanent_division_id"> Division *</label>
                                            <select class="form-control select2" name="permanent_division_id" id="permanent_division_id" required="">
                                                <option value="0">Select Division</option>
<!--                                                --><?php
//                                                foreach ($divisions as $key => $value) {
//                                                    echo "<option value='$value[id]'>$value[division_name]</option>";
//                                                }
//                                                ?>
                                            </select>
                                        </div>
                                    </div>

{{--                                    <div class="col-sm-4">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="permanent_district_id"> Permanent District*</label>--}}
{{--                                            <select class="form-control select2" name="permanent_district_id" id="permanent_district_id" required="">--}}
{{--                                                <option value="0">Select District</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="permanent_post_id"> Permanent Post *</label>
                                            <select class="form-control select2" name="permanent_post_id" id="permanent_post_id" required="">
                                                <option value="0">Select Post</option>
                                            </select>
                                        </div>
                                    </div>

{{--                                    <div class="col-sm-4">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="permanent_address"> Permanent Address</label>--}}
{{--                                            <input type="text" class="form-control" id="permanent_address" name="permanent_address" placeholder="Enter permanent address">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

                            </div>
                            <!-- /.card-body -->
                        </div>
<style>
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 22px;

    }
</style>

                        <div class="card-footer">
                            <div class="center">

                                <button type="submit" class="p-3 mb-2 bg-info text-white">Submit</button>


                        </div>
                    </form>

                </div>

            </div>
        </div>



</div>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
@include('commonFolder.page-script')
</body>



</html>
