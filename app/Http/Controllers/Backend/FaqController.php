<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function AllFaq()
    {
        $alldata = Faq::latest()->get();

        return view('admin.backend.faq.all_faq', compact('alldata'));
    }

    public function AddFaq()
    {
        return view('admin.backend.faq.add_faq');
    }

    public function StoreFaq(Request $request)
    {
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('all.faq')->with([
            'message' => 'FAQ Inserted Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function EditFaq($id)
    {
        $faq = Faq::findOrFail($id);

        return view('admin.backend.faq.edit_faq', compact('faq'));
    }

    public function UpdateFaq(Request $request)
    {
        Faq::findOrFail($request->id)->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('all.faq')->with([
            'message' => 'FAQ Updated Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function DeleteFaq($id)
    {
        Faq::findOrFail($id)->delete();

        return redirect()->route('all.faq')->with([
            'message' => 'FAQ Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }
}
