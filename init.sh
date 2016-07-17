#!/bin/bash

composer require --dev --no-update "xethron/migrations-generator:dev-l5"
composer require --dev --no-update "way/generators:dev-feature/laravel-five-stable"
composer config repositories.repo-name git "git@github.com:jamisonvalenta/Laravel-4-Generators.git"
composer update
# After it:
# Edit config/app.php and add this to providers section:
# Way\Generators\GeneratorsServiceProvider::class,
# Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class,

