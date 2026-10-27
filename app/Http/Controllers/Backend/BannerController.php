<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:100',
            'video_url' => [
                'nullable',
                'url',
                'max:500',
                Rule::unique('banners', 'video_url'),
            ],
            'feature_title' => 'nullable|string|max:255',
            'feature_text' => 'nullable|string|max:255',
            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ], [
            'video_url.url' => 'Please enter a valid video link (e.g. https://youtube.com/...).',
            'video_url.unique' => 'This video link is already used on another banner.',
        ]);

        unset($data['main_image']);

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

        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:100',
            'video_url' => [
                'nullable',
                'url',
                'max:500',
                Rule::unique('banners', 'video_url')->ignore($banner->id),
            ],
            'feature_title' => 'nullable|string|max:255',
            'feature_text' => 'nullable|string|max:255',
            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ], [
            'video_url.url' => 'Please enter a valid video link (e.g. https://youtube.com/...).',
            'video_url.unique' => 'This video link is already used on another banner.',
        ]);

        unset($data['main_image']);

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
