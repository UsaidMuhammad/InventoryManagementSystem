<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        {{ Form::open(['url'=>'/login','class'=>'login-form']) }}
        <div class="row">
          <div class="input-field col s12 center">
            <img src="{{url('assets')}}/images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Login</p>
          </div>
        </div>
        @if ($errors->any())
        <div id="card-alert" class="card red">
            <div class="card-content white-text">
              @foreach ($errors->all() as $error)
                <p>{{ $error}}</p>
              @endforeach
            </div>
        </div>
        @endif
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            <label for="username" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" class="form-control" name="password" required>
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            {!! NoCaptcha::display() !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
              <button type="submit" class="btn waves-effect waves-light col s12">
                  Login
              </button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="{{route('register')}}">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="{{route('password.request')}}">Forgot password ?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>



  @include('includes.foot')
  {!! NoCaptcha::renderJs() !!}
</body>

</html>