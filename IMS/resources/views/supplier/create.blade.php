<?php //dd($customers)?>
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
                    <a href="{{url('/supplier')}}">Supplier</a>
                  </li>
                  @if (isset($supplier_edit))
                    <li>
                      <a href="{{url('/supplier'.$supplier_edit->id.'/create')}}">Edit</a>
                    </li>  
                  @else
                    <li>
                      <a href="{{url('/supplier/create')}}">Add new</a>
                    </li>
                  @endif
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

        <!-- Form with validation for add a new Supplier-->
        <div class="col s12 m12 l6">
          <div class="card-panel">
            <h4 class="header2">Add a New Supplier</h4>
            @if ($errors->any())
            <div id="card-alert" class="card red">
                <div class="card-content white-text">
                  @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                  @endforeach
                </div>
            </div>
            @endif
            @if (isset($supplier_edit))
            {{Form::open(['url'=>'/supplier/'.$supplier_edit->id,'class'=>'formValidate','id'=>'formValidate','method'=>'PUT'])}}
            @else
            {{Form::open(['url'=>'/supplier','class'=>'formValidate','id'=>'formValidate'])}}
            @endif
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="mdi-action-account-circle prefix"></i>
                      <input id="name" name="name" type="text" class="validate" value="{{isset($supplier_edit) ? $supplier_edit->name : null }}">
                    <label for="name">Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="mdi-action-explore prefix"></i>
                    <input id="address" name="address" type="text" class="validate" value="{{isset($supplier_edit) ? $supplier_edit->address : null }}">
                    <label for="address">Address</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="mdi-action-settings-phone prefix"></i>
                    <input id="number" name="number" type="text" class="validate" value="{{isset($supplier_edit) ? $supplier_edit->number : null }}">
                    <label for="number">Number</label>
                  </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <i class="mdi-communication-email prefix"></i>
                      <input id="email" type="email" name="email" class="validate" value="{{isset($supplier_edit) ? $supplier_edit->email : null }}">
                      <label for="email">Email</label>
                    </div>
                  </div>
                <div class="row">
                  <p>Status ?</p>
                  <p>
                    <input name="status" type="radio" id="enable" value="1" {{isset($supplier_edit) && $supplier_edit->status == 1 ? 'checked' : null}}/>
                    <label for="enable">enable</label>
                  </p>
                  <p>
                    <input name="status" type="radio" id="disable" value="0" {{isset($supplier_edit) && $supplier_edit->status == 0 ? 'checked' : null}}/>
                    <label for="disable">disable</label>
                  </p>
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
          minlength: 3
        },
        address: {
          required: true,
        },
        email: {
          required: true,
          email: true
        },
        number: {
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