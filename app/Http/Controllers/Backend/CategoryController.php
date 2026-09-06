<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Support\Media;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategory()
    {
        $alldata = Category::latest()->get();

        return view('admin.backend.category.all_category', compact('alldata'));
    }

    public function AddCategory()
    {
        return view('admin.backend.category.add_category');
    }

    public function StoreCategory(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'rating' => $request->rating,
            'teachers' => $request->teachers,
            'hours' => $request->hours,
        ];

        if ($path = Media::store($request->file('image'), 'upload/category')) {
            $data['image'] = $path;
        }
        Category::create($data);

        $notification = [
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.category')->with($notification);
    }

    public function EditCategory($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.backend.category.edit_category', compact('category'));
    }

    public function UpdateCategory(Request $request)
    {
        $category = Category::findOrFail($request->id);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'rating' => $request->rating,
            'teachers' => $request->teachers,
            'hours' => $request->hours,
        ];

        if ($path = Media::store($request->file('image'), 'upload/category')) {
            $data['image'] = $path;
        }
        $category->update($data);

        $notification = [
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.category')->with($notification);
    }

    public function DeleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        $notification = [
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.category')->with($notification);
    }
}