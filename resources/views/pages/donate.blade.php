@section('title')
<title>WikiPoli | Welcome</title>
@endsection
@section('style')
<style>

  
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

  
    }

    .jumbotron {
        margin-top: -2em;
        height: 20em;
        width: 100%;
        background: url("https://res.cloudinary.com/ufonumo/image/upload/v1571835995/photo-1531206715517-5c0ba140b2b8_l0vc2u.jpg");
    }

    .navbar-toggler {
        margin-top: -2em;
    }

    .fa {
        font-size: 2em;
    }

    .don {
        margin-top: 1em;
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
</style>

@endsection
@extends('layouts.guest')
@section('content')

<div class="jumbotron col-sm-12 col-md-12 col-lg-12">
            <h2 class="display-4 text-white text-center don">Make A Donation</h2>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h3 class="h2 mb-3 text-dark mt-5">Where Your Donation Goes</h3>
                    <p class="text-primary lead">Servers, bandwidth, maintenance, development. Donate to support a wide
                        variety of projects,
                        making your donation a great investment in a highly-efficient not-for-profit organization.
                        <br>
                        Wikipoli is one of the top 10 websites in the world, and it runs on a fraction of what other top
                        websites spend.
                    </p>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-5">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary m-3" href="#" role="button">N100</a>
                        <a class="btn btn-primary m-3" href="#" role="button">N200</a>
                        <a class="btn btn-primary m-3" href="#" role="button">N400</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary m-3" href="#" role="button">N500</a>
                        <a class="btn btn-primary m-3" href="#" role="button">N1000</a>
                        <a class="btn btn-light m-3" href="#" role="button">Other</a>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-dark col-sm-6 col-md-10 col-lg-9 mt-3"
                            onClick="payWithRave()">DONATE NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-4">

        <script>
        const API_publicKey = "FLWPUBK_TEST-2c7dd09d63d44deae5cbf3e9728aa289-X";

        function payWithRave() {
            var x = getpaidSetup({
                PBFPubKey: API_publicKey,
                customer_email: "user@example.com",
                amount: 2000,
                customer_phone: "234099940409",
                currency: "NGN",
                txref: "rave-123456",
                meta: [{
                    metaname: "flightID",
                    metavalue: "AP1234"
                }],
                onclose: function() {},
                callback: function(response) {
                    var txref = response.tx.txRef; // collect txRef returned and pass to a server page to complete status check.
                    console.log("This is the response returned after a charge", response);
                    if (
                        response.tx.chargeResponseCode == "00" ||
                        response.tx.chargeResponseCode == "0"
                    ) {
                        // redirect to a success page
                    } else {
                        // redirect to a failure page.
                    }

                    x.close(); // use this to close the modal immediately after payment.
                }
            });
        }
    </script>
    <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>

@section('footer')
@include('layouts.footer')
@endsection
@endsection