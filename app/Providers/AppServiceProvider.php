<?php

namespace App\Providers;

use Illuminate\Http\Resources\Json\ResourceResponse;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\MemberResource;

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
//        MemberResource::withoutWrapping();
        ResourceCollection::withoutWrapping();
    }
}
