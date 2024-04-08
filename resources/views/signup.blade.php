@extends('layout')
@section('title','Signup Page')
<!-- @section('style')
{{ asset('css/signup.css') }}
@endsection -->
@section('content')
<section class="vh-70" style="background-color: #9A616D;">
  <div class="container py-5 h-65">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="{{route('login.post')}}" method="post">
                @csrf
               
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class=" style="color: #ff6219;  font-size: 3em;">
                    <img width="100" height="100" src="{{asset('img/photo_2020-12-25_08-17-23.jpg')}}" alt="University Logo">
                  </i>
                    <span class="h1 fw-bold mb-0">Arsi University CVS</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <div class="form-outline mb-4">
                  @if($errors->any())
                  <ul>                  @foreach($errors->all() as $error)
                   <li> <span class="alert alert-warning py-1 mt-1">{{$error}}</span></li>
                    @endforeach
                  </ul>
                    @endif
                    </div>
                  
                  <div class="form-outline mb-4">
                    <input name="email" type="email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input name="password" type="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block justify-content-center" type="submit">Login</button>
                  </div>
                  <div class="form-check d-flex justify-content mb-4">
                          <input name="remember" class="form-check-input me-2" type="checkbox" value="" id="remember" aria-describedby="remember"/>
                          <label class="form-check-label" for="remember">
                            Remember me
                          </label>
                          <a class="small text-muted ms-5" href="#!">Forgot password?</a>
                      
                        </div>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account yet? <a href="{{route('registerform.get')}}"
                      style="color: #393f81;">Signup</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
