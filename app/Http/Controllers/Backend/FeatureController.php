<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function AllFeature() {
        $alldata = Feature::all();

        return view('admin.backend.feature.all_feature' , compact('alldata'));
    }
}
