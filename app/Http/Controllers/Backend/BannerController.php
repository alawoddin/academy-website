<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function AllBanner()
    {
        $alldata = Banner::latest()->get();

        return view('admin.backend.banner.all_banner', compact('alldata'));
    }

    public function AddBanner()
    {
        return view('admin.backend.banner.add_banner');
    }

    public function StoreBanner(Request $request)
    {
        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'button_text' => $request->button_text,
            'video_url' => $request->video_url,
            'feature_title' => $request->feature_title,
            'feature_text' => $request->feature_text,
        ];

        if ($request->file('main_image')) {
            $dir = public_path('upload/banner');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('main_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['main_image'] = 'upload/banner/'.$name_gen;
        }
        Banner::create($data);

        $notification = [
            'message' => 'Banner Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.banner')->with($notification);
    }

    public function EditBanner($id)
    {
        $banner = Banner::findOrFail($id);

        return view('admin.backend.banner.edit_banner', compact('banner'));
    }

    public function UpdateBanner(Request $request)
    {
        $banner = Banner::findOrFail($request->id);

        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'button_text' => $request->button_text,
            'video_url' => $request->video_url,
            'feature_title' => $request->feature_title,
            'feature_text' => $request->feature_text,
        ];

        if ($request->file('main_image')) {
            $dir = public_path('upload/banner');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('main_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['main_image'] = 'upload/banner/'.$name_gen;
        }
        $banner->update($data);

        $notification = [
            'message' => 'Banner Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.banner')->with($notification);
    }

    public function DeleteBanner($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        $notification = [
            'message' => 'Banner Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.banner')->with($notification);
    }
}