<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function AllBrand()
    {
        $alldata = Brand::latest()->get();

        return view('admin.backend.brand.all_brand', compact('alldata'));
    }

    public function AddBrand()
    {
        return view('admin.backend.brand.add_brand');
    }

    public function StoreBrand(Request $request)
    {
        $data = [
            'name' => $request->name,
        ];

        if ($request->file('image')) {
            $dir = public_path('upload/brand');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['image'] = 'upload/brand/'.$name_gen;
        }
        Brand::create($data);

        $notification = [
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.brand')->with($notification);
    }

    public function EditBrand($id)
    {
        $brand = Brand::findOrFail($id);

        return view('admin.backend.brand.edit_brand', compact('brand'));
    }

    public function UpdateBrand(Request $request)
    {
        $brand = Brand::findOrFail($request->id);

        $data = [
            'name' => $request->name,
        ];

        if ($request->file('image')) {
            $dir = public_path('upload/brand');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['image'] = 'upload/brand/'.$name_gen;
        }
        $brand->update($data);

        $notification = [
            'message' => 'Brand Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.brand')->with($notification);
    }

    public function DeleteBrand($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        $notification = [
            'message' => 'Brand Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.brand')->with($notification);
    }
}