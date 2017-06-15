<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Helper function to binding values to SQL params.
        $getExecutedQuery = function ($builder) {
            $sql = $builder->sql;
            foreach ( $builder->bindings as $binding ) {
                $value = is_numeric($binding) ? $binding : "'".$binding."'";
                $sql = preg_replace('/\?/', $value, $sql, 1);
            }
            return $sql;
        };

        DB::listen(function ($query) use ($getExecutedQuery) {
            $executed = $getExecutedQuery($query);
            Log::info($executed); //Get result in /storage/logs/laravel.log
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
