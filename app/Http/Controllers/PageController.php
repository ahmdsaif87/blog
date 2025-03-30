<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller {
    public function projects()
    {
        return view('web.projects');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function about()
    {
        return view('web.about');
    }
}
