<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = $this->getAllBlogPosts();
        return view('web.blog', compact('blogs'));
    }

    public function home()
    {
        $blogs = $this->getAllBlogPosts();
        $latestBlog = $blogs->first();

        return view('web.homepage', compact('blogs', 'latestBlog'));
    }

    public function show($slug)
    {
        $viewPath = 'blogs.' . str_replace('-', '_', $slug);

        if (View::exists($viewPath)) {
            return view('web.blog_detail', [
                'content' => view($viewPath)->render(),
                'title' => Str::title(str_replace('-', ' ', $slug))
            ]);
        }

        abort(404);
    }

    /**
     * Get all blog posts from Blade views only
     */
    protected function getAllBlogPosts()
    {
        $blogs = collect();

        // Get Blade-based blogs
        $bladeFiles = glob(resource_path('views/blogs/*.blade.php'));
        foreach ($bladeFiles as $file) {
            $slug = Str::slug(basename($file, '.blade.php'));
            $blogs->push([
                'slug' => $slug,
                'title' => Str::title(str_replace(['-', '_'], ' ', basename($file, '.blade.php'))),
                'content' => View::make('blogs.' . basename($file, '.blade.php'))->render(),
                'created_at' => date('d M Y H:i', filemtime($file)),
                'type' => 'blade'
            ]);
        }

        return $blogs->sortByDesc(function ($blog) {
            return strtotime($blog['created_at']);
        })->values();
    }
}
