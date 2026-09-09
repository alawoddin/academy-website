<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function AllContact()
    {
        $alldata = Contact::latest()->get();

        return view('admin.backend.contact.all_contact', compact('alldata'));
    }

    public function AddContact()
    {
        return view('admin.backend.contact.add_contact');
    }

    public function StoreContact(Request $request)
    {
        $data = [
            'title' => $request->title,
            'text' => $request->text,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
        ];

        Contact::create($data);

        $notification = [
            'message' => 'Contact Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.contact')->with($notification);
    }

    public function EditContact($id)
    {
        $contact = Contact::findOrFail($id);

        return view('admin.backend.contact.edit_contact', compact('contact'));
    }

    public function UpdateContact(Request $request)
    {
        $contact = Contact::findOrFail($request->id);

        $data = [
            'title' => $request->title,
            'text' => $request->text,
            'phone' => $request->phone,
        ];

        $contact->update($data);

        $notification = [
            'message' => 'Contact Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.contact')->with($notification);
    }

    public function DeleteContact($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        $notification = [
            'message' => 'Contact Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.contact')->with($notification);
    }
}