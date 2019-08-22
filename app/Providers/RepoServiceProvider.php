<?php

namespace App\Providers;

use App\Repo\UserRepository;
use App\Repo\UserRepositoryInterface;

class RepoServiceProvider
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function bind()
    {
        //user table
        $this->app->singleton(UserRepository::class, function ($app) {
            return new UserRepository($app['db']->connection());
        });
        $this->app->alias(UserRepository::class, UserRepositoryInterface::class);
        $this->app->alias(UserRepositoryInterface::class, 'users');

    }
}
