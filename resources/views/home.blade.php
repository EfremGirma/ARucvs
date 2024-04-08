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
<div class="container">
  <div class="horizontal-section">
    <div class="image">
      <img src="{{asset('img/lock-data-concept.webp')}}" alt="First Image">
    </div>
    <div class="description">
      <p class="description-content">
         The diverse programs, top-notch facilities, and supportive environment are here to propel you forward. With experienced faculty, hands-on learning, and a strong network, Take the leap today!      </p>
      <p class="description-content show">Our programs, facilities, and environment are designed to empower you. With expert faculty, practical learning, and extensive support, we're here to help you thrive.</p>
      <button class="show-more-button" onclick="toggleDescription(this)">Show More</button>
    </div>
  </div>
  <div class="horizontal-section">
    <div class="description">
      <p class="description-content">
       Say goodbye to manual checks and embrace efficiency and reliability. With user-friendly interfaces and advanced security measures, streamline your verification process today!      </p>
      <p class="description-content show">cutting-edge web-based student graduate credential verification system. Revolutionize the way you verify credentials with our intuitive platform. experience the future of verification..</p>
      <button class="show-more-button" onclick="toggleDescription(this)">Show More</button>
    </div>
    <div class="image">
      <img src="{{asset('img/lock-data-concept.webp')}}" alt="Second Image">
    </div>
  </div>
  <div class="horizontal-section">
    <div class="image">
      <img src="{{asset('img/lock-data-concept.webp')}}" alt="Third Image">
    </div>
    <div class="description">
      <p class="description-content">
        Embrace the future of credential verification ,Effortlessly verify graduate credentials  Enjoy enhanced efficiency, accuracy, and security, all in one convenient platform,    </p>
      <p class="description-content show">Step into the future of credential verification with our state-of-the-art web-based system.  Experience the power of efficient verification and join the journey towards a smarter credentialing process..</p>
      <button class="show-more-button" onclick="toggleDescription(this)">Show More</button>
    </div>
  </div>

  <div class="horizontal-section">
    <div class="description">
      <p class="description-content">
        Revolutionize credential verification with our cutting-edge web-based system. Simplify the verification process and eliminate manual errors. Experience the future of credentialing today!      </p>
      <p class="description-content show">Advanced web-based student graduate credential verification system. The platform offers a seamless solution to verify credentials with ease...</p>
      <button class="show-more-button" onclick="toggleDescription(this)">Show More</button>

    </div>
    <div class="image">
      <img src="{{asset('img/lock-data-concept.webp')}}" alt="Fourth Image">
    </div>
  </div>

  <div class="horizontal-section">
    <div class="image">
      <img src="{{asset('img/lock-data-concept.webp')}}" alt="Fifth Image">
    </div>
    <div class="description">
      <p class="description-content">
        Secure your future with our trusted credential verification system. Our web-based platform offers unparalleled efficiency and reliability..      </p>
      <p class="description-content show">Empower your credential verification process with our state-of-the-art web-based system.  Join us and pave the way for a secure and prosperous future..</p>
      <button class="show-more-button" onclick="toggleDescription(this)">Show More</button>

    </div>
  </div>
  </div>
  <div id="content">
    <div id="background"></div>
    <h1>Welcome to Our Website</h1>
    <p>This is a brief description of our services.</p>
</div>
      <a id="verify-button" href="{{route('verifycv.get')}}">Verify</a>
    </main>
    <footer class="footer">
        <div class="footer__content">
            <div class="footer__left">
                <div class="footer__logo">
                    <img src="{{asset('img/photo_2020-12-25_08-17-23.jpg')}}" alt="University Logo">
                </div>
                <nav class="footer__nav">
                    <ul class="footer__navBar">
                      <li><a href="{{route('home.get')}}" target="_blank">Home</a></li>
                      <li><a href="{{route('registerform.get')}}" target="_blank">register</a></li>
                      <li><a href="{{route('login')}}" target="_blank">Sign in</a></li>
                      <li><a href="{{route('contactus.get')}}" target="_blank">Contact</a></li>
                      <li><a href="{{route('aboutus.get')}}" target="_blank">About us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__right">
                <p>Address: Arsi University dinsho, campus</p>
                <p>Email: Arsi@university.com</p>
                <p>Phone: +251 986 892 685</p>
                <p>&copy; 2024 Arsī University. All rights reserved.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    @endsection
    @section('script')
    <script>
  function toggleDescription(button) {
    var descriptionContent = button.parentNode.querySelector('.description-content');
    descriptionContent.classList.toggle('show');
    
    if (descriptionContent.classList.contains('show')) {
      button.textContent = 'Show Less';
    } else {
      button.textContent = 'Show More';
    }
  }
</script>
@endsection
