@section('title')
<title>WikiPoli | Posts</title>
@endsection
@section('style')
<style>

  
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
    <a href="{{url('create-post')}}" class="ml-auto h5" style="color:#1257AE"><i class="fas fa-plus-circle"></i> Add Post</a>
</div>
@endAuth

<div class="row">
    @forelse($posts as $post)
    <div class="col-sm-12 col-md-4 col-lg-3 mt-5 cardi">
        <a href="{{url('posts/'.$post->slug)}}">
            <img class="img-fluid"  src="{{asset($post->file)}}">
            <div>
                <h5 class="h5 mb-2 mt-2" style="color:#1257AE">{{$post->cutTitle()}}</h5>
                <p class="text-dark">{{$post->cutBody()}}</p>
            </div>
        </a>
        @Auth

      <div>
                <a href="#"><i class="fa fa-thumbs-up pr-3" aria-hidden="true" style="color:#1257AE"></i></a>
                <a href="#"><i class="fa fa-thumbs-down pr-3" aria-hidden="true" style="color:#1257AE"></i></a>
                <a href="#"><i class="fa fa-reply" aria-hidden="true" style="color:#1257AE"></i></a>
                <a href="#" onclick="window.open('http://www.facebook.com/sharer.php?u={{url('posts/'.$post->slug)}}& amp; t={{$post->title}}', 'facebookShare', 'width=626,height=436');
                    return false;" title="Share on Facebook"><i class="fab fa-facebook  float-right" aria-hidden="true" style="color:#1257AE"></i></a>
                <a href="#" onclick="window.open('http://twitter.com/share?text={{$post->title}} - & amp; url={{url('posts/'.$post->slug)}}', 'twitterShare', 'width=626,height=436');
                    return false;" title="Tweet This Post"><i class="fab fa-twitter pr-3 float-right"></i></a>
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




@section('footer')
@include('layouts.footer')
@endsection
@endsection