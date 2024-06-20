<?php

use App\Http\Middleware\CheckAuth;
use App\Livewire\Aahwanam;
use App\Livewire\AboutUs;
use App\Livewire\AddVendor;
use App\Livewire\AddVendorCategory;
use App\Livewire\AdminDashboard;
use App\Livewire\AdminLogin;
use App\Livewire\AntiPolicy;
use App\Livewire\Blogs;
use App\Livewire\Carrers;
use App\Livewire\CommonRegister;
use App\Livewire\ContactUs;
use App\Livewire\ImageUpload;
use App\Livewire\Impact;
use App\Livewire\Login;
use App\Livewire\NewRegister;
use App\Livewire\Partner;
use App\Livewire\PrivacyPolicy;
use App\Livewire\ProductAddCart;
use App\Livewire\ProductCheckout;
use App\Livewire\ProductDetails;
use App\Livewire\Reviews;
use App\Livewire\SuperAdminDashboard;
use App\Livewire\SuperAdminLogin;
use App\Livewire\Terms;
use App\Livewire\VendorDashboard;
use App\Livewire\VendorDetails;
use App\Livewire\VendorList;
use App\Livewire\VendorLogin;
use App\Livewire\VendorPastwork;
use App\Livewire\VendorProfile;
use App\Livewire\VendorRegister;
use App\Livewire\WeddingPhotographers;
use App\Livewire\WelcomeVendor;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/image', ImageUpload::class)->name('image');

//Route::get('/', Aahwanam::class)->name('aahwanam');
Route::get('/about', AboutUs::class)->name('about');
Route::get('/anti-policy', AntiPolicy::class)->name('anti-policy');
Route::get('/blogs', Blogs::class)->name('blogs');
Route::get('/carrers', Carrers::class)->name('carrers');
Route::get('/contact', ContactUs::class)->name('contact');
Route::get('/impact', Impact::class)->name('impact');
Route::get('/partners', Partner::class)->name('partners');
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
Route::get('/reviews', Reviews::class)->name('reviews');
Route::get('/terms', Terms::class)->name('terms');
Route::get('/admin-login', AdminLogin::class)->name('admin-login');
Route::get('/super-admin-login', SuperAdminLogin::class)->name('super-admin-login');
Route::get('/vendor-login', VendorLogin::class)->name('vendor-login');
Route::get('/photographers', WeddingPhotographers::class)->name('photographers');
Route::get('/vendors', VendorList::class)->name('vendors');
Route::get('/register', CommonRegister::class)->name('register');
// Route::get('/newregister', NewRegister::class)->name('newregister');
Route::get('/vendor-register', VendorRegister::class)->name('vendor-register');
Route::get('/vendor-dashboard', VendorDashboard::class)->name('vendor-dashboard');
Route::get('/dashboard', VendorDashboard::class)->name('dashboard');
Route::get('/admin-dashboard', AdminDashboard::class)->name('admin-dashboard');
Route::get('/super-admin-dashboard', SuperAdminDashboard::class)->name('super-admin-dashboard');
Route::get('/welcome-vendor', WelcomeVendor::class)->name('welcome-vendor');
Route::get('/vendor-details', VendorDetails::class)->name('vendor-details');
Route::get('/vendor-pastwork', VendorPastwork::class)->name('vendor-pastwork');
Route::get('/vendor-profile', VendorProfile::class)->name('vendor-profile');
//################################## Adding Products/vendors in the cart ###########################################
Route::get('/product-details', ProductDetails::class)->name('product-details');
Route::get('/add-cart', ProductAddCart::class)->name('add-cart');
Route::get('/check-out', ProductCheckout::class)->name('check-out');
//######################################## Ending Cart Details #####################################################
//########################################### Adding Products/vendors in the cart ###########################################################
Route::get('/add-vendor', AddVendor::class)->name('add-vendor');
// Route::get('/add-product', AddProduct::class)->name('add-product');
// Route::get('/add-service', AddService::class)->name('add-service');
 Route::get('/add-vendor-category', AddVendorCategory::class)->name('add-vendor-category');

 Route::get('/login', Login::class)->name('login');
Route::middleware([CheckAuth::class])->group(function () {
    // Routes that require authentication
Route::get('/', Aahwanam::class)->name('aahwanam');
    // Other routes within the authenticated group...
});


Route::middleware([CheckAuth::class . ':vendor'])->group(function () {
    Route::get('/contact', ContactUs::class)->name('contact');
    Route::get('/impact', Impact::class)->name('impact');
    // Other routes within the authenticated "vendor" group...
});

















// Route::get('/link', function () {
//     Artisan::call('storage:link');
//     return 'Storage link created successfully';
// });



// // Super Admin Routes
// Route::middleware(['auth:super-admin', 'guard:super-admin'])->group(function () {
//     Route::get('/super-admin/dashboard', SuperAdminComponent::class)->name('super-admin.dashboard');
//     Route::get('/super-admin/settings', SuperAdminComponent::class)->name('super-admin.settings');
//     // Add more super-admin routes here
// });

// // Admin Routes
// Route::middleware(['auth:admin', 'guard:admin'])->group(function () {
//     Route::get('/admin/dashboard', AdminComponent::class)->name('admin.dashboard');
//     Route::get('/admin/reports', AdminComponent::class)->name('admin.reports');
//     // Add more admin routes here
// });

// // User Routes
// Route::middleware(['auth:user', 'guard:user'])->group(function () {
//     Route::get('/user/profile', UserComponent::class)->name('user.profile');
//     Route::get('/user/orders', UserComponent::class)->name('user.orders');
//     // Add more user routes here
// });

// Unauthorized Route
Route::get('/unauthorized', function () {
    return view('unauthorized');
})->name('unauthorized');
