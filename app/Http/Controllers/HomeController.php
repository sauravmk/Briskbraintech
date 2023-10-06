<?php

namespace App\Http\Controllers;

use App\Models\PageMetadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function about()
    {
       
        $routeName = Route::currentRouteName();       
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();       
        $metaTitle = $pageMetadata ? $pageMetadata->title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('about', compact('metaTitle', 'metaDescription'));
    }


    public function portfolio()
    {
        return view('portfolio');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }
    public function service()
    {
        return view('service');
    }
    public function  Yii()
    {
        return view('yii-framework-development');
    }
    public function  Codeigniter()
    {
        return view('codeigniter-development');
    }
    public function  Laravel()
    {
        return view('laravel-development');
    }
    public function  Magento()
    {
        return view('magento-development');
    }
    public function  WordPress()
    {
        return view('wordpress-development');
    }
    public function  PHP()
    {
        return view('custom-php-development');
    }
    public function  Ruby()
    {
        return view('ruby-development');
    }
}
