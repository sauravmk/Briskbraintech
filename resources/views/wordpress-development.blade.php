@extends('layouts.app')
@section('title', $title)
@section('meta-title', $metaTitle)
@section('meta-description', $metaDescription)
@section('content')
<section class="banner-section wordpress-banner">
    <div class="container">
        <div class="contents">
            <h1>Wordpress Development</h1>
        </div>
    </div>
</section>
<section class="career-our-values-sec pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>WordPress Website Development Services</h3>
                <p>BriskBrain Technologies is one of the leading <b>WordPress Website Development Company in Ahmedabad,</b> Gujarat, India. We provide effective web design and web development services at affordable prices.</p>
                <p>WordPress is an easy way to create your business website. In WordPress, we provide dynamic functionality for a product or category menu to easily add, delete and modify your content without IT developer.</p>
            </div>
        </div>
    </div>
</section>
<section class="career-our-values-sec pt-4 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>We Introduce WordPress:</h3>
                <p><b>WordPress</b> released in 2003, built on PHP and MySQL. It’s is free to use (Open source) for an easy way to create your website or blog. WordPress is fully content management and customizable powerful platform that grows with you. WordPress is the largest self-hosted blogging tool in the world, used on millions of websites and seen by tens of millions of people every day.</p>
                <p>WordPress is an easy way to create your business website. In WordPress, we provide dynamic functionality for a product or category menu to easily add, delete and modify your content without IT developer.</p>
            </div>
        </div>
    </div>
</section>
<section class="career-our-values-sec pt-4 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Our Achievement in WordPress plug-in</h3>
                <p>BriskBrain Technologies professional WordPress development team develop the custom plug-in, <b>to convert a WordPress URL into .html URL,</b> You can easily convert a WordPress URL into .html URL. And SEO friendly URL.</p>
            </div>
        </div>
    </div>
</section>
<section class="career-our-values-sec pt-4 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Why you Choose WordPress Website Development?</h3>
                <ul class="our-values">
                    <li>More option to choose your <b>website design</b> with eye-catching themes, also you can build custom- plugins.</li>
                    <li>In WordPress, To Custom-made designs and templates for your requirement</li>
                    <li>In WordPress to create Custom Plugins Development for your requirement</li>
                    <li>In your website easy to publish your content</li>
                    <li>Your website is work on any browser with full compliance or standards set by the W3C.</li>
                    <li>Search Engine and SEO friendly</li>
                    <li>To create any type of blog or website in WordPress like the business website, government website, magazine website, news website, and online community portal.</li>
                </ul>
            </div>                    
        </div>                
    </div>
</section>
<section class="career-our-values-sec pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Our WordPress Development Expertise</h3>
                <ul class="our-values">
                    <li>Theme integration in WordPress</li>
                    <li>WordPress Plugin Development</li>
                    <li>WordPress Customization</li>
                    <li>PSD to WordPress</li>
                    <li>HTML to WordPress</li>
                    <li>PSD to HTML</li>
                    <li>Image to WordPress</li>
                    <li>WordPress with eCommerce</li>
                    <li>Payment Gateway Integration</li>
                    <li>WooCommerce Development</li>
                    <li>And many more in WordPress…</li>
                </ul>
            </div>                    
        </div>                
    </div>
</section>        
<section class="portfolio-outer padding-lg"> 
    <div class="container text-center">
        <h2 class="main-title">Related Portfilio</h2>
        <ul class="row portfolio clearfix isotopeContainer">
            <li class="col-6 col-md-4 isotopeSelector wordpress">
                <div class="inner">
                    <div class="overlay">
                        <h2>Robert Roth</h2>
                        <p>WordPress</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/07.png') }}"><span class="icon-expand"></span></a></div>
                        <figure><img src="{{ asset('assets/frontend/img/portfoliyo/07.png') }}" class="img-responsive" alt=""></figure>
                </div>
            </li>
            <li class="col-6 col-md-4 isotopeSelector wordpress">
                <div class="inner">
                    <div class="overlay">
                        <h2>Eaprincipals</h2>
                        <p>WordPress</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-wordpress.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-wordpress.png') }}" class="img-responsive" alt=""></figure>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection