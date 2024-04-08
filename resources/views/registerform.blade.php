@extends('layout')
@section('title','Extra_User Form_ARUCVS')
@section('style')
{{asset('css/Registerformstyle.css')}}
@endsection
@section('content')
<section class="vh-70 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-50">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-4">Create an account</h2>

              <form action="{{route('registerform.post')}}"  method="post">
                      @csrf

                        <div class="form-outline mb-3">
                        <label class="form-label" for="form3Example1cg">Your Name</label>
                          <input name="name" type="text" id="form3Example1cg" class="form-control form-control-lg" />
                          @error('name')
                          <span class="alert alert-warning py-1 mt-1">{{$message}}</span>
                          @enderror
                        </div>

                        <div class="form-outline mb-3">
                        <label class="form-label" for="form3Example3cg">Your Email</label>
                          <input name="email" type="email" id="form3Example3cg" class="form-control form-control-lg" />
                          @error('email')
                          <span class="alert alert-warning py-1 mt-1">{{$message}}</span>
                          @enderror
                        </div>

                        <div class="form-outline mb-3">
                        <label class="form-label" for="form3Example4cg">Password</label>
                          <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                          @error('password')
                          <span class="alert alert-warning py-1 mt-1">{{$message}}</span>
                          @enderror
                        </div>

                        <div class="form-outline mb-3">
                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                          <input type="password" name="password_confirmation" id="form3Example4cdg" class="form-control form-control-lg" />
                          @error('password_confirmation')
                          <span class="alert alert-warning py-1 mt-1">{{$message}}</span>
                          @enderror
                        </div>

                        <div class="form-check d-flex justify-content-center mb-4">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                          <label class="form-check-label" for="form2Example3g">
                            I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                          </label>
                        </div>

                        <div class="d-flex justify-content-center">
                          <button type="submit"
                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body px-5">Create an account</button>
                        </div>

                        <p class="text-center text-muted mt-4 mb-0">Have already an account? <a href="{{route('login')}}"
                            class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection