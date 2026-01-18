<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use App\Support\CurrentUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentUserId = CurrentUser::id();
        $invoices = Invoice::when($currentUserId, function ($query, $currentUserId) {
            $query->whereHas('order', function ($orderQuery) use ($currentUserId) {
                $orderQuery->where('member_id', $currentUserId);
            });
        })
            ->latest()
            ->get();

        return view('umkm.invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = Order::latest()->get();

        return view('umkm.invoices.create', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => ['required', 'integer', 'exists:orders,id'],
            'invoice_number' => ['required', 'string', 'max:64'],
            'amount' => ['required', 'numeric', 'min:0'],
            'currency' => ['required', 'string', 'max:8'],
            'status' => ['required', 'string', 'max:16', Rule::in(['issued', 'paid', 'void'])],
            'issued_at' => ['nullable', 'date'],
            'due_at' => ['nullable', 'date'],
        ]);

        Invoice::create($validated);

        return redirect()->route('invoices.index')->with('status', 'Invoice created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $invoice = Invoice::findOrFail($id);

        return view('umkm.invoices.show', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $invoice = Invoice::findOrFail($id);
        $orders = Order::latest()->get();

        return view('umkm.invoices.edit', compact('invoice', 'orders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $invoice = Invoice::findOrFail($id);

        $validated = $request->validate([
            'order_id' => ['required', 'integer', 'exists:orders,id'],
            'invoice_number' => ['required', 'string', 'max:64'],
            'amount' => ['required', 'numeric', 'min:0'],
            'currency' => ['required', 'string', 'max:8'],
            'status' => ['required', 'string', 'max:16', Rule::in(['issued', 'paid', 'void'])],
            'issued_at' => ['nullable', 'date'],
            'due_at' => ['nullable', 'date'],
        ]);

        $invoice->update($validated);

        return redirect()->route('invoices.edit', $invoice)->with('status', 'Invoice updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        return redirect()->route('invoices.index')->with('status', 'Invoice deleted.');
    }
}
