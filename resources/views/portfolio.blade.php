@extends('layouts.app')
@section('title', $title)
@section('meta-title', $metaTitle)
@section('meta-description', $metaDescription)
@section('content')
<section class="banner-section portfolio-banner">
            <div class="container">
                <div class="contents">
                    <h1>Our Portfolio</h1>
                </div>
            </div>
        </section>        
        <section class="portfolio-outer padding-lg"> 
            <div class="container text-center">
                <h2 class="main-title">Portfolio</h2>
                <div class="isotopeFilters">
                    <ul class="portfolio-filter clearfix">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".application">CodeIgniter</a></li>
                        <li><a href="#" data-filter=".business">Laravel</a></li>
                        <li><a href="#" data-filter=".company">Magento</a></li>
                        <li><a href="#" data-filter=".software">PHP</a></li>
                        <li><a href="#" data-filter=".webapp">Web Design</a></li>
                        <li><a href="#" data-filter=".wordpress">WordPress</a></li>
                        <li><a href="#" data-filter=".yiitwo">Yii/Yii2</a></li>
                    </ul>
                </div>
                <ul class="row portfolio clearfix isotopeContainer">
                    <li class="col-6 col-md-4 isotopeSelector company">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Princetoncryo</h2>
                                <p>Magento</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-princetoncryo.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-princetoncryo.png') }}" class="img-responsive" alt=""></figure>
                        </div>
                    </li>
                    <li class="col-6 col-md-4 isotopeSelector wordpress">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Robert Roth</h2>
                                <p>WordPress</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/07.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/07.png') }}" class="img-responsive" alt=""></figure>
                        </div>
                    </li>
                    <li class="col-6 col-md-4 isotopeSelector yiitwo">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Foodmirch</h2>
                                <p>Yii/Yii2</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-yii-1.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-yii-1.png') }}" class="img-responsive" alt=""></figure>
                        </div>
                    </li>
                    <li class="col-6 col-md-4 isotopeSelector yiitwo">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Qaiwa</h2>
                                <p>Yii/Yii2</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/04.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/04.png') }}" class="img-responsive" alt=""></figure>
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
                    <li class="col-6 col-md-4 isotopeSelector company">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Lipogun</h2>
                                <p>Magento</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-magento.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-magento.png') }}" class="img-responsive" alt=""></figure>
                        </div>
                    </li>
                    <li class="col-6 col-md-4 isotopeSelector company">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Fanous</h2>
                                <p>Magento</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/06.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/06.png') }}" class="img-responsive" alt=""></figure>
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
                    <li class="col-6 col-md-4 isotopeSelector company">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Nantucketbrand</h2>
                                <p>Magento</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-nantucketbrand.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-nantucketbrand.png') }}" class="img-responsive" alt=""></figure>
                        </div>
                    </li>
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
                                <h2>FashionWhistle</h2>
                                <p>CodeIgniter</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-codeigniter.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-codeigniter.png') }}" class="img-responsive" alt=""></figure>
                        </div>
                    </li>
                    <li class="col-6 col-md-4 isotopeSelector business">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Laravel ERP Development</h2>
                                <p>Laravel</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/03.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/03.png') }}" class="img-responsive" alt=""></figure>
                        </div>
                    </li>
                    <li class="col-6 col-md-4 isotopeSelector yiitwo">
                        <div class="inner">
                            <div class="overlay">
                                <h2>InQfy</h2>
                                <p>Yii/Yii2</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-inqfy.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-inqfy.png') }}" class="img-responsive" alt=""></figure>
                        </div>
                    </li>
                    <li class="col-6 col-md-4 isotopeSelector company">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Tarafland</h2>
                                <p>Magento</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/02.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/02.png') }}" class="img-responsive" alt=""></figure>
                        </div>
                    </li>
                    <li class="col-6 col-md-4 isotopeSelector business">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Laravel Backend Module development</h2>
                                <p>Laravel</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/01.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/01.png') }}" class="img-responsive" alt=""></figure>
                        </div>
                    </li>
                    <li class="col-6 col-md-4 isotopeSelector yiitwo">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Crowdreviews</h2>
                                <p>Yii/Yii2</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-yii2.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-yii2.png') }}" class="img-responsive" alt=""></figure>
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
                    <li class="col-6 col-md-4 isotopeSelector company webapp">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Vissco</h2>
                                <p>Magento / Web Design</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/09.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/09.png') }}" class="img-responsive" alt=""></figure>
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
                    <li class="col-6 col-md-4 isotopeSelector webapp software">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Nativementor</h2>
                                <p>PHP / Web Design</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/05.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/05.png') }}" class="img-responsive" alt=""></figure>
                        </div>
                    </li>
                    <li class="col-6 col-md-4 isotopeSelector company">
                        <div class="inner">
                            <div class="overlay">
                                <h2>Royalwholesalecandy</h2>
                                <p>Magento</p>
                                <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-royalwholesalecandy.png') }}"><span class="icon-expand"></span></a></div>
                            <figure><img src="{{ asset('assets/frontend/img/portfoliyo/briskbraintech-royalwholesalecandy.png') }}" class="img-responsive" alt=""></figure>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
@endsection