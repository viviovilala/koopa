<?php

namespace App\Http\Controllers;

use App\Models\DropPoint;
use App\Support\CurrentUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DropPointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentUserId = CurrentUser::id();
        $dropPoints = DropPoint::when($currentUserId, function ($query, $currentUserId) {
            $query->whereHas('groups', function ($groupQuery) use ($currentUserId) {
                $groupQuery->where('leader_id', $currentUserId)
                    ->orWhereHas('members', function ($memberQuery) use ($currentUserId) {
                        $memberQuery->where('member_id', $currentUserId);
                    });
            });
        })
            ->latest()
            ->get();

        return view('umkm.drop-points.index', compact('dropPoints'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('umkm.drop-points.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:100'],
            'window_start' => ['nullable', 'string', 'max:32'],
            'window_end' => ['nullable', 'string', 'max:32'],
            'capacity' => ['nullable', 'integer', 'min:0'],
            'status' => ['required', 'string', 'max:16', Rule::in(['active', 'inactive'])],
        ]);

        DropPoint::create($validated);

        return redirect()->route('drop-points.index')->with('status', 'Drop point created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dropPoint = DropPoint::findOrFail($id);

        return view('umkm.drop-points.show', compact('dropPoint'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dropPoint = DropPoint::findOrFail($id);

        return view('umkm.drop-points.edit', compact('dropPoint'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dropPoint = DropPoint::findOrFail($id);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:100'],
            'window_start' => ['nullable', 'string', 'max:32'],
            'window_end' => ['nullable', 'string', 'max:32'],
            'capacity' => ['nullable', 'integer', 'min:0'],
            'status' => ['required', 'string', 'max:16', Rule::in(['active', 'inactive'])],
        ]);

        $dropPoint->update($validated);

        return redirect()->route('drop-points.edit', $dropPoint)->with('status', 'Drop point updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dropPoint = DropPoint::findOrFail($id);
        $dropPoint->delete();

        return redirect()->route('drop-points.index')->with('status', 'Drop point deleted.');
    }
}
