<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function AllAbout()
    {
        $alldata = About::latest()->get();

        return view('admin.backend.about.all_about', compact('alldata'));
    }

    public function AddAbout()
    {
        return view('admin.backend.about.add_about');
    }

    public function StoreAbout(Request $request)
    {
        $data = [
            'subtitle' => $request->subtitle,
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->file('image')) {
            $dir = public_path('upload/about');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['image'] = 'upload/about/'.$name_gen;
        }
        About::create($data);

        $notification = [
            'message' => 'About Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.about')->with($notification);
    }

    public function EditAbout($id)
    {
        $about = About::findOrFail($id);

        return view('admin.backend.about.edit_about', compact('about'));
    }

    public function UpdateAbout(Request $request)
    {
        $about = About::findOrFail($request->id);

        $data = [
            'subtitle' => $request->subtitle,
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->file('image')) {
            $dir = public_path('upload/about');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['image'] = 'upload/about/'.$name_gen;
        }
        $about->update($data);

        $notification = [
            'message' => 'About Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.about')->with($notification);
    }

    public function DeleteAbout($id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        $notification = [
            'message' => 'About Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.about')->with($notification);
    }
}