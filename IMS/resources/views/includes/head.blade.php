<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="This is a Inventory Management System created for a school like project.">
  <title>{{ $pagetitle }}</title>

  <!-- Favicons-->
  <link rel="icon" href="{{url('assets/')}}/images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="{{url('assets/')}}/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="{{url('assets/')}}/images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="{{url('assets/')}}/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{url('assets/')}}/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="{{url('assets/')}}/css/custom/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
  @if (isset($css))
      @foreach ($css as $item)
        <link href="{{url('assets/')}}/css/{{$item}}" type="text/css" rel="stylesheet" media="screen,projection">
      @endforeach
  @endif
  

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="{{url('assets/')}}/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{url('assets/')}}/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{url('assets/')}}/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>