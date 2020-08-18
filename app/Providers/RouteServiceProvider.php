<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $lobbynamespace = 'App\Http\Controllers\Students\Controller';
    protected $adminnamespace = 'App\Http\Controllers\Admin\Controller';
    protected $classroomnamespace = 'App\Http\Controllers\Classroom\Controller';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';


    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapStudentRoutes();
        $this->mapAdminRoutes();
        $this->mapClassroomRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }


    protected function mapStudentRoutes()
    {
        Route::prefix('lobby')
            ->middleware('web')
            ->namespace($this->lobbynamespace)
            ->group(base_path('routes/students.php'));
    }
    protected function mapAdminRoutes()
    {
        Route::prefix('dashboard')
            ->middleware('web')
            ->namespace($this->adminnamespace)
            ->group(base_path('routes/dashboard.php'));
    }
    protected function mapClassroomRoutes()
    {
        Route::prefix('classroom')
            ->middleware('web')
            ->namespace($this->classroomnamespace)
            ->group(base_path('routes/classroom.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

}
