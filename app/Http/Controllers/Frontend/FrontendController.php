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
    return view('frontend.index',compact('resentpost'));
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
    $metaTitle = $pageMetadata ? $pageMetadata->title : "Briksbrain";
    $metaDescription = $pageMetadata ? $pageMetadata->meta_description : "Learn more about our high-end and cost-effective website development services at BriskBrain.";

    // Pass the meta data to the view
    view()->share('metaTitle', $metaTitle);
    view()->share('metaDescription', $metaDescription);

    return view('blog', compact('posts', 'latestpost', 'metaTitle', 'metaDescription','resentpost', 'archives'));
  }

  public function blogsingle($post_id)
  { 
    $resentpost = Post::orderBy('created_at', 'DESC')->get()->take(5);
    $latestposts =  Post::orderBy('created_at', 'DESC')->get()->take(3);
    $viewblogs = Post::find($post_id);

    $archives = Post::all()
      ->groupBy(function ($date) {
        return Carbon::parse($date->created_at)->format('F Y');
      })
      ->map(function ($group) {
        return $group->sortBy('created_at');
      });

    return view('blogsingle', compact('viewblogs', 'latestposts','resentpost', 'archives', 'post_id'));
  }
}
