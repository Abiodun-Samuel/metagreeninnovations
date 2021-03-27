<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
      $metatitle = "Home | Welcome to Metagreen Innovations";
      return view('index', compact('metatitle'));
   }
   public function about(){
      $metatitle = "About Us | Metagreen Innovations";
      $innertitle = "About Us";
      return view('about', compact('metatitle', 'innertitle'));
   }
   public function contact(){
      $metatitle = "Contact Us | Metagreen Innovations";
      $innertitle = "Contact Us";
      return view('contact', compact('metatitle', 'innertitle'));
   }
   public function project(){
      $metatitle = "Our Project | Metagreen Innovations";
      $innertitle = "Projects";
      return view('project', compact('metatitle', 'innertitle'));
   }
   public function service(){
      $innertitle = "Services";
      $metatitle = "Our Services | Welcome to Metagreen Innovations";
      return view('service', compact('metatitle', 'innertitle'));
   }
}
