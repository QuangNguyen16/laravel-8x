<?php

use App\Http\Livewire\AboutUSComponent;
use App\Http\Livewire\Admin\AdminAddCouponComponent;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCouponComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminSaleComponent;
use App\Http\Livewire\Admin\FormComponent;
use App\Http\Livewire\Admin\FormManufacturesComponent;
use App\Http\Livewire\Admin\ManufacturesComponent;
use App\Http\Livewire\Admin\ResultComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserReviewComponent;
use App\Http\Livewire\WishlistComponent;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class);

Route::get('/shop', ShopComponent::class);

Route::get('/cart', CartComponent::class)->name('product.cart');

Route::get('/checkout', CheckoutComponent::class)->name('checkout');

Route::get('/about', AboutUSComponent::class);
 
Route::get('/contact', CheckoutComponent::class);

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');

Route::get('/search', SearchComponent::class)->name('product.search');

Route::get('/wishlist', WishlistComponent::class)->name('product.wishlist');

Route::get('/thank-you', ThankyouComponent::class)->name('thankyou');

// user
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)
    ->name('user.dashboard');
    Route::get('/user/review/{order_item_id}', UserReviewComponent::class)->name('user.review');
});
//admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('admin/dashboard', AdminDashboardComponent::class)
    ->name('admin.dashboard');
    //category
    Route::get('admin/categories', ManufacturesComponent::class)
    ->name('admin.categories');
    //add category
    Route::get('admin/category/add', FormManufacturesComponent::class)
    ->name('admin.addcategory');
    //edit category
    Route::get('admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)
    ->name('admin.editcategory');
    //product
    Route::get('admin/products', AdminDashboardComponent::class)
    ->name('admin.products');
    //add product
    Route::get('admin/product/add', FormComponent::class)
    ->name('admin.addproducts');
    //edit product
    Route::get('admin/product/edit/{product_slug}', AdminEditProductComponent::class)
    ->name('admin.editproducts');
    //sale
    Route::get('admin/sale', AdminSaleComponent::class)->name('admin.sale');
    //coupons
    Route::get('/admin/coupons', AdminCouponsComponent::class)->name('admin.coupons');
    //add coupon
    Route::get('/admin/coupon/add', AdminAddCouponComponent::class)->name('admin.addcoupon');
    //edit coupon
    Route::get('/admin/coupon/edit/{coupon_id}', AdminEditCouponComponent::class)->name('admin.editcoupon');
    //order
    Route::get('/admin/orders', AdminOrderComponent::class)->name('admin.orders');
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


