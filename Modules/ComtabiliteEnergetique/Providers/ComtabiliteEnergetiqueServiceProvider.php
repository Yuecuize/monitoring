<?php namespace Modules\ComtabiliteEnergetique\Providers;

use Illuminate\Support\ServiceProvider;

class ComtabiliteEnergetiqueServiceProvider extends ServiceProvider
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
            'Modules\ComtabiliteEnergetique\Repositories\ComtabiliteEnergetiqueRepository',
            function () {
                $repository = new \Modules\ComtabiliteEnergetique\Repositories\Eloquent\EloquentComtabiliteEnergetiqueRepository(new \Modules\ComtabiliteEnergetique\Entities\ComtabiliteEnergetique());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\ComtabiliteEnergetique\Repositories\Cache\CacheComtabiliteEnergetiqueDecorator($repository);
            }
        );
// add bindings

    }
}
