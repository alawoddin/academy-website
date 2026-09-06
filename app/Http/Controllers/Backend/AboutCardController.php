<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutCard;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class AboutCardController extends Controller
{
    public function AllAboutCard()
    {
        $alldata = AboutCard::latest()->get();

        return view('admin.backend.aboutcard.all_aboutcard', compact('alldata'));
    }

    public function AddAboutCard()
    {
        return view('admin.backend.aboutcard.add_aboutcard');
    }

    public function StoreAboutCard(Request $request)
    {
        $data = [
            'title' => $request->title,
            'text' => $request->text,
        ];

        if ($request->file('icon')) {
            $dir = public_path('upload/aboutcard');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('icon');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['icon'] = 'upload/aboutcard/'.$name_gen;
        }
        AboutCard::create($data);

        $notification = [
            'message' => 'About Card Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.aboutcard')->with($notification);
    }

    public function EditAboutCard($id)
    {
        $aboutcard = AboutCard::findOrFail($id);

        return view('admin.backend.aboutcard.edit_aboutcard', compact('aboutcard'));
    }

    public function UpdateAboutCard(Request $request)
    {
        $aboutcard = AboutCard::findOrFail($request->id);

        $data = [
            'title' => $request->title,
            'text' => $request->text,
        ];

        if ($request->file('icon')) {
            $dir = public_path('upload/aboutcard');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('icon');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['icon'] = 'upload/aboutcard/'.$name_gen;
        }
        $aboutcard->update($data);

        $notification = [
            'message' => 'About Card Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.aboutcard')->with($notification);
    }

    public function DeleteAboutCard($id)
    {
        $aboutcard = AboutCard::findOrFail($id);
        $aboutcard->delete();

        $notification = [
            'message' => 'About Card Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.aboutcard')->with($notification);
    }
}