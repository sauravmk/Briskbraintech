<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\PageMetadata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class FrontendController extends Controller
{
  public function index()
  {
    $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(5);
    $routeName = Route::currentRouteName();
    $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
    $metaTitle = $pageMetadata ? $pageMetadata->title : "Top Web Development Services provider - BriskBrain Technologies";
    $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Top Web Development Service Provider Company, Laravel, Vue.js, Node.Js, Magento 2, CodeIgniter, Yii, Wordpress, Ruby onRails, ROR, Mobile app, IoT, Restful APIs, Payment Gateway, Web Design, Responsive Design, Top Web Development Company in Ahmedabad, Top Web Development Company in India";
    return view('frontend.index',compact('resentpost','metaTitle','metaDescription'));
  }

  public function blog($month = null)
  {
    $latestpost =  Post::orderBy('created_at', 'DESC')->get()->take(3);
    $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(5);
    $posts = Post::orderBy('created_at', 'DESC')->where('status', 0); //0 for Show - 1 for Hide the blog

    if ($month) {
      $posts = $posts->whereMonth('created_at', Carbon::parse($month)->month);
    }

    $posts = $posts->paginate(3);

    $archives = Post::all()
      ->groupBy(function ($date) {
        return Carbon::parse($date->created_at)->format('F Y');
      })
      ->map(function ($group) {
        return $group->take(3)->sortBy('created_at'); 
      });

    $routeName = Route::currentRouteName();
    $pageMetadata = PageMetadata::where('page_name', $routeName)->first();
    $title = $pageMetadata ? $pageMetadata->title : "WordPress | Briksbrain";
    $metaTitle = $pageMetadata ? $pageMetadata->meta_title : "Briksbrain";
    $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

    // Pass the meta data to the view
    view()->share('metaTitle', $metaTitle);
    view()->share('metaDescription', $metaDescription);

    return view('blog', compact('posts', 'latestpost', 'metaTitle','title', 'metaDescription','resentpost', 'archives'));
  }

  public function blogsingle($slug)
  {
      $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(5);
      $latestposts =  Post::orderBy('created_at', 'DESC')->get()->take(3);
      
      // Retrieve the blog post based on the slug
      $viewblogs = Post::where('slug', $slug)->first();
      
      if (!$viewblogs) {          
          abort(404);
      }      
      
      $comments = $viewblogs->comments;
  
      $archives = Post::all()
          ->groupBy(function ($date) {
              return Carbon::parse($date->created_at)->format('F Y');
          })
          ->map(function ($group) {
              return $group->sortBy('created_at');
          });
  
      return view('blogsingle', compact('viewblogs', 'latestposts', 'resentpost', 'archives', 'slug'));
  }
  

}