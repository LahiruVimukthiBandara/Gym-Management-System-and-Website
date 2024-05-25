<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class CreateUserController extends Controller
{
    // Index function
    public function index(User $user)
    {
        return view('admin/user/user');
    }

    public function show(User $user)
    {
        $fees = $user->fee->pluck('amount', 'date');
        return view('admin/user.show', compact('user', 'fees'));
    }

    // Create function
    public function create(): View
    {
        return view('admin/user.create');
    }

    // Store function
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'nic' => 'required|string|unique:users',
            'address' => 'required|string',
            'phone_no' => 'required|string|unique:users',
            'weight' => 'required|integer',
            'height' => 'required|integer',
            'password' => 'required|string',
        ]);

        $defaultImagePath = 'uploads/profiles/profile.png';

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $fileName = time() . '.' . $extension;

            $path = 'uploads/profiles/';
            $file->move($path, $fileName);
            $imagePath = $path . $fileName;
        }else{
            $imagePath = $defaultImagePath;
        }

        $user = new user();

        $user->image = $imagePath;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->nic = $request->input('nic');
        $user->address = $request->input('address');
        $user->phone_no = $request->input('phone_no');
        $user->weight = $request->input('weight');
        $user->height = $request->input('height');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect()->route('user.index')->with('success', 'Member Created Successfully');
    }

    // Edit function
    public function edit(User $user)
    {
        return view('admin/user.edit', compact('user'));
    }

    // Update function
    public function update(Request $request, User $user)
    {
        $request->validate([
            'image' => [
                'nullable',
                'mimes:png,jpg,jpeg,webp',
            ],
            'name' => 'required|string',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user),
            ],
            'nic' => [
                'required',
                'string',
                Rule::unique('users')->ignore($user),
            ],
            'address' => 'required|string',
            'phone_no' => [
                'required',
                'string',
                Rule::unique('users')->ignore($user),
            ],
            'weight' => 'required|integer',
            'height' => 'required|integer',
            'password' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $path = 'uploads/profiles/';
            $file->move($path, $fileName);
    
            // save the defauld image from deleting
            if ($user->image && $user->image !== 'uploads/profiles/profile.png' && File::exists($user->image)) {
                File::delete($user->image);
            }
    
            // Update user's image path
            $user->image = $path . $fileName;
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->nic = $request->input('nic');
        $user->address = $request->input('address');
        $user->phone_no = $request->input('phone_no');
        $user->weight = $request->input('weight');
        $user->height = $request->input('height');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect()->route('user.index')->with('success', 'Member Edited Successfully');
    }


    // Delete function
    public function delete()
    {
    }

    // Delete function
    public function destroy(User $user)
    {
        if ($user->image && $user->image !== 'uploads/profiles/profile.png' && File::exists($user->image)) {
            File::delete($user->image);
        }
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Member Deleted Successfully');
    }
}
