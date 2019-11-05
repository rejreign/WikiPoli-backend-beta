@section('title')
<title>WikiPoli | Posts</title>
@endsection
@section('style')
<style>

    body {
        font-family: 'Nunito', sans-serif;
        height: 100vh;
    }

    .navbar {
        margin-right: -0.8em;
        margin-left: -0.8em;
        margin-top: -1.8em;
    }

    .nav-link {
        font-size: 1.2em;
        font-weight: 300;
    }

    .first {
        margin-left: 3.5em;
        margin-right: 3.5em;
        margin-top: -1em;
    }
    .first a {
        text-decoration: none;
    }

    .row {
        justify-content: center;
    }

    .cardi a {
        text-decoration: none;
    }

    .img-fluid {
        height: 13em;
        width: 100%;
        object-fit: cover;
    }

    .card-text {
        font-size: 0.85em;
        color: darkslategrey;
    }

    .list {
        list-style-type: none;
        line-height: 2em;
    }

    .list a {
        text-decoration: none;
        color: darkslategrey;
    }

    .cont a {
        text-decoration: none;
    }

    .copy {
        font-size: 12.5px;
    }

    @media only screen and (max-width: 425px) {
        .navimg {
            margin-left: -5em;
            height: 150px;
            width: 190px;
        }

        .img-fluid {
            width: 100%;
            height: 10em;
            object-fit: cover;
        }

        .first {
            margin-left: -1em;
        }
    }

    @media only screen and (max-width: 575px) {
        .navbar {
            margin-top: -1.8em;
        }

        .nav-link {
            font-size: 1.2em;
            font-weight: 300;
        }

        p {
            font-size: 0.9em;
        }
    }

    @media only screen and (width: 375px) {
        .navimg {
            margin-left: -8em;
        }
        .first {
            margin: auto;
        }
    }

    @media only screen and (width: 425px) {
        .navimg {
            margin-left: -10em;
        }
        .first {
            margin: auto;
        }
    }
    @media only screen and (min-width: 768px) {
        .navimg {
            margin-left: -1.5em;
        }
        .card {
            margin-left: 2em;
            margin-right: 2em;
        }
    }
    @media only screen and (max-width: 320px) {
        .card {
            margin: auto;
        }
        .first {
            margin: auto;
        }
    }
    @media only screen and (max-width: 767px) {
        .card {
            margin-left: auto;
            margin-right: auto;
        }
    }
    @media only screen and (max-width: 767px) {
        .card {
            margin-left: auto;
            margin-right: auto;
        }
    }
    @media only screen and (min-width: 1024px) {
        .card {
            margin-left: 3em;
            margin-right: 3em;
        }
    }
    @media only screen and (width: 1024px) {
        .card {
            margin-left: 2em;
            margin-right: 2em;
        }
    }
</style>
@endsection
@extends('layouts.guest')
@section('content')


<h5 class="h3 text-dark text-center pb-4">Recent Posts</h5>
@Auth

<div class="d-flex first">
    <a href="{{url('create-post')}}" class="ml-auto h5"><i class="fas fa-plus-circle"></i> Add Post</a>
</div>
@endAuth

<div class="row">
    @forelse($posts as $post)
    <div class="col-sm-12 col-md-4 col-lg-3 mt-5 cardi">
        <a href="#">
            <img class="img-fluid" src="{{asset($post->file)}}">
            <div>
                <h5 class="h5 mb-2 mt-2">{{$post->cutTitle()}}</h5>
                <p class="text-dark">{{$post->cutBody()}}</p>
            </div>
        </a>
        @Auth

        <div>
            <a href="#"><i class="fa fa-thumbs-up pr-3" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-thumbs-down pr-3" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-reply" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-facebook  float-right" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-twitter pr-3 float-right"></i></a>
        </div>
        @endAuth
    </div>
    @empty
    <div class="text-center">
        No Recent Post Yet

    </div>
    @endforelse


</div>

<nav aria-label="Page" class="mt-5 pb-4">
    <ul class="pagination justify-content-center">
         {{$posts->appends($_GET)->links()}}
    </ul>
</nav>




<hr class="mt-3">
@section('footer')
@include('layouts.footer')
@endsection
@endsection