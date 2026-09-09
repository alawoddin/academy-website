<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function AllContactMessage()
    {
        $alldata = ContactMessage::latest()->get();

        return view('admin.backend.contact_message.all_contact_message', compact('alldata'));
    }

    public function DeleteContactMessage($id)
    {
        ContactMessage::findOrFail($id)->delete();

        return redirect()->route('all.contact.message')->with([
            'message' => 'Message Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }
}
