<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Service;


class PagesController extends Controller
{
    public function index()
    {
        $services = Service::get(['id', 'aos', 'title', 'description']);
        $clients = Client::with('user')->get();
        $metatitle = "Home | Welcome to Metagreen Innovations";
        return view('index', compact('metatitle', 'services', 'clients'));
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
        $services = Service::get(['id', 'aos', 'title', 'description']);
        $innertitle = "Services";
        $metatitle = "Services | Metagreen Innovations";
        return view('Services', compact('metatitle', 'innertitle', 'services'));
    }
}
