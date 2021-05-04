<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function index()
    {
        $metatitle = "Home | Welcome to Metagreen Innovations";
        return view('index', compact('metatitle'));
    }
    public function about()
    {
        $metatitle = "About Us | Metagreen Innovations";
        $innertitle = "About Us";
        return view('About Us', compact('metatitle', 'innertitle'));
    }
    public function project()
    {
        $metatitle = "Projects | Metagreen Innovations";
        $innertitle = "Projects";
        return view('Projects', compact('metatitle', 'innertitle'));
    }
    public function projectpage($project_page)
    {
        $metatitle = $innertitle = $project_page;
        return view('projects/' . $project_page, compact('metatitle', 'innertitle'));
    }
    public function service()
    {
        $innertitle = "Services";
        $metatitle = "Services | Metagreen Innovations";
        return view('Services', compact('metatitle', 'innertitle'));
    }
}
