@section('title')
<title>WikiPoli | Search</title>
@endsection
@extends('layouts.guest')
@section('content')
<div class="clearfix"></div>
<br/>

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