<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\JoinApplication;

class JoinApplicationController extends Controller
{
    public function AllJoinApplication()
    {
        $alldata = JoinApplication::latest()->get();

        return view('admin.backend.join_application.all_join_application', compact('alldata'));
    }

    public function DeleteJoinApplication($id)
    {
        JoinApplication::findOrFail($id)->delete();

        return redirect()->route('all.join.application')->with([
            'message' => 'Application Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }
}
