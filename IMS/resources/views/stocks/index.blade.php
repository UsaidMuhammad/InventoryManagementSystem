<?php 
  //foreach ($stocks as $stock) {
  //  dd($stock->product->name);
  //}
?>
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
                  <li><a href="{{url('/home')}}">Dashboard</a></li>
                  <li><a href="{{url($pagetitle)}}">{{$pagetitle}}</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">
            
            <!--DataTables example-->
            <div id="table-datatables">
            <form>
              <div class="row">
                <div class="col s12 m12 l12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Available</th>
                            <th>Threshold</th>
                            <th>Required</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                            <th>Product Name</th>
                            <th>Available</th>
                            <th>Threshold</th>
                            <th>Required</th>
                            <th>Edit</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        @foreach ($stocks as $stock)
                        <tr>
                            <td>{{$stock->product->name}}</td>
                            <td>{{$stock->available}}</td>
                            <td>{{$stock->threshold}}</td>
                            <td>{{$stock->required}}</td>
                            <td><a href="{{url('stocks/'.$stock->id.'/edit')}}" class="btn waves-effect waves-light blue">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  </form>
                </div>
              </div>
            </div> 
            <br>
          </div>
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->
  @include('includes.footer')
    @include('includes.foot')
    <script type="text/javascript">
        /*Show entries on click hide*/
        $(document).ready(function(){
            $(".dropdown-content.select-dropdown li").on( "click", function() {
                var that = this;
                setTimeout(function(){
                if($(that).parent().hasClass('active')){
                        $(that).parent().removeClass('active');
                        $(that).parent().hide();
                }
                },100);
            });

        });
    </script>
</body>

</html>