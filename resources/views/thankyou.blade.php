@extends('layouts.app')
@section('title', $title)
@section('meta-title', $metaTitle)
@section('meta-description', $metaDescription)
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <style>
            .confetti {
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
                z-index: 1000;
            }

            .confetti-piece {
                position: absolute;
                width: 10px;
                height: 30px;
                background: #ffd300;
                top: 0;
                opacity: 0;
            }

            .confetti-piece:nth-child(1) {
                left: 7%;
                -webkit-transform: rotate(-40deg);
                -webkit-animation: makeItRain 1000ms infinite ease-out;
                -webkit-animation-delay: 182ms;
                -webkit-animation-duration: 1116ms;
            }

            .confetti-piece:nth-child(2) {
                left: 14%;
                -webkit-transform: rotate(4deg);
                -webkit-animation: makeItRain 1000ms infinite ease-out;
                -webkit-animation-delay: 161ms;
                -webkit-animation-duration: 1076ms;
            }

            .confetti-piece:nth-child(3) {
                left: 21%;
                -webkit-transform: rotate(-51deg);
                -webkit-animation: makeItRain 1000ms infinite ease-out;
                -webkit-animation-delay: 481ms;
                -webkit-animation-duration: 1103ms;
            }

            .confetti-piece:nth-child(4) {
                left: 28%;
                -webkit-transform: rotate(61deg);
                -webkit-animation: makeItRain 1000ms infinite ease-out;
                -webkit-animation-delay: 334ms;
                -webkit-animation-duration: 708ms;
            }

            .confetti-piece:nth-child(5) {
                left: 35%;
                -webkit-transform: rotate(-52deg);
                -webkit-animation: makeItRain 1000ms infinite ease-out;
                -webkit-animation-delay: 302ms;
                -webkit-animation-duration: 776ms;
            }

            .confetti-piece:nth-child(6) {
                left: 42%;
                -webkit-transform: rotate(38deg);
                -webkit-animation: makeItRain 1000ms infinite ease-out;
                -webkit-animation-delay: 180ms;
                -webkit-animation-duration: 1168ms;
            }

            .confetti-piece:nth-child(7) {
                left: 49%;
                -webkit-transform: rotate(11deg);
                -webkit-animation: makeItRain 1000ms infinite ease-out;
                -webkit-animation-delay: 395ms;
                -webkit-animation-duration: 1200ms;
            }

            .confetti-piece:nth-child(8) {
                left: 56%;
                -webkit-transform: rotate(49deg);
                -webkit-animation: makeItRain 1000ms infinite ease-out;
                -webkit-animation-delay: 14ms;
                -webkit-animation-duration: 887ms;
            }

            .confetti-piece:nth-child(9) {
                left: 63%;
                -webkit-transform: rotate(-72deg);
                -webkit-animation: makeItRain 1000ms infinite ease-out;
                -webkit-animation-delay: 149ms;
                -webkit-animation-duration: 805ms;
            }

            .confetti-piece:nth-child(10) {
                left: 70%;
                -webkit-transform: rotate(10deg);
                -webkit-animation: makeItRain 1000ms infinite ease-out;
                -webkit-animation-delay: 351ms;
                -webkit-animation-duration: 1059ms;
            }

            .confetti-piece:nth-child(11) {
                left: 77%;
                -webkit-transform: rotate(4deg);
                -webkit-animation: makeItRain 1000ms infinite ease-out;
                -webkit-animation-delay: 307ms;
                -webkit-animation-duration: 1132ms;
            }

            .confetti-piece:nth-child(12) {
                left: 84%;
                -webkit-transform: rotate(42deg);
                -webkit-animation: makeItRain 1000ms infinite ease-out;
                -webkit-animation-delay: 464ms;
                -webkit-animation-duration: 776ms;
            }

            .confetti-piece:nth-child(13) {
                left: 91%;
                -webkit-transform: rotate(-72deg);
                -webkit-animation: makeItRain 1000ms infinite ease-out;
                -webkit-animation-delay: 429ms;
                -webkit-animation-duration: 818ms;
            }

            .confetti-piece:nth-child(odd) {
                background: #7431e8;
            }

            .confetti-piece:nth-child(even) {
                z-index: 1;
            }

            .confetti-piece:nth-child(4n) {
                width: 5px;
                height: 12px;
                -webkit-animation-duration: 2000ms;
            }

            .confetti-piece:nth-child(3n) {
                width: 3px;
                height: 10px;
                -webkit-animation-duration: 2500ms;
                -webkit-animation-delay: 1000ms;
            }

            .follow-us-thanyou {
                list-style: none;
                /* Remove the bullet points */
                padding: 0;
                /* Remove any default padding */
                margin-top: 20px;
            }

            .follow-us-thanyou li {
                display: inline;
                /* Display list items in a horizontal line */
                margin-right: 10px;
                /* Add spacing between icons (adjust as needed) */
            }

            .follow-us-thanyou a i {
                font-size: 30px;
                /* Adjust the font size to increase the icon size */
            }

            .confetti-piece:nth-child(4n-7) {
                background: red;
            }

            @-webkit-keyframes makeItRain {
                from {
                    opacity: 0;
                }

                50% {
                    opacity: 1;
                }

                to {
                    -webkit-transform: translateY(350px);
                }


            }
        </style>
    </head>

    <body>
        <section class="technologies-section">
            <div class="confetti-container">
                <div class="container">
                    <h2 class="main-title">Thank You for Contacting Us!</h2>
                    <div class="row">
                        <div class="col-lg-12 cnt-block website-technologies">
                            <h5 class="service-provider-title-thankyou">We appreciate your feedback and will get back to you
                                as soon as possible.</h5>
                            <div class="text-center"> <!-- Add this div to center-align the link -->
                                <a href="{{ route('home') }}">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center"> <!-- Add this div to center-align the follow icons -->
                <ul class="follow-us-thanyou">
                    <li>
                        <a href="https://www.facebook.com/BriskBrainTechnologies/" target="_blank"><i class="fa fa-facebook"
                                aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="skype://manish-bhuva?chat" target="_blank"><i class="fa fa-skype"
                                aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/briskbrain/" target="_blank"><i class="fa fa-linkedin"
                                aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/BriskBrain2" target="_blank"><i class="fa fa-twitter"
                                aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </section>



        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <!-- Add more .confetti-piece elements here for more confetti pieces -->
        </div>
    </body>

    </html>

@endsection
