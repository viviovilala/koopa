<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'qday']);

Route::get('/dashboard/qday', [DashboardController::class, 'qday']);
Route::get('/dashboard/profitquest', [DashboardController::class, 'owner']);
Route::get('/price-ladder', [DashboardController::class, 'priceLadder']);
Route::get('/drop-points', [DashboardController::class, 'dropPoints']);
Route::get('/escrow-fees', [DashboardController::class, 'escrowFees']);
Route::view('/marketplace', 'pages.marketplace');
Route::view('/group-detail', 'pages.group-detail');
Route::redirect('/supplier-products', '/supplier/products');
Route::view('/supplier-products-ui', 'pages.supplier-products');
Route::view('/login', 'pages.login');
Route::resource('/supplier/products', \App\Http\Controllers\SupplierProductController::class)
    ->names('supplier.products');
Route::get('/active-groups', function () {
    return view('pages.umkm-placeholder', [
        'title' => 'Active Groups',
        'eyebrow' => 'Group Buying',
        'description' => 'Track open group buys, lock status, and deadlines in one place.',
    ]);
});
Route::get('/my-orders', function () {
    return view('pages.umkm-placeholder', [
        'title' => 'My Orders',
        'eyebrow' => 'Order Center',
        'description' => 'Review pledged quantities, escrow status, and pickup schedules.',
    ]);
});
Route::get('/invoices', function () {
    return view('pages.umkm-placeholder', [
        'title' => 'Invoices',
        'eyebrow' => 'Billing',
        'description' => 'Access invoices generated after group cut-off and escrow payment.',
    ]);
});
Route::get('/settings', function () {
    return view('pages.umkm-placeholder', [
        'title' => 'Settings',
        'eyebrow' => 'Profile',
        'description' => 'Manage profile, payout preferences, and notification settings.',
    ]);
});
Route::get('/preferences', function () {
    return view('pages.umkm-placeholder', [
        'title' => 'Preferences',
        'eyebrow' => 'Marketplace',
        'description' => 'Update category interests and preferred suppliers.',
    ]);
});
Route::get('/group-dynamics', function () {
    return view('pages.umkm-placeholder', [
        'title' => 'Group Dynamics',
        'eyebrow' => 'Insights',
        'description' => 'See group participation trends and unlock progress.',
    ]);
});
Route::get('/saved-lists', function () {
    return view('pages.umkm-placeholder', [
        'title' => 'Saved Lists',
        'eyebrow' => 'Shortlist',
        'description' => 'Review items you saved for upcoming group buys.',
    ]);
});
Route::get('/supplier-dashboard', function () {
    return view('pages.supplier-placeholder', [
        'title' => 'Dashboard',
        'eyebrow' => 'Supplier',
        'description' => 'Monitor active listings, orders, and payout performance.',
    ]);
});
Route::get('/supplier-orders', function () {
    return view('pages.supplier-placeholder', [
        'title' => 'Orders',
        'eyebrow' => 'Supplier',
        'description' => 'Review group buy orders awaiting fulfillment and delivery.',
    ]);
});
Route::get('/supplier-analytics', function () {
    return view('pages.supplier-placeholder', [
        'title' => 'Analytics',
        'eyebrow' => 'Supplier',
        'description' => 'Track performance by category, tier, and delivery windows.',
    ]);
});
Route::get('/supplier-settings', function () {
    return view('pages.supplier-placeholder', [
        'title' => 'Settings',
        'eyebrow' => 'Supplier',
        'description' => 'Manage profile, pickup coverage, and payout preferences.',
    ]);
});
Route::view('/menu-performance', 'pages.menu-performance');
Route::view('/daily-quest-hub', 'pages.daily-quest-hub');
Route::view('/progress-perks', 'pages.progress-perks');
Route::view('/leaderboard', 'pages.leaderboard');
Route::view('/ingredient-optimization', 'pages.ingredient-optimization');
Route::view('/menu-intelligence', 'pages.menu-intelligence');
Route::view('/labor-efficiency', 'pages.labor-efficiency');
Route::view('/insights-feed', 'pages.insights-feed');
Route::view('/ai-lab', 'pages.ai-demo');
