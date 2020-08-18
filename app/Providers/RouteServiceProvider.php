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
    protected $admin_namespace = 'App\Http\Controler\Admin\Controller';
    protected $classroom_namespace = 'App\Http\Controler\Classroom\Controller';
    protected $student_namespace = 'App\Http\Controler\Student\Controller';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';
    public const ADMIN = '/dashboard';
    public const STUDENT = '/lobby';
    public const CLASSROOM = '/classroom';

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

        $this->mapAdminRoutes();
        $this->mapClassroomRoutes();
        $this->mapLobyRoutes();

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

    protected function mapAdminRoutes()
    {
        Route::prefix('dashboard')
        ->middleware('web')
        ->namespace($this->mapAdminRoutes)
        ->group(base_path('routes/dashboard.php'));
    }

    protected function mapClassroomRoute()
    {
        Route::prefix('classroom')
        ->middleware('web')
        ->namespace($this->classroom_namespace)
        ->group(base_path('classroom.php'));
    }

    protected function mapLobbyRoutes()
    {
        Route::prefix('lobby')
        ->middleware('web')
        ->namespace($this->student_namespace)
        ->group(base_path('student.php'));
    }
}
