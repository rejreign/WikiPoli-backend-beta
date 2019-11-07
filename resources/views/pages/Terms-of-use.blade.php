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
</style>

@endsection
@extends('layouts.guest')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-custom bg-custom">
    </nav>
    <div class="jumbotron jumbotron-fluid first">
            <div class="container">
                <h1 class="display-4">Terms of Services</h1>
            </div>
    </div>

    <div class="container my-5 second">
        <div style="display: flex; justify-content: space-between;" class="col-sm-12 col-md-12 col-xs-12">
            <h5 class="secondheader">WIKIPOLI REQUIRES CONSIDERATION FOR  ALLOWING YOU ACCESS<h5>
        </div>
        <div class="container mb-5 expand" style="overflow-y: scroll; height: 650px; margin-left: 0;">
            <p class="paragraph">
                READING AND ACCEPTING THE TERMS OF USE AND READING AND ACCEPTING THE PROVISIONS OF THE PRIVACY POLICY OF 
                wikipoli ARE REQUIRED CONSIDERATIONS FOR wikipoli GRANTING YOU THE RIGHT TO VISIT, READ OR INTERACT WITH IT.            
            <p><strong>1. YOUR AGREEMENT</strong></p>
            <p class="paragraph">ALL PERSONS ARE DENIED ACCESS TO THIS SITE UNLESS THEY READ AND ACCEPT THE TERMS OF USE AND THE PRIVACY POLICY.
                ALL PERSONS UNDER THE AGE OF 13 ARE DENIED ACCESS TO wikipoli IF YOU ARE UNDER 13 YEARS OF AGE, IT IS UNLAWFUL FOR YOU TO VISIT, 
                READ, OR INTERACT WITH wikipoli OR ITS CONTENTS IN ANY MANNER. wikipoli SPECIFICALLY DENIES ACCESS TO ANY INDIVIDUAL THAT 
                IS COVERED BY THE CHILD ONLINE PRIVACY ACT (COPA) OF 1998.
                THE TERMS OF USE AGREEMENT MAY CHANGE FROM TIME TO TIME. VISITORS HAVE AN AFFIRMATIVE DUTY, AS PART OF THE CONSIDERATION 
                FOR PERMISSION TO VIEW wikipoli, TO KEEP THEMSELVES INFORMED OF CHANGES.
            </p>

            <strong>2. HYPERLINKING TO SITE, CO-BRANDING, “FRAMING” AND REFERENCING SITE PROHIBITED</strong>
            <p class="paragraph">Unless expressly authorized by website, no one may hyperlink this site, or portions thereof, (including, but not limited to, logotypes, trademarks, branding or copyrighted material) to theirs for any reason. Further, you are not allowed to reference the url (website address) of this website in any commercial or non-commercial media without express permission, nor are you allowed to ‘frame’ the site. You specifically agree to cooperate with the Website to remove or de-activate any such activities
                 and be liable for all damages. You hereby agree to liquidated damages of US $100,000.00 plus costs and actual damages for violating this
                  provision. 
            </p>

            <strong>3. LIMITATION OF LIABILITY</strong>
            <p class="paragraph">By viewing, using, or interacting in any manner with this site, including banners, advertising, or pop-ups, downloads, and as a condition of the website to allow his lawful viewing, Visitor forever waives all right to claims of damage of any and all description based on any causal factor resulting in any possible harm,no matter how heinous or extensive, 
                whether physical or emotional, foreseeable or unforeseeable, whether personal or business in nature. 
            </p>

            <strong>4. INDEMNIFICATION,SUBMISSIONS,NOTICE</strong>
            <p class="paragraph">Visitor agrees as a condition of viewing, that any communication between Visitor and Website is deemed a submission. All submissions, including portions thereof, graphics contained thereon, or any of the content of the submission, shall become the exclusive property of the Website and may be used, without further permission, for commercial use without additional consideration of any kind. Visitor agrees to only communicate that information to the Website, 
                which it wishes to forever allow the Website to use in any manner as it sees fit. “Submissions” is also a provision of the Privacy Policy.
            </p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

@section('footer')
@include('layouts.footer')
@endsection
@endsection