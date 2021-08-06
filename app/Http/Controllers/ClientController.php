<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients.index');
    }
    public function store(Request $request)
    {
        // validate input
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'comments' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        // process image and store
        $image = $request->image;
        $filename = $request->name . '_' . uniqid() . '.' . $request->image->extension();
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(200, 200, function ($const) {
            $const->aspectRatio();
        });
        // save image
        $image_resize->save(storage_path('app/public/images/testimonials/' . $filename, 100));

        // save to database
        $clients = Client::create([
            'name' => $request->name,
            'address' => $request->address,
            'comments' => $request->comments,
            'image' => $filename,
        ]);

        return back()->with('status', "Your testimonial has been uploaded, Thank you very much");
    }
}
