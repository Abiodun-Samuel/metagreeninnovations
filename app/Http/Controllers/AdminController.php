<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $projects = Project::with('user')->get();
        $admin = User::where('is_admin', 1)->get();
        $clients = Client::with('user')->get();
        return view('admin.index', compact('admin', 'clients', 'projects'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'location' => 'required|string',
            'date' => 'required|string',
            'components' => 'required',
            'components.*' => 'required|string',
        ]);

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {

                // process image and store
                $filename = $request->sub_title . '-' . uniqid() . '.' . $image->extension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(500, 350, function ($const) {
                    $const->aspectRatio();
                });

                // save image
                $image_resize->save(storage_path('app/public/images/projects/' . $filename, 100));
                // $image_resize->save('storage/images/projects/' . $filename, 100);
                $data[] = $filename;
            }
        }

        // save to database
        $project = Project::create([
            'images' => json_encode($data),
            'image_main' => $data[0],
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'location' => $request->location,
            'date' => $request->date,
            'components' => json_encode($request->components),
            'slug' => Str::slug($request->sub_title, '-'),
        ]);

        return back()->with('status', 'New project uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $components = json_decode($project->components);
        $images = json_decode($project->images);
        $metatitle = $project->sub_title;
        return view('projects.show', compact('project', 'metatitle', 'components', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $components = json_decode($project->components);
        $images = json_decode($project->images);
        $metatitle = $project->sub_title;
        return view('projects.edit', compact('project', 'metatitle', 'components', 'images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $string
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $this->validate($request, [
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'location' => 'required|string',
            'date' => 'required|string',
            'components' => 'required',
            'components.*' => 'required|string',
        ]);

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {

                // process image and store
                $filename = $request->sub_title . '-' . uniqid() . '.' . $image->extension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(500, 350, function ($const) {
                    $const->aspectRatio();
                });
                // // save image
                $image_resize->save(storage_path('app/public/images/projects/' . $filename, 100));
                // $image_resize->save('storage/images/projects/' . $filename, 100);
                $data[] = $filename;
                // save to database
                Project::where('slug', $slug)->update([
                    'images' => json_encode($data),
                    'image_main' => $data[0],
                    'title' => $request->title,
                    'sub_title' => $request->sub_title,
                    'location' => $request->location,
                    'date' => $request->date,
                    'components' => json_encode($request->components),
                    'slug' => Str::slug($request->sub_title, '-'),
                ]);
            }
        } else {
            // save to database
            Project::where('slug', $slug)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'location' => $request->location,
                'date' => $request->date,
                'components' => json_encode($request->components),
                'slug' => Str::slug($request->sub_title, '-'),
            ]);
        }



        return redirect()->route('admin.home')->with('status', 'Your project has been edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Project::where('slug', $slug)->delete();
        return back()->with('status', 'Your project has been deleted successfully');
    }
}
