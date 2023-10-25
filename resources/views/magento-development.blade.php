@extends('layouts.app')
@section('title', $title)
@section('meta-title', $metaTitle)
@section('meta-description', $metaDescription)
@section('content')
    <section class="banner-section magento-banner">
        <div class="container">
            <div class="contents">
                <h1>Magento Ecommerce Development</h1>
            </div>
        </div>
    </section>
    <section class="career-our-values-sec pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Magento Development Company</h3>
                    <p>BriskBrain is the best Magento Development Company India having expert Magento developers and
                        designers. As a Magento Development service provider, we are expert in website design and e-commerce
                        website development. We are the top rated company for Magento Development in India. Magento is an
                        opensource eCommerce CMS for developing e-commerce websites. Magento is the most advanced eCommerce
                        CMS platforms. We have a proven track record in delivering successful Magento Web solutions. We are
                        having our development center in USA, UK, UAE, Netherland and Germany. Web Development India being
                        the best Magento Development Company in India go the extra mile to understand your business
                        requirements and give you the best solution. We have been working with Magento Platform for various
                        small, medium or large projects/website. We are compatible to work full time, part time, hourly rate
                        and even on a fixed cost project basis. We are very experienced to develop e-commerce website based
                        on Magento Platform.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="career-our-values-sec pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Magento Development Company India</h3>
                    <ul class="our-values">
                        <li>Magento Website Development</li>
                        <li>Magento 2.0 Development</li>
                        <li>E-commerce Website Development</li>
                        <li>Magento Upgrade to 2.0</li>
                        <li>Magento Extension Development</li>
                        <li>PSD To Magento Development</li>
                        <li>Magento E-commerce Website Speed Optimization</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio-outer padding-lg">
        <div class="container text-center">
            <h2 class="main-title">Related Portfilio</h2>
            <ul class="row portfolio clearfix isotopeContainer">
                <li class="col-6 col-md-4 isotopeSelector company">
                    <div class="inner">
                        <div class="overlay">
                            <h2>Tarafland</h2>
                            <p>Magento</p>
                            <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/02.png') }}"><span
                                    class="icon-expand"></span></a>
                        </div>
                        <figure><img src="{{ asset('assets/frontend/img/portfoliyo/02.png') }}" class="img-responsive"
                                alt=""></figure>
                    </div>
                </li>
                <li class="col-6 col-md-4 isotopeSelector company">
                    <div class="inner">
                        <div class="overlay">
                            <h2>Fanous</h2>
                            <p>Magento</p>
                            <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/06.png') }}"><span
                                    class="icon-expand"></span></a>
                        </div>
                        <figure><img src="{{ asset('assets/frontend/img/portfoliyo/06.png') }}" class="img-responsive"
                                alt=""></figure>
                    </div>
                </li>
                <li class="col-6 col-md-4 isotopeSelector company webapp">
                    <div class="inner">
                        <div class="overlay">
                            <h2>Vissco</h2>
                            <p>Magento / Web Design</p>
                            <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/09.png') }}"><span
                                    class="icon-expand"></span></a>
                        </div>
                        <figure><img src="{{ asset('assets/frontend/img/portfoliyo/09.png') }}" class="img-responsive"
                                alt="">
                        </figure>
                    </div>
                </li>
            </ul>
        </div>
    </section>

@endsection
