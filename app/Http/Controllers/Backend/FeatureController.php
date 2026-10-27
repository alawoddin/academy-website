<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function AllFeature() {
        $alldata = Feature::all();

        return view('admin.backend.feature.all_feature' , compact('alldata'));
    }

    public function AddFeature() {
        return view('admin.backend.feature.add_feature');
    }

    public function StoreFeature(Request $request) {
        $request->validate([
            'featureicon' => 'required|string|max:100',
            'featurecontent' => 'required|string|max:255',
            'featureinfo' => 'nullable|string|max:500',
            'feturebg' => 'required|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $dir = public_path('upload/feature');
        if (! is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $image = $request->file('feturebg');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img->cover(300, 64)->save($dir.'/'.$name_gen);
        $save_url = 'upload/feature/'.$name_gen;

        Feature::create([
            'featureicon'  => $request->featureicon,
            'featurecontent' => $request->featurecontent,
            'featureinfo' => $request->featureinfo,
            'feturebg' => $save_url
        ]);

        $notification = [
            'message' => 'Feature Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.feature')->with($notification);
    }

    public function EditFeature($id) {
        $feature = Feature::findOrFail($id);
        return view('admin.backend.feature.edit_feature', compact('feature'));
    }

    public function UpdateFeature(Request $request) {
        $feature_id = $request->id;
        $feature = Feature::findOrFail($feature_id);

        $request->validate([
            'featureicon' => 'required|string|max:100',
            'featurecontent' => 'required|string|max:255',
            'featureinfo' => 'nullable|string|max:500',
            'feturebg' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        if ($request->file('feturebg')) {
            $dir = public_path('upload/feature');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('feturebg');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->cover(300, 64)->save($dir.'/'.$name_gen);
            $save_url = 'upload/feature/'.$name_gen;

            $feature->update([
                'featureicon'  => $request->featureicon,
                'featurecontent' => $request->featurecontent,
                'featureinfo' => $request->featureinfo,
                'feturebg' => $save_url
            ]);
        } else {
            $feature->update([
                'featureicon'  => $request->featureicon,
                'featurecontent' => $request->featurecontent,
                'featureinfo' => $request->featureinfo,
            ]);
        }

        $notification = [
            'message' => 'Feature Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.feature')->with($notification);
    }

    public function DeleteFeature($id) {
        $feature = Feature::findOrFail($id);
        $feature->delete();

        $notification = [
            'message' => 'Feature Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.feature')->with($notification);
    }
}
