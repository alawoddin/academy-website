<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Support\Media;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function AllGallery()
    {
        $alldata = Gallery::latest()->get();

        return view('admin.backend.gallery.all_gallery', compact('alldata'));
    }

    public function AddGallery()
    {
        return view('admin.backend.gallery.add_gallery');
    }

    public function StoreGallery(Request $request)
    {
        Gallery::create([
            'caption' => $request->caption,
            'image' => Media::store($request->file('image'), 'upload/gallery'),
        ]);

        return redirect()->route('all.gallery')->with([
            'message' => 'Gallery Inserted Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function EditGallery($id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('admin.backend.gallery.edit_gallery', compact('gallery'));
    }

    public function UpdateGallery(Request $request)
    {
        $gallery = Gallery::findOrFail($request->id);
        $data = ['caption' => $request->caption];

        if ($path = Media::store($request->file('image'), 'upload/gallery')) {
            $data['image'] = $path;
        }

        $gallery->update($data);

        return redirect()->route('all.gallery')->with([
            'message' => 'Gallery Updated Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function DeleteGallery($id)
    {
        Gallery::findOrFail($id)->delete();

        return redirect()->route('all.gallery')->with([
            'message' => 'Gallery Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }
}
