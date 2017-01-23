<?php


namespace AlanVaill\LaravelProfilerAdmin\Http\Controllers;


use AlanVaill\LaravelProfilerAdapter\Models\ErrorLog;
use Illuminate\Http\Request;

class ErrorLogController
{
    const LOGS_PER_PAGE = 50;

    public function indexAction(Request $request)
    {
        $page = $request->input('page', 0);
        $logs = ErrorLog::orderBy('created_at', 'desc')
            ->simplePaginate(self::LOGS_PER_PAGE);

        $errorsToday = ErrorLog::whereDate('created_at', '>=', date('Y-m-d'))->count();

        return view('profiler-admin::error_log/index', [
            'logs' => $logs,
            'errorsToday' => $errorsToday
        ]);
    }


}