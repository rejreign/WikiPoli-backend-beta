<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield('title')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('styles/draft-post.css')}}">
        <link rel="icon" type="img/png" href="{{asset('images/favicon.png')}}">
        <link rel="manifest" href="{{asset('js/manifest.json')}}" />
        <link rel="stylesheet" href="{{asset('admin/assets/styles/vendor/quill.snow.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#333" />
        <style>
            .toast {
                opacity: 0.9!important;
            }
            .modal
            {
                position: fixed;
                z-index: 999;
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
                background-color: Black;
                filter: alpha(opacity=60);
                opacity: 0.6;
                -moz-opacity: 0.8;
            }
            .center
            {
                z-index: 1000;
                margin: 300px auto;
                padding: 10px;
                width: 130px;
                background-color: White;
                border-radius: 10px;
                filter: alpha(opacity=100);
                opacity: 1;
                -moz-opacity: 1;
            }
            .center img
            {
                height: 100px;
                width: 100px;
            }



        </style>
    </head

    <body>
        @include('layouts.post_navbar')
        @yield('content')

        <div class="modal" style="display: none">
            <div class="center">
                <img src="{{asset('images/reload.gif')}}"  >
            </div>
        </div>


        <script src="{{asset('js/jQuery.js')}}"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{asset('scripts/index.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/highlight.js')}}"></script> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
$('#customFile').on('change', function () {
    var fileName = $(this).val();
    $(this).next('.custom-file-label').html(fileName);
});

        </script>
        @yield('script')

    </body>
</html>
