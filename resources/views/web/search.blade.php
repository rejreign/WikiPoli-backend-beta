@section('title')
<title>WikiPoli | Search</title>
@endsection
@extends('layouts.guest')
@section('content')
<div class="clearfix"></div>
<br/>
<style>

    .search-results-container {
        background-color: #fff
    }


    /*Search results style starts here*/
    .blog-entries .blog-entry .blog-content-body {
        padding: 20px;
        border: 1px solid #efefef;
        border-top: none;
    }

    .blog-entries .blog-entry img {
        max-width: 100%;
    }

    .blog-entries .blog-entry h2 {
        font-size: 18px;
        line-height: 1.5;
    }

    .blog-entries .blog-entry p {
        font-size: 13px;
        color: gray;
    }

    .blog-entries .post-meta {
        margin-bottom: 20px;
        color: #b3b3b3;
    }

    a {
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease;
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        color: #000;
        font-family: "Josefin Sans", arial, sans-serif;
    }

    .category {
        display: inline-block;
        background: #007bff;
        padding: 2px 8px;
        line-height: 1.5;
        font-size: 12px;
        border-radius: 4px;
        text-transform: uppercase;
        color: #fff !important;
        margin-right: 10px;
    }



    .blog-entries .blog-entry {
        display: block;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease;
        margin-bottom: 30px;
        position: relative;
        -webkit-box-shadow: 0 1px 10px -2px rgba(0, 0, 0, 0.2) !important;
        box-shadow: 0 1px 10px -2px rgba(0, 0, 0, 0.2) !important;
    }

    .blog-entries .blog-entry:hover,
    .blog-entries .blog-entry:focus {
        opacity: .7;
        top: -1px;
        -webkit-box-shadow: 0 3px 50px -2px rgba(0, 0, 0, 0.2) !important;
        box-shadow: 0 3px 50px -2px rgba(0, 0, 0, 0.2) !important;
    }



    /* Responsive styling */
    @media screen and (max-width: 768px) {
        h1 {
            font-size: 30px;
        }

    }

    /*        search result style ends here*/
    @media (max-width: 860px) {
        #header .fa-bars {
            margin-bottom: 1rem;
        }

        #header .menu {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding-bottom: 1rem;
        }

        #header .menu .nav-link {
            font-size: 1rem;
            padding: 0.3rem 1rem;
        }

        #header .menu #nav-register {
            padding: 0.3rem 1rem;
        }

        #header .menu li {
            margin-left: 0.5rem;
        }
    }

    #footer {
        font-family: Nunito, segoe UI, sans-serif;
        margin: 1rem auto;
        width: 100%;
    }

    #footer #hr {
        width: 80%;
        border: 0.5px solid rgba(0, 0, 0, 0.08);
    }

    #footer #nav-flex {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin: 2rem auto;
    }

    #footer #nav-flex .link-group {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    #footer .link-group .group-desc {
        color: #1257AE;
        font-weight: bolder;
        margin: 1rem 0;
    }

    #footer .link-group a {
        text-decoration: none;
        color: rgba(0, 0, 0, 0.8);
        margin: 0.15rem 0;
        transition: 0.4s ease-out;
    }

    #footer .link-group a:hover {
        color: rgb(100, 100, 200);
    }

    #footer #socials {
        display: flex;
        flex-direction: row;
    }

    #footer #socials .social-link {
        margin-right: 1rem;
        border-radius: 100%;
        height: 30px;
        border: 2px solid white;
        transition: 0.4s ease-out;
    }

    #footer #socials .social-link:hover {
        border: 2px solid skyblue;
    }


    @media (max-width: 860px) {

        .profile-input input,
        .profile-input select,
        .profile-input textarea {
            width: 100% !important;
        }

        #footer {
            padding-bottom: 1rem;
        }

        #footer #nav-flex {
            flex-direction: column;
            margin: 1rem 2rem;
        }

        #footer .link-group .group-desc {
            margin: 1.5rem 0 0.5rem;
        }


    }

    .search-line {
        display: flex;
        justify-content: space-between;

    }

    .search-line input {
        width: 300px;
        padding: 5px 10px;
        margin-right: -5px;
        border: 1px solid #1257AE
    }

    .search-line button {
        padding: 5px;
        width: 100px;
        background-color: #1257AE;
        color: #fff;
        border: 1px solid #1257AE
    }

    @media (max-width: 1000px) {
        .search-line {
            display: flex;
            flex-direction: column-reverse;
            justify-content: center;
            align-items: center;
        }

        .search-box {
            margin-bottom: 12px;
            width: 90%
        }

        .search-line input {
            width: 80% !important;
            padding: 5px 10px;

        }

        .search-line button {
            padding: 5px;
            width: 20% !important;

        }

        .search-line h3 {
            font-size: 19px
        }
    }

    /*
    #post_results{
        display: none;
    }
    */
