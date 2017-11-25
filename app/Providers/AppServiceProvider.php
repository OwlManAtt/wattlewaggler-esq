<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('navItemActive', function ($expression) {
            return "<?php echo ($expression == Route::currentRouteName()) ? 'active' : ''; ?>";
        });

        Blade::directive('isInvalid', function ($field) {
            $code = [];
            $code[] = "<?php";
            $code[] = "if (\$errors->has($field)) {";
                $code[] = "echo 'is-invalid';";
            $code[] = "}";
            $code[] = "?>";

            return implode("\n", $code);
        });

        Blade::directive('showErrors', function ($field) {
            $code = [];
            $code[] = "<?php";
            $code[] = "if (\$errors->has($field)) {";
                $code[] = "echo \"<div class='invalid-feedback'>\";";
                $code[] = "if (sizeof(\$errors->get($field)) == 1) {";
                    $code[] = "echo \$errors->first($field);";
                $code[] = "} else {";
                    $code[] = "echo \"<ul>\";";
                        $code[] = "foreach (\$errors->get($field) as \$message) {";
                            $code[] = "echo \"<li>\$message</li>\";";
                        $code[] = "}";
                    $code[] = "echo \"</ul>\";";
                $code[] = "}";
                $code[] = "echo \"</div>\";";
            $code[] = "}";
            $code[] = "?>";

            return implode("\n", $code);
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
