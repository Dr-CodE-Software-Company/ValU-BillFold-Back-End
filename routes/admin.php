<?php

use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\WebsiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;







    Route::group(['controller' =>AuthController::class , 'prefix'=> 'Admin'],function(){
        Route::get("login","getlogin")->name('login')->middleware('login.auth');
        Route::get('/Dashboard',"home")->middleware(["admin.auth","Lang"])->name('Dashboard');
        Route::Post("login","login")->name('logged');
        Route::get("logout","logout");
    });

    Route::group(['controller' =>RoleController::class , 'prefix'=> 'Admin/Role',"middleware" => ["admin.auth","Lang"]],function(){
        Route::get('/','index');
        Route::get('create','create');
        Route::post('create','store');
        Route::get('edit/{id}','edit');
        Route::post('update/{id}','update');
        Route::delete('delete/{id}','delete');
    });

    Route::group(['controller' =>AdminController::class , 'prefix'=> 'Admin',"middleware" => ["admin.auth","Lang"]],function(){
        Route::get('/','index');
        Route::get('create','create');
        Route::post('create','store');
        Route::get('edit/{id}','edit');
        Route::Put('update/{id}','update');
        Route::delete('delete/{id}','delete');
        Route::get('profile','profile');
        Route::Put('editImage/{id}','editImage');
        Route::Put('editprofile/{id}','editprofile');
        Route::get('Lang/{lang}','changeLange');
        Route::get("Notify","allNotification");
    });

    Route::group(['controller' =>SubscriptionController::class , 'prefix'=> 'Subscription',"middleware" => ["admin.auth","Lang"]],function(){
        Route::get('/','index');
        Route::get('create','create');
        Route::post('create','store');
        Route::get('edit/{id}','edit');
        Route::Put('update/{id}','update');
        Route::delete('delete/{id}','delete');
    });
    Route::group(['controller' =>UserController::class , 'prefix'=> 'Admin/users',"middleware" => ["admin.auth","Lang"]],function(){
        Route::get('/','index');
        Route::get('autocomplete','autocomplete');
        Route::get('update/Status/{user_id}/{status_code}','updateStatus')->name('Update_status');
        Route::get('details/{id}','moreDetails')->name('admin.user.details');
        Route::get('delete/{user_id}','delete');
        Route::get('notify','notify')->name('home');
        Route::post('/save-token','saveToken')->name('save-token');
        Route::post('/send-notification', 'sendNotification')->name('send.notification');
    });
    Route::group(['controller' =>WebsiteController::class ],function(){
        Route::get('/','index')->name('website');
    });
    Route::group(['controller' =>WebsiteController::class , 'prefix'=> 'Website',"middleware" => ["admin.auth","Lang"]],function(){
        Route::get('/','index');
        Route::get('About','About')->name('AllAbout');
        Route::get('About/Create','CreateAbout');
        Route::post('About/Store','StoreAbout');
        Route::get('About/edit/{id}','EditAbout');
        Route::Put('About/Update/{id}','UpdateAbout');
        Route::delete('About/delete/{id}','DeleteAbout');
    });

    Route::group(['controller' =>WebsiteController::class , 'prefix'=> 'Website/Service',"middleware" => ["admin.auth","Lang"]],function(){
        Route::get('/','Service')->name('AllService');
        Route::get('Create','CreateService');
        Route::post('Store','StoreService');
        Route::get('edit/{id}','EditService');
        Route::Put('Update/{id}','UpdateService');
        Route::delete('delete/{id}','DeleteService');
    });

    Route::group(['controller' =>WebsiteController::class , 'prefix'=> 'Website/Blog',"middleware" => ["admin.auth","Lang"]],function(){
        Route::get('/','Blog')->name('Blogs');
        Route::get('Create','CreateBlog');
        Route::post('Store','StoreBlog');
        Route::get('edit/{id}','EditBlog');
        Route::Put('Update/{id}','UpdateBlog');
        Route::delete('delete/{id}','DeleteBlog');
//    Route::get('blog-single/{id}','blog_single');
    });

    Route::group(['controller' =>WebsiteController::class , 'prefix'=> 'Website/Contact',"middleware" => ["admin.auth","Lang"]],function(){
        Route::get('/','Contact')->name('Contact');
        Route::get('Create','CreateContact');
        Route::post('Store','StoreContact');
        Route::get('edit/{id}','EditContact');
        Route::Put('Update/{id}','UpdateContact');
        Route::delete('delete/{id}','DeleteContact');
        Route::Post("contact","Contact_store")->name("ContactStore");
        Route::get("all_contact","AllContact")->name("AllContact");
    });

    Route::group(['controller' =>WebsiteController::class , 'prefix'=> 'Website/Company',"middleware" => ["admin.auth","Lang"]],function(){
        Route::get('/','Company')->name('Company');
        Route::get('Create','CreateCompany');
        Route::post('Store','StoreCompany');
        Route::get('edit/{id}','EditCompany');
        Route::Put('Update/{id}','UpdateCompany');
        Route::delete('delete/{id}','DeleteCompany');
    });

    Route::group(['controller' =>WebsiteController::class , 'prefix'=> 'Website/Portfolio',"middleware" => ["admin.auth","Lang"]],function(){
        Route::get('/','Portfolio')->name('Portfolio');
        Route::get('Create','CreatePortfolio');
        Route::post('Store','StorePortfolio');
        Route::get('edit/{id}','EditPortfolio');
        Route::Put('Update/{id}','UpdatePortfolio');
        Route::delete('delete/{id}','DeletePortfolio');
    });

    Route::group(['controller' =>WebsiteController::class , 'prefix'=> 'Website/Announcement',"middleware" => ["admin.auth","Lang"]],function(){
        Route::get('/','Announcement')->name('Announcement');
        Route::get('Create','CreateAnnouncement');
        Route::post('Store','StoreAnnouncement');
        Route::get('edit/{id}','EditAnnouncement');
        Route::Put('Update/{id}','UpdateAnnouncement');
        Route::delete('delete/{id}','DeleteAnnouncement');
    });

    Route::group(['controller' =>WebsiteController::class , 'prefix'=> 'Website'],function(){
        Route::get('Portfolio/portfolio-details/{id}','portfolio_details');
        Route::get('Blog/blog-single/{id}','blog_single');
    });

    Route::controller(PaymentController::class)->group(function(){
        Route::get('stripe/{id}', 'stripe');
        Route::post('stripe/{id}', 'stripePost')->name('stripe.post');
    });

