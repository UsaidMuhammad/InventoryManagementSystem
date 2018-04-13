<!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{url('assets/')}}/js/plugins/jquery-1.11.2.min.js"></script>    
    @if (isset($js))
        @foreach ($js as $item)
        <script type="text/javascript" src="{{url('assets/')}}/js/{{$item}}"></script>
        @endforeach
    @endif
    <!--materialize js-->
    <script type="text/javascript" src="{{url('assets/')}}/js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="{{url('assets/')}}/js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{url('assets/')}}/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="{{url('assets/')}}/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{url('assets/')}}/js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{url('assets/')}}/js/custom-script.js"></script>
    