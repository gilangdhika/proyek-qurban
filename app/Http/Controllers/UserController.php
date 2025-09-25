<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Ambil semua user
   public function index()
{
    $users = User::all();
    return view('user.index', compact('users'));
}

public function create()
{
    return view('user.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6',
        'alamat' => 'required|string',
        'role' => 'required|in:kurir,panitia,shohibul,penerima',
    ]);

    $validated['password'] = bcrypt($validated['password']);

    User::create($validated);

    return redirect()->route('users.index')
                     ->with('success', 'User berhasil ditambahkan');
}

public function edit($id)
{
    $user = User::findOrFail($id);
    return view('user.edit', compact('user'));
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $validated = $request->validate([
        'nama' => 'string|max:255',
        'email' => 'email|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:6',
        'alamat' => 'string',
        'role' => 'in:kurir,panitia,shohibul,penerima',
    ]);

    if (!empty($validated['password'])) {
        $validated['password'] = bcrypt($validated['password']);
    }

    $user->update($validated);

    return redirect()->route('users.index')
                     ->with('success', 'User berhasil diperbarui');
}

public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('users.index')
                     ->with('success', 'User berhasil dihapus');
}

}