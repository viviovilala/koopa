<?php

namespace App\Http\Controllers;

use App\Models\EscrowPayment;
use App\Models\Group;
use App\Models\Order;
use App\Support\CurrentUser;

class DashboardController extends Controller
{
    public function qday()
    {
        $currentUserId = CurrentUser::id();
        $groups = Group::with('dropPoint')
            ->when($currentUserId, function ($query, $currentUserId) {
                $query->where('leader_id', $currentUserId)
                    ->orWhereHas('members', function ($memberQuery) use ($currentUserId) {
                        $memberQuery->where('member_id', $currentUserId);
                    });
            })
            ->orderByDesc('cut_off_at')
            ->limit(5)
            ->get();

        $pendingOrders = Order::with('group')
            ->where('status', 'pending')
            ->when($currentUserId, function ($query, $currentUserId) {
                $query->where('member_id', $currentUserId);
            })
            ->latest()
            ->limit(3)
            ->get();

        $paidOrders = Order::with('group')
            ->where('status', 'paid')
            ->when($currentUserId, function ($query, $currentUserId) {
                $query->where('member_id', $currentUserId);
            })
            ->latest()
            ->limit(2)
            ->get();

        $escrowHeldCount = EscrowPayment::where('status', 'held')
            ->when($currentUserId, function ($query, $currentUserId) {
                $query->whereHas('order', function ($orderQuery) use ($currentUserId) {
                    $orderQuery->where('member_id', $currentUserId);
                });
            })
            ->count();

        $metrics = [
            'total_savings' => Order::when($currentUserId, function ($query, $currentUserId) {
                $query->where('member_id', $currentUserId);
            })->sum('total_amount') * 0.02,
            'active_groups' => Group::whereIn('status', ['open', 'locked'])
                ->when($currentUserId, function ($query, $currentUserId) {
                    $query->where('leader_id', $currentUserId)
                        ->orWhereHas('members', function ($memberQuery) use ($currentUserId) {
                            $memberQuery->where('member_id', $currentUserId);
                        });
                })
                ->count(),
            'pending_actions' => $pendingOrders->count() + $escrowHeldCount,
        ];

        return view('umkm.dashboard', [
            'groups' => $groups,
            'pendingOrders' => $pendingOrders,
            'paidOrders' => $paidOrders,
            'metrics' => $metrics,
        ]);
    }

    public function owner()
    {
        $activeGroups = Group::with('dropPoint')
            ->whereIn('status', ['open', 'locked'])
            ->orderByDesc('cut_off_at')
            ->limit(3)
            ->get();

        $totalVolume = Group::sum('current_volume');
        $orderVolume = Order::sum('total_amount');
        $escrowHeld = EscrowPayment::where('status', 'held')->sum('amount');

        $owner = [
            'active_groups' => $activeGroups,
            'total_volume' => $totalVolume,
            'order_volume' => $orderVolume,
            'escrow_held' => $escrowHeld,
            'price_certainty' => $totalVolume > 0 ? 85 : 72,
            'on_time_delivery' => 94,
        ];

        return view('pages.dashboard-profitquest', $owner);
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
