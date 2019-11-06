<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
        <!-- <link rel="shortcut icon" type="image/png" href="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" /> -->
        <link rel="icon" type="img/png" href="{{asset('images/favicon.png')}}">
        @yield('title')
         @yield('style')
    </head>
    <body>
        <div class="container-fluid">
            @include('layouts.register_sidebar')
            @yield('content')
            @yield('footer')
        </div>
        <script>
            const check = function () {
                if (document.getElementById('password').value ==
                        document.getElementById('confirmPassword').value) {
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Password confirmed';
                } else {
                    document.getElementById('message').style.color = 'red';
                    document.getElementById('message').innerHTML = 'Passwords don\'t match';
                }
            };
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

</html>

