<?php

namespace App\Http\Controllers;

use App\Models\DropPoint;
use App\Models\Group;
use App\Models\Product;
use App\Models\User;
use App\Support\CurrentUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentUserId = CurrentUser::id();
        $groups = Group::with(['dropPoint', 'leader'])
            ->when($currentUserId, function ($query, $currentUserId) {
                $query->where('leader_id', $currentUserId)
                    ->orWhereHas('members', function ($memberQuery) use ($currentUserId) {
                        $memberQuery->where('member_id', $currentUserId);
                    });
            })
            ->latest()
            ->get();

        return view('umkm.groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dropPoints = DropPoint::orderBy('name')->get();
        $products = Product::orderBy('name')->get();
        $leaders = User::orderBy('name')->get();

        return view('umkm.groups.create', compact('dropPoints', 'products', 'leaders'));
    }

    /**
     * Store a newly created resource in storage.
     */
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

        return redirect()->route('groups.index')->with('status', 'Group created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $group = Group::with(['dropPoint', 'leader', 'product'])->findOrFail($id);

        return view('umkm.groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $group = Group::findOrFail($id);
        $dropPoints = DropPoint::orderBy('name')->get();
        $products = Product::orderBy('name')->get();
        $leaders = User::orderBy('name')->get();

        return view('umkm.groups.edit', compact('group', 'dropPoints', 'products', 'leaders'));
    }

    /**
     * Update the specified resource in storage.
     */
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

        return redirect()->route('groups.edit', $group)->with('status', 'Group updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $group = Group::findOrFail($id);
        $group->delete();

        return redirect()->route('groups.index')->with('status', 'Group deleted.');
    }
}
