@extends('layouts.app')
@section('content')
    <section class="banner-section blog-banner">
        <div class="container">
            <div class="contents">
                <h1>Blog</h1>
                <p>Do you want to discuss your project with us? Well, give us a call,
                    send us an email or fill out below form.</p>
            </div>
        </div>
    </section>
    <section class="blog-section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="blog-content">
                        <ul class="blog-content-common">
                            <h4 class="mb-0">{!! $viewblogs->name !!}</h4>
                            <li class="pb-2">
                                <figure class="blog-pic">
                                    <img class="img-fluid" src="{{ $viewblogs->image }}"
                                        alt="">
                                </figure>
                                <p class="time">{{ $viewblogs->created_at->format('m/d/Y') }}</p>
                                <h5>{{ $viewblogs->name }}</h5>
                                <div class="overflow-auto p-3 bg-light" style="max-width: 1160px; max-height: 1000px">
                                    <p>{!! $viewblogs->description !!}</p>
                                </div>
                               
                                <div class="social-media-box socialbox">
                                    <ul>
                                        <li><a target="_blank" href="https://www.facebook.com/BriskBrainTechnologies/"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" href="https://www.linkedin.com/company/briskbrain/"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                        <li><a target="_blank" href="https://twitter.com/BriskBrain2"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank"
                                                href="https://www.addtoany.com/add_to/email?linkurl=https%3A%2F%2Fwww.briskbraintech.com%2Fbuilding-a-crud-system-using-laravel-8-laravel-orion-angular-11-jwt%2F&linkname=Building%20a%20CRUD%20system%20using%20Laravel%208%2C%20Laravel%20Orion%2C%20Angular%2011%20%26%20JWT&linknote="><i
                                                    class="fa fa-envelope"></i></a></li>
                                      {{--   <li><a target="_blank"
                                                href="https://www.addtoany.com/add_to/whatsapp?linkurl=https%3A%2F%2Fwww.briskbraintech.com%2Fbuilding-a-crud-system-using-laravel-8-laravel-orion-angular-11-jwt%2F&linkname=Building%20a%20CRUD%20system%20using%20Laravel%208%2C%20Laravel%20Orion%2C%20Angular%2011%20%26%20JWT&linknote="><i
                                                    class="fa fa-whatsapp"></i></a></li> --}}
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <aside class="col-md-4 col-lg-3">
                    <div class="blog-sidebar">
                        <div class="cmn-box archive blog-content-common">
                            <h4>Recent Posts</h4>
                            @foreach ($latestposts as $latestitems)
                                <div class="article-box">
                                    <div class="image-blog">
                                        <div class="overlay">
                                            <a class="galleryItem"
                                                href="{{  $latestitems->image }}"><span
                                                    class="icon-expand"></span></a>
                                        </div>
                                        <figure class="blog-pic"><img class="img-fluid img-blogimage"
                                                src="{{ $latestitems->image }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <a class="blog-title" text-decoration="none"
                                        href="{{ $latestitems->post_id }}">{{ $latestitems->name }}</a>
                                    <p class="time fa fa-calendar">{{ $latestitems->created_at->format('F d, Y') }}</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="cmn-box archive">
                            <h4>Archives</h4>
                            <ul>
                                @foreach ($archives as $month => $posts)
                                    <li>
                                        <a href="#" class="month-link">{{ $month }}</a>
                                        <ul class="post-submenu" style="display: none">
                                            @foreach ($posts as $post)
                                                <li><a
                                                        href="{{ route('blogsingle', ['post_id' => $post->post_id]) }}">{{ $post->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="cmn-box">
                            <h4>Pages</h4>
                            <ul>
                                <li><a href="{{ url('home') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About</a></li>
                                <li><a href="{{ url('service') }}">Services</a></li>
                                <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                                <li><a href="{{ url('blog') }}">Blog</a></li>
                                <li><a href="{{ url('contact') }}">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Add click event listener to month links
        $('.month-link').click(function(event) {
            event.preventDefault(); // prevent default link behavior
            var submenu = $(this).next('.post-submenu');
            if (submenu.is(':visible')) {
                submenu.hide();
            } else {
                submenu.show();
            }
        });
    });
</script>