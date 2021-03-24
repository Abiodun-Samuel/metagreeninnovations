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
      $metatitle = "About Us | Welcome to Metagreen Innovations";
      return view('about', compact('metatitle'));
   }
   public function project(){
      $metatitle = "Our Project | Welcome to Metagreen Innovations";
      return view('project', compact('metatitle'));
   }
}
