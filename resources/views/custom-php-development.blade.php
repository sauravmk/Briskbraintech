@extends('layouts.app')
@section('title', $title)
@section('meta-title', $metaTitle)
@section('meta-description', $metaDescription)
@section('content')
<section class="banner-section php-banner">
    <div class="container">
        <div class="contents">
            <h1>Custom PHP Development</h1>
        </div>
    </div>
</section>
<section class="career-our-values-sec pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>PHP Web Application Development Services</h3>
                <p>BriskBrain Technologies is the best PHP development company in India known for building dynamic, database-driven and high performance enterprise web systems. With our expertise and experience, we have built online business applications, e-commerce systems, collaborative networking systems, content management systems or back-end systems for data management. We make the best use of agile methodologies and leverage a wide range of PHP frameworks and databases to build enterprise applications.</p>
            </div>
        </div>
    </div>
</section>
<section class="career-our-values-sec pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Our Expertise</h3>
                <ul class="our-values">
                    <li>We make complete use of this open source scripting language to create lively web pages.</li>
                    <li>We make use of the latest development methods in MySQL and PHP to design database driven custom Web Apps that can help your business grow.</li>
                    <li>We provide turnkey solutions to satisfy your unique requirements. Our team of PHP experts has built several database driven applications along with custom PHP scripts.</li>
                    <li>Our experts follow the proper documentation for every code and try to keep the codes simple as it proves to be time-saving.</li>
                </ul>
            </div>                    
        </div>                
    </div>
</section>
<section class="portfolio-outer padding-lg"> 
    <div class="container text-center">
        <h2 class="main-title">Related Portfilio</h2>
        <ul class="row portfolio clearfix isotopeContainer">
            <li class="col-6 col-md-4 isotopeSelector webapp software">
                <div class="inner">
                    <div class="overlay">
                        <h2>Nativementor</h2>
                        <p>PHP / Web Design</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/05.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/05.png') }}" class="img-responsive" alt=""></figure>
                </div>
            </li>
            <li class="col-6 col-md-4 isotopeSelector software">
                <div class="inner">
                    <div class="overlay">
                        <h2>ScanUrl</h2>
                        <p>PHP</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/08.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/08.png') }}" class="img-responsive" alt=""></figure>
                </div>
            </li>
        </ul>
    </div>
</section>

@endsection