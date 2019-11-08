@section('title')
<title>{{$post->title}}</title>
<meta property="og:type" content="article" />
<meta  itemprop="description" name="description" content="{{$post->cutBody()}}">
<meta itemprop="keywords" name="keywords" content="{{$post->title}}"/>
<meta  itemprop="author" name="author" content="Wikipoli">
<meta  property="og:type" content="Wikipoli"/>
<meta itemprop="title" property="og:title" content="{{$post->title}}"/>
<meta  property="og:title" content="{{$post->title}}"/>
<meta itemprop="url" property="og:url" content="{{url('posts/'.$post->slug)}}"/>
<meta  property="article:publisher" content="Wikipoli"/>
<meta  property="article:section" content="Article"/>
<meta itemprop="datePublished" property="article:published_time" content="{{$post->created_at}}"/>
<meta itemprop="dateModified" property="article:modified_time" content="{{$post->updated_at}}"/>
<meta  property="fb:app_id" content="1233444" />
<meta itemprop="image" property="og:image" content="{{url($post->file) }}" />
<meta itemprop="image" property="og:image:secure_url" content="{{url($post->file) }}" />
<meta itemprop="width" property="og:image:width" content="500" />
<meta itemprop="height" property="og:image:height" content="500" />
<meta property="og:image:alt" content="Wikipoli" />
<meta name="twitter:card" content="summary_large_image" />
<meta itemprop="description" name="twitter:description" content="{{$post->cutBody()}}">
<meta itemprop="keywords" name="keywords" content="{{$post->title}}" />
<meta  name="twitter:site" content="@wikipoli" />
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<style>
    .toast {
        opacity: 0.9!important;
    }
  
    .row {
        align-self: auto;
        justify-content: center;
        margin-right:  0px; 
        margin-left:  0px; 
    }
    .row1 {
        margin-top : 2rem;
    }
    .row1 p {
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 30px;
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
    .reaction {
        display: block;
        padding-inline-start: 0px;

    }
    .reaction li {
        float: left;
        list-style-type: none;
        padding: 1rem;
        color:  #1257AE;
        font-size: 40px;
        padding-inline-start: 0px;
    }
    .comment_cont {

        min-height: 150px;
        padding: 1rem;
        margin-top: 2rem;
        background: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.01);
        box-sizing: border-box;
        box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.25);
        border-radius: 9px;
    }
    .comment_cont a img {
        float: left;
        padding-right: 1rem;
    }
    .comment_details a {
        height: 36px;
        font-style: normal;
        font-weight: bold;
        font-size: 30px;
        line-height: 36px;
        color: #1257AE;
        margin-right: 20px;
    }
    .comment_details span {
        width: 183px;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 30px;
        color: rgba(0, 0, 0, 0.55);
    }
    .comment_details p {
        display: flex;
        font-style: normal;
        font-weight: normal;
        font-size: 30px;
        line-height: 36px;
    }
    .comment_nums {
        font-style: normal;
        font-weight: bold;
        font-size: 30px;
        line-height: 36px;
        color: #1257AE;
    }

    /* for comment */
    .comment_box {
        height: 191px;
        margin-top: 3rem;
        margin-bottom: 2rem;
        background: #FFFFFF;
        box-sizing: border-box;
        border-radius: 9px;
    } 
    .comment_btn {
        margin-bottom: 2rem;
        background-color: #1257AE;
        font-style: normal;
        font-weight: bold;
        font-size: 40px;
        line-height: 48px;
    }
    .col-md-6 img {
        width:  100%;
    }

    .col-md-6 h3 {
        font-style: normal;
        font-weight: 500;
        font-size: 40px;
        line-height: 55px;
        color: #1257AE;
    }
    .col-md-6 h5 {
        font-style: normal;
        font-weight: 500;
        font-size: 25px;
        line-height: 29px;
        display: flex;
        align-items: center;

        color: rgba(0, 0, 0, 0.55);
    }
    .col-md-6 h5 span {
        color: #1257AE;
        margin-left: 0.5rem;
    }
    .col-md-6 i {
        font-size: 60px;
        color: #1257AE;
    }

    @media only screen and (max-width: 568px) {
        .navimg {
            margin-left: -1em;
            height: 120px;
            width: 120px;
        }
    }

</style>
@endsection
@extends('layouts.guest')
@section('content')

