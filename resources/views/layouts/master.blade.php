<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maison</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>

        
         @include('partials.menu')  
        
    
    <div class="row">
    <div class="col-md-12">
        @yield('content')
    </div>
    </div>


<script src="{{asset('js/app.js')}}"></script>

</body>
</html>

