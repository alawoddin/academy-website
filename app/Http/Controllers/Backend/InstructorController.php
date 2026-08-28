<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InstructorController extends Controller
{
    public function InstructorLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Instructor Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }

    public function InstructorProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('instructor.instructor_profile', compact('profileData'));
    }

    public function InstructorProfileStore(Request $request)
    {
        $id = Auth::id();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id,
            'phone' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        $oldPhotoPath = $data->photo;

        if ($request->hasFile('photo')) {
            $destination = public_path('upload/instructor_images');
            if (! is_dir($destination)) {
                mkdir($destination, 0755, true);
            }

            $file = $request->file('photo');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move($destination, $filename);
            $data->photo = $filename;

            if ($oldPhotoPath && $oldPhotoPath !== $filename) {
                $this->deleteOldImage($oldPhotoPath);
            }
        }

        $data->save();

        $notification = array(
            'message' => 'Instructor Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('instructor.profile')->with($notification);
    }

    private function deleteOldImage(string $oldPhotoPath): void
    {
        $fullPath = public_path('upload/instructor_images/'.$oldPhotoPath);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }

    public function InstructorChangePassword()
    {
        return view('instructor.instructor_change_password');
    }

    public function InstructorPasswordUpdate(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        if (!Hash::check($request->old_password, $user->password)) {
            $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'error'
            );

            return back()->with($notification);
        }

        User::whereId($user->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Password Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('login')->with($notification);
    }
}
