<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FaqMessage;

class FaqMessageController extends Controller
{
    public function AllFaqMessage()
    {
        $alldata = FaqMessage::latest()->get();

        return view('admin.backend.faq_message.all_faq_message', compact('alldata'));
    }

    public function DeleteFaqMessage($id)
    {
        FaqMessage::findOrFail($id)->delete();

        return redirect()->route('all.faq.message')->with([
            'message' => 'Question Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }
}
