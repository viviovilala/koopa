<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function qday()
    {
        $signal = [
            'volume_percent' => 62,
            'tier' => 'Tier 2',
            'tier_drop_at' => 70,
            'savings_min' => 'Rp700k',
            'savings_max' => 'Rp1M',
        ];

        $metrics = [
            'total_volume' => 1240,
            'group_count' => 4,
            'cutoff_hours' => 3,
            'cutoff_minutes' => 12,
            'cutoff_progress' => 70,
            'escrow_paid' => 86,
            'escrow_pending' => 3,
        ];

        return view('pages.dashboard-qday', [
            'signal' => $signal,
            'metrics' => $metrics,
        ]);
    }

    public function owner()
    {
        $owner = [
            'near_cutoff' => 3,
            'savings_health' => 78,
            'savings_vs_single' => 18,
            'savings_delta' => 2.4,
            'group_volume_value' => 'Rp12.4M',
            'group_volume_delta' => 6,
            'price_certainty' => 82,
            'price_certainty_delta' => 5,
            'on_time_delivery' => 96,
            'on_time_delta' => 1,
        ];

        return view('pages.dashboard-profitquest', [
            'owner' => $owner,
        ]);
    }

    public function priceLadder()
    {
        $ladders = [
            [
                'product' => 'Chicken Breast',
                'supplier' => 'Supplier B',
                'moq' => 100,
                'tiers' => [
                    ['threshold' => 100, 'price' => 'Rp9.500'],
                    ['threshold' => 500, 'price' => 'Rp8.800'],
                    ['threshold' => 1000, 'price' => 'Rp8.200'],
                ],
            ],
            [
                'product' => 'Cooking Oil 18L',
                'supplier' => 'Supplier A',
                'moq' => 60,
                'tiers' => [
                    ['threshold' => 60, 'price' => 'Rp215.000'],
                    ['threshold' => 180, 'price' => 'Rp205.000'],
                    ['threshold' => 360, 'price' => 'Rp196.000'],
                ],
            ],
            [
                'product' => 'Rice 25kg',
                'supplier' => 'Supplier C',
                'moq' => 80,
                'tiers' => [
                    ['threshold' => 80, 'price' => 'Rp280.000'],
                    ['threshold' => 240, 'price' => 'Rp268.000'],
                    ['threshold' => 480, 'price' => 'Rp258.000'],
                ],
            ],
        ];

        return view('pages.price-ladder', [
            'ladders' => $ladders,
            'owner' => [
                'near_cutoff' => 3,
                'savings_health' => 78,
            ],
        ]);
    }

    public function dropPoints()
    {
        $dropPoints = [
            [
                'group' => 'Chicken Breast 20kg',
                'location' => 'Poin A - Pasar Timur',
                'window' => '11:00-15:00',
                'leader' => 'UMKM Resto Maju',
                'checked' => 14,
                'total' => 18,
            ],
            [
                'group' => 'Cooking Oil 18L',
                'location' => 'Poin A - Ruko Serbaguna',
                'window' => '09:00-13:00',
                'leader' => 'UMKM Dapur Kita',
                'checked' => 9,
                'total' => 12,
            ],
        ];

        return view('pages.drop-points', [
            'dropPoints' => $dropPoints,
            'owner' => [
                'near_cutoff' => 3,
                'savings_health' => 78,
            ],
        ]);
    }

    public function escrowFees()
    {
        $escrow = [
            [
                'group' => 'Chicken Breast 20kg',
                'amount' => 'Rp18.400.000',
                'paid_percent' => 86,
                'fee_percent' => 2,
            ],
            [
                'group' => 'Cooking Oil 18L',
                'amount' => 'Rp12.600.000',
                'paid_percent' => 74,
                'fee_percent' => 2,
            ],
            [
                'group' => 'Rice 25kg',
                'amount' => 'Rp8.900.000',
                'paid_percent' => 92,
                'fee_percent' => 1.5,
            ],
        ];

        return view('pages.escrow-fees', [
            'escrow' => $escrow,
            'owner' => [
                'near_cutoff' => 3,
                'savings_health' => 78,
            ],
        ]);
    }
}
