<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Mr.Azizul Haque</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <link href="{{asset('css2/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css2/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css2/fontawesome.css')}}" rel="stylesheet" />
    <link href="{{asset('css2/style2.css')}}" rel="stylesheet" />
    <link href="{{asset('css2/toastify.min.css')}}" rel="stylesheet" />
    <script src="{{asset('js2/toastify-js.js')}}"></script>
    <script src="{{asset('js2/axios.min.js')}}"></script>
    <script src="{{asset('js2/config.js')}}"></script>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css')}}" rel="stylesheet" />
</head>

<body>

<div id="loader" class="LoadingOverlay d-none">
<div class="Line-Progress">
    <div class="indeterminate"></div>
</div>
</div>
{{-- <div class="" id="content-div">
    @yield('content')
</div> --}}
<div>
    @yield('content2')
</div>
<script>

</script>

<script src="{{asset('js2/bootstrap.bundle.js')}}"></script>

</body>
</html>
