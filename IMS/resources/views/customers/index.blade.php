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
                  <li><a href="{{url('/home')}}">Dashboard</a></li>
                  <li><a href="{{url('/customers')}}">Customers</a></li>
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
            <a href="/customers/create" class="btn waves-effect waves-light yellow left ">Add New</a>
            {{Form::open(["url"=>"/customers/delete","method"=>"DELETE"])}}
            <input type="submit" value="delete" class="btn waves-effect waves-light red right">
              <div class="row">
                <div class="col s12 m12 l12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="test1" class="parent_tick"><label for="test1"></label></th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                            <th><input type="checkbox" id="test2" class="parent_tick"><label for="test2"></label></th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Edit</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <td><input type="checkbox" id="{{$customer->id}}" name="id[]" value ="{{$customer->id}}"class="tick"><label for="{{$customer->id}}"></label></td>
                            <td>{{$customer->customer_name}}</td>
                            <td>{{$customer->customer_number}}</td>
                            <td>{{$customer->customer_email}}</td>
                            <td>{{$customer->status}}</td>
                            <td>{{$customer->created_at}}</td>
                            <td>{{$customer->updated_at}}</td>
                            <td><a href="{{url('customers/'.$customer->id.'/edit')}}" class="btn waves-effect waves-light blue">Edit</a></td>
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

            //select all checkboxes
            $(".parent_tick").change(function(){  //"select all" change 
            $(".tick").prop('checked', $(this).prop("checked")); //change all ".tick" checked status
            });

            //".tick" change 
            $('.tick').change(function(){ 
            //uncheck "select all", if one of the listed checkbox item is unchecked
            if(false == $(this).prop("checked")){ //if this item is unchecked
                $(".parent_tick").prop('checked', false); //change "select all" checked status to false
            }
            //check "select all" if all checkbox items are checked
            if ($('.tick:checked').length == $('.tick').length ){
                $(".parent_tick").prop('checked', true);
            }
            });
        });
    </script>
</body>

</html>