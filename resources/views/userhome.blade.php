@extends('layout')
@section('title','User/pageARUCVS')
@section('style')
{{asset('css/homestyles.css')}}
@endsection
@section('content')
    <header class="header">
        <div class="header__logo">
            <img class="image1" src="{{asset('img/photo_2020-12-25_08-17-23.jpg')}}" alt="University Logo">
            <P class="logo-text">Credential Verification</P>
        </div>
        @if(Route::has('login'))
        <nav class="header__nav">
            <ul class="header__navBar">
        @auth
              <li><a href="{{route('home.get')}}" target="_blank">Home</a></li>
              <li><a href="{{url('/logout')}}" target="_blank">Logout</a></li>
              <li><a href="{{route('contactus.get')}}" target="_blank">Contact</a></li>
              <li><a href="{{route('aboutus.get')}}" target="_blank">About us</a></li>
              </ul>
              </nav>
    </header>
<!-- Main Content -->
<main class="main-content">
        <section class="banner">
            <h1>Welcome to Arsi university</h1>
            <p>Your pathway to success starts here!</p>
            <p>Well Come {{auth()->user()->name}}</p>
              @else
                    @if(Route::has('registerform.post'))
                    <nav class="header__nav">
            <ul class="header__navBar">
              <li><a href="{{route('home.get')}}" target="_blank">Home</a></li>
              <li><a href="{{route('login')}}" target="_blank">Login</a></li>
           <li><a href="{{route('registerform.get')}}" target="_blank">Register</a></li>
           <li><a href="{{route('contactus.get')}}" target="_blank">Contact</a></li>
              <li><a href="{{route('aboutus.get')}}" target="_blank">About us</a></li>
            </ul>
        </nav>
    </header>
           <!-- Main Content -->
    <main class="main-content">
        <section class="banner">
            <h1>Welcome to Arsi university</h1>
            <p>Your pathway to success starts here!</p>
      
            @endif
        @endauth
        </section>
        @endif
@endsection