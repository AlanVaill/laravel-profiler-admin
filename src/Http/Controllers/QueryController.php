<?php


namespace AlanVaill\LaravelProfilerAdmin\Http\Controllers;


use AlanVaill\LaravelProfilerAdapter\Models\QueryLog;
use Illuminate\Http\Request;

class QueryController
{
    const ITEMS_PER_PAGE = 20;

    public function indexAction(Request $request)
    {
        $queries = QueryLog::select(
            \DB::raw('max(execution_time) as max_execution_time'),
            \DB::raw('avg(execution_time) as avg_execution_time'),
            'sql',
            'bindings',
            'hash'
        )
            ->groupBy(['sql', 'bindings', 'hash'])
            ->orderBy('max_execution_time', 'desc')
            ->simplePaginate(self::ITEMS_PER_PAGE);

        return view('profiler-admin::queries/index', [
            'queries' => $queries
        ]);
    }

    public function hashAction(Request $request)
    {
        $hash = $request->route('hash');

        $queries = QueryLog::where('hash', '=', $hash)
            ->orderBy('execution_time', 'desc')
            ->simplePaginate(self::ITEMS_PER_PAGE);

        return view('profiler-admin::queries/hash', [
            'queries' => $queries
        ]);
    }
}