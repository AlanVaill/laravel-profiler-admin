<?php


namespace AlanVaill\LaravelProfilerAdmin\Http\Controllers;


class DashboardController
{
    public function indexAction()
    {
        return view('profiler-admin::dashboard');
    }
}