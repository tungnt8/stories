<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // user list permission
        Gate::define('create-user', function ($user) {
            if ($user->role == 1) {
                return true;
            }
            return false;
        });
        Gate::define('list-user', function ($user) {
            if ($user->role == 1) {
                return true;
            }
            return false;
        });
        Gate::define('update-user', function ($user) {
            if ($user->role == 1) {
                return true;
            }
            return false;
        });
        Gate::define('delete-user', function ($user) {
            if ($user->role == 1) {
                return true;
            }
            return false;
        });

        // story list permission
        Gate::define('create-story', function ($user) {
            $roles_allow = [1, 2, 3];
            if (in_array($user->role, $roles_allow)) {
                return true;
            }
            return false;
        });

        Gate::define('update-story', function ($user, $post) {
            $roles_allow = [1];
            if (in_array($user->role, $roles_allow)) {
                return true;
            }

            if ($user->id == $post->user_id) {
                return true;
            }
            return false;
        });

        Gate::define('approve-story', function ($user) {
            $roles_allow = [1, 4];
            if (in_array($user->role, $roles_allow)) {
                return true;
            }
            return false;
        });

        Gate::define('delete-story', function ($user) {
            $roles_allow = [1, 4];
            if (in_array($user->role, $roles_allow)) {
                return true;
            }
            return false;
        });

        Gate::define('list-story', function ($user) {
            $roles_allow = [1, 2, 3, 4];
            if (in_array($user->role, $roles_allow)) {
                return true;
            }
            return false;
        });

        Gate::define('editor-choice-story', function ($user) {
            $roles_allow = [1, 4];
            if (in_array($user->role, $roles_allow)) {
                return true;
            }
            return false;
        });

        Gate::define('daily-top-story', function ($user) {
            $roles_allow = [1, 4];
            if (in_array($user->role, $roles_allow)) {
                return true;
            }
            return false;
        });

        Gate::define('monthly-top-story', function ($user) {
            $roles_allow = [1, 4];
            if (in_array($user->role, $roles_allow)) {
                return true;
            }
            return false;
        });

        // chapter
        Gate::define('list-chapter', function ($user, $story) {
            $roles_allow = [1, 4];
            if (in_array($user->role, $roles_allow)) {
                return true;
            }

            if ($user->id == $story->user_id) {
                return true;
            }
            return false;
        });

        Gate::define('create-chapter', function ($user) {
            $roles_allow = [1, 2, 3, 4];
            if (in_array($user->role, $roles_allow)) {
                return true;
            }
            return false;
        });

        Gate::define('update-chapter', function ($user, $chapter) {
            $roles_allow = [1, 4];
            if (in_array($user->role, $roles_allow)) {
                return true;
            }

            if ($chapter->user_id == $user->id) {
                return true;
            }
            return false;
        });

        Gate::define('delete-chapter', function ($user) {
            $roles_allow = [1, 4];
            if (in_array($user->role, $roles_allow)) {
                return true;
            }

            return false;
        });

        Gate::define('approve-chapter', function ($user) {
            $roles_allow = [1, 4];
            if (in_array($user->role, $roles_allow)) {
                return true;
            }

            return false;
        });
    }
}
