<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('home', function($view) {
            $lastTask = [
                'title' => 'Pagina de contacte',
                'description' => 'De scris codul în Laravel pentru a crea pagina de contacte!',
                'created' => "2024-10-14",
                'updated' => "2024-10-14" ,
                'task' => 'Edit/Delete',
                'status' => 'finalizat',
                'priority' => 'scazuta',
                'assigned' => 'Emilia'
            ];
            $view->with('lastTask', $lastTask);
        });
}

}
