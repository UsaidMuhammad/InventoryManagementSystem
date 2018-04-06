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
      {{Form::open(['url'=>'/register','class'=>'login-form'])}}
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Register</h4>
          </div>
        </div>
        @if ($errors->any())
        <div id="card-alert" class="card red">
            <div class="card-content white-text">
              @foreach ($errors->all() as $error)
              <p>{{ $error }}</p>
              @endforeach
            </div>
        </div>
        @endif
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
            <label for="name" class="center-align">Name</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" class="form-control" name="password" required>
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            <label for="password-confirm">Password confirm</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">
                Register
            </button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="{{ route('login')}}">Login</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>

  @include('includes.foot')

</body>

</html>