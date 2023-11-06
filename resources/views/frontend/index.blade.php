@extends('layouts.app')

@section('content')
@section('title', $metaTitle)
@section('meta-description', $metaDescription)
<section class="banner-outer">
    <div class="banner-slider">
        <div class="banner banner1 slide1">
            <div class="container">
                <div class="row cnt-block">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6 mobile-img">
                        <figure class="animated fadeInUp delay-06s"><img src="{{ asset('assets/frontend/img/web_vector.png') }}" class="img-slide1" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner banner2 slide2">
            <div class="container">
                <div class="row cnt-block">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6 mobile-img">
                        <figure class="animated fadeInDown delay-06s"><img src="{{ asset('assets/frontend/img/niche_vecor2.png') }}" class="img-fluid" alt=""></figure>
                        <figure class="animated fadeInRight delay-06s"><img src="{{ asset('assets/frontend/img/niche_vecor4.png') }}" class="img-slide2-02" alt=""></figure>
                        <figure class="animated fadeInUp delay-06s"><img src="{{ asset('assets/frontend/img/niche_vector1.png') }}" class="img-fluid" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner banner3 slide3">
            <div class="container">
                <div class="row cnt-block">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6 mobile-img">
                        <figure class="animated fadeInLeft delay-06s"><img src="{{ asset('assets/frontend/img/service_vector.png') }}" class="img-fluid" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-marketing padding-lg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="head-block">
                    <h2>Our Skills</h2>
                </div>
            </div>
        </div>
        <ul class="row marketing-list">
            <li class="col-md-4">
                <div class="inner">
                    <div class="icons">
                        <i class="fa fa-lightbulb-o iconskill" aria-hidden="true"></i>
                    </div>
                    <h3>Website Designing</h3>
                    <p>We create a virtual identity for your successful business in the world wide web. With 11 years of experience in creating smart and trendy designs, we provide quality web design at affordable prices.</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner">
                    <div class="icons">
                        <i class="fa fa-adjust iconskill" aria-hidden="true"></i>
                    </div>
                    <h3>Web Development</h3>
                    <p>Our team of professionals has considerable experience ranging from simple websites to complex portals. To engage users to your website right from the first halt, we develop a high-impact website design.</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner">
                    <div class="icons">
                        <i class="fa fa-mobile-phone iconskill" aria-hidden="true"></i>
                    </div>
                    <h3>Mobile App Developement</h3>
                    <p>We have a proven track record of creating an Android and iOS application for Bluetooth and Bluetooth low energy (BLE) devices. We build a smart application using iBeacon and Eddystone (UID, URI, TLM)</p>
                </div>
            </li>                    
        </ul>
        <ul class="row marketing-list list-02">
            <li class="col-md-4">
                <div class="inner">
                    <div class="icons">
                        <i class="fa fa-user-md iconskill" aria-hidden="true"></i>
                    </div>
                    <h3>Hire Resources</h3>
                    <p>Hire our expertise developer with a ton of experience in their respective domain in PHP technologies like Yii, Laravel, CodeIgniter, Magento, WordPress, Restful Secure APIs development and Third Party APIs development.</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner">
                    <div class="icons">
                        <i class="fa fa-support iconskill" aria-hidden="true"></i>
                    </div>
                    <h3>Technical Skills & Expertise</h3>
                    <p>Our skills and expertise help us take up challenging projects and come out with flying colors. Our team is thoroughly versed with modern-day programming languages PHP Frameworks like Yii, CodeIgniter, Laravel and PHP OpenSouce CMS like Magento, WordPress and Open Cart.</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner">
                    <div class="icons">
                        <i class="fa fa-shopping-cart iconskill" aria-hidden="true"></i>
                    </div>
                    <h3>E-Commerce Solution</h3>
                    <p>Avail The Perfect E-commerce Solution For An Increased Conversion Rate. We develop E-commerce Website Design And Development As Per The Latest And Futuristic Trends.</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="technologies-section">
    <div class="container">
        <h2 class="main-title">We are BriskBrain Technologies</h2>
        <div class="row">
            <div class="col-lg-6 cnt-block website-technologies">
                <h5 class="service-provider-title">Website and Mobile App Development service provider</h5>
                <p>BriskBrain Technologies is reliably serving worldwide customers for web design and development services with latest technologies, tools and skill set.</p>
                <p>Our aim is to offer the cutting edge consulting and web development services to small businesses and startups which have been available only to medium and large organizations so far.</p>
                <p>If you have a challenging product, application or service to build with a strong focus on quality, expert team and time to market, we can help you realize your vision.</p>
                <a href="#" class="know-more btn-learn-more">Learn More</a> </div>
            <div class="col-lg-6">
                <figure class="img"><img src="{{ asset('assets/frontend/img/about-briskbraintech-business.png') }}" class="img-fluid" alt=""></figure>
            </div>
        </div>
    </div>
