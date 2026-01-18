<?php

namespace App\Http\Controllers;

use App\Models\EscrowPayment;
use App\Models\Order;
use App\Support\CurrentUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EscrowPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentUserId = CurrentUser::id();
        $payments = EscrowPayment::when($currentUserId, function ($query, $currentUserId) {
            $query->whereHas('order', function ($orderQuery) use ($currentUserId) {
                $orderQuery->where('member_id', $currentUserId);
            });
        })
            ->latest()
            ->get();

        return view('umkm.escrow-payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = Order::latest()->get();

        return view('umkm.escrow-payments.create', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => ['required', 'integer', 'exists:orders,id'],
            'amount' => ['required', 'numeric', 'min:0'],
            'currency' => ['required', 'string', 'max:8'],
            'status' => ['required', 'string', 'max:16', Rule::in(['held', 'released', 'failed'])],
            'paid_at' => ['nullable', 'date'],
            'released_at' => ['nullable', 'date'],
        ]);

        EscrowPayment::create($validated);

        return redirect()->route('escrow-payments.index')->with('status', 'Escrow payment created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = EscrowPayment::with('order')->findOrFail($id);

        return view('umkm.escrow-payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payment = EscrowPayment::findOrFail($id);
        $orders = Order::latest()->get();

        return view('umkm.escrow-payments.edit', compact('payment', 'orders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payment = EscrowPayment::findOrFail($id);

        $validated = $request->validate([
            'order_id' => ['required', 'integer', 'exists:orders,id'],
            'amount' => ['required', 'numeric', 'min:0'],
            'currency' => ['required', 'string', 'max:8'],
            'status' => ['required', 'string', 'max:16', Rule::in(['held', 'released', 'failed'])],
            'paid_at' => ['nullable', 'date'],
            'released_at' => ['nullable', 'date'],
        ]);

        $payment->update($validated);

        return redirect()->route('escrow-payments.edit', $payment)->with('status', 'Escrow payment updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payment = EscrowPayment::findOrFail($id);
        $payment->delete();

        return redirect()->route('escrow-payments.index')->with('status', 'Escrow payment deleted.');
    }
}
