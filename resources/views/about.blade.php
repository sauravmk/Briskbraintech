@extends('layouts.app')
@section('content')
@section('title', $title)
@section('meta-title', $metaTitle)
@section('meta-description', $metaDescription)
<section class="banner-section about-banner">
    <div class="container">
        <div class="contents">
            <h1>About Us</h1>
            <p>High-End and Cost-Effective Website Development Service to Success Your Business</p>
        </div>
    </div>
</section>
<section class="content-marketing padding-lg">
    <div class="container">
        <ul class="row marketing-list">
            <li class="col-md-4">
                <div class="inner">
                    <div class="icons">
                        <i class="fa fa-lightbulb-o iconskill" aria-hidden="true"></i>
                    </div>
                    <h3>Business Solutions</h3>
                    <p>You and your clients will love the clean and simple design as well as broad spectrum functionality of BriskBrain</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner">
                    <div class="icons">
                        <i class="fa fa-adjust iconskill" aria-hidden="true"></i>
                    </div>
                    <h3>Web Development</h3>
                    <p>You and your clients will love the clean and simple design as well as broad spectrum functionality of BriskBrain</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner">
                    <div class="icons">
                        <i class="fa fa-user-md iconskill" aria-hidden="true"></i>
                    </div>
                    <h3>Top Notch Support</h3>
                    <p>You and your clients will love the clean and simple design as well as broad spectrum functionality of BriskBrain</p>
                </div>
            </li>                    
        </ul>
    </div>
</section>
<section class="about-company-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-company">
                    <h3>About the  company</h3>
                    <p>BriskBrain specializes in custom Web development, custom PHP development and Mobile applications. We love and take pride in our work. Pixel perfection and stunning design are our highly valued goals in all our projects.</p>
                    <p>Have an exciting project in mind? We sure want to hear about it. Don’t hesitate to contact us with your thoughts and ideas, we would love to take part in achieving your dream project.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ourskill">
                    <h3>Our Skills</h3>
                    <div class="ourskill-slider">
                        <h4 class="title-graphic">Graphic Design</h4>
                        <div class="fullwidth-slider">
                            <div class="ourskillbar graphic-bar">
                                <p class="pricetitle">86%</p>
                            </div>
                        </div>
                        <h4 class="title-graphic">Web Development</h4>
                        <div class="fullwidth-slider">       
                            <div class="ourskillbar web-bar">
                                <p class="pricetitle">92%</p>
                            </div>
                        </div>
                        <h4 class="title-graphic">Mobile Applications</h4>       
                        <div class="fullwidth-slider">
                            <div class="ourskillbar mobile-bar">
                                <p class="pricetitle">78%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="counter-section">
    <div class="container">
        <h2 class="main-title text-center">Our Story</h2>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <ul class="counter-listing">
                    <li> 
                        <div class="iconbox"><i class="fa fa-sticky-note-o noteicon" aria-hidden="true"></i></div>
                        <span class="counter" data-num="2021">2021</span>
                        <span class="sub-title">Established In</span>
                    </li>
                    <li>
                        <div class="iconbox"><i class="fa fa-hourglass-o" aria-hidden="true"></i></div>
                        <div class="couter-outer"><span class="counter" data-num="10">10</span><span>+</span></div>
                        <span class="sub-title">Clients World Wide</span>
                    </li>
                    <li>
                        <div class="iconbox"><i class="fa fa-bar-chart"></i></div>
                        <div class="couter-outer"><span class="counter" data-num="120">120</span><span>+</span></div>
                        <span class="sub-title">Projects Completed</span>
                    </li>
                    <li>
                        <div class="iconbox"><i class="fa fa-user-o" aria-hidden="true"></i></div>
                        <div class="couter-outer"><span class="counter" data-num="5">5</span><span>+</span></div>
                        <span class="sub-title">Team Members</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
       