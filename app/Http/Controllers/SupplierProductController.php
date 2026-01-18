<?php

namespace App\Http\Controllers;

use App\Models\PriceLadder;
use App\Models\Product;
use App\Support\CurrentUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class SupplierProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplierId = CurrentUser::id();
        $products = Product::with('priceLadders')
            ->when($supplierId, function ($query, $supplierId) {
                $query->where('supplier_id', $supplierId);
            })
            ->latest()
            ->get();

        return view('supplier.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'sku' => ['nullable', 'string', 'max:64'],
            'image_url' => ['nullable', 'string', 'max:2048'],
            'category' => ['nullable', 'string', 'max:100'],
            'moq' => ['required', 'integer', 'min:0'],
            'unit' => ['required', 'string', 'max:16'],
            'status' => ['required', 'string', 'max:16', Rule::in(['draft', 'active'])],
            'currency' => ['required', 'string', 'max:8'],
            'service_area' => ['nullable', 'string'],
            'tiers' => ['array'],
            'tiers.*.min_qty' => ['nullable', 'integer', 'min:1'],
            'tiers.*.price_per_unit' => ['nullable', 'numeric', 'min:0'],
        ]);

        $serviceArea = $this->normalizeServiceArea($validated['service_area'] ?? null);
        $supplierId = CurrentUser::id();

        DB::transaction(function () use ($validated, $serviceArea, $supplierId) {
            $product = Product::create([
                'supplier_id' => $supplierId,
                'name' => $validated['name'],
                'sku' => $validated['sku'] ?? null,
                'image_url' => $validated['image_url'] ?? null,
                'category' => $validated['category'] ?? null,
                'moq' => $validated['moq'],
                'unit' => $validated['unit'],
                'status' => $validated['status'],
                'currency' => $validated['currency'],
                'service_area' => $serviceArea,
            ]);

            $this->syncPriceLadders($product, $validated['tiers'] ?? []);
        });

        return redirect()->route('supplier.products.index')->with('status', 'Product created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supplierId = CurrentUser::id();
        $product = Product::with('priceLadders')
            ->when($supplierId, function ($query, $supplierId) {
                $query->where('supplier_id', $supplierId);
            })
            ->findOrFail($id);

        return view('supplier.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplierId = CurrentUser::id();
        $product = Product::with('priceLadders')
            ->when($supplierId, function ($query, $supplierId) {
                $query->where('supplier_id', $supplierId);
            })
            ->findOrFail($id);

        return view('supplier.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $supplierId = CurrentUser::id();
        $product = Product::when($supplierId, function ($query, $supplierId) {
            $query->where('supplier_id', $supplierId);
        })->findOrFail($id);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'sku' => ['nullable', 'string', 'max:64'],
            'image_url' => ['nullable', 'string', 'max:2048'],
            'category' => ['nullable', 'string', 'max:100'],
            'moq' => ['required', 'integer', 'min:0'],
            'unit' => ['required', 'string', 'max:16'],
            'status' => ['required', 'string', 'max:16', Rule::in(['draft', 'active'])],
            'currency' => ['required', 'string', 'max:8'],
            'service_area' => ['nullable', 'string'],
            'tiers' => ['array'],
            'tiers.*.min_qty' => ['nullable', 'integer', 'min:1'],
            'tiers.*.price_per_unit' => ['nullable', 'numeric', 'min:0'],
        ]);

        $serviceArea = $this->normalizeServiceArea($validated['service_area'] ?? null);

        DB::transaction(function () use ($product, $validated, $serviceArea) {
            $product->update([
                'name' => $validated['name'],
                'sku' => $validated['sku'] ?? null,
                'image_url' => $validated['image_url'] ?? null,
                'category' => $validated['category'] ?? null,
                'moq' => $validated['moq'],
                'unit' => $validated['unit'],
                'status' => $validated['status'],
                'currency' => $validated['currency'],
                'service_area' => $serviceArea,
            ]);

            $this->syncPriceLadders($product, $validated['tiers'] ?? []);
        });

        return redirect()->route('supplier.products.edit', $product)->with('status', 'Product updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplierId = CurrentUser::id();
        $product = Product::when($supplierId, function ($query, $supplierId) {
            $query->where('supplier_id', $supplierId);
        })->findOrFail($id);
        $product->delete();

        return redirect()->route('supplier.products.index')->with('status', 'Product deleted.');
    }

    private function normalizeServiceArea(?string $serviceArea): ?array
    {
        if (!$serviceArea) {
            return null;
        }

        $items = array_filter(array_map('trim', explode(',', $serviceArea)));

        return $items ?: null;
    }

    private function syncPriceLadders(Product $product, array $tiers): void
    {
        $product->priceLadders()->delete();

        $rows = [];
        $order = 1;
        foreach ($tiers as $tier) {
            if (empty($tier['min_qty']) || $tier['price_per_unit'] === null) {
                continue;
            }
            $rows[] = new PriceLadder([
                'min_qty' => (int) $tier['min_qty'],
                'price_per_unit' => (float) $tier['price_per_unit'],
                'currency' => $product->currency,
                'sort_order' => $order++,
            ]);
        }

        if ($rows) {
            $product->priceLadders()->saveMany($rows);
        }
    }
}
