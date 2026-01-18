<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupMember;
use App\Models\User;
use App\Support\CurrentUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GroupMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentUserId = CurrentUser::id();
        $members = GroupMember::with(['group', 'member'])
            ->when($currentUserId, function ($query, $currentUserId) {
                $query->where('member_id', $currentUserId);
            })
            ->latest()
            ->get();

        return view('umkm.group-members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::orderBy('title')->get();

        $members = User::orderBy('name')->get();

        return view('umkm.group-members.create', compact('groups', 'members'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'group_id' => ['required', 'integer', 'exists:groups,id'],
            'member_id' => ['required', 'integer', 'exists:users,id'],
            'qty' => ['required', 'integer', 'min:0'],
            'unit' => ['required', 'string', 'max:16'],
            'status' => ['required', 'string', 'max:16', Rule::in(['joined', 'paid', 'picked_up', 'cancelled'])],
        ]);

        GroupMember::create($validated);

        return redirect()->route('group-members.index')->with('status', 'Member added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $member = GroupMember::with(['group', 'member'])->findOrFail($id);

        return view('umkm.group-members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member = GroupMember::findOrFail($id);
        $groups = Group::orderBy('title')->get();
        $members = User::orderBy('name')->get();

        return view('umkm.group-members.edit', compact('member', 'groups', 'members'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = GroupMember::findOrFail($id);

        $validated = $request->validate([
            'group_id' => ['required', 'integer', 'exists:groups,id'],
            'member_id' => ['required', 'integer', 'exists:users,id'],
            'qty' => ['required', 'integer', 'min:0'],
            'unit' => ['required', 'string', 'max:16'],
            'status' => ['required', 'string', 'max:16', Rule::in(['joined', 'paid', 'picked_up', 'cancelled'])],
        ]);

        $member->update($validated);

        return redirect()->route('group-members.edit', $member)->with('status', 'Member updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = GroupMember::findOrFail($id);
        $member->delete();

        return redirect()->route('group-members.index')->with('status', 'Member deleted.');
    }
}
