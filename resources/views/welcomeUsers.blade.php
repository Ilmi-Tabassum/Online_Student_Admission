
@extends('layouts.master')
@section('content')
    <div class="py-12">
    <title>Welcome</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


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


<br>
<br>


<p style="text-align:center;">
        Hi...<b>{{Auth::user()->name}}</b>
        <br>
        <br>
        <p style="text-align:center;">Total Users

        <span class="badge badge-danger">{{count($users)}}</span>

        </p>
        <div class="py-12">
            <div class = "container">
                <div class ="row">
                    <table class="table">
                        <thead>
                        <tr>
        <th scope="col">SL Number</th>
        <th scope="col">First</th>
        <th scope="col">Email</th>
        <th scope="col">Created At</th>
    </tr>
    </thead>
    <tbody>
@php($i = 1)
    @foreach($users as $user)
    <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
    </tr>
    @endforeach

    </tbody>
</table>
                    @endsection
</div>
</div>
</div>
</div>
</body>
