<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Order;
use App\Models\User;
use App\Support\CurrentUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentUserId = CurrentUser::id();
        $orders = Order::with(['group', 'member'])
            ->when($currentUserId, function ($query, $currentUserId) {
                $query->where('member_id', $currentUserId);
            })
            ->latest()
            ->get();

        return view('umkm.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::orderBy('title')->get();
        $members = User::orderBy('name')->get();

        return view('umkm.orders.create', compact('groups', 'members'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'group_id' => ['required', 'integer', 'exists:groups,id'],
            'member_id' => ['required', 'integer', 'exists:users,id'],
            'total_qty' => ['required', 'integer', 'min:0'],
            'unit' => ['required', 'string', 'max:16'],
            'total_amount' => ['required', 'numeric', 'min:0'],
            'currency' => ['required', 'string', 'max:8'],
            'status' => ['required', 'string', 'max:16', Rule::in(['pending', 'paid', 'fulfilled', 'cancelled'])],
        ]);

        Order::create($validated);

        return redirect()->route('orders.index')->with('status', 'Order created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::with(['group', 'member'])->findOrFail($id);

        return view('umkm.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::findOrFail($id);
        $groups = Group::orderBy('title')->get();
        $members = User::orderBy('name')->get();

        return view('umkm.orders.edit', compact('order', 'groups', 'members'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);

        $validated = $request->validate([
            'group_id' => ['required', 'integer', 'exists:groups,id'],
            'member_id' => ['required', 'integer', 'exists:users,id'],
            'total_qty' => ['required', 'integer', 'min:0'],
            'unit' => ['required', 'string', 'max:16'],
            'total_amount' => ['required', 'numeric', 'min:0'],
            'currency' => ['required', 'string', 'max:8'],
            'status' => ['required', 'string', 'max:16', Rule::in(['pending', 'paid', 'fulfilled', 'cancelled'])],
        ]);

        $order->update($validated);

        return redirect()->route('orders.edit', $order)->with('status', 'Order updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index')->with('status', 'Order deleted.');
    }
}
