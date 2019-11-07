@section('title')
<title>WikiPoli | Careers</title>
@endsection
@section('style')
<style>

/* footer {
    background: rgba(33, 60, 220, 0.1);
} */



.footer-list li  a {
    text-decoration: none;
    color: black;
    text-align: center;
}

.footer-list li{
   margin: 15px;
    
}

.footer-list {
    list-style: none;
    text-align: center;
    font-weight: bold;
    display: flex;
    height: 100%;
    justify-content: space-evenly;
    align-items: center;
    position: absolute;
    right: 5%;
    
}

.footer_brand img{
    height: 15vh;
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

    font-family: 'Lato', sans-serif;
    font-style: normal;
    font-weight: bold;
    font-size: 20px;
}
.jobs{
    margin: 50px 0;
}
.jobs h2{
    font-family: 'Lato', sans-serif;
    font-style: normal;
    font-weight: normal;
    font-size: 50px;
}
.jobs p{
    margin-top: 20px;
    margin-bottom: 50px;
    font-family: 'Lato', sans-serif;
    font-style: normal;
    font-weight: 300;
    font-size: 30px;
}
.apply-here{
    margin-top: 100px;
}
hr{
    width: 80%;
}
.no-display{
    display: none;
}
/* #footer{
    background: #6D9BF1 !important;
} */
.social-links h3 {
font-size: 1rem;
line-height: 1.5;
}
</style>
@endsection
@extends('layouts.guest')
@section('content')

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

  
    }
</style>

@endsection
@extends('layouts.guest')
@section('content')

        </div>
    </main>
@section('footer')
    @include('layouts.footer')
@endsection
@endsection