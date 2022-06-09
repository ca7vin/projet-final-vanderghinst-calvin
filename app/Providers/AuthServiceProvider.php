<?php

namespace App\Providers;

use App\Policies\CategoriePolicy;
use App\Policies\CommentairePolicy;
use App\Policies\ContactPolicy;
use App\Policies\CoursePolicy;
use App\Policies\EmailPolicy;
use App\Policies\EventPolicy;
use App\Policies\PostPolicy;
use App\Policies\ProfPolicy;
use App\Policies\ServicePolicy;
use App\Policies\SliderPolicy;
use App\Policies\TagPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('create-categorie', [CategoriePolicy::class, 'create']);
        Gate::define('create-course', [CoursePolicy::class, 'create']);
        Gate::define('create-email', [EmailPolicy::class, 'create']);
        Gate::define('create-event', [EventPolicy::class, 'create']);
        Gate::define('create-post', [PostPolicy::class, 'create']);
        Gate::define('create-prof', [ProfPolicy::class, 'create']);
        Gate::define('create-service', [ServicePolicy::class, 'create']);
        Gate::define('create-slider', [SliderPolicy::class, 'create']);
        Gate::define('create-tag', [TagPolicy::class, 'create']);
        Gate::define('create-user', [UserPolicy::class, 'create']);
        Gate::define('create-commentaire', [CommentairePolicy::class, 'create']);
        Gate::define('update-categorie', [CategoriePolicy::class, 'update']);
        Gate::define('update-contact', [ContactPolicy::class, 'update']);
        Gate::define('update-course', [CoursePolicy::class, 'update']);
        Gate::define('update-email', [EmailPolicy::class, 'update']);
        Gate::define('update-event', [EventPolicy::class, 'update']);
        Gate::define('update-post', [PostPolicy::class, 'update']);
        Gate::define('update-prof', [ProfPolicy::class, 'update']);
        Gate::define('update-service', [ServicePolicy::class, 'update']);
        Gate::define('update-slider', [SliderPolicy::class, 'update']);
        Gate::define('update-tag', [TagPolicy::class, 'update']);
        Gate::define('update-user', [UserPolicy::class, 'update']);
        Gate::define('update-commentaire', [CommentairePolicy::class, 'update']);
        //
        

    }
}