</style>

<section class="site-section py-sm search-results-container">
    <div class="container ">
        <div class="row search-line pt-4">
            <div class="">
                <h3 class="mb-4 text-success">Search Results for <span id="search-keyword">"{{request('q')}}"</span></h3>
                <!-- <h4>Results found for Keyword</h4> -->
            </div>

            <!--                    search box starts here-->
            <form action="{{url('search')}}" method="get" >
                <div class="justify-content-right search-box">
                    <input type="text" name="q" placeholder="search" class="">
                    <button  type="submit" class="">Search</button>
                </div>
            </form>
        </div>
        <div>
            <ul class="nav nav-tabs d-flex justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active text-bold" data-toggle="tab" href="#profile_results">Politicians</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#post_results">Posts</a>
                </li>
            </ul>
        </div>

        <div class="row blog-entries tab-content">
            <!--------------------------------------->
            <!--   Profile result starts here-->
            <!--------------------------------------->
            <div class="col-md-12 col-lg-12 main-content tab-pane active" id="profile_results"><br>



                <div class="row justify-content-between">
                    @forelse($results as $result)
                    <div class="col-md-4  blog-entry">
                        <a href="#">
                          <img class="card-img-top img-fluid" src="{{asset($result->file)}}" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title text-center">{{$result->first_name }} {{$result->last_name }}</h4>

                            </div>

                        </a>
                    </div>

                    @empty
                    No Politician Found
                    @endforelse

                </div>





            </div>
            <!--------------------------------------->
            <!--Profile result ends here-->
            <!--------------------------------------->
            <!--.................................-->
            <!--post results starts here-->
            <!--.............................................-->
            <div class="col-md-12 col-lg-12 main-content tab-pane fade" id="post_results">
                <div class="row">

                    <!--                         Search box result starts here-->
                    <div class="col-md-12 my-1">
                        <a href="#" class="blog-entry element-animate" data-animate-effect="fadeIn">
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col  d-flex justify-content-center"><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1573068937/camera-placeholder_fo4ozm.jpg" alt="" class="img-fluid" style=""></div>
                                <div class="blog-content-body col-md-10 col-lg-10">
                                    <div class="post-meta">
                                        <span class="category">Author</span>
                                        <span class="category mr-2">Date</span>
                                    </div>
                                    <h2>Title of Post</h2>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur dicta repellat
                                        aut odio repellendus, voluptatibus exercitationem! Autem eligendi vel rem iste a nisi consequatur
                                        minima asperiores. Consequatur ipsum rem sint!</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--                         Search box result ends here-->

                    <!--                         Search box result starts here-->
                    <div class="col-md-12 my-1">
                        <a href="#" class="blog-entry element-animate" data-animate-effect="fadeIn">
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col  d-flex justify-content-center"><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1573068937/camera-placeholder_fo4ozm.jpg" alt="" class="img-fluid" style=""></div>
                                <div class="blog-content-body col-md-10 col-lg-10">
                                    <div class="post-meta">
                                        <span class="category">Author</span>
                                        <span class="category mr-2">Date</span>
                                    </div>
                                    <h2>Title of Post</h2>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur dicta repellat
                                        aut odio repellendus, voluptatibus exercitationem! Autem eligendi vel rem iste a nisi consequatur
                                        minima asperiores. Consequatur ipsum rem sint!</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--                         Search box result ends here-->

                    <!--                         Search box result starts here-->
                    <div class="col-md-12 my-1">
                        <a href="#" class="blog-entry element-animate" data-animate-effect="fadeIn">
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col  d-flex justify-content-center"><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1573068937/camera-placeholder_fo4ozm.jpg" alt="" class="img-fluid" style=""></div>
                                <div class="blog-content-body col-md-10 col-lg-10">
                                    <div class="post-meta">
                                        <span class="category">Author</span>
                                        <span class="category mr-2">Date</span>
                                    </div>
                                    <h2>Title of Post</h2>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur dicta repellat
                                        aut odio repellendus, voluptatibus exercitationem! Autem eligendi vel rem iste a nisi consequatur
                                        minima asperiores. Consequatur ipsum rem sint!</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--                         Search box result ends here-->

                    <!--                         Search box result starts here-->
                    <div class="col-md-12 my-1">
                        <a href="#" class="blog-entry element-animate" data-animate-effect="fadeIn">
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col  d-flex justify-content-center"><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1573068937/camera-placeholder_fo4ozm.jpg" alt="" class="img-fluid" style=""></div>
                                <div class="blog-content-body col-md-10 col-lg-10">
                                    <div class="post-meta">
                                        <span class="category">Author</span>
                                        <span class="category mr-2">Date</span>
                                    </div>
                                    <h2>Title of Post</h2>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur dicta repellat
                                        aut odio repellendus, voluptatibus exercitationem! Autem eligendi vel rem iste a nisi consequatur
                                        minima asperiores. Consequatur ipsum rem sint!</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--                         Search box result ends here-->

                    <!--                         Search box result starts here-->
                    <div class="col-md-12 my-1">
                        <a href="#" class="blog-entry element-animate" data-animate-effect="fadeIn">
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col  d-flex justify-content-center"><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1573068937/camera-placeholder_fo4ozm.jpg" alt="" class="img-fluid" style=""></div>
                                <div class="blog-content-body col-md-10 col-lg-10">
                                    <div class="post-meta">
                                        <span class="category">Author</span>
                                        <span class="category mr-2">Date</span>
                                    </div>
                                    <h2>Title of Post</h2>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur dicta repellat
                                        aut odio repellendus, voluptatibus exercitationem! Autem eligendi vel rem iste a nisi consequatur
                                        minima asperiores. Consequatur ipsum rem sint!</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--                         Search box result ends here-->

                    <!--                         Search box result starts here-->
                    <div class="col-md-12 my-1">
                        <a href="#" class="blog-entry element-animate" data-animate-effect="fadeIn">
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col  d-flex justify-content-center"><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1573068937/camera-placeholder_fo4ozm.jpg" alt="" class="img-fluid" style=""></div>
                                <div class="blog-content-body col-md-10 col-lg-10">
                                    <div class="post-meta">
                                        <span class="category">Author</span>
                                        <span class="category mr-2">Date</span>
                                    </div>
                                    <h2>Title of Post</h2>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur dicta repellat
                                        aut odio repellendus, voluptatibus exercitationem! Autem eligendi vel rem iste a nisi consequatur
                                        minima asperiores. Consequatur ipsum rem sint!</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--                         Search box result ends here-->




                </div>
            </div>
            <!--..........................-->
            <!--post results ends here-->
            <!--.............................................-->
            <!--****************************************************-->

        </div>
    </div>
