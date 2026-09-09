<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\JoinPage;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function AllJoin()
    {
        $alldata = JoinPage::latest()->get();

        return view('admin.backend.join.all_join', compact('alldata'));
    }

    public function AddJoin()
    {
        return view('admin.backend.join.add_join');
    }

    public function StoreJoin(Request $request)
    {
        JoinPage::create($request->only([
            'subtitle', 'title', 'description', 'rules_title', 'rules_text', 'rules', 'qualification_title', 'qualification_text',
        ]));

        return redirect()->route('all.join')->with([
            'message' => 'Join Page Inserted Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function EditJoin($id)
    {
        $join = JoinPage::findOrFail($id);

        return view('admin.backend.join.edit_join', compact('join'));
    }

    public function UpdateJoin(Request $request)
    {
        JoinPage::findOrFail($request->id)->update($request->only([
            'subtitle', 'title', 'description', 'rules_title', 'rules_text', 'rules', 'qualification_title', 'qualification_text',
        ]));

        return redirect()->route('all.join')->with([
            'message' => 'Join Page Updated Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function DeleteJoin($id)
    {
        JoinPage::findOrFail($id)->delete();

        return redirect()->route('all.join')->with([
            'message' => 'Join Page Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }
}
