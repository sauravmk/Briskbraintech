@extends('layouts.app')
@section('content')
@section('title', $metaTitle)
@section('meta-description', $metaDescription)
<section class="banner-section codeigniter-banner">
    <div class="container">
        <div class="contents">
            <h1>CodeIgniter Framework Development</h1>
        </div>
    </div>
</section>
 <section class="career-our-values-sec pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Why Choose BriskBrain for Codeigniter Development?</h3>
                <p>BriskBrain Technologies is known as the prestigious CodeIgniter development company in India. We have a name in providing immaculate, quick and secure web application development services across the globe. There is a team of highly talented CodeIgniter developers with upto 8 years of experience who have created a number of dynamic, visually attractive and feature rich web and enterprise applications. BriskBrain Technologies provide CodeIgniter development service across the globe. You can hire CodeIgniter developer from BriskBrain on full time, part time or hourly basis for your web application based project. We have served clients in more than 10 countries and have never failed in giving on time delivery with 100% clients satisfaction. We are accessible via nearly every source on the Internet 24/7, including Skype, Email, phone and IM so clients can connect our team at their comfortable time and it improves the productivity and reduces the complexity of projects. To contact our support and CodeIgniter development team or to discuss our services, please contact us at <a href="mailto:contact@briskbraintech.com" class="siteurl" target="_blank">contact@briskbraintech.com</a> or <a href="request-a-quote.html" class="siteurl">Request a Quote now!</a></p>
            </div>
        </div>
    </div>
</section>
<section class="career-our-values-sec pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Important Features Of Codeigniter Development Framework</h3>
                <ul class="our-values">
                    <li>Open Source</li>
                    <li>Light weight</li>
                    <li>Modular codebase</li>
                    <li>Customization ready admin interface</li>
                    <li>Robust and scalable</li>
                    <li>Easy programming without restrictive rules of coding</li>
                    <li>Role-based access control for user management</li>
                    <li>UI based module builder</li>
                    <li>XSS filtering and security</li>
                    <li>Easy to debug</li>
                    <li>Search engine friendly URLs</li>
                    <li>XML-RPC library</li>
                </ul>
            </div>                    
        </div>                
    </div>
</section>       
<section class="portfolio-outer padding-lg"> 
    <div class="container text-center">
        <h2 class="main-title">Related Portfolio</h2>
        <ul class="row portfolio clearfix isotopeContainer">
            <li class="col-6 col-md-4 isotopeSelector application webapp">
                <div class="inner">
                    <div class="overlay">
                        <h2>SocialFuneralFunding</h2>
                        <p>CodeIgniter / Web Design</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-ci-socialfuneralfunding.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-ci-socialfuneralfunding.png') }}" class="img-responsive" alt=""></figure>
                </div>
            </li>
            <li class="col-6 col-md-4 isotopeSelector application">
                <div class="inner">
                    <div class="overlay">
                        <h2>Fornebu Pizza</h2>
                        <p>CodeIgniter</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-fornebu-pizza.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-fornebu-pizza.png') }}" class="img-responsive" alt=""></figure>
                </div>
            </li>
            <li class="col-6 col-md-4 isotopeSelector application company">
                <div class="inner">
                    <div class="overlay">
                        <h2>Plasticblades and scraperite</h2>
                        <p>CodeIgniter / Magento</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-plasticblades.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-plasticblades.png') }}" class="img-responsive" alt=""></figure>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection