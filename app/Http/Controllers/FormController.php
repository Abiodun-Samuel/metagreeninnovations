<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function forms($form_page){
      $metatitle = $form_page;
      $innertitle =$form_page;
      return view('forms.form', compact('metatitle', 'innertitle'));
    }
}