<div class="row">
    <div class="col-12 col-md-6">
        <img src="{{url($post->file) }}"  alt="{{$post->title}}" height="400">
    </div>

    <div class="col-12 col-md-6">
        <h3>{{$post->title}}</h3>
        <h5>Posted  on {{ date('F d, Y', strtotime($post->created_at)) }}</h5>
        <h5>Published by  <span><img src="/uploads/avatars/{{ $post->user->avatar }}" style="width:35px; height:35px; border-radius:50%;"></span><span> {{$post->user->username}}</span></h5>
        <a href="#" onclick="window.open('http://twitter.com/share?text={{$post->title}} - & amp; url={{url('posts/'.$post->slug)}}', 'twitterShare', 'width=626,height=436');
                    return false;" title="Tweet This Post"><i class="fa fa-twitter-square "></i></a>
       <a href="#" onclick="window.open('http://www.facebook.com/sharer.php?u={{url('posts/'.$post->slug)}}& amp; t={{$post->title}}', 'facebookShare', 'width=626,height=436');
                    return false;" title="Share on Facebook">  <i class="fa fa-facebook-square"></i> </a>
    </div>
</div>

<div class="row row1">
    {!! $post->body !!}
    <div class="col-12 ">
        <ul class="reaction">
            <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></li>
            <li><i class="fa fa-thumbs-o-down"></i></li> 
            <li><i class="fa fa-heart-o"></i></li> 
        </ul>
    </div>
    <div class="col-12 ">
        <h3 class="comment_nums count">{{count($post->comments)}} @if(count($post->comments) < 2) Comment @else Comments @endif</h3>
       <span class="countcomments">
        @forelse($post->comments as $comment)
        <div class="comment_cont">
           
<!--            <a href="#"><img src="images/profileSam1.png" alt=""></a>-->
            <!-- comment header -->
            <img src="/uploads/avatars/{{ $comment->user->avatar }}" style="width:30px; height:30px; border-radius:50%;"><span class="comment_details"> <a href="#">{{$comment->user->username}}</a> <span>{{ date('F d, Y', strtotime($comment->created_at)) }}.</span> </span>

            <p>
              {!! nl2br($comment->comment) !!}
            </p>
           
        </div>
        @empty
        <div class="text-center">
            No Reaction's Yet
        </div>
        @endforelse
       </span>
        @Auth
        <form id="comment_post" method="post">
            <textarea class="form-control comment_box"  name="comment" id="comment" cols="30" rows="5" placeholder="Comment here........"></textarea>
            <input  type="hidden" id="post_id" value="{{$post->id}}">
            <button type="submit" class="btn btn-primary comment_btn">Comment</button>
            <div class="text-center">
                <span id="wait" style="display:none"> <img src="{{asset('images/reload.gif')}}" width="80" height="80" ></span>
            </div>

        </form>
        @else
        <br/>
        <div class="alert alert-danger"><h4>Comments disabled! You must signin before you can comment, click the button below to login<br><br> <a href="{{url('login')}}" class="btn btn-primary">Login</a></h4></div>

        @endAuth

    </div>




</div>


@section('footer')

@include('layouts.footer')
@endsection

@section('script')
<script>

    $('#comment_post').submit(function (event) {
        $(".comment_btn").hide();
        $("#wait").show();
        event.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{url('post-comments')}}",
            type: 'POST',
            data: {
                comment: jQuery('#comment').val(),
                post_id: jQuery('#post_id').val()

            },
            success: function (data) {
                if (data.status === 401) {
                    jQuery.each(data.message, function (key, value) {
                        var message = ('' + value + '');
                        toastr.error(message, {timeOut: 50000});
                        $(".comment_btn").show();
                        $("#wait").hide();
                    });
                    return false;
                }
                if (data.status === 200) {
                    var message = data.message;
                    toastr.success(message, {timeOut: 50000});
                    $(".comment_btn").show();
                    $("#wait").hide();
                    $(".count").load(" .count");
                    $(".countcomments").load(" .countcomments");

                    return false;
                }

                if (data.status === 422) {
                    var message = data.message;
                    toastr.info(message, {timeOut: 50000});
                    $(".comment_btn").show();
                    $("#wait").hide();
                    /* $(".results-wrapper").load(" .results-wrapper");*/
                    $(".count").load(" .count");
                    $(".countcomments").load(" .countcomments");

                    return false;
                }
            }

        });
    });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@endsection
@endsection