</section>

<section class="choose-pack padding-lg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2>Core Expertise & Technical Skills</h2>
            </div>
        </div>
        <div class="roundbox">
            <div class="roundbox-part">
                <div class="chart" data-percent="99" data-scale-color="rgb(58, 27, 25)">99%</div>
                <p class="title-development">Laravel Development</p>
            </div>
            <div class="roundbox-part">
                <div class="chart magento" data-percent="98" data-scale-color="rgb(252, 84, 0)">98%</div>
                <p class="title-development">Magento Development</p>
            </div>
            <div class="roundbox-part">
                <div class="chart" data-percent="100" data-scale-color="rgb(58, 27, 25)">100%</div>
                <p class="title-development">Codeigniter Development</p>
            </div>
            <div class="roundbox-part">
                <div class="chart" data-percent="97" data-scale-color="rgb(255, 44, 47)">97%</div>
                <p class="title-development">WordPress Development</p>
            </div>
            <div class="roundbox-part">
                <div class="chart" data-percent="100" data-scale-color="rgb(255, 44, 47)">100%</div>
                <p class="title-development">Custom PHP Development</p>
            </div>
            <div class="roundbox-part">
                <div class="chart" data-percent="96" data-scale-color="rgb(255, 44, 47)">96%</div>
                <p class="title-development">Yii/Yii2 Development</p>
            </div>
        </div>
    </div>
