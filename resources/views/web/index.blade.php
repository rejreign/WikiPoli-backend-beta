@section('title')
<title>WikiPoli | Welcome</title>
@endsection
@section('style')
<style>

    body {
        font-family: 'Nunito', sans-serif;
        height: 100vh;
    }

    .navbar {
        margin-top: -1.8em;
    }

    .nav-link {
        font-size: 1.2em;
        font-weight: 300;
    }

    .form-control {
        width: 35em;
    }

    .search {
        margin-top: 0.5em;
        width: 10em;
    }

    .link {
        text-decoration: none;
    }

    .row {
        align-self: auto;
        justify-content: center;
    }

    .cardi {
        margin: 1em;
        max-width: 100%;
    }

    .cardi a {
        text-decoration: none;
    }

    .img-fluid {
        height: 15rem;
        width: 100%;
        object-fit: cover;
    }

    .posts a {
        text-decoration: none;
    }

    .lead {
        font-size: medium;
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

    @media only screen and (max-width: 568px) {
        .navimg {
            margin-left: -5em;
            height: 150px;
            width: 190px;
        }
    }

    @media only screen and (min-width: 1024px) {
        .disp {
            display: grid;
            grid-template-columns: auto auto auto auto;
            overflow-x: hidden;
            margin-right: 0.5em;
        }
    }

    @media only screen and (max-width: 768px) {
        .form-control {
            width: 27em;
        }
    }

    @media only screen and (width: 375px) {
        .navimg {
            margin-left: -8em;
        }
    }
    @media only screen and (width: 425px) {
        .navimg {
            margin-left: -10em;
        }
    }
</style>

@endsection
@extends('layouts.guest')
@section('content')

<div class="text-center mt-5 mb-4">
    <h5 class="display-4">Know your candidate</h5>
    <br>
    <p class="lead mb-4">Don't go for that candidate until you are sure of their credibility!</p>
    <form action="{{url('search')}}" method="get" >
        <div class="d-flex justify-content-center">

            <input type="text" class="form-control m-2" placeholder="Enter Candidate's Name">
            <button type="submit" class="btn btn-primary search h-5">Search</button>

        </div>
    </form>
</div>




<div class="mt-5 posts">
    <a href="{{url('posts')}}"><h3 class="text-center text-dark pt-4 h3 pb-3">Recent Posts</h3></a>
    @Auth
    <div class="d-flex first">
        <a href="{{url('create-post')}}" class="ml-auto h5"><i class="fas fa-plus-circle"></i> Add Post</a>
    </div>
    @endAuth
    <div class="row disp">
        @forelse($posts as $post)
        <div class="col-sm-12 col-md-3 col-lg-3 cardi">
            <a href="#">
                <img class="img-fluid" src="{{asset($post->file)}}">
                <div>
                    <h5 class="h5 mb-2 mt-2">{{$post->cutTitle()}}</h5>
                    <p class="text-dark">{{$post->cutBody()}} </p>
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

</div>
<hr class="mt-4">

@section('footer')
@include('layouts.footer')
@endsection
@endsection
