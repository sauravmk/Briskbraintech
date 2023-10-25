<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Spatie\Sitemap\Sitemap;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = Sitemap::create();

        // Add static routes to the sitemap
        $staticRoutes = [
            route('home'),
            route('about'),
            route('contact'),
            route('portfolio'),
            route('service'),
            route('Yii'),
            route('Codeigniter'),
            route('Laravel'),
            route('Magento'),
            route('WordPress'),
            route('PHP'),
            route('Ruby'),           
            route('blog'),
            
        ];

        $sitemap->add($staticRoutes);

       
        $blogPosts = Post::all(); 
        
        foreach ($blogPosts as $post) {
            $sitemap->add(route('blogsingle', $post->slug), $post->updated_at);
        }

        return $sitemap->render();

    }
}