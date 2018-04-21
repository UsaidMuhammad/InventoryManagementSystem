<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  @include('includes.header')

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      @include('includes.leftnav')

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">{{ $pagetitle }}</h5>
                <ol class="breadcrumbs">
                  <li>
                    <a href="{{url('/home')}}">Dashboard</a>
                  </li>
                  <li>
                    <a href="{{url('/stocks')}}">stocks</a>
                  </li>
                    <li>
                      <a href="{{url('/stocks'.$stocks->id.'/create')}}">Edit</a>
                    </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

        <!-- Form with validation for add a new stocks-->
        <div class="col s12 m12 l6">
          <div class="card-panel">
            <h4 class="header2">Edit stocks</h4>
            @if ($errors->any())
            <div id="card-alert" class="card red">
                <div class="card-content white-text">
                  @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                  @endforeach
                </div>
            </div>
            @endif
            {{Form::open(['url'=>'/stocks/'.$stocks->id,'class'=>'formValidate','id'=>'formValidate','method'=>'PUT'])}}
            <div class="row">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="mdi-action-account-circle prefix"></i>
                      <input id="available" name="available" type="text" class="validate" value="{{$stocks->available}}">
                    <label for="available">Available</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="mdi-action-account-circle prefix"></i>
                      <input id="threshold" name="threshold" type="text" class="validate" value="{{$stocks->threshold}}">
                    <label for="threshold">Threshold</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="mdi-editor-attach-money prefix"></i>
                    <input id="required" name="required" type="text" class="validate" value="{{$stocks->required}}">
                    <label for="required">required</label>
                  </div>
                </div>
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light right submit" type="submit" name="submit">Submit
                      <i class="mdi-content-send right"></i>
                    </button>
                </div>
            </div>
            </form>
          </div>
        </div>
    </div>


    </section>
    <!-- END CONTENT -->

  </div>
  <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->
  @include('includes.footer') @include('includes.foot')

  <script>
    $("#formValidate").validate({
      rules: {
        name: {
          required: true,
          digits: true
        },
        threshold: {
          required: true,
          digits: true
        },
        required: {
          required: true,
          digits: true
        }
      },
      errorElement: 'div',
      errorPlacement: function (error, element) {
        var placement = $(element).data('error');
        if (placement) {
          $(placement).append(error)
        } else {
          error.insertAfter(element);
        }
      }
    });
  </script>
</body>

</html>