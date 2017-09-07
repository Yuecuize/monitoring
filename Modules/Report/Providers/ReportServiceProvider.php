<?php namespace Modules\Report\Providers;

use Illuminate\Support\ServiceProvider;

class ReportServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Report\Repositories\ReportsRepository',
            function () {
                $repository = new \Modules\Report\Repositories\Eloquent\EloquentReportsRepository(new \Modules\Report\Entities\Reports());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Report\Repositories\Cache\CacheReportsDecorator($repository);
            }
        );
// add bindings

    }
}
