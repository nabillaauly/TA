<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // Menambahkan validasi untuk password
            'roles' => 'required|array',
        ]);

        // Menyiapkan data user
        $data = $request->only('name', 'email');
        


        // Hash password
        $data['password'] = Hash::make($request->password);

        // Membuat user dan menetapkan role
        $user = User::create($data);
        $user->assignRole($request->roles);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'roles' => 'required|array',
        ]);

        $user = User::findOrFail($id);
        $data = $request->only('name', 'email');
        


        // Menangani password jika diubah
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        // Update user dan sync role
        $user->update($data);
        $roles = Role::whereIn('id', $request->roles)->pluck('name')->toArray();
        $user->syncRoles($roles);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Jangan hapus user jika role 'super_admin'
        if ($user->hasRole('super_admin')) {
            return redirect()->route('users.index')->with('error', 'Cannot delete super admin user.');
        }


        // Hapus user
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

    // Helper function untuk menangani upload avatar
    private function uploadAvatar($file)
    {
        return $file->store('avatars', 'public');
    }

    // Helper function untuk menghapus avatar lama
    private function deleteAvatar($user)
    {
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }
    }
}