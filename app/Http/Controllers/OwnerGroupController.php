<?php

namespace App\Http\Controllers;

use App\Models\DropPoint;
use App\Models\Group;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OwnerGroupController extends Controller
{
    public function index()
    {
        $groups = Group::with(['product', 'leader', 'dropPoint'])
            ->orderByDesc('cut_off_at')
            ->get();

        return view('owner.groups.index', compact('groups'));
    }

    public function create()
    {
        $dropPoints = DropPoint::orderBy('name')->get();
        $products = Product::orderBy('name')->get();
        $leaders = User::orderBy('name')->get();

        return view('owner.groups.create', compact('dropPoints', 'products', 'leaders'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => ['nullable', 'integer', 'exists:products,id'],
            'leader_id' => ['nullable', 'integer', 'exists:users,id'],
            'drop_point_id' => ['nullable', 'integer', 'exists:drop_points,id'],
            'title' => ['required', 'string', 'max:255'],
            'target_volume' => ['required', 'integer', 'min:0'],
            'current_volume' => ['nullable', 'integer', 'min:0'],
            'unit' => ['required', 'string', 'max:16'],
            'status' => ['required', 'string', 'max:16', Rule::in(['open', 'locked', 'paid', 'delivered', 'completed'])],
            'cut_off_at' => ['nullable', 'date'],
            'currency' => ['required', 'string', 'max:8'],
        ]);

        Group::create($validated);

        return redirect()->route('owner.groups.index')->with('status', 'Group created.');
    }

    public function show(string $id)
    {
        $group = Group::with(['product', 'leader', 'dropPoint', 'members'])->findOrFail($id);

        return view('owner.groups.show', compact('group'));
    }

    public function edit(string $id)
    {
        $group = Group::findOrFail($id);
        $dropPoints = DropPoint::orderBy('name')->get();
        $products = Product::orderBy('name')->get();
        $leaders = User::orderBy('name')->get();

        return view('owner.groups.edit', compact('group', 'dropPoints', 'products', 'leaders'));
    }

    public function update(Request $request, string $id)
    {
        $group = Group::findOrFail($id);

        $validated = $request->validate([
            'product_id' => ['nullable', 'integer', 'exists:products,id'],
            'leader_id' => ['nullable', 'integer', 'exists:users,id'],
            'drop_point_id' => ['nullable', 'integer', 'exists:drop_points,id'],
            'title' => ['required', 'string', 'max:255'],
            'target_volume' => ['required', 'integer', 'min:0'],
            'current_volume' => ['nullable', 'integer', 'min:0'],
            'unit' => ['required', 'string', 'max:16'],
            'status' => ['required', 'string', 'max:16', Rule::in(['open', 'locked', 'paid', 'delivered', 'completed'])],
            'cut_off_at' => ['nullable', 'date'],
            'currency' => ['required', 'string', 'max:8'],
        ]);

        $group->update($validated);

        return redirect()->route('owner.groups.edit', $group)->with('status', 'Group updated.');
    }

    public function destroy(string $id)
    {
        $group = Group::findOrFail($id);
        $group->delete();

        return redirect()->route('owner.groups.index')->with('status', 'Group deleted.');
    }
}
