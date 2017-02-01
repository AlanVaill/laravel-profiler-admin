[![Code Climate](https://codeclimate.com/github/AlanVaill/laravel-profiler-admin/badges/gpa.svg)](https://codeclimate.com/github/AlanVaill/laravel-profiler-admin)

Laravel Profiler Admin is a laravel (5.3) package that provides a UI to aggregate and view your application profiling information. While the UI is a laravel package, the reporting mechanisms that collect profiling information are designed to be framework agnostic.  

# Installation (Co-habit w/ your existing app) 
Assuming you already have a laravel project started this will install the admin in your project

1. Change to your project directory `cd path/to/project`
1. Install the package `composer require alanvaill/laravel-profiler-admin`
1. Add the package provider `AlanVaill\LaravelProfilerAdmin\Providers\ServiceProvider` to your app providers configuration
1. Run migration for new profiling tables `php artisan migrate:status` and `php artisan migrate` (This will install tables `transaction_reports`, `query_logs`, `transaction_traces`, `error_logs` in your app database)
1. Add the package provider `AlanVaill\LaravelProfilerAdapter\ServiceProvider` to your app providers configuration *Note order is important here, you must run migrations before adding this provider*
1. Publish public assets for the package with `php artisan vendor:publish`
1. Visit `/profiler` path of your project url ie `http://myproject.app/profiler`

# Road Map
## V1.0

 * Provide a (laravel based) profiling UI √
  * dashboard overview √
  * with top transactions drill down √
   * trace breakdown of function timing/memory usage
  * database queries drill down √
  * and error log messages √
 * Provide a profiler package that defines framework agnostic interface √
 * Provide a laravel adapter profiler concrete implementation √
 * Support profiling a laravel application co-hosted in the laravel database (multiple app servers supported) √
  * profile entries by host
 * Provide documentation for installation
  * README √
  * Screencast 
 
## V2.0
 * PSR7 middleware profiler
 * Doctrine db adapter
 * more to come ..
>>>>>>> b0782de1b6a8931b5d927e1299b79acfee9c2930
