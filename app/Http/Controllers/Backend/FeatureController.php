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
        
     if ($request->file('feturebg')) {
        $image = $request->file('feturebg');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img->resize(300,64)->save(public_path('upload/feature/'.$name_gen));
        $save_url = 'upload/feature/'.$name_gen;

        // Create Feature
        Feature::create([
            'featureicon'  => $request->featureicon,
            'featurecontent' => $request->featurecontent,
            'featureinfo' => $request->featureinfo,
            'feturebg' => $save_url
        ]);

        
    }

    $notification = [
        'message' => 'Feature Inserted Successfully',
        'alert-type' => 'success'
    ];

    return redirect()->route('all.feature')->with($notification);

    }
}
