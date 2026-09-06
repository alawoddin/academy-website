<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function AllDiscount()
    {
        $alldata = Discount::latest()->get();

        return view('admin.backend.discount.all_discount', compact('alldata'));
    }

    public function AddDiscount()
    {
        return view('admin.backend.discount.add_discount');
    }

    public function StoreDiscount(Request $request)
    {
        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'button_text' => $request->button_text,
        ];

        Discount::create($data);

        $notification = [
            'message' => 'Discount Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.discount')->with($notification);
    }

    public function EditDiscount($id)
    {
        $discount = Discount::findOrFail($id);

        return view('admin.backend.discount.edit_discount', compact('discount'));
    }

    public function UpdateDiscount(Request $request)
    {
        $discount = Discount::findOrFail($request->id);

        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'button_text' => $request->button_text,
        ];

        $discount->update($data);

        $notification = [
            'message' => 'Discount Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.discount')->with($notification);
    }

    public function DeleteDiscount($id)
    {
        $discount = Discount::findOrFail($id);
        $discount->delete();

        $notification = [
            'message' => 'Discount Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.discount')->with($notification);
    }
}