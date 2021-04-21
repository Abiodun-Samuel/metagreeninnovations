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
        $metatitle = "Our Project | Metagreen Innovations";
        $innertitle = "Project";
        return view('Project', compact('metatitle', 'innertitle'));
    }

    public function projectpage($project_page)
    {
        $metatitle = "Project | Metagreen Innovations";
        $innertitle = $project_page;
        return view('projects/' . $project_page, compact('metatitle', 'innertitle'));
    }

    public function service()
    {
        $innertitle = "Services";
        $metatitle = "Our Services | Welcome to Metagreen Innovations";
        return view('Service', compact('metatitle', 'innertitle'));
    }
}
