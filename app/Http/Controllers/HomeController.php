<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\QuoteRequest;
use App\Models\PageMetadata;
use Illuminate\Http\Request;
use App\Mail\UserQuoteRequest;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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
        $title = $pageMetadata ? $pageMetadata->title : "about|Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('about', compact('metaTitle','resentpost','title', 'metaDescription'));
    }

    public function portfolio()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $title = $pageMetadata ? $pageMetadata->title : "portfolio|Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('portfolio', compact('metaTitle','resentpost','title', 'metaDescription'));
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'website' => 'string|nullable',
            'description' => 'required|string',
        ]);       
        if (!empty($request->input('honeypot'))) {            
            return redirect()->back()->with('error', 'Spam submission detected.');
        }
    
        $currentDate = now()->format('d-m');
        $subject = "Quote Request - $currentDate";
    
        Log::info('Subject to admin: ' . $subject);
    
        // Send the email to the admin
        Mail::to('hello@briskbraintech.com')->send(new QuoteRequest($validatedData, $subject));
    
        // Send a copy of the email to the user's email address
        Mail::to($validatedData['email'])->send(new UserQuoteRequest($validatedData));
        
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $title = $pageMetadata ? $pageMetadata->title : "contact|Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        return redirect('/');
    }
    
    
    public function contact()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $title = $pageMetadata ? $pageMetadata->title : "Contact | Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('contact', compact('metaTitle','resentpost','title', 'metaDescription'));
    }

    public function sendEmail(Request $request)
    {
        Mail::to('saurav.briskbrain@gmail.com')->send(new ContactFormSubmitted($request->all()));
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $title = $pageMetadata ? $pageMetadata->title : "contact|Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        //return view('contact', compact('metaTitle','resentpost', 'title','metaDescription'));
        return redirect('/thankyou');
       // return redirect()->route('thankyou');
    }

    public function Yii()
    {   
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $title = $pageMetadata ? $pageMetadata->title : "Yii|Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";


        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('yii-framework-development', compact('metaTitle','title','resentpost', 'metaDescription'));
    }

    public function Laravel()
    {   
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $title = $pageMetadata ? $pageMetadata->title : "Laravel|Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";


        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('laravel-development', compact('metaTitle','title','resentpost', 'metaDescription'));
    }

    public function Codeigniter()
    {   
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $title = $pageMetadata ? $pageMetadata->title : "Codeigniter|Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";


        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('codeigniter-development', compact('metaTitle','title','resentpost', 'metaDescription'));
    }

    public function service()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $title = $pageMetadata ? $pageMetadata->title : "service | Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";


        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('service', compact('metaTitle','title','resentpost', 'metaDescription'));
    }

    public function Magento()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $title = $pageMetadata ? $pageMetadata->title : "Magento | Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";


        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('magento-development', compact('metaTitle','title','resentpost', 'metaDescription'));
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
        $title = $pageMetadata ? $pageMetadata->title : "WordPress | Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('wordpress-development', compact('metaTitle','title','resentpost', 'metaDescription'));
    }

    public function PHP()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $title = $pageMetadata ? $pageMetadata->title : "PHP | Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";


        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('custom-php-development', compact('metaTitle','title','resentpost', 'metaDescription'));
    }
   
    public function Ruby()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $title = $pageMetadata ? $pageMetadata->title : "Ruby | Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

        // Pass the meta data to the view
        view()->share('metaTitle', $metaTitle);
        view()->share('metaDescription', $metaDescription);

        return view('ruby-development', compact('metaTitle','title','resentpost', 'metaDescription'));
    }

    public function thankyou()
    {
        $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(4);
        $routeName = Route::currentRouteName();
        $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
        $title = $pageMetadata ? $pageMetadata->title : "Contact | Briksbrain";
        $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
        $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

       

        return view('thankyou', compact('metaTitle','resentpost','title', 'metaDescription')); // Assuming 'thankyou' is the name of your view file
    }
   
}
