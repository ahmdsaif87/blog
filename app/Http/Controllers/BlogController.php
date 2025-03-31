<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Routing\Controller;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\MarkdownConverter;

class BlogController extends Controller {
    public function index()
    {
        $blogs = $this->getBlogs();
        return view('components.card-blog', compact('blogs'));
    }

    public function home()
    {
        $blogs = collect($this->getBlogs())->take(2);
        return view('web.homepage', compact('blogs'));
    }

    public function blog()
    {
        $blogs = collect($this->getBlogs());
        return view('web.blog', compact('blogs'));
    }

    private function getBlogs()
    {
        $blogFiles = File::files(resource_path('views/web/blogs'));

        return collect($blogFiles)->map(function ($file) {
            return [
                'title' => pathinfo($file->getFilename(), PATHINFO_FILENAME),
                'content' => File::get($file->getPathname()),
            ];
        });
    }

    public function show($slug)
    {
        $filePath = resource_path("views/web/blogs/{$slug}.md");

        if (!File::exists($filePath)) {
            abort(404);
        }

        $markdown = File::get($filePath);

        $environment = new Environment([
            'html_input' => 'allow',
            'allow_unsafe_links' => false,
        ]);
        $environment->addExtension(new CommonMarkCoreExtension());

        $converter = new MarkdownConverter($environment);
        $content = $converter->convert($markdown)->getContent();

        return view('web.blog_detail', compact('content'));
    }
}
