<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function AllTestimonial()
    {
        $alldata = Testimonial::latest()->get();

        return view('admin.backend.testimonial.all_testimonial', compact('alldata'));
    }

    public function AddTestimonial()
    {
        return view('admin.backend.testimonial.add_testimonial');
    }

    public function StoreTestimonial(Request $request)
    {
        $data = [
            'name' => $request->name,
            'rating' => $request->rating,
            'review' => $request->review,
        ];

        if ($request->file('image')) {
            $dir = public_path('upload/testimonial');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['image'] = 'upload/testimonial/'.$name_gen;
        }
        Testimonial::create($data);

        $notification = [
            'message' => 'Testimonial Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.testimonial')->with($notification);
    }

    public function EditTestimonial($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.backend.testimonial.edit_testimonial', compact('testimonial'));
    }

    public function UpdateTestimonial(Request $request)
    {
        $testimonial = Testimonial::findOrFail($request->id);

        $data = [
            'name' => $request->name,
            'rating' => $request->rating,
            'review' => $request->review,
        ];

        if ($request->file('image')) {
            $dir = public_path('upload/testimonial');
            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scaleDown(width: 1200)->save($dir.'/'.$name_gen);
            $data['image'] = 'upload/testimonial/'.$name_gen;
        }
        $testimonial->update($data);

        $notification = [
            'message' => 'Testimonial Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.testimonial')->with($notification);
    }

    public function DeleteTestimonial($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        $notification = [
            'message' => 'Testimonial Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.testimonial')->with($notification);
    }
}