</section>
<section class="client-speak carousel1 padding-lg">
    <div class="container">
        <div class="row justify-content-center head-block">
            <div class="col-md-10">
                <h2>What Our Clients Say</h2>
            </div>
        </div>
        <ul class="speak-listing opt1 owl-carousel">
            <li>
                <div class="inner">
                    <figure><img src="{{ asset('assets/frontend/img/unknown.png') }}" class="img-fluid rounded-circle" alt=""></figure>
                    <span class="icon-quote"></span>
                    <div class="client-detail">
                        <h4>Andre Forde</h4>
                        <span class="designation">USA</span> 
                    </div>
                    <p>“5 out of 5 stars. Always responsive and professional.”</p>
                </div>
            </li>            
            <li>
                <div class="inner">
                    <figure><img src="{{ asset('assets/frontend/img/profile_logo_22073579.jpg') }}" class="img-fluid rounded-circle" alt=""></figure>
                    <span class="icon-quote"></span>
                    <div class="client-detail">
                        <h4>Testunity</h4>
                        <span class="designation">USA</span> 
                    </div>
                    <p>“BriskBrain is too good in understanding the requirement. His technical skill is awesome. Want to hire you again.”</p>
                </div>
            </li>            
            <li>
                <div class="inner">
                    <figure><img src="{{ asset('assets/frontend/img/unknown.png') }}" class="img-fluid rounded-circle" alt=""></figure>
                    <span class="icon-quote"></span>
                    <div class="client-detail">
                        <h4>Mchibly</h4>
                        <span class="designation">Brazil</span> 
                    </div>
                    <p>“briskbrain is a very good professional.. I recommend “</p>
                </div>
            </li>
            <li>
                <div class="inner">
                    <figure><img src="{{ asset('assets/frontend/img/profile_logo_26535677.jpg') }}" class="img-fluid rounded-circle" alt=""></figure>
                    <span class="icon-quote"></span>
                    <div class="client-detail">
                        <h4>Vijay Ranganathapura</h4>
                        <span class="designation">India</span> 
                    </div>
                    <p>“Nice person. Was up to speed quickly and delivered the results on time.”</p>
                </div>
            </li>
            <li>
                <div class="inner">
                    <figure><img src="{{ asset('assets/frontend/img/unknown.png') }}" class="img-fluid rounded-circle" alt=""></figure>
                    <span class="icon-quote"></span>
                    <div class="client-detail">
                        <h4>Marlon M.</h4>
                        <span class="designation">United States</span> 
                    </div>
                    <p>“Great developer and easy to work with. Very fast resolution as well. I recommend this developer and will do other task with him since he is honest to work with!“</p>
                </div>
            </li>
            <li>
                <div class="inner">
                    <figure><img src="{{ asset('assets/frontend/img/unknown.png') }}" class="img-fluid rounded-circle" alt=""></figure>
                    <span class="icon-quote"></span>
                    <div class="client-detail">
                        <h4>Hazim N.</h4>
                        <span class="designation">Malaysia</span> 
                    </div>
                    <p>“It was pleasant to work with Manish, communications were clear and work was delivered on time.“</p>
                </div>
            </li>
            <li>
                <div class="inner">
                    <figure><img src="{{ asset('assets/frontend/img/profile_logo_15562219.jpg') }}" class="img-fluid rounded-circle" alt=""></figure>
                    <span class="icon-quote"></span>
                    <div class="client-detail">
                        <h4>Leetdave</h4>
                        <span class="designation">Philippines</span> 
                    </div>
                    <p>“Very Professional =)”</p>
                </div>
            </li>
            <li>
                <div class="inner">
                    <figure><img src="{{ asset('assets/frontend/img/profile_logo_24696770.jpg') }}" class="img-fluid rounded-circle" alt=""></figure>
                    <span class="icon-quote"></span>
                    <div class="client-detail">
                        <h4>Acheros</h4>
                        <span class="designation">Germany</span> 
                    </div>
                    <p>“A needed someone who was able to do something very specific and he was just the right man to do that.”</p>
                </div>
            </li>
            <li>
                <div class="inner">
                    <figure><img src="{{ asset('assets/frontend/img/profile_logo_19399235.jpg') }}" class="img-fluid rounded-circle" alt=""></figure>
                    <span class="icon-quote"></span>
                    <div class="client-detail">
                        <h4>Boogieyourmind</h4>
                        <span class="designation">Australia</span> 
                    </div>
                    <p>“Thanks so much. truely great work. will book you again.”</p>
                </div>
            </li>
            <li>
                <div class="inner">
                    <figure><img src="{{ asset('assets/frontend/img/profile_logo_7214273.jpg') }}" class="img-fluid rounded-circle" alt=""></figure>
                    <span class="icon-quote"></span>
                    <div class="client-detail">
                        <h4>Pal Sidhu</h4>
                        <span class="designation">Australia</span> 
                    </div>
                    <p>“Initially had confusions understanding our project, but through constant communication and trials he finally got it right, we had to spend a lot of time to make him understand but we are happy with the outcome. Will hire again, when he finally understands it all.”</p>
                </div>
            </li>
            <li>
                <div class="inner">
                    <figure><img src="{{ asset('assets/frontend/img/review-.jpeg') }}" style="max-width: 100px;" class="img-fluid rounded-circle" alt=""></figure>
                    <span class="icon-quote"></span>
                    <div class="client-detail">
                        <h4>Marc S.</h4>
                        <span class="designation">United States</span> 
                    </div>
                    <p>“Awesome job, kept cool head with the few bugs that the project developed.
                        Worked clean code, professional look.”</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="portfolio-outer"> 
    <div class="container text-center">
        <h2 class="main-title">Latest from Our Lovely Work</h2>
        <div class="isotopeFilters">
            <ul class="clearfix portfolio-filter">
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
        <ul class="clearfix row portfolio isotopeContainer">
            <li class="col-6 col-md-4 isotopeSelector business">
                <div class="inner">  
                    <div class="overlay">
                        <h2>Laravel Backend Module development</h2>
                        <p>Laravel</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/01.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/01.png') }}" class="img-responsive" alt="" loading="lazy" ></figure>
                </div>
            </li>
            <li class="col-6 col-md-4 isotopeSelector company">
                <div class="inner">
                    <div class="overlay">
                        <h2>Tarafland</h2>
                        <p>Magento</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/02.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/02.png') }}" class="img-responsive" alt="" loading="lazy" ></figure>
                </div>
            </li>
            <li class="col-6 col-md-4 isotopeSelector business">
                <div class="inner">
                    <div class="overlay">
                        <h2>Laravel ERP Development</h2>
                        <p>Laravel</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/03.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/03.png') }}" class="img-responsive" alt="" loading="lazy" ></figure>
                </div>
            </li>
            <li class="col-6 col-md-4 isotopeSelector yiitwo">
                <div class="inner">
                    <div class="overlay">
                        <h2>Qaiwa</h2>
                        <p>Yii/Yii2</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/04.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/04.png') }}" class="img-responsive" alt="" loading="lazy" ></figure>
                </div>
            </li>
            <li class="col-6 col-md-4 isotopeSelector webapp software">
                <div class="inner">
                    <div class="overlay">
                        <h2>ScanUrl</h2>
                        <p>PHP</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/05.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/05.png') }}" class="img-responsive" alt="" loading="lazy" ></figure>
                </div>
            </li>
            <li class="col-6 col-md-4 isotopeSelector company">
                <div class="inner">
                    <div class="overlay">
                        <h2>Vissco</h2>
                        <p>Magento / Web Design</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/06.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/06.png') }}" class="img-responsive" alt="" loading="lazy" ></figure>
                </div>
            </li>
            <li class="col-6 col-md-4 isotopeSelector wordpress">
                <div class="inner">
                    <div class="overlay">
                        <h2>Robert Roth</h2>
                        <p>WordPress</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/07.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/07.png') }}" class="img-responsive" alt="" loading="lazy" ></figure>
                </div>
            </li>
            <li class="col-6 col-md-4 isotopeSelector software">
                <div class="inner">
                    <div class="overlay">
                        <h2>ScanUrl</h2>
                        <p>PHP</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/08.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/08.png') }}" class="img-responsive" alt="" loading="lazy" ></figure>
                </div>
            </li>
            <li class="col-6 col-md-4 isotopeSelector company webapp">
                <div class="inner">
                    <div class="overlay">
                        <h2>Vissco</h2>
                        <p>Magento / Web Design</p>
                        <a class="galleryItem" href="{{ asset('assets/frontend/img/portfoliyo/09.png') }}"><span class="icon-expand"></span></a></div>
                    <figure><img src="{{ asset('assets/frontend/img/portfoliyo/09.png') }}" class="img-responsive" alt="" loading="lazy" ></figure>
                </div>
            </li>
        </ul>
        <a href="portfolio.html" class="know-more btn-learn-more">Full Portfolio</a>
    </div>
</section>
<section class="counter-section">
    <div class="container">
        <h2 class="text-center main-title">Our Work History</h2>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <ul class="counter-listing">
                    <li> 
                        <div class="iconbox"><i class="fa fa-sticky-note-o noteicon" aria-hidden="true"></i></div>
                        <span class="counter" data-num="70">70</span>
                        <span class="sub-title">Upwork Projects Completed</span>
                    </li>
                    <li>
                        <div class="iconbox"><i class="fa fa-hourglass-o" aria-hidden="true"></i></div>
                        <div class="couter-outer"><span class="counter" data-num="2000">2000</span><span>+</span></div>
                        <span class="sub-title">Hours Worked on Upwork</span>
                    </li>
                    <li>
                        <div class="iconbox"><i class="fa fa-bar-chart"></i></div>
                        <div class="couter-outer"><span class="counter" data-num="120">120</span><span>+</span></div>
                        <span class="sub-title">Total Projects</span>
                    </li>
                    <li>
                        <div class="iconbox"><i class="fa fa-user-o" aria-hidden="true"></i></div>
                        <div class="couter-outer"><span class="counter" data-num="11">11</span><span>+</span></div>
                        <span class="sub-title">Years Of Experience</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
   