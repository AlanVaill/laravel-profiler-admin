[![Code Climate](https://codeclimate.com/github/AlanVaill/laravel-profiler-admin/badges/gpa.svg)](https://codeclimate.com/github/AlanVaill/laravel-profiler-admin)

# Installation (Co-habit w/ your existing app) 
Assuming you already have a laravel project started this will install the admin in your project
 1. Change to your project directory `cd path/to/project`
 1. Install the package `composer install alanvaill/laravel-profiler-admin`
 1. Add the package provider `AlanVaill\LaravelProfilerAdmin\Providers\ServiceProvider` to your app providers configuration
 1. Run migration for new profiling tables `php artisan migrate:status` and `php artisan migrate` (This will install tables `transaction_reports`, `query_logs`, `transaction_traces`, `error_logs` in your app database)
 1. Publish public assets for the package with `php artisan vendor:publish`
 1. Visit `/profiler` path of your project url ie `http://myproject.app/profiler`
