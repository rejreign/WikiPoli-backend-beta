@section('title')
<title>WikiPoli | Search</title>
@endsection
@extends('layouts.postList')
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
                        <div class="container main">
                            <div class="row">
                                @foreach($results as $reault)
                                @foreach($result->politicianpost as $read)
                                @foreach($read->post as $p)

                                <div class="col-sm col-md-5" id="post-1">
                                    <div class="post">
                                        <h4>ProfErons</h4>
                                        <p><strong>Felatoye Durotoye</strong>  is a Leadership Expert, Motivational Speaker . Lorem ipsumsit amet, consectetur adipiscing elsit amet, consectetur adipiscing elsit amet, consectetur adipiscing el  <a href="">Read More</a>
                                        </p>
                                    </div>
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
</div>



@endsection