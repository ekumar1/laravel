@extends('layouts.front_app') 
@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel Coalition Test
                </div>

                <div class="links">
                    <a href="{{url('/login')}}">Manage Products</a>
                    <a href="#">New Products</a>
                    <a href="#">Popular Products</a>
                    <a href="#">Best Selling Products</a>
                    
                </div>
				
				Login Details For Manage Products </br>
				
				Email :- coalitiontechnologies1@gmail.com </br>
				Password:- laravel@123
				
				
            </div>
        </div>
 @endsection