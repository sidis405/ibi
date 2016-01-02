<?php

namespace Ibi\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class IbiPermissionSerciceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->registerBladeExtensions();
    }

    /**
     * Register the blade extensions.
     */
    protected function registerBladeExtensions()
    {
        $this->app->afterResolving('blade.compiler', function (BladeCompiler $bladeCompiler) {

            $bladeCompiler->directive('permessoibi', function ($role) {
                return "<?php if(auth()->check() && in_array($role, array_pluck(auth()->user()->roles[0]->permissions, 'name'))): ?>";
            });
            $bladeCompiler->directive('endpermessoibi', function () {
                return '<?php endif; ?>';
            });
        });
    }
}
