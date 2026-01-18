<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'redirectByRole'])->name('home');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard/redirect', [AuthController::class, 'redirectByRole'])->name('dashboard.redirect');

Route::middleware(['auth', 'role:umkm'])->group(function () {
    Route::get('/dashboard/qday', [DashboardController::class, 'qday'])->name('dashboard.umkm');
    Route::view('/marketplace', 'pages.marketplace');
    Route::view('/group-detail', 'pages.group-detail');
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
    Route::get('/help-center', function () {
        return view('pages.umkm-placeholder', [
            'title' => 'Help Center',
            'eyebrow' => 'Support',
            'description' => 'Access support resources and contact Koopa team.',
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
    Route::resource('/drop-points', \App\Http\Controllers\DropPointController::class)
        ->names('drop-points');
    Route::resource('/groups', \App\Http\Controllers\GroupController::class)
        ->names('groups');
    Route::resource('/group-members', \App\Http\Controllers\GroupMemberController::class)
        ->names('group-members');
    Route::resource('/orders', \App\Http\Controllers\OrderController::class)
        ->names('orders');
    Route::resource('/escrow-payments', \App\Http\Controllers\EscrowPaymentController::class)
        ->names('escrow-payments');
    Route::resource('/invoices', \App\Http\Controllers\InvoiceController::class)
        ->names('invoices');
});

Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/dashboard/profitquest', [DashboardController::class, 'owner'])->name('dashboard.owner');
    Route::resource('/owner/groups', \App\Http\Controllers\OwnerGroupController::class)
        ->names('owner.groups');
    Route::get('/price-ladder', [DashboardController::class, 'priceLadder']);
    Route::view('/drop-points-ui', 'pages.drop-points');
    Route::get('/escrow-fees', [DashboardController::class, 'escrowFees']);
    Route::resource('/owner/users', \App\Http\Controllers\OwnerUserController::class)
        ->names('owner.users');
    Route::view('/ai-lab', 'pages.ai-demo');
    Route::view('/menu-performance', 'pages.menu-performance');
    Route::view('/daily-quest-hub', 'pages.daily-quest-hub');
    Route::view('/progress-perks', 'pages.progress-perks');
    Route::view('/leaderboard', 'pages.leaderboard');
    Route::view('/ingredient-optimization', 'pages.ingredient-optimization');
    Route::view('/menu-intelligence', 'pages.menu-intelligence');
    Route::view('/labor-efficiency', 'pages.labor-efficiency');
    Route::view('/insights-feed', 'pages.insights-feed');
});

Route::middleware(['auth', 'role:supplier'])->group(function () {
    Route::redirect('/supplier-products', '/supplier/products');
    Route::resource('/supplier/products', \App\Http\Controllers\SupplierProductController::class)
        ->names('supplier.products');
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
    Route::view('/supplier-products-ui', 'pages.supplier-products');
});
