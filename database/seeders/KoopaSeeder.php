<?php

namespace Database\Seeders;

use App\Models\DropPoint;
use App\Models\EscrowPayment;
use App\Models\Group;
use App\Models\GroupMember;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KoopaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owner = User::firstOrCreate(
            ['email' => 'owner@koopa.test'],
            [
                'name' => 'Koopa Owner',
                'display_name' => 'Koopa Owner',
                'company_name' => 'Koopa HQ',
                'profile_image_url' => 'https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?auto=format&fit=crop&w=256&q=80',
                'role' => 'owner',
                'tier' => 'Executive',
                'password' => Hash::make('password'),
            ]
        );

        $supplier = User::firstOrCreate(
            ['email' => 'supplier@koopa.test'],
            [
                'name' => 'Alex Supplier',
                'display_name' => 'Alex Chen',
                'company_name' => 'Atlas Global',
                'profile_image_url' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=256&q=80',
                'role' => 'supplier',
                'tier' => 'Partner',
                'password' => Hash::make('password'),
            ]
        );

        $umkm1 = User::firstOrCreate(
            ['email' => 'umkm1@koopa.test'],
            [
                'name' => 'Bistro Serenity',
                'display_name' => 'Bistro Serenity',
                'company_name' => 'Bistro Serenity',
                'profile_image_url' => 'https://images.unsplash.com/photo-1524503033411-c9566986fc8f?auto=format&fit=crop&w=256&q=80',
                'role' => 'umkm',
                'tier' => 'Gold',
                'password' => Hash::make('password'),
            ]
        );

        $umkm2 = User::firstOrCreate(
            ['email' => 'umkm2@koopa.test'],
            [
                'name' => 'Cafe Horizon',
                'display_name' => 'Cafe Horizon',
                'company_name' => 'Cafe Horizon',
                'profile_image_url' => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=256&q=80',
                'role' => 'umkm',
                'tier' => 'Silver',
                'password' => Hash::make('password'),
            ]
        );

        $dropPoint = DropPoint::firstOrCreate(
            ['name' => 'North Hub A'],
            [
                'address' => 'Warehouse District 7',
                'city' => 'Jakarta',
                'window_start' => '10:00',
                'window_end' => '14:00',
                'capacity' => 200,
                'status' => 'active',
            ]
        );

        $products = [
            [
                'name' => 'Premium Arabica Coffee Beans',
                'sku' => 'CF-882',
                'category' => 'Beverages',
                'moq' => 50,
                'unit' => 'kg',
                'service_area' => ['Jakarta', 'Tangerang'],
                'status' => 'active',
                'currency' => 'USD',
                'image_url' => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?auto=format&fit=crop&w=900&q=80',
                'tiers' => [
                    ['min_qty' => 0, 'price_per_unit' => 10.00],
                    ['min_qty' => 251, 'price_per_unit' => 8.50],
                    ['min_qty' => 751, 'price_per_unit' => 7.25],
                    ['min_qty' => 1500, 'price_per_unit' => 6.50],
                ],
            ],
            [
                'name' => 'Organic Wheat Flour 25kg',
                'sku' => 'WF-225',
                'category' => 'Grains & Flour',
                'moq' => 500,
                'unit' => 'kg',
                'service_area' => ['Jakarta', 'Bogor'],
                'status' => 'active',
                'currency' => 'USD',
                'image_url' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=900&q=80',
                'tiers' => [
                    ['min_qty' => 0, 'price_per_unit' => 14.20],
                    ['min_qty' => 500, 'price_per_unit' => 12.80],
                    ['min_qty' => 1000, 'price_per_unit' => 11.90],
                ],
            ],
            [
                'name' => 'Refined Sunflower Oil',
                'sku' => 'OIL-45',
                'category' => 'Oils & Vinegars',
                'moq' => 200,
                'unit' => 'L',
                'service_area' => ['Jakarta', 'Bekasi'],
                'status' => 'active',
                'currency' => 'USD',
                'image_url' => 'https://images.unsplash.com/photo-1474979266404-7eaacbcd87c5?auto=format&fit=crop&w=900&q=80',
                'tiers' => [
                    ['min_qty' => 0, 'price_per_unit' => 3.40],
                    ['min_qty' => 200, 'price_per_unit' => 2.95],
                    ['min_qty' => 600, 'price_per_unit' => 2.70],
                ],
            ],
        ];

        $createdProducts = [];
        foreach ($products as $productData) {
            $tiers = $productData['tiers'];
            unset($productData['tiers']);
            $productData['supplier_id'] = $supplier->id;

            $product = Product::firstOrCreate(
                ['name' => $productData['name']],
                $productData
            );

            if ($product->priceLadders()->count() === 0) {
                $rows = [];
                $sortOrder = 1;
                foreach ($tiers as $tier) {
                    $rows[] = [
                        'min_qty' => $tier['min_qty'],
                        'price_per_unit' => $tier['price_per_unit'],
                        'currency' => $product->currency,
                        'sort_order' => $sortOrder++,
                    ];
                }
                $product->priceLadders()->createMany($rows);
            }

            $createdProducts[] = $product;
        }

        $product = $createdProducts[0];

        $group = Group::firstOrCreate(
            ['title' => 'Premium Arabica Coffee Beans (Bulk)'],
            [
                'product_id' => $product->id,
                'leader_id' => $umkm1->id,
                'drop_point_id' => $dropPoint->id,
                'target_volume' => 1000,
                'current_volume' => 740,
                'unit' => 'kg',
                'status' => 'open',
                'cut_off_at' => now()->addDays(1),
                'currency' => 'USD',
            ]
        );

        $groupFlour = Group::firstOrCreate(
            ['title' => 'Organic Wheat Flour (Bulk)'],
            [
                'product_id' => $createdProducts[1]->id,
                'leader_id' => $umkm2->id,
                'drop_point_id' => $dropPoint->id,
                'target_volume' => 1200,
                'current_volume' => 850,
                'unit' => 'kg',
                'status' => 'locked',
                'cut_off_at' => now()->addDays(2),
                'currency' => 'USD',
            ]
        );

        GroupMember::firstOrCreate(
            ['group_id' => $group->id, 'member_id' => $umkm1->id],
            ['qty' => 100, 'unit' => 'kg', 'status' => 'joined']
        );
        GroupMember::firstOrCreate(
            ['group_id' => $group->id, 'member_id' => $umkm2->id],
            ['qty' => 50, 'unit' => 'kg', 'status' => 'joined']
        );
        GroupMember::firstOrCreate(
            ['group_id' => $groupFlour->id, 'member_id' => $umkm2->id],
            ['qty' => 200, 'unit' => 'kg', 'status' => 'joined']
        );
        GroupMember::firstOrCreate(
            ['group_id' => $groupFlour->id, 'member_id' => $umkm1->id],
            ['qty' => 150, 'unit' => 'kg', 'status' => 'joined']
        );

        $order = Order::firstOrCreate(
            ['group_id' => $group->id, 'member_id' => $umkm1->id],
            [
                'total_qty' => 100,
                'unit' => 'kg',
                'total_amount' => 850,
                'currency' => 'USD',
                'status' => 'pending',
            ]
        );

        $orderFlour = Order::firstOrCreate(
            ['group_id' => $groupFlour->id, 'member_id' => $umkm2->id],
            [
                'total_qty' => 200,
                'unit' => 'kg',
                'total_amount' => 2560,
                'currency' => 'USD',
                'status' => 'pending',
            ]
        );

        $payment = EscrowPayment::firstOrCreate(
            ['order_id' => $order->id],
            [
                'amount' => 850,
                'currency' => 'USD',
                'status' => 'held',
                'paid_at' => now(),
            ]
        );

        EscrowPayment::firstOrCreate(
            ['order_id' => $orderFlour->id],
            [
                'amount' => 2560,
                'currency' => 'USD',
                'status' => 'held',
                'paid_at' => now(),
            ]
        );

        Invoice::firstOrCreate(
            ['order_id' => $order->id],
            [
                'invoice_number' => 'INV-0001',
                'amount' => $payment->amount,
                'currency' => 'USD',
                'status' => 'issued',
                'issued_at' => now(),
                'due_at' => now()->addDays(7),
            ]
        );

        Invoice::firstOrCreate(
            ['order_id' => $orderFlour->id],
            [
                'invoice_number' => 'INV-0002',
                'amount' => $orderFlour->total_amount,
                'currency' => 'USD',
                'status' => 'issued',
                'issued_at' => now(),
                'due_at' => now()->addDays(5),
            ]
        );
    }
}
