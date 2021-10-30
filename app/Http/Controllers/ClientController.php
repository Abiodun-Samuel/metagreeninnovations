<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Mail\ClientMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        // $image_resize->save('storage/images/testimonials/' . $filename, 100);

        // save to database
        $clients = Client::create([
            'name' => $request->name,
            'address' => $request->address,
            'comments' => $request->comments,
            'image' => $filename,
        ]);

        $data = [$request->name, $request->comments];
        Mail::to('contact@metagreeninnovations.com')->send(new ClientMessage($data));

        return back()->with('status', "Your testimonial has been uploaded, Thank you very much");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::where('id', $id)->first();
        $metatitle = $client->name;
        return view('clients.edit', compact('metatitle', 'client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate input
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'comments' => 'required|string',
            'image' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasfile('image')) {
            // process image and store
            $image = $request->image;
            $filename = $request->name . '_' . uniqid() . '.' . $request->image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(200, 200, function ($const) {
                $const->aspectRatio();
            });
            // save image
            $image_resize->save(storage_path('app/public/images/testimonials/' . $filename, 100));
            // $image_resize->save('storage/images/testimonials/' . $filename, 100);


            // save to database
            Client::where('id', $id)->update([
                'name' => $request->name,
                'address' => $request->address,
                'comments' => $request->comments,
                'image' => $filename,
            ]);
        } else {
            // save to database
            Client::where('id', $id)->update([
                'name' => $request->name,
                'address' => $request->address,
                'comments' => $request->comments,
            ]);
        }

        return redirect()->route('admin.home')->with('status', 'Testimonial has been edited successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::where('id', $id)->first();
        $metatitle = $client->name;
        return view('clients.show', compact('metatitle', 'client'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::where('id', $id)->delete();
        return redirect()->route('admin.home')->with('status', 'Testimonial has been deleted successfully');
    }
}
