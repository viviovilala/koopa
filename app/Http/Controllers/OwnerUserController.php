<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class OwnerUserController extends Controller
{
    public function index(Request $request)
    {
        $role = $request->query('role');
        $users = User::when($role, function ($query, $role) {
            $query->where('role', $role);
        })
            ->orderBy('name')
            ->get();

        return view('owner.users.index', [
            'users' => $users,
            'role' => $role,
        ]);
    }

    public function create()
    {
        return view('owner.users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'display_name' => ['nullable', 'string', 'max:255'],
            'company_name' => ['nullable', 'string', 'max:255'],
            'profile_image_url' => ['nullable', 'string', 'max:2048'],
            'role' => ['required', 'string', Rule::in(['umkm', 'supplier', 'owner'])],
            'tier' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        User::create([
            'name' => $validated['name'],
            'display_name' => $validated['display_name'] ?? null,
            'company_name' => $validated['company_name'] ?? null,
            'profile_image_url' => $validated['profile_image_url'] ?? null,
            'role' => $validated['role'],
            'tier' => $validated['tier'] ?? null,
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('owner.users.index')->with('status', 'User created.');
    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);

        return view('owner.users.show', compact('user'));
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        return view('owner.users.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'display_name' => ['nullable', 'string', 'max:255'],
            'company_name' => ['nullable', 'string', 'max:255'],
            'profile_image_url' => ['nullable', 'string', 'max:2048'],
            'role' => ['required', 'string', Rule::in(['umkm', 'supplier', 'owner'])],
            'tier' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'password' => ['nullable', 'string', 'min:6'],
        ]);

        $user->update([
            'name' => $validated['name'],
            'display_name' => $validated['display_name'] ?? null,
            'company_name' => $validated['company_name'] ?? null,
            'profile_image_url' => $validated['profile_image_url'] ?? null,
            'role' => $validated['role'],
            'tier' => $validated['tier'] ?? null,
            'email' => $validated['email'],
        ]);

        if (!empty($validated['password'])) {
            $user->update(['password' => Hash::make($validated['password'])]);
        }

        return redirect()->route('owner.users.edit', $user)->with('status', 'User updated.');
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('owner.users.index')->with('status', 'User deleted.');
    }
}