</section>


<div class="profile-tabs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profiles</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Posts</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <div class="profiles">
                            <div class="container">
                                <div class="row">
                                    @forelse($results as $result)
                                    <div class="col-md-4">
                                        <div class="item">
                                            <img src="{{asset($result->file)}}" width="100" height="100">
                                            <p class="name">{{$result->first_name }} {{$result->last_name }}</p>
                                        </div>
                                    </div>
                                    @empty
                                    No Politician Found
                                    @endforelse

                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="tab-pane fade show " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row disp">
                            @foreach($results as $result)
                            @foreach($result->politicianpost as $read)
                            @foreach($read->post as $p)

                            <div class="col-sm-12 col-md-3 col-lg-3 cardi">
                                <a href="{{url('posts/'.$p->slug)}}">
                                    <img class="img-fluid" src="{{asset($p->file)}}">
                                    <div>
                                        <h5 class="h5 mb-2 mt-2" style="color:#1257AE">{{$p->cutTitle()}}</h5>
                                        <p class="text-dark">{{$p->cutBody()}} </p>
                                    </div>
                                </a>
                                @Auth
                                <div>
                                    <a href="#"><i class="fa fa-thumbs-up pr-3" aria-hidden="true" style="color:#1257AE"></i></a>
                                    <a href="#"><i class="fa fa-thumbs-down pr-3" aria-hidden="true" style="color:#1257AE"></i></a>
                                    <a href="#"><i class="fa fa-reply" aria-hidden="true" style="color:#1257AE"></i></a>
                                    <a href="#" onclick="window.open('http://www.facebook.com/sharer.php?u={{url('posts/'.$p->slug)}}& amp; t={{$p->title}}', 'facebookShare', 'width=626,height=436');
                                        return false;" title="Share on Facebook"><i class="fab fa-facebook  float-right" aria-hidden="true" style="color:#1257AE"></i></a>
                                    <a href="#" onclick="window.open('http://twitter.com/share?text={{$p->title}} - & amp; url={{url('posts/'.$p->slug)}}', 'twitterShare', 'width=626,height=436');
                                        return false;" title="Tweet This Post"><i class="fab fa-twitter pr-3 float-right"></i></a>
                                </div>
                                @endAuth
                            </div>

                            @endforeach
                            @endforeach
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@section('footer')
@include('layouts.footer')
@endsection
@endsection