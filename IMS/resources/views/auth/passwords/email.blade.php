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
      {{Form::open(['url'=> route('password.email') ,'class'=>'login-form'])}}
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Reset Password</h4>
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
        @if (session('status'))
        <div id="card-alert" class="card purple">
            <div class="card-content white-text">
              <p>{{ session('status') }}</p>
            </div>
        </div>
        @endif
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">
              Send Password Reset Link
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>

  @include('includes.foot')

</body>

</html>