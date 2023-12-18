<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->input('query')) {
            $query = $request->input('query');
            $allUsers = User::where('username', 'LIKE', "%$query%")->get();
        } else {
            $allUsers = User::all();
        }

        return view('admin.user.index', compact('allUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
        ]);

        $isAdmin = $request->filled('is_admin');

        User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'is_admin' => $isAdmin,
        ]);

        return redirect()->route('admin.users.index')->with('success', Str::ucfirst($request->username) . ' created successfully');
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z0-9_]+$/'],
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'oldPass' => ['required_with:newPassword', 'string', 'min:8'],
            'newPassword' => ['nullable', 'string', 'min:8', 'different:oldPass'],
            'is_admin' => 'nullable'
        ]);

        if ($request->filled('newPassword')) {
            $password = Hash::make($validatedData['newPassword']);
        } else {
            $password = $user->password;
        }

        $user->update([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => $password,
            'is_admin' => $validatedData['is_admin'] ?? false,
        ]);

        return redirect()->route('admin.users.index')->with('primary', 'Akun berhasil diubah');
    }

    public function destroy(User $user)
    {
        if ($user->image) {
            Storage::delete($user->image);
        };

        User::destroy($user->id);
        return to_route('admin.users.index')->with('delete', 'Delete Menu Success');
    }
}
