<?php

namespace App\Providers;

use App\Http\Resources\ProfileMemberResource;
use Illuminate\Http\Resources\Json\ResourceResponse;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\MemberResource;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Schema::defaultStringLength(191);
//        MemberResource::withoutWrapping();
//        ProfileMemberResource::withoutWrapping();
        ResourceCollection::withoutWrapping();
    }
}
