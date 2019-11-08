@section('title')
<title>WikiPoli | Search</title>
@endsection
@extends('layouts.guest')
@section('style')
<style>
    html,
        body {
            min-height: 100%
        }

        body {
            background: #f6f6f6;
            font-family: 'Nunito', segoe UI, sans-serif;
        }


        .search-results-container {
            background-color: #fff
        }

        #header {
            width: 100%;
            padding: 0;
        }

        #header #navbar {
            padding: 0;
        }

        #header .logo img {
            width: 150px;
        }

        #header .navbar p {
            font-size: 2rem;
            color: #6D9BF1;
        }

        #header .menu .nav-link {
            font-size: 1.1rem;
            color: rgba(0, 0, 0, 0.7);
            transition: 0.4s ease-out;
        }

        #header .menu .nav-link:hover {
            color: blue;
        }

        #header .menu #nav-register {
            background-color: #1257AE;
            align-self: center;
            color: white;
            padding: 0.4rem 1.5rem;
        }

        #header .menu #nav-register:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        }

        #header .menu li {
            margin-left: 2.2rem;
        }

        #header .fa-bars {
            color: #000000;
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
</style>
@endsection
@section('content')

<section class="site-section py-sm search-results-container">
        <div class="container ">
            <div class="row search-line pt-4">
                <div class="">
                    <h3 class="mb-4 text-success">Search Results for <span id="search-keyword">"KeyWord"</span></h3>
                    <!-- <h4>Results found for Keyword</h4> -->
                </div>

                <!--                    search box starts here-->
                <form action="{{url('search')}}" method="get">
                <div class="justify-content-right search-box">
                    <input type="text" placeholder="search" class="">
                    <button class="">Search</button>
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
                        <div class="card col-lg-3 col-12 col-md-4 mb-5 blog-entry"><a href="#">
                                <img class="card-img-top img-fluid" src="{{asset($result->file)}}" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title text-center">{{$result->first_name }} {{$result->last_name }}</h4>

                                </div>
                            </a>
                        </div>
                    @empty
                    No Record Of Politician
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
                            @foreach($results as $result)
                            @foreach($result->politicianpost as $read)
                            @foreach($read->post as $p)

                            <a href="{{url('posts/'.$p->slug)}}" class="blog-entry element-animate" data-animate-effect="fadeIn">   
                                <div class="row">
                                    <div class="col-md-2 col-lg-2 col  d-flex justify-content-center"><img src="{{asset($p->file)}}" alt="{{$p->cutTitle()}}" class="img-fluid" style=""></div>
                                    <div class="blog-content-body col-md-10 col-lg-10">
                                        <div class="post-meta">
                                            <span class="category">Author</span>
                                            <span class="category mr-2">Date</span> 
                                            <!-- <span class="ml-2"><span class="fa fa-comments"></span> {{post.comments.count}}</span> -->
                                        </div>
                                        <h2>{{$p->cutTitle()}}</h2>
                                        <p>{{$p->cutBody()}}</p>
                                    </div>
                                </div>
                            </a>

                            @endforeach
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

@section('footer')
@include('layouts.footer')
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection