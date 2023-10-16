<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

    public function index()
    {   
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        return view('home',compact('resentpost'));
    }
    
    public function about()
    {
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $metaTitle = $pageMetadata ? $pageMetadata->title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('about', compact('metaTitle','resentpost', 'metaDescription'));
    }

    public function portfolio()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $metaTitle = $pageMetadata ? $pageMetadata->title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('portfolio', compact('metaTitle','resentpost', 'metaDescription'));
    }

    public function contact()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $metaTitle = $pageMetadata ? $pageMetadata->title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('contact', compact('metaTitle','resentpost', 'metaDescription'));
    }

    public function Yii()
    {   
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $metaTitle = $pageMetadata ? $pageMetadata->title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('yii-framework-development', compact('metaTitle','resentpost', 'metaDescription'));
    }

    public function Laravel()
    {   
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $metaTitle = $pageMetadata ? $pageMetadata->title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('laravel-development', compact('metaTitle','resentpost', 'metaDescription'));
    }

    public function Codeigniter()
    {   
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $metaTitle = $pageMetadata ? $pageMetadata->title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('codeigniter-development', compact('metaTitle','resentpost', 'metaDescription'));
    }

    public function service()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $metaTitle = $pageMetadata ? $pageMetadata->title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('service', compact('metaTitle','resentpost', 'metaDescription'));
    }

    public function Magento()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $metaTitle = $pageMetadata ? $pageMetadata->title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('magento-development', compact('metaTitle','resentpost', 'metaDescription'));
    }

    public function blog()
    { 
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        return view('blog');
    }

    public function WordPress()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $metaTitle = $pageMetadata ? $pageMetadata->title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('wordpress-development', compact('metaTitle','resentpost', 'metaDescription'));
    }

    public function PHP()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $metaTitle = $pageMetadata ? $pageMetadata->title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('custom-php-development', compact('metaTitle','resentpost', 'metaDescription'));
    }
   
    public function Ruby()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $metaTitle = $pageMetadata ? $pageMetadata->title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('ruby-development', compact('metaTitle','resentpost', 'metaDescription'));
    }
   
}
