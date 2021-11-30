<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</head>
<body>
<form action="{{url('/')}}" method ="post">
    @csrf
{{--    <pre>--}}
{{--    @php--}}
{{--        print_r($errors->all());--}}
{{--    @endphp--}}
{{--</pre>--}}
<div class ="container">
    <h1 class="text-center">Registation</h1>
    <div class="form-group">
        <label for="">Name</label>
        <input type ="text" name="name" id="" class="form-control" value="{{old('name')}}" placeholder="Name" />
        <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
        </span>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type ="email" name="email" id="" class="form-control" value="{{old('email')}}" placeholder="Email" />
        <span  class="text-danger">
              @error('email')
            {{$message}}
            @enderror

        </span>
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type ="password" name="password" id="" class="form-control" placeholder="Password"/>
        <span  class="text-danger">
               @error('password')
            {{$message}}
            @enderror

        </span>
    </div>
    <div class="form-group">
        <label for="">Confirm Password</label>
        <input type ="password" name="password_confirmation" id="" class="form-control" placeholder="Confirm Password" />
        <span class="text-danger">
               @error('password_confirmation')
            {{$message}}
            @enderror

        </span>
    </div>
    <button class = "btn btn-danger">Submit</button>
</div>
</form>
</body>
</html